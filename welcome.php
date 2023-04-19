<?php

session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true)
{
    header("location: login.php");
}


?>


<!-- <!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP login system!</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">Php Login System</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>

      
     
    </ul>

  <div class="navbar-collapse collapse">
  <ul class="navbar-nav ml-auto">
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
         php echo "Welcome ". $_SESSION['Email']?></a>
      </li>
  </ul>
  </div>


  </div>
</nav>

<div class="container mt-4">
<h3>php echo "Welcome ". $_SESSION['Email']?>! You can now use this website</h3>
<hr>

</div>

    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <title>Home page</title>
    <script
      src="https://kit.fontawesome.com/1a015cf62c.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css">
  </head>
  <style>
 
/* 
.animation-container {
  display: block;
  position: relative;
  width: 100px;
  max-width: 60%;
  margin: 0 auto;
  
  .lightning-container {
    position: absolute;
    top: 50%;
    left: 0;
    display: flex;
    transform: translateY(-50%);
    
    .lightning {
      position: absolute;
      display: block;
      height: 12px;
      width: 12px;
      border-radius: 12px;
      transform-origin: 6px 6px;

      animation-name: woosh;
      animation-duration: 1.5s;
      animation-iteration-count: infinite;
      animation-timing-function: cubic-bezier(0.445, 0.050, 0.550, 0.950);
      animation-direction: alternate;

      &.white {
        background-color: white;
        box-shadow: 0px 50px 50px 0px transparentize(white, 0.7);
      }

      &.red {
        background-color: #fc7171;
        box-shadow: 0px 50px 50px 0px transparentize(#fc7171, 0.7);
        animation-delay: 0.2s;
      }
    }
  }
  
  
  .boom-container {
    position: absolute;
    display: flex;
    width: 80px;
    height: 80px;
    text-align: center;
    align-items: center;
    transform: translateY(-50%);
    left: 200px;
    top: -145px;
    
    .shape {
      display: inline-block;
      position: relative;
      opacity: 0;
      transform-origin: center center;
      
      &.triangle {
        width: 0;
        height: 0;
        border-style: solid;
        transform-origin: 50% 80%;
        animation-duration: 1s;
        animation-timing-function: ease-out;
        animation-iteration-count: infinite;
        margin-left: -15px;
        border-width: 0 2.5px 5px 2.5px;
        border-color: transparent transparent #42e599 transparent;
        animation-name: boom-triangle;
        
        &.big {
          margin-left: -25px;
          border-width: 0 5px 10px 5px;
          border-color: transparent transparent #fade28 transparent;
          animation-name: boom-triangle-big;
        }
      }
      
      &.disc {
        width: 8px;
        height: 8px;
        border-radius: 100%;
        background-color: #d15ff4;
        animation-name: boom-disc;
        animation-duration: 1s;
        animation-timing-function: ease-out;
        animation-iteration-count: infinite;
      }
      
      &.circle {
        width: 20px;
        height: 20px;
        animation-name: boom-circle;
        animation-duration: 1s;
        animation-timing-function: ease-out;
        animation-iteration-count: infinite;
        border-radius: 100%;
        margin-left: -30px;
        
        &.white {
          border: 1px solid white;
        }
        
        &.big {
          width: 40px;
          height: 40px;
          margin-left: 0px;
          
          &.white {
            border: 2px solid white;
          }
        }
      }
      
      &:after {
        background-color: rgba(178, 215, 232, 0.2);
      }
    }
    
    .shape {
      &.triangle, &.circle, &.circle.big, &.disc {
        animation-delay: .38s;
        animation-duration: 3s;
      }
      
      &.circle {
        animation-delay: 0.6s;
      }
    }
    
    &.second {
      left: 485px;
      top: 155px;
      .shape {
        &.triangle, &.circle, &.circle.big, &.disc {
          animation-delay: 1.9s;
        }
        &.circle {
          animation-delay: 2.15s;
        }
      }
    }
  }
}

@keyframes woosh {
  0% {
    width: 12px;
    transform: translate(0px, 0px) rotate(-35deg);
  }
  15% {
    width: 50px;
  }
  30% {
    width: 12px;
    transform: translate(214px, -150px) rotate(-35deg);
  }
  30.1% {
    transform: translate(214px, -150px) rotate(46deg);
  }
  50% {
    width: 110px;
  }
  70% {
    width: 12px;
    transform: translate(500px, 150px) rotate(46deg);
  }
  70.1% {
    transform: translate(500px, 150px) rotate(-37deg);
  }
  
  85% {
    width: 50px;
  }
  100% {
    width: 12px;
    transform: translate(700px, 0) rotate(-37deg);
  }
}

@keyframes boom-circle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  30% {
    opacity: 0;
    transform: scale(3);
  }
  100% {
  }
}

@keyframes boom-triangle-big {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  
  40% {
    opacity: 0;
    transform: scale(2.5) translate(50px, -50px) rotate(360deg);
  }
  100% {
  }
}

@keyframes boom-triangle {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  
  30% {
    opacity: 0;
    transform: scale(3) translate(20px, 40px) rotate(360deg);
  }
  
  100% {
  }
}

@keyframes boom-disc {
  0% {
    opacity: 0;
  }
  5% {
    opacity: 1;
  }
  40% {
    opacity: 0;
    transform: scale(2) translate(-70px, -30px);
  }
  100% {
    
  }
} */


     td {
    
      background-color: rgb(146, 216, 140); 
      text-align:center;
  border: 2px solid rgb(146, 216, 140);
  border-radius: 90px;
  /* margin-right:100px; */
  padding:40px;
    /* border: 1px solid rgb(41, 41, 43); */
    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 70px 70px 70px 70px;
  }
  .header{
  margin:16px;
} 
 

  </style>
  <body>
    
  <header>
    <img src="logo_image-removebg-preview.png" alt="image" width="90" align = "left" >
  <div class="header" id="myHeader">
  <h1 style = "color: rgb(2, 104, 2); font-size: 45px; font-family:verdana;">
      FITNESS GURU
  </h1></div> </header>
    
      <nav class="navbar">
        <ul>
            <div class="navbar">
            <li><a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a></li>
            <li><a href="diary.php">Diary</a></li>
            <li><a href="goal.php">Goals</a></li>
            <li><a href="exercise.php">Exercise</a></li>
            <li><a href="bmidata.php">BMI</a></li>
            <li><a href="about">About</a></li>
            <li><a class="nav-link" href="logout.php">Logout</a></li>
            
           
        </div>
          </ul>

          
      <!-- </nav> -->
      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="register.php">Register</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li> 

      
     
    </ul>-->

  <!-- <div class="navbar-collapse collapse">
  
  <li class="nav-item active">
        <a class="nav-link" href="#"> <img src="https://img.icons8.com/metro/26/000000/guest-male.png">
         php echo "Welcome ". $_SESSION['Email']?></a>
      </li>
  </ul>
  </div> -->


  </div>
</nav>
   

    <main>
        
        <div class="left">
            <div class="div1">
            <!-- <div class="animation-container">
  <div class="lightning-container">
    <div class="lightning white"></div>
    <div class="lightning red"></div>
  </div>
  <div class="boom-container">
    <div class="shape circle big white"></div>
    <div class="shape circle white"></div>
    <div class="shape triangle big yellow"></div>
    <div class="shape disc white"></div>
    <div class="shape triangle blue"></div>
  </div>
  <div class="boom-container second">
    <div class="shape circle big white"></div>
    <div class="shape circle white"></div>
    <div class="shape disc white"></div>
    <div class="shape triangle blue"></div>
  </div>
</div> --><br>
                <h2 style="color: rgb(8, 6, 6); font-size: 34px;">Calories</h2> 
                <img src="kinfe-removebg-preview.png" alt="image" width="90" align = "right" >
      <table  style='font-family:"Courier New", Courier, monospace;'>

<?php
include("config.php");
error_reporting(0);
// $qurey = "select * from caloriintake";
$qurey = "select *from calorieintake ORDER BY id DESC LIMIT 1";
$data = mysqli_query($conn,$qurey);
$total = mysqli_num_rows($data);

if($total!=0){
while ($result=mysqli_fetch_assoc($data)){
    echo " 
  
  <td>
    <h1>".$result['Calories']."</h1>
    </td>
    ";
}
}
else{
echo "NO records found";
}

?>
</table> <br><br><hr style="width:20%;"><hr style="width:40%;"><hr style="width:60%;"><hr style="width:80%;"><hr>
             </div>  
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Steps</h2> 
                <img src="exercise-walk.gif" width="60px">
             </div> <br><br><br>
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Exercise</h2> 
                <img src="Barbell-Bench-Press.gif" width="60px">
             </div> 
            
            <div class="accounts">
                <p>Suggested accounts</p>
                <div class="user">
                    <img src="assets/Cat.png" alt="avatar">
                    <h6 class="username">Cheshire_Cat</h6>
                </div>
                <div class="user">
                    <img src="assets/Frankenstein.png" alt="avatar">
                    <h6 class="username">Frank</h6>
                </div>
                <div class="user">
                    <img src="assets/Pirate.png" alt="avatar">
                    <h6 class="username">Pirate</h6>
                </div>
                <div class="user">
                    <img src="assets/Gypsy.png" alt="avatar">
                    <h6 class="username">Gypsy</h6>
                </div>
            </div>
            <div class="tags">
                <p>Discover</p>
                <div>
                    <a href="#"># tiktokcookbook</a>
                    <a href="#"># summeressentials</a>
                    <a href="#"># music</a>
                    <a href="#"># memories</a>
                    <a href="#"># whoisbetter</a>
                    <a href="#"># tiktokcookbook</a>
                    <a href="#"># summeressentials</a>
                    <a href="#"># music</a>
                    <a href="#"># memories</a>
                    <a href="#"># whoisbetter</a>
                </div>
            </div>
            <div class="links">
                <div>
                    <div class="link">
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                        <a href="#">About</a>
                        <a href="#">Newsroom</a>
                        <a href="#">Contact</a>
                        <a href="#">Careers</a>
                        <a href="#">ByteDance</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="right">
            <div class="btns">
                <a href="#"><i class="fas fa-home"></i> <span>For You</span></a>
                <a href="#"><i class="fas fa-user-friends"></i> <span>Following</span></a>
                <a href="#"><i class="fas fa-video"></i> <span>Live</span></a>
              </div>
            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="5d789eb85d816200011f357a.jpeg" alt="avatar">
                        <div>
                            <h6>Gypsy</h6>
                            <p>Cool Video</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video1.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="444dd033f280b5e20adc2490ba0e10e6.jpg" alt="avatar">
                        <div>
                            <h6>Frank</h6>
                            <p>Cute cat</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video2.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>

            <div class="post">
                <div class="post-info">
                    <div class="user">
                        <img src="photo-1526506118085-60ce8714f8c5.jpg" alt="avatar">
                        <div>
                            <h6>Pirate</h6>
                            <p>Amazing</p>
                        </div>
                    </div>
                    <button>Follow</button>
                </div>
                <div class="post-content">
                    <video autoplay muted controls loop disablepictureinpicture controlslist="nodownload noplaybackrate">
                        <source src="video1.mp4" type="video/mp4">
                    </video>
                    <div class="video-icons">
                        <a href="#"><i class="fas fa-heart fa-lg"></i><span>1.6K</span></a>
                        <a href="#"><i class="fas fa-comment-dots fa-lg"></i><span>423</span></a>
                        <a href="#"><i class="fas fa-share fa-lg"></i> <span>150</span></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="script.js"></script>
    <script src="script1.js"></script>
  </body>
</html>