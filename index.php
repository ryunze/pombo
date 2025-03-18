<?php

require_once(__DIR__ . '/app/Conn.php');

$conn = new Conn();

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Post</title>

    <!-- jquery -->
    <script type="text/javascript" src="/app/src/jquery-3.7.1.min.js"></script>

    <!-- bootstrap5 -->
    <link rel="stylesheet" href="/app/src/bootstrap5.min.css" />
    <script type="text/javascript" src="/app/src/bootstrap5.bundle.min.js"></script>
    <link href="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.css" rel="stylesheet"
        integrity="sha384-M6C9anzq7GcT0g1mv0hVorHndQDVZLVBkRVdRb2SsQT7evLamoeztr1ce+tvn+f2" crossorigin="anonymous">
    <script src="https://cdn.datatables.net/v/bs5/dt-2.2.2/datatables.min.js"
        integrity="sha384-k90VzuFAoyBG5No1d5yn30abqlaxr9+LfAPp6pjrd7U3T77blpvmsS8GqS70xcnH" crossorigin="anonymous">
    </script>

</head>

<body>

    <?php include_once('app/components/navbar.php') ?>

    <div class="container">
        <div class="d-flex align-items-center mb-3">
            <a href="/newpost.php" class="btn btn-dark">New Post</a>
        </div>
        <table id="table-posts" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>#</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($conn->get_all_post() as $post) : ?>
            <tr>
                <td><?= $post['id'] ?></td>
                <td><?= $post['title']?></td>
                <td>
                    <a href="#">Edit</a>
                </td>
            </tr>
            <?php endforeach ?>
    </table>
    </div>

    <script>
        new DataTable('#table-posts');
    </script>

</body>

</html>