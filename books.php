<?php
require_once 'authentication.php';

$books = [
    ['id' => 1, 'title' => 'Book1', 'author_id' => 1, 'category_id' => 1, 'year' => 1888, 'pages' => 410, 'image_url' => '', 'deleted_at' => null],
    ['id' => 2, 'title' => 'Book2', 'author_id' => 2, 'category_id' => 2, 'year' => 1999, 'pages' => 290, 'image_url' => '', 'deleted_at' => null],
];

function getAllBooks()
{
    global $books;
    return $books;
}


function getActiveBooks()
{
    global $books;
    return array_filter($books, function ($book) {
        return $book['deleted_at'] === null;
    });
}

function addBook($title, $author_id, $category_id, $year, $pages, $image_url)
{
    global $books;
    $id = count($books) + 1;
    $books[] = ['id' => $id, 'title' => $title, 'author_id' => $author_id, 'category_id' => $category_id, 'year' => $year, 'pages' => $pages, 'image_url' => $image_url, 'deleted_at' => null];
}

function editBook($id, $title, $author_id, $category_id, $year, $pages, $image_url)
{
    global $books;
    foreach ($books as &$book) {
        if ($book['id'] == $id) {
            $book['title'] = $title;
            $book['author_id'] = $author_id;
            $book['category_id'] = $category_id;
            $book['year'] = $year;
            $book['pages'] = $pages;
            $book['image_url'] = $image_url;
            break;
        }
    }
}

?>
