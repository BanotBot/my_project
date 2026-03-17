<?php

namespace App\Controllers;

class Index extends BaseController
{
    public function index() 
    {
        echo view("header");
        echo view("index"); // Name sa file nga naa sa app/Views/index.php
        echo view("footer");
    }
}