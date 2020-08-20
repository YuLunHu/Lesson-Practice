<?php

class BlogController extends Controller {
    
    function index() {
        echo "home page of BlogController";
    }
    
    function hello($name) {
        echo "Hello! Welcome to my blog. $name";
    }

    function list($name) {
        echo "Hi, it's the list of your blog. $name";
    }
    
}

?>