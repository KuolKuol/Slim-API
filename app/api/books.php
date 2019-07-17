<?php
$app->get('/books',function($request,$response,$args){   
    // sql statement
    $sql = 'SELECT * FROM books';
    // get all records from database
    get($sql);
});

$app->get('/books/{id}',function($request,$response,$args){   
    // get the id from the URL 
    $id = $args['id'];
    // sql statement
    $sql = 'SELECT * FROM books WHERE id='.$id;
    // get specific item from database
    get($sql); 
});