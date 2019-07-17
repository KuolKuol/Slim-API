<?php
// function that handles get requests
function get($sql){    
    try {
         // get the database object
         $db = new db;
         // connect to database
         $db = $db->connect();
         // create prepared statement 
         $stmt = $db->query($sql);
         $data = $stmt->fetchAll(PDO::FETCH_OBJ);
         $db = null;
        //  echo str_replace(array('[', ']'), '', htmlspecialchars(json_encode($data), ENT_NOQUOTES)); 

        echo json_encode($data);
    } catch (\Exception $e) {
        //error message
        echo '{"error":'.$e->getMessage()."}"; 
    }
}