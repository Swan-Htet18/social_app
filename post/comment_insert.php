<?php

include("../db.php");
session_start();

if (isset($_POST['comment'])) {


    include('../vendor/autoload.php');
    $options = array(
        'cluster' => 'ap1',
        'useTLS' => true
    );
    $pusher = new Pusher\Pusher(
        '3e47a20f35f25e0dd74b',
        '25f2ab11c138051268a4',
        '1529783',
        $options
    );

    $data['message'] = 'hello world';
    $pusher->trigger('my-channel', 'my-event', $data);
    $comment = $_POST['comment'];
    $post_id = $_POST['post_id'];
    $sql = "INSERT INTO comment (comment,post_id,user_id,created_date,modified_date) VALUES ('$comment','$post_id','" . $_SESSION['id'] . "',now(),now())";
    mysqli_query($conn, $sql);
}
