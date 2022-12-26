<?php

include('vendor/autoload.php');
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
