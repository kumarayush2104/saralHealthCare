<?php
    function login($username, $password) {
        $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
        $result = $conn -> query('SELECT * FROM users where username="'.$username.'" and password = (SELECT PASSWORD("'.$password.'"))');
        $row = $result -> fetch_assoc();
        return $row;
    }
?>