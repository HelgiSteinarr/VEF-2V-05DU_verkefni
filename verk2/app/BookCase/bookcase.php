<?php

namespace App;

class BookCase {
    static $book_array = [
        "001" => ["name" => "Test bók 1", 
                "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 
                "writer" => "Helgi",
                "publisher" => "Fisedush ehf",
                "year_published"=> "1950"],
        "002" => ["name" => "Test bók 2", 
                "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 
                "writer" => "Guðmundur",
                "publisher" => "Fisedush ehf",
                "year_published"=> "1990"],
        "003" => ["name" => "Test bók 3", 
                "desc" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.", 
                "writer" => "Albert",
                "publisher" => "Fisedush ehf",
                "year_published"=> "2001"]];

    static function getBookInfo($bookId)
    {
        if (array_key_exists($bookId, BookCase::$book_array))
        {
            return BookCase::$book_array[$bookId];
        }else{
            return ["error" => "No book with the ID '" . strval($bookId) . "'"];
        }
    }

    static function getFullArray()
    {
        return BookCase::$book_array;
    }
}
