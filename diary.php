<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome cdn css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Diary</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .div1 {
    width: 600px;
    height: 350px;
    padding: 10px 10px;
    position:relative;
    top: 80px;
    left: 40px;
    /* border: 1px solid rgb(41, 41, 43); */
    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
  }

.div2{
    width: 600px;
    height: 350px;
    padding: 10px 10px;
    position:relative;
    bottom: 650px ;
    left: 700px;
    
     /* border: 1px solid rgb(41, 41, 43);  */
}

.div3{
    width: 450px;
    height: 750px;
    padding: 10px 10px;
    position:relative;
    bottom: 650px ;
    left: 40px;
    -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
     /* border: 1px solid rgb(41, 41, 43);  */
}
body {
  overflow-y: scroll;
}
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 120%;
  height:30px;
  padding: 10px 10px;
  margin: 15px 10px;
  display: inline-block;
  border: 2px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: rgb(2, 104, 2);
  color: white;
  padding: 4px 1px;
  margin: .01rem 150px;
  border: none ;
  cursor: pointer;
  width: 30%;
}


button:hover {
  opacity: 0.8;
}

.submitbutton{
    background-color: rgb(2, 104, 2);
  color: white;
  padding: 12px 10px;
  margin: 1rem 15px;
  border: none ;
  cursor: pointer;
  width: 25%;
}
#myTextarea {
  width: 70%;
  height:30%;
  padding: 15px;
  border-radius: 10px;
  border: 3px solid #ccc;
  /* margin-bottom: 1px; */
  margin-left: 120px;
  -webkit-box-shadow: 0 10px 20px 0 rgba(0,0,0,0.3);
    -webkit-border-radius: 10px 10px 10px 10px;
}

.btn {
  margin-right: 100px;
  padding: 12px 10px;
  width :100px;
  margin-bottom: 10px;
}



/* Center the image and position the close button  */
.imgcontainer {
  text-align: center;
  margin: 2px 0 12px 0;
  position: relative;
  
}

.container {
  padding: 16px;
}

/* span.psw {
  float: right;
  padding-top: 16px;
} */

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 60%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

/* .close:hover,
.close:focus {
  color: red;
  cursor: pointer;
} */

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

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


/* body{
    background-color: rgb(174, 226, 139);
    color: white;
    font-family: "Poppins", sans-serif;
    min-height: 100vh;
} */

form {
    min-height: 10px;
    display: flex;
    justify-content: left;
    align-items: left;
}

form input{
  width:100px;
  
    padding: 1rem;
    padding-right: 17rem;
    font-size: 1rem;
    border: none;
    background: white;
    border-radius: .7rem;
} 
form button {
  margin: 3px;
    padding: 0.1rem;
    padding-right: 13rem;
    font-size: 1.3rem;
    border: none;
    background: white;
    border-radius: .7rem;
}

form button {
    color: rgb(52, 148, 8);
    background: white;
    cursor: pointer;
    transition: all 0.3 ease;
    margin-left: 0.4rem;
}

/* form button:hover {
    color: white;
    background: rgb(52, 148, 8);
} */

.fa-plus-circle {
    margin-top: 0.2rem;
    margin-left: -10px;
}

.todo-container {
    display: flex;
    justify-content: center;
    align-items: left;
    padding-right: 13rem;
}

.todo-list {
    min-width: 30%;
    list-style: none;
}

.todo {
    
    margin: 0.5rem;
    padding-left: 0.5rem;
    background: white;
    color: black;
    font-size: 1.1rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: 0.5s;
    border-radius: .7rem;
}

.todo li {
    flex: 1;
}

.trash-btn, 
.complete-btn {
    color: white;
    border: none;
    padding: .3rem;
    cursor: pointer;
    font-size: 1.5rem;
    
}

.complete-btn {
    background: rgb(52, 148, 8);
}

.trash-btn {
    border-top-right-radius: .7rem;
    border-bottom-right-radius: .7rem;
    background: rgb(171, 171, 171);
    margin-left:100px;
}

.todo-item {
    padding: rem .1rem;
}

.fa-trash, 
.fa-check-circle {
    pointer-events: none;
}

.completed {
    text-decoration: line-through;
    opacity: 0.5;
}

.slide {
    transform: translateX(10rem);
    opacity: 0;
}

select {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    outline: none;
    border: none;
}

.select {
    margin: 1rem;
    position: relative;
    overflow: hidden;
    border-radius: .7rem;
}
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap');

:root {
  --border-color: #144fc6;
  --fill-color: #6ab3f8;
}

h3 {
  font-weight: 400;
  margin: 10px 0;
}

.cup {
  background-color: #fff;
  border: 4px solid var(--border-color);
  color: var(--border-color);
  border-radius: 0 0 40px 40px;
  height: 230px;
  width: 110px;
  margin: 10px 150px;
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.cup.cup-small {
  height: 95px;
  width: 50px;
  border-radius: 0 0 15px 15px;
  background-color: rgba(255, 255, 255, 0.9);
  cursor: pointer;
  font-size: 14px;
  align-items: top;
  justify-content: center;
  text-align: center;
  margin: 5px;
  transition: 0.3s ease;
}

.cup.cup-small.full {
  background-color: var(--fill-color);
  color: #fff;
}

.cups {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
  width: 280px;
  margin: 10px 70px;
}

.remained {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  flex: 1;
  transition: 0.3s ease;
}

.remained span {
  font-size: 20px;
  font-weight: bold;
}

.remained small {
  font-size: 12px;
}

.percentage {
  background-color: var(--fill-color);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: bold;
  font-size: 30px;
  height: 0;
  transition: 0.3s ease;
}

.text {
  text-align: center;
  margin: 0 0 5px;
}
.header{
  margin:16px;
}

</style>
<body>
<header >
        <img src="logo_image-removebg-preview.png" alt="image" width="90" align = "left" >
        
      <div class="header" id="myHeader">
      <h1 style = "color: rgb(2, 104, 2); font-size: 45px; font-family:verdana;">
          FITNESS GURU
      </h1></div> </header>
        
          <nav class="navbar">
            <ul>
                <div class="navbar">
                <li><a href="welcome.php">Home</a>
                
                <li><a href="goal.php">Goals</a></li>
                <li><a href="exercise.php">Exercise</a></li>
                <li><a href="about">About</a></li>
            </div>
              </ul>
          </nav>

          
            <!-- (A) SEARCH FORM -->
    <form method="post" action="">
      <input type="text" name="search" placeholder="Search..." required>
      <input type="submit" value="Search">
    </form>
   
    
    
     
    <div class="left">
            <div class="div1">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Breakfast</h2> <hr>
                <!--Z <button onclick="document.getElementById('id01').style.display='block' ">Add Food</button><hr> -->
                <form method="post" action="">
        <input type="text" class="todo-input" name="search">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-circle fa-lg"></i>
        </button>
        
    </form>
    <img src="im1-removebg-preview.png" width="200px" align = "right">
    <div id="results"><?php
    // (B) PROCESS SEARCH WHEN FORM SUBMITTED
    if (isset($_POST["search"])) {
      // (B1) SEARCH FOR USERS
      require "3-search.php";

      // (B2) DISPLAY RESULTS
      if (count($results) > 0) { foreach ($results as $r) {
        printf("<div>%s - %s</div>", $r["name"], $r["email"]);
        
        
      }} else { echo "No results found"; }
    }
    
    ?></div>
    <div class="todo-container">
        <ul class="todo-list"></ul>
    </div>
             </div>  <br><br>
             <div class="div1">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Snacks</h2> <hr>
                <!-- <button onclick="document.getElementById('id01').style.display='block'">Add Food</button><hr> -->
                <form method="post" action="">
        <input type="text" class="todo-input">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-circle fa-lg"></i>
        </button>
        
    </form><img src="lunch.jpg" width="60px">
    <div class="todo-container">
        <ul class="todo-list"></ul>
    </div>
              </div>
             <div class="div2">
                <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Lunch</h2><hr>
                <!-- <button onclick="document.getElementById('id01').style.display='block'">Add Food</button><hr> -->
                <form method="post" action="">
        <input type="text" class="todo-input">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-circle fa-lg"></i>
        </button>
        
    </form>  <img src="snacks.jpg" width="60px">
    <div class="todo-container">
        <ul class="todo-list"></ul>
    </div>
              </div><br><br>
                <div class="div2">
                    <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Dinner</h2> <hr>
                    <!-- <button onclick="document.getElementById('id01').style.display='block'">Add Food</button><hr> -->
                    <form method="post" action="">
        <input type="text" class="todo-input">
        <button class="todo-button" type="submit">
            <i class="fas fa-plus-circle fa-lg"></i>
        </button>
        
    </form><img src="Dinner.jpg" width="60px">
    <div class="todo-container">
        <ul class="todo-list"></ul>
    </div>
                  </div> <br><br>
             <div class="div3">
                <!-- <h2 style="color: rgb(8, 6, 6); font-size: 25px;">Water Consumption</h2>  -->
                <!-- <button onclick="document.getElementById('id01').style.display='block' ">Add Food</button><hr> -->
                <h1 style="color: rgb(2, 104, 2); font-size: 25px;">Drink Water</h1><hr>
    <h3 style="color: rgb(2, 104, 2);">Goal: 3.7 Liters</h3>
    
    <div class="cup">
      <div class="remained" id="remained">
        <span id="liters"></span>
        <small>Remained</small>
      </div>
      <div class="percentage" id="percentage"></div>
    </div>
      <div class="cups" >
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
      <div class="cup cup-small">370 ml</div>
    </div>

     
   
    <p class="text">Select how many glasses of water that you have drank</p>
    <!-- <img src="glass.jpg" style="width:70px"> -->
  </div>
    

    </div>
             </div>
             <h3 style="padding:20px">Create your food Notes:</h3>
             <textarea id="myTextarea" rows="5"></textarea>
             <button class="btn"id="saveBtn" type="button" >Save</button>
             <button class="btn"id="editBtn" type="button">Edit</button>
             <div id="id01" class="modal">
               
               <!-- <form class="modal-content animate" action="diary.php" method="post">
                 <div class="imgcontainer">
                    <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
                   <img src="logo_image-removebg-preview.png" alt="image" width="90">
                   <h3>Add Food from database:</h3>
                 </div> -->
 
        
                     <!-- <form action="">
                       <input type="text" placeholder="Search.." name="search">
                       <button class = "submitbutton"type="submit">Submit</button>
                     </form> 
                    </div>
              -->
                 <!-- <div class="container" style="background-color:#f1f1f1">
                   <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
                   <span class="psw">Forgot <a href="#">password?</a></span>
                 </div> -->
               <!-- </form> -->
             <!-- </div> -->
             
             <script>
             // Get the modal
             var modal = document.getElementById('id01');
             
             // When the user clicks anywhere outside of the modal, close it
             window.onclick = function(event) {
                 if (event.target == modal) {
                     modal.style.display = "none";
                 }
             }
             </script>   

<script src="./script22.js"></script>
<script>const smallCups = document.querySelectorAll('.cup-small')
        const liters = document.getElementById('liters')
        const percentage = document.getElementById('percentage')
        const remained = document.getElementById('remained')
        
        updateBigCup()
        
        smallCups.forEach((cup, idx) => {
            cup.addEventListener('click', () => highlightCups(idx))
        })
        
        function highlightCups(idx) {
            if (idx===7 && smallCups[idx].classList.contains("full")) idx--;
            else if(smallCups[idx].classList.contains('full') && !smallCups[idx].nextElementSibling.classList.contains('full')) {
                idx--
            }
        
            smallCups.forEach((cup, idx2) => {
                if(idx2 <= idx) {
                    cup.classList.add('full')
                } else {
                    cup.classList.remove('full')
                }
            })
        
            updateBigCup()
        }
        
        function updateBigCup() {
            const fullCups = document.querySelectorAll('.cup-small.full').length
            const totalCups = smallCups.length
        
            if(fullCups === 0) {
                percentage.style.visibility = 'hidden'
                percentage.style.height = 0
            } else {
                percentage.style.visibility = 'visible'
                percentage.style.height = `${fullCups / totalCups * 330}px`
                percentage.innerText = `${fullCups / totalCups * 100}%`
            }
        
            if(fullCups === totalCups) {  
                remained.style.visibility = 'hidden'
                remained.style.height = 0
            } else {
                remained.style.visibility = 'visible'
                liters.innerText = `${3.7 - (370 * fullCups / 1000)}L`
            }
        }</script>
          
</body>
</html>