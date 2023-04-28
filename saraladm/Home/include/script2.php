<?php

    switch($_REQUEST['type'])  {
        case 'add': {
            $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
            $result = $conn -> query('INSERT INTO packages values("'.$_REQUEST['id'].'", "'.$_REQUEST['cat'].'", "'.$_REQUEST['price'].'")');
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
            $result = $conn -> query('DELETE from packages where name="'.$_REQUEST['id'].'" and category="'.$_REQUEST['cat'].'"');
            if($result) {
                echo 1;
            } else {
                echo 0;
            }

            $conn -> close();
            break;
        }

        case 'update': {
            $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
            $result = $conn -> query('UPDATE packages set name="'.$_REQUEST['name'].'", price="'.$_REQUEST['price'].'" where name="'.$_REQUEST['id'].'" and category="'.$_REQUEST['cat'].'"');
            if($result) {
                echo 1;
            } else {
                echo 0;
            }

            $conn -> close();
            break;
        }
    }