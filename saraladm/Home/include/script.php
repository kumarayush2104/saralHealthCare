<?php

    switch($_REQUEST['type'])  {
        case 'add': {
            $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
            $result = $conn -> query('INSERT INTO doctor values("'.$_REQUEST['id'].'", "'.$_REQUEST['role'].'")');
            if($result) {
                echo 1;
            } else {
                echo 0;
            }

            $conn -> close();
            break;
        }

        case 'remove': {
            $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
            $result = $conn -> query('DELETE from doctor where name="'.$_REQUEST['id'].'"');
            if($result) {
                echo 1;
            } else {
                echo 0;
            }

            $conn -> close();
            break;
        }
    }