<?php
   session_start();
   include('accFetch.php');

   if(isset($_SESSION['username']) || isset($_COOKIE['username'])) {
       if(isset($_SESSION['password']) || isset($_COOKIE['password'])) {

           $username = (isset($_SESSION['username']))? $_SESSION['username']: $_COOKIE['username'];
           $password = (isset($_SESSION['password']))? $_SESSION['password']: $_COOKIE['password'];

           $row = login($username, $password);

           if($row) {
                session_unset();
                setcookie('username', '', -1, '/');
                setcookie('password', '', -1, '/');
                header('location: /saraladm/Login');
           }
       }

   } else {
       header('location: /saraladm/Login');
   }
?>