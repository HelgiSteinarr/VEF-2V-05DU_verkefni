<?php

namespace App\Http\Controllers;

class bookCaseController extends Controller{

    function index(){
        return view("homepage");
    }

    function infopage($bookid){
        return view("bookinfo");
    }
}