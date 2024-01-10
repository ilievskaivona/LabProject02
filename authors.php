<?php
require_once 'authentication.php';

$authors = [
    ['id' => 1, 'first_name' => 'Ivona', 'last_name' => 'Ilievska', 'biography' => 'Author of Book1', 'deleted_at' => null],
    ['id' => 2, 'first_name' => 'Simona', 'last_name' => 'Ilievska', 'biography' => 'Author of Book2', 'deleted_at' => null],
];

function getAllAuthors()
{
    global $authors;
    return $authors;
}

function getActiveAuthors()
{
    global $authors;
    return array_filter($authors, function ($author) {
        return $author['deleted_at'] === null;
    });
}

function addAuthor($first_name, $last_name, $biography)
{
    global $authors;
    $id = count($authors) + 1;
    $authors[] = ['id' => $id, 'first_name' => $first_name, 'last_name' => $last_name, 'biography' => $biography, 'deleted_at' => null];
}



function deleteAuthor($id)
{
    global $authors;
    foreach ($authors as &$author) {
        if ($author['id'] == $id) {
            $author['deleted_at'] = date('Y-m-d H:i:s');
            break;
        }
    }
}

?>
