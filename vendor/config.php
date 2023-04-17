<?php

    $connect = mysqli_connect('localhost', 'root', '', 'arxivuz');

    if(!$connect)
    {
        die('Ops..\n error base not connect');
    }

