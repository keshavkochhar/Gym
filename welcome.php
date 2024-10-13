<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gym.css">
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Dancing+Script:wght@700&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap" rel="stylesheet">
    
</head>
<body>
<div class="container my-3">
    <div class="alert alert-success" role="alert">
     
    </div>
  </div>
    <div class="container">
        <nav>
            <div class="logo">
                <h1>Body Blitz Fit</h1>
            </div>
            <ul>
                <a href="">HOME</a>
                <a id="trains" href="#trainer">TRAINER</a>
                <a  href="bmi.html">WORKOUT PLAN</a>
                <a  href="index.html">BMI</a>
                <a  href="diet.html">DIET PLAN</a>
                <a id="programs" href="#program">PROGRAM</a>
                <a href="pay.html">MEMBERSHIP</a>
                <a href=connect.php>CONNECT</a>
                <a href="admin/">Admin</a></li>

            </ul>
        </nav>

        <div class="join">
            <input type="text" placeholder="Enter Name" id="names"><br>
            <input type="text" placeholder="Enter Number" id="number"><br>
            <button id="join">Join</button>

        </div>
        <!-- main -->

        <div class="main">
            <div class="mainText">
                <h1>Let's Take First Step</h1>
                <h2>30% Off On Membership</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing <br>
                    elit. Ex rem tempore sapiente nobis ad!</p>
              <a href="pay.html"><button>JOIN</button></a>
              <a href="signup.php"><button>SIGN UP</button></a>
              
              <a href="logout.php"><button id="mainBtn" >Logout</button></a>
            </div>
            <img src="man.png" alt="">
        </div>

        <!-- trainer -->
        <div class="crd" id="trainer">
            <div class="head">
                <h1>Train With <span>Top Trainer</span></h1>
            </div>

            <div class="train">
                <div class="card">
                    <img src="train1.jpg" alt="">
                    <div class="trainText">
                        <h2>Learn From the Best</h2>
                        <p>You can find out videos related to fitness and workouts for beginners, intermediate and advance level. The channel will also feature videos for motivation, lifestyle.                        </p>
                        <a href="https://www.youtube.com/@YatinderSinghOfficial">Click & Learn</a>
                    </div>
                </div>
                <div class="card">
                    <img src="train2.jpg" alt="">
                    <div class="trainText">
                        <h2>Learn From the Best</h2>
                        <p>Full Week Gym Workout Plan For Muscle Building & Fat Loss | One vs Two Body Part | Bodybuilding             </p>
                        <a  href="https://youtu.be/ewwxbpJecx4?si=BAqiYKwfzXm-gNEO">Click & Learn</a>
                    </div>
                </div>
                <div class="card">
                    <img src="train3.webp" alt="">
                    <div class="trainText">
                        <h2>Learn From the Best</h2>
                        <p>6 Pack Abs Workout for Beginners | Yatinder Singh  </p>
                        <a  href="https://youtu.be/OUctE0Gv5Pk?si=jH8KX4szkpKznHxW">Click & Learn</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- slide -->
        <div class="slidebar" id="member">
            <div class="head">
                <h1>Fit N Fine <span>Member</span></h1>
            </div>

            <div class="img">
                <img class="slide" src="slide1.jpg" alt="">
                <img class="slide" src="slide2.jpg" alt="">
                <img class="slide" src="slide3.webp" alt="">
                <img class="slide" src="slide4.webp" alt="">
                <img class="slide" src="slide5.jpg" alt="">
                <img class="slide" src="slide6.jpg" alt="">
                <img class="slide" src="slide7.jpg" alt="">
                <img class="slide" src="slide8.jpg" alt="">
                <img class="slide" src="train1.jpg" alt="">
                <img class="slide" src="train2.jpg" alt="">

            </div>

            <div class="btn">
                <button id="prev">Prev</button>
                <button id="next">Next</button>

            </div>
        </div>

        <!--Program-->
        <div class="pro" id="program">
            <div class="head">
                <h1>Our <span>Programs</span></h1>
            </div>
            <div class="program">
                <div class="proCard">
                    <img src="pro1.jpg" alt="">
                    <h2>Dance</h2>
                </div>
                <div class="proCard">
                    <img src="pro2.webp" alt="">
                    <h2>Cardi0</h2>
                </div>
                <div class="proCard">
                    <img src="pro3.jpg" alt="">
                    <h2>Heavy Workout</h2>
                </div>
            </div>
        </div>
<br>
        <!-- connect -->
        <div class="start" id="start">
        <div class="startText">
            <h1 style="font-size: 4.5em; margin-bottom: 10px; color: #2c3e50; text-align: center;">Let's Go...</h1>
            <h2 style="font-size: 4.5em; margin-top: 0; color: #ecf0f1; text-align: center;">Start Your Journey Now!</h2>
       
        <img src="girl.png" alt="" style="width: 700px; height: auto; border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); animation: spin 2s linear infinite; display: block; margin: auto;">
      </div>

        <div class="contact" id="connect">
            <div class="head">
                <h1>Connect <span>With US</span></h1>
            </div>

            <div class="connect">
                <input type="text" placeholder="Enter Your Name" id="name"> <br>
                <input type="password" placeholder="Enter Your Password" id="pass"> <br>
                <button id="submit">Submit</button>

            </div>
        </div>

        <!-- footer -->
        <div class="footer">
            <div class="text">
                <h2>About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing <br>
                    elit. Debitis laboriosam quis dolores eveniet quia <br>
                    aliquid aspernatur nam possimus quis</p>
            </div>
            <div class="text">
                <h2>Service</h2>
                <p>Satisfaction</p>
                <p>Our Service</p>
                <p>Price</p>
                <p>offordable</p>
                <p>quality</p>

            </div>
            <div class="text">
                <h2>Training</h2>
                <p>Trainer                </p>
                <p>Personal</p>
                <p>Train</p>
                <p>Offer</p>
                <p>new</p>

            </div>
            <div class="text">
                <h2>Address</h2>
                <p>Swift Road</p>
                <p>sectoe-144</p>
                <p>SR Layout</p>
                <p>Mumbai</p>
                <p></p>

            </div>
        </div>
    </div>
    <script src="gym.js"></script>
</body>
</html>