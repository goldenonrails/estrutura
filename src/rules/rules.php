<?php

class Rules{

    // Divide URLs em arrays
    public function parseUrl(){
        return explode("/",rtrim($_GET['url']), FILTER_SANITIZE_URL);
    }
}

$e = new Rules();
$e->parseUrl();