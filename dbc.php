<?php

function dbConnect() {
    $dsn = 'mysql:host=localhost;dbname=blog_app;charset=utf8';
    $user = 'blog_user';
    $pass = '0506';
    try {
        $dbh = new \PDO($dsn,$user,$$pass,[
        ]);
    }catch (PDOExcption $e) {
        echo '失敗'.$e->getMessage();
        exit();
    }
    return $dbh;
}
function setCategoryName($category) {
    
}