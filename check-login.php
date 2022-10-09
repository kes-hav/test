<?php

    $username = isset($_POST['username1']) ? $_POST['username1'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $ok = true;
    $messages = array();

    if ($ok) {
        if ($username === 'dcode' && $password === 'dcode') {
            $ok = true;
            $messages[] = 'Successful login!';
        } else {
            $ok = false;
            $messages[] = 'Incorrect username/password combination!';
        }
    }

    echo json_encode(
        array(
            'ok' => $ok,
            'messages' => $messages
        )
    );