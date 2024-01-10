<?php
require_once 'authentication.php';

$categories = [
    ['id' => 1, 'title' => 'Mystery', 'deleted_at' => null],
    ['id' => 2, 'title' => 'Romance', 'deleted_at' => null],
    ['id' => 3, 'title' => 'Comedy', 'deleted_at' => null],
];


function getAllCategories()
{
    global $categories;
    return $categories;
}

function getActiveCategories()
{
    global $categories;
    return array_filter($categories, function ($category) {
        return $category['deleted_at'] === null;
    });
}

function addCategory($title)
{
    global $categories;
    $id = count($categories) + 1;
    $categories[] = ['id' => $id, 'title' => $title, 'deleted_at' => null];
}


function editCategory($id, $title)
{
    global $categories;
    foreach ($categories as &$category) {
        if ($category['id'] == $id) {
            $category['title'] = $title;
            break;
        }
    }
}




?>
