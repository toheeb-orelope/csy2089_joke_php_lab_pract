<?php
namespace IJDB\Controllers;
class Category
{

    public function __construct(public $categoriesTable, )
    {
    }


    public function ediit()
    {

        if (isset($_POST['submit'])) {
            $record = $_POST['category'];

            $this->categoriesTable->genSave($record);
            header('location: /category/list');
        } else {
            if (isset($_GET['id'])) {
                $category = $this->categoriesTable->genFind('id', $_GET['id'][0]);
            } else {
                $category = false;
            }

            return [
                'title' => 'Edit Category',
                'tempName' => '../templates/editCategory.html.php',
                'variables' => ['category' => $category],
            ];
        }
    }

    public function list()
    {
        $categories = $this->categoriesTable->genFindAll();
        return [
            'title' => 'Category list',
            'tempName' => '../templates/displayCategories.html.php',
            'variables' => ['categories' => $categories],
        ];
    }
}