

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>sign up page 2</title>
</head>
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"></link>  -->
            <!-- <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet"></link> -->
<style>
   
    
    body {font-family: Arial, Helvetica, sans-serif;
    background-image: url("website_design\ 1.png");
    background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;
}
    .content {
      max-width: 950px;
      background-size: 50%;
      margin: auto;
      /* background: #a8d89bde; */
      padding: 7px;
      
    }
    input[type=text], input[type=number] {
      width: 30%;
      padding: 15px;
      margin: 8px 20px;
      display: inline-block;
      border: 2px solid #ccc;
      box-sizing: border-box;
    }
   
    
    .test{
    height: 50px;
    width:150px;
    background-color: #047004;
    color:aliceblue;
    font-size: 16px;
    border-color: #047004;
    margin-left:760px;
}
   
    .header {
            padding: 1px 1px;
            /* background-color: rgb(243, 243, 243); */
           }
           body {margin:0;}
    
    ul {
      list-style-type: none;
      margin: 0;
      padding: 0;
      overflow: hidden;
      background-color: #ffffff;
      position: fixed;
      top: 0;
      width: 100%;
    }
    
    li {
      float: left;
    }
    
    li a {
      display: block;
      color: white;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
    }
    .col-sm-4 {
  display: block;
  position: relative;
  padding-left: 10px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px; 
  user-select: none;
}




            
                .form-control, .form-select, .card, .btn
                {
                    border-radius: 15px;
                }

                .form-control, .form-select
                {
                    background: none;
                    color: #000000;
                    width: 70%;
                    padding: 15px;
                    margin: 8px 20px;
                }

                .form-select
                {
                    /* background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23ffffff' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e") !important; */
                    background-repeat: no-repeat !important;
                    background-position: right 0.75rem center !important;
                    background-size: 16px 12px !important;
                }

                input[type=checkbox], input[type=radio]
                {
                    width: 23px;
                    height: 23px;
                    display: inline-block;
                    top: 0;
                    position: relative;
                    -webkit-appearance: none;
                    -moz-appearance: none;
                    appearance: none;
                    border: 1px solid #047004;
                    overflow: hidden;
                }

                /* input[type=checkbox]
                {
                    
      box-sizing: border-box;
                } */

                input[type=radio]
                {
                    border-radius: 100%;
                }

                input[type=checkbox]:checked, input[type=radio]:checked
                {
                   
                    width: 4%;
                    padding: 10px;
                    margin: 1px 1px;
      
     
      /* box-sizing: border-box; */
                }

                input[type=checkbox]:checked:after, input[type=radio]:checked:after
                {
                    content: "\f00c";
                    font-family: "Font Awesome 5 Pro";
                    font-weight: 900;
                    left: 0;
                    position:absolute;
                    top:0;
                    font-size: 15px;
                    color: #047004;
                    background: #047004;
                    display: flex;
                    align-items: center;
                    justify-content: center;
                    width: 100%;
                    height: 100%;
                }
            

    
    /* Simple CSS3 Fade-in-down Animation */
    #formContent {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      /* background: #fff; */
      padding: 30px;
      width: 100%;
      max-width: 1050px;
      position: relative;
      padding: 20px;
      margin-left:75px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      text-align: left;
      margin:75px;
    }
    #formContent1 {
      -webkit-border-radius: 10px 10px 10px 10px;
      border-radius: 10px 10px 10px 10px;
      /* background: #fff; */
      padding: 30px;
      width: 100%;
      max-width: 1050px;
      position: relative;
      padding: 20px;
      margin-left:75px;
      -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
      text-align: left;
      margin:75px;
    }

 
    /* .wrapper {
      display: flex;
      align-items: center;
      flex-direction: column; 
      justify-content: center;
      width: 100%;
      min-height: 100%;
      padding: 20px;
    }
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
      -webkit-animation-duration: 1s;
      animation-duration: 1s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
    } */
    
    /* @-webkit-keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
    
    @keyframes fadeInDown {
      0% {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
      100% {
        opacity: 1;
        -webkit-transform: none;
        transform: none;
      }
    }
    
    /* Simple CSS3 Fade-in Animation */
    /* @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } } */
    /* @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } } */
    /* @keyframes fadeIn { from { opacity:0; } to { opacity:1; } } */
     */
    /* .fadeIn {
      opacity:0;
      -webkit-animation:fadeIn ease-in 1;
      -moz-animation:fadeIn ease-in 1;
      animation:fadeIn ease-in 1;
    
      -webkit-animation-fill-mode:forwards;
      -moz-animation-fill-mode:forwards;
      animation-fill-mode:forwards;
    
      -webkit-animation-duration:1s;
      -moz-animation-duration:1s;
      animation-duration:1s;
    }    */
    
    /* Change styles for span and cancel button on extra small screens */
    @media screen and (max-width: 300px) {
      span.psw {
         display: block;
         float: none;
      }
      .cancelbtn {
         width: 100%;
      }
    }
        </style>
<body>
        <ul>
          <li><img src="logo_image-removebg-preview.png" alt="image" width="90" align = "left" ></li>
          <li><div class="header" id="myHeader">
            <h1 style = "color: rgb(2, 104, 2); font-size: 40px; font-family:verdana;">
                FITNESS GURU
            </h1></div> </header></li>
        </ul>
        <div style="padding:20px;margin-top:30px;background-color:#cccccc;height:40px;"></div>
        <!-- <div class="wrapper fadeInDown"> -->
          <div id="formContent">
          <div class="content">
            <form class="CalculateForm" method="post">
            <div class=" split left">
                 <div class="centered">
              <div class="card bg-dark text-white">
                  <h1 style = "color: rgb(2, 77, 2); font-size: 30px; font-family:verdana;">Some personal details!</h1><hr>
                  <!-- <div class="card-body">
                      <div class="row g-5"> -->
                          <div class="col-sm-4">
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Age:</h1>
                                  <input name="age" required="" type="number"  />
                              </div>
                          </div>
                          <!-- <div class="col-sm-4"> -->
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Gender:</h1>
                                  <div class="form-control">
                                      <div class="row">
                                          <div class="col-6 d-flex align-items-center">
                                              <input checked="" id="gender_male" name="gender" required="" type="radio" value="0" />
                                              <label style = "color: rgb(5, 5, 5); font-size:20px;"><b>Male</b></label>
                                          </div>
                                          <div class="col-6 d-flex align-items-center">
                                              <input id="gender_female" name="gender" required="" type="radio" value="1" />
                                              <label style = "color: rgb(5, 5, 5); font-size:20px;"><b>Female</b></label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          <!-- </div> -->
                          <!-- <div class="col-sm-4">
                              <div> -->
                                  <!-- <h5>Body Fat*</h5>
                                  <div class="d-flex align-items-center">
                                      <input class="form-control text-end" name="bodyFat" required="" type="number" value="20" />
                                      <span class="btn ms-1 bg-warning">%</span>
                                  </div> -->
                              <!-- </div>
                          </div> -->
                          <!-- <div class="col-sm-6"> -->
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Height:</h1>
                                  <div class="d-flex align-items-center">
                                      <input  name="height" required="" type="number" />
                                      <span style = "color: rgb(0, 0, 0); font-size: 25px; font-family:verdana;"><b>cm</b></span>
                                  </div>
                              </div>
                          <!-- </div> -->
                          <!-- <div class="col-sm-6"> -->
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Weight:</h1>
                                  <div class="d-flex align-items-center">
                                      <input  name="weight" required="" type="number"  />
                                      <span style = "color: rgb(0, 0, 0); font-size: 25px; font-family:verdana;"><b>kg</b></span>
                                  </div>
                              </div>
                          </div> </div>
                          <div class="split right">
                                <div class="centered">
                            <div class="right">
                              <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Activity:</h1>
                              <select class="form-select" name="activity" required="">
                                  <option value="1">Basal Metabolic Rate (BMR)</option>
                                  <option value="1.2">Sedentary: little or no exercise</option>
                                  <option value="1.375">Light: exercise 1-3 times/week</option>
                                  <option selected="" value="1.465">Moderate: exercise 4-5 times/week</option>
                                  <option value="1.55">Active: daily exercise or intense exercise 3-4 times/week</option>
                                  <option value="1.725">Very Active: intense exercise 6-7 times/week</option>
                                  <option value="1.9">Extra Active: very intense exercise daily, or physical job</option>
                              </select>
                          </div>
                          <!-- <div class="col-sm-6"> -->
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size:20px; font-family:verdana;">Result Unit:</h1>
                                  <div class="form-control">
                                      <div class="row">
                                          <div class="col-6 d-flex align-items-center">
                                              <input checked="" id="unit_calories" name="unit" required="" type="radio" value="Calories" />
                                              <label style = "color: rgb(5, 5, 5); font-size:20px;"><b>Calories</b></label>
                                          </div>
                                          <div class="col-6 d-flex align-items-center">
                                              <input id="unit_kilo" name="unit" required="" type="radio" value="kilojoules" />
                                              <label style = "color: rgb(5, 5, 5); font-size:20px;" ><b>kilojoules</b></label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="col-sm-6">
                              <div>
                                  <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">BMR estimation formula:</h1>
                                  <div class="row g-3">
                                      <div class="col-sm-12 d-flex align-items-center">
                                          <input checked="" id="Mifflin_St_Jeor" name="formula" required="" type="radio" value="0" />
                                          <label style = "color: rgb(5, 5, 5); font-size:20px;"><b>Mifflin St Jeor</b></label>
                                      </div>
                                      <div class="col-sm-12 d-flex align-items-center">
                                          <input id="Revised_Harris_Benedict" name="formula" required="" type="radio" value="1" />
                                          <label style = "color: rgb(5, 5, 5); font-size:20px;"><b>Revised Harris-Benedict</b></label>
                                      </div><br><hr>
                                      <!-- <div class="col-sm-12 d-flex align-items-center">
                                          <input id="Katch_McArdle" name="formula" required="" type="radio" value="2" />
                                          <label class="ms-2">Katch-McArdle</label>
                                      </div> -->
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="ans_calculate"></div>
                  <div class="text-center mt-4 card-footer" action = ''>
                      <button class="test" onclick="calculateCalorie(this)" type="button">
                          <i class="fas fa-calculator me-3"></i>
                          <b>Calculate</b>
                      </button>
                  </div>
              </div>
  </div></div>
                  
              <?php
require 'config.php';

if(isset($_POST["submit"])){
  // $name = $_POST["calories"];
  $age = $_POST["age"];


  $query = "INSERT INTO calorieintake VALUES('', '$age')";
  mysqli_query($conn,$query);
 
}
// header("Location: welcome.php");
?>
<script>
function myFunction() {
    window.location.href="welcome.php";
  }
</script>
<div id="formContent1">
    <form class="" action="" method="post" autocomplete="off">
    <h1 style = "color: rgb(2, 104, 2); font-size:23 px; font-family:verdana;">Enter the calories and submit:</h1>
      <!-- <label for="">Calories</label> -->
      <!-- <input type="number" name="age" required value=".ans_calculate"> -->
      <div class="col-sm-4">
                              <div>
                                  <!-- <h1 style = "color: rgb(2, 104, 2); font-size: 20px; font-family:verdana;">Calories</h1> -->
                                  <input type="number" name="age" required value=".ans_calculate" style="margin-left:340px">
                              </div>
                          </div>
      
      <button  onClick="myFunction()" class="test"  type="submit" name="submit" style="margin-left:440px ">Submit</button>
    </form>
        
          
          </form>
      </div></div></div></div>




    <!-- <script>
    function calculateCalorie(this){
      location.replace("index09.html")
    }
    </script> -->
      </body>
      <script src="script1.js"></script>
      </html>
