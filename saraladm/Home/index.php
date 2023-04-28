<?php
    session_start();
    include('../Assets/modules/accFetch.php');

    if(isset($_SESSION['username']) || isset($_COOKIE['username'])) {
        if(isset($_SESSION['password']) || isset($_COOKIE['password'])) {

            $username = (isset($_SESSION['username']))? $_SESSION['username']: $_COOKIE['username'];
            $password = (isset($_SESSION['password']))? $_SESSION['password']: $_COOKIE['password'];

            $row = login($username, $password);
        }
    } else {
        header('location: /saraladm/Login');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"> </script>
    <style>

        @media only screen and (max-width: 690px){
            .abc, html {
                width: fit-content !important;
            }
        }
        button {
            border: 1px solid black;
            border-radius: 10px;
        }

        .abc {
            width: 100vw;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
    </style>
</head>
<body>
<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href=".">
      <img src='../Assets/modules/saral_main.png' alt="Bootstrap" width="170" height="60">
    </a>
    <p class='my-2'>Welcome, <?php echo $row['username']; ?></p>
    <form class="d-flex align-items-center">
        <a href='../Photo/'><Button type='button' class='btn btn-primary'>Click here to modify Event Images</Button></a>
        <a href='../Assets/modules/logout.php'><button type='button' class="btn btn-primary mx-4">Logout</button></a>
    </form>
  </div>
</nav>
    <div class='abc'>
        
        <div class='px-4 py-4 text-center' style='width: fit-content'>
        <p class='display-6 py-4'>Add or Remove Doctors</p>
            <?php
                $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
                $result = $conn -> query('SELECT * FROM doctor');
                echo "<table class='table table-striped'><thead><tr><th scope='col'>Name</th><th scope='col'>Role</th><th scope='col'>#</th></tr></thead><tbody>";

                while($row = $result -> fetch_assoc()) {
                    echo "<tr><td>".$row['name']."</td><td>".$row['type']."</td><td><Button id='".$row['name']."' onclick='removeDoc(this.id)'>Remove</Button></td></tr>";
                }

                echo "<tr><td><input type='text' id='addname' placeholder='Doctor Name'></td><td><input id='addrole' type='text' placeholder='Doctor Role'></td><td><Button onclick='addDoc()'>Add</Button></td></tr></tbody></table>";
            ?>
        </div>

        <div class='px-4 py-4 text-center' style='width: fit-content'>
        <p class='display-6 py-4'>Add or Remove Packages</p>
            <?php
                $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
                $result = $conn -> query('SELECT * FROM packages');
                echo "<table class='table table-xs table-striped'><thead><tr><th scope='col'>Category</th><th scope='col'>Name</th><th scope='col'>Price</th><th scope='col'>#</th></tr></thead><tbody>";

                while($row = $result -> fetch_assoc()) {
                    echo "<tr><td id='cat".$row['name']."'>".$row['category']."</td><td><input type='text' value='".$row['name']."' id='name".$row['name']."'></td><td><input type='text' value='".$row['price']."' id='price".$row['name']."'></td><td><Button id='".$row['name']."' onclick='upPac(this.id)'>Update</Button> <Button id='".$row['name']."' onclick='remPac(this.id)'>Remove</Button></td></tr>";
                }

                echo "<tr><td><input id='addpaccat' type='text' placeholder='Package Category'></td><td><input type='text' id='addpacname' placeholder='Package Name'></td><td><input id='addpacprice' type='text' style='width: 50%;' placeholder='Package Price'></td><td><Button onclick='addPac()'>Add</Button></td></tr></tbody></table>";
            ?>
        </div>
    </div>
<script src='include/script.js'></script>
</html>