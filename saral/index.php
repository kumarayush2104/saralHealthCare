<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="healthcare, hospital, saral" />
    <link href="Assets/stylesheet/stylesheet.css" rel="stylesheet" />
    <link rel="shortcut icon" href="Assets/image/saral_no_title.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    <title>Saral Health Care</title>
</head>
<body>
  <div class="container-fluid" id="page1">
                <div class="page4_5-content container">
                        <div style="align-items: center; display: flex; justify-content: center;">
                                <img class="img-fluid" src="Assets/image/saral_main.png" style="width: 70%;"/>
                        </div>
                        <div style="display: flex; align-items: center; justify-content: center; margin: 20px;">
                                <p class="h1">A health care that really cares</p>
                        </div>
                </div>
       </div>
    <main>
        <div class="container-fluid" id="page3">
                <p style="padding: 50px 9px;color: #562B08; text-shadow: 2px 2px #fff;font-weight: 600;" class="display-3">Our Services</p>
                <div class="page4_5-content container" id="page3-content">

                        <?php
                                $conn = new mysqli('localhost', 'id19769102_root','Abcd@1234567', 'id19769102_saral');
                                $result = $conn -> query('SELECT category FROM packages group by category');
                                $data = null;
                                while($row = $result -> fetch_assoc()) {
                                        $data[] = $row['category'];
                                }


                                for($i = 0; $i < count($data); $i++) {
                                        echo '<details class="member" open>';
                                        echo '<summary style="color: #B3541E;" class="h2">'.$data[$i].'</summary><table>';
                                        $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
                                        $result = $conn -> query('SELECT * FROM packages where category = "'.$data[$i].'"');
                                        while($row = $result -> fetch_assoc()) {
                                                echo '<tr><th class="text-uppercase">'.$row['name'].'</th><td style="color: red">₹'.$row['price'].'</td></tr>';
                                        }

                                        echo '</table></details>';
                                }
                        ?>
                </div>
        </div>
        <div class="container-fluid" id="pag4" >
        <p style="padding: 50px 9px;color: #562B08; text-shadow: 2px 2px #fff;font-weight: 600;" class="display-4">Picture Gallery</p>
                <div class="container" id="eventImage">
                        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                  <div class="carousel-item active text-center" data-bs-interval="10000">
                                        <img src="Assets/event/1.jpg" style="height: 70vh;" class='eventPic'>
                                  </div>
                                  <?php
                                        $files = scandir('Assets/event/');
                                        foreach($files as $img) {
                                                if($img == '1.jpg' || $img == "." || $img == "..") {
                                                        continue;
                                                }
                                                echo "<div class='carousel-item text-center' data-bs-interval='2000'><img src='Assets/event/$img' class='eventPic img-fluid' style='height: 70vh;'></div>";
                                        }
                                  ?>
                                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="visually-hidden">Next</span>
                                </button>
                              </div>
                        </div>
                </div>
        </div>
        <div class="container-fluid" id="page4">
                <p class='team' style="font-size: 50px; padding: 50px 9px;font-weight: 600;color: white;text-shadow: 3px 3px #FD7833">Our Team</p>
                <div class="page4_5-content container" id="page4-content">
                        <?php
                                $conn = new mysqli('localhost', 'id19769102_root', 'Abcd@1234567', 'id19769102_saral');
                                $result = $conn -> query('SELECT * FROM doctor');
                                while($row = $result -> fetch_assoc()) {
                                        echo "<div class='member'><h2>".$row['name']."</h2><p class='text-uppercase' style='color: #FD7833; font-weight: 600;'>".$row['type']."</p></div>";
                                }
                        ?>
                </div>
        </div>
        <div class="container-fluid" id="page6">
                <div class="page4_5-content container" id="page4-content">
                                <div style='text-align: center'>
                                        <i class="fa fa-clock-o" style="color: blue; font-size: 60px; padding: 20px;"></i><br>
                                        <p style="font-weight: 700">Opening time</p>
                                        <span>Monday to Saturday<br>10:00 to 18:00</span>
                                </div>

                                <div style='text-align: center'>
                                        <i class="fa fa-map-o" style="color: blue; font-size: 60px; padding: 20px;"></i><br>
                                        <p style="font-weight: 700">Address</p>
                                        <span>Saral Health Care<br> Shasmi Bhavan, Near Gopi Talav<br>Wadifaliya, Surat</span>
                                </div>

                                <div style='text-align: center'>
                                        <i class="fa fa-phone" style="color: blue; font-size: 60px; padding: 20px;"></i><br>
                                        <p style="font-weight: 700">For Appointment<br></p>
                                        <span> +91 77788 20310</span>
                                </div>

                                <div style='text-align: center'>
                                        <i class="fa fa-phone" style="color: blue; font-size: 60px; padding: 20px;"></i><br>
                                        <p style="font-weight: 700">Helpline<br></p>
                                        <span> +91 87587 57469</span>
                                </div>
                </div>
        </div>
    </main>    
    <footer class="container-fluid">
        <div class="footer-container container">
                <img src="Assets/image/saral_main.png" class="img-fluid" width="300px"/>
                <span>© 2022 All Rights Reserved Terms of Use and Privacy Policy</span>
                <div class="socials">
                        <a href="https://instagr.am/saral.health"><i class="fa fa-brands fa-instagram" style="font-size: 35px"></i></a>
                        <a href="https://www.facebook.com/people/Saral-health-care/100063981517858/"><i class="fa fa-brands fa-facebook" style="font-size: 30px"></i></a>
                        <a href="https://wa.me/+918758757469"><i class="fa fa-brands fa-whatsapp" style="font-size: 35px;"></i></a>
                </div>
        <div>
    </footer>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script>
        function displaySummary(i) {
                document.getElementsByTagName("details")[i].setAttribute("open", "");
        }

        function offSummary(i) {
                document.getElementsByTagName("details")[i].removeAttribute("open");
        }
    </script>
</body>
</html>