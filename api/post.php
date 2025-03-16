<?php

switch ($_SERVER['REQUEST_METHOD'])
{
    case 'GET':
        post_get();
        break;
    case 'POST':
        post_save();
        break;
    case 'UPDATE':
        post_update();
        break;
    case 'DELETE':
        post_delete();
        break;
}

function post_get()
{
    $db = new SQLite3('../app/pombo.db');
    
    if (!$db) {
        echo $db->lastErrorMsg();
        exit;
    }

}

function post_save()
{
    $db = new SQLite3('../app/pombo.db');
    
    if (!$db) {
        echo $db->lastErrorMsg();
        exit;
    }

    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    // var_dump($data);

    $result = $db->query("INSERT INTO posts VALUES(null, '".$data['title']."', '".$data['content']."')");
    if ($db->changes() > 0) {
        header('Content-type: application/json');
        echo json_encode([
            'status' => 201,
            'message' => 'Success add new post'
        ]);
    }

}

function post_update()
{

}

function post_delete()
{

}