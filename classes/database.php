<?php
class Database
{
    //This type of construction called Property Promotion
    public function __construct(
        public $pdo,
        public $table,
        public $primKey
    ) {
    }
    //This function is used to query the database to fetch a single item
    function genFind($field, $values)
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $field . '=:values');
        $values = ['values' => $values];
        $stm->execute($values);
        return $stm->fetch();
    }

    //This function is used to query the database to fetch all items in the database
    function genFindAll()
    {
        $stm = $this->pdo->prepare('SELECT * FROM ' . $this->table . '');
        $stm->execute();
        return $stm->fetchAll();
    }

    //This function is used to delete item from the database
    function genDelete($field, $values)
    {
        $stmt = $this->pdo->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $field . ' = :values');
        $values = [
            'values' => $values
        ];
        $stmt->execute($values);
    }

    //This function is used to INTER item from the database
    function genInsert($record)
    {
        $date = new DateTime();
        $keys = array_keys($record);
        $values = implode(', ', $keys);
        $valuesWithColon = implode(', :', $keys);
        $query = 'INSERT INTO ' . $this->table . ' (' . $values . ') VALUES (:' . $valuesWithColon . ')';
        $stmt = $this->pdo->prepare($query);
        // var_dump($query, $record);
        $stmt->execute($record);
    }


    //This functions is use to query update from database
    function genUpdate($record)
    {

        $query = 'UPDATE ' . $this->table . ' SET ';

        $parameters = [];
        foreach ($record as $key => $value) {
            $parameters[] = $key . ' = :' . $key;
        }
        $query .= implode(', ', $parameters);
        $query .= ' WHERE ' . $this->primKey . ' = :primKey';


        $record['primKey'] = $record[$this->primKey];
        // var_dump($record, $query);
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($record);

    }

    //This founction work with update and insert with try and catch
    function genSave($record)
    {
        if (empty($record[$this->primKey])) {
            unset($record[$this->primKey]);
        }
        try {
            $this->genInsert($record);
        } catch (Exception $e) {
            $this->genUpdate($record, );
        }
    }

    //This function is used to load file such as templates file and it value send it to the browser
    function loadTemlate($fileName, $variables)
    {
        extract($variables);
        ob_start();
        require $fileName;
        $output = ob_get_clean();
        return $output;
    }


}