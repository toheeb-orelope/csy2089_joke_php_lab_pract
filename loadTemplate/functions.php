<?php
//This function is used to query the database
function find($pdo, $table, $field, $values)
{
    $stm = $pdo->prepare('SELECT * FROM ' . $table . ' WHERE ' . $field . '=:values');
    $values = ['values' => $values];
    $stm->execute($values);
    return $stm->fetch();
}


//This function is used to delete item from the database
function delete($pdo, $table, $field, $values)
{
    $stmt = $pdo->prepare('DELETE FROM ' . $table . ' WHERE ' . $field . ' = :values');
    $values = [
        'values' => $values
    ];
    $stmt->execute($values);
}

//This function is used to INTER item from the database
function insert($pdo, $table, $record)
{
    $date = new DateTime();
    // $sql = 'INSERT INTO ' . $table . ' (jokestext,jokedate) VALUES (:jokestext, :jokedate)';
    // $values = ['jokestext' => $_POST['jokestext'], 'jokedate' => $date->format('Y-m-d H:i:s')];
    // $stmt = $pdo->prepare($sql);
    // $stmt->execute($values);

    $keys = array_keys($record);
    $values = implode(', ', $keys);
    $valuesWithColon = implode(', :', $keys);
    $query = 'INSERT INTO ' . $table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
    $stmt = $pdo->prepare($query);
    // var_dump($query, $record);
    $stmt->execute($record);
}



//This functions is use to query update from database

function update($pdo, $values)
{
    $date = new DateTime();
    $sql = 'UPDATE `jokes` SET jokestext = :jokestext, jokedate = :jokedate WHERE id = :id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute($values);
}

//This functions is use to query update from database
function genUpdate($pdo, $table, $record, $primaryKey)
{

    $query = 'UPDATE ' . $table . ' SET ';

    $parameters = [];
    foreach ($record as $key => $value) {
        $parameters[] = $key . ' = :' . $key;
    }
    $query .= implode(', ', $parameters);
    $query .= ' WHERE ' . $primaryKey . ' = :primaryKey';


    $record['primaryKey'] = $record[$primaryKey];
    // var_dump($record, $query);
    $stmt = $pdo->prepare($query);
    $stmt->execute($record);

}

//This founction work with update and insert with try and catch
function save($pdo, $table, $record, $primaryKey)
{
    if (empty($record[$primaryKey])) {
        unset($record[$primaryKey]);
    }
    try {
        insert($pdo, $table, $record);
    } catch (Exception $e) {
        genUpdate($pdo, $table, $record, $primaryKey);
    }
}