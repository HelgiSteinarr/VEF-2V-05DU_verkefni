<?php

namespace App\Http\Controllers;

use App\BookCase;

class bookCaseController extends Controller{

    function index(){
        $book_data = BookCase::getFullArray();
        return view("homepage", ["book_data" => $book_data]);
    }

    function infopage($bookid){
        $book_info = BookCase::getBookInfo($bookid);
        return view("bookinfo", ["book_info" => $book_info]);
    }
}