<?php

require_once(__DIR__ . '/../app/Conn.php');

class PostAPI extends Conn {

    function post_save()
    {

        $data = file_get_contents('php://input');
        $data = json_decode($data, true);

        extract($data);

        $currentTime = time();
        $category = 'unknown';

        $query = "INSERT INTO posts VALUES(null, '$title', '$content', '$category', 'test-slug',  '$currentTime',  '$currentTime')";

        // echo $query;

        // exit;

        $result = $this->db->query($query);

        // var_dump($result);

        if ($this->db->changes() > 0) {
            header('Content-type: application/json');
            echo json_encode([
                'status' => 201,
                'message' => 'Success add new post'
            ]);
        }

    }
}

$postApi = new PostAPI();

switch ($_SERVER['REQUEST_METHOD'])
{
    case 'POST':
        $postApi->post_save();
        break;
}

