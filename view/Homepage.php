<?php 
session_start();
include("sendinfo.php")

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="../css/homestyle.css"/>
<title>
MindSync Homepage
</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo">
            <h5><span class="fas fa-brain"></span>MINDSYNC</h5>
        </div>
        <ul class="menu">
            <li class="active"><a href="#" >
                <i class="fas fa-tachometer-alt"></i>
                <span>Dashboard</span>
             </a>
            </li>
            <li><a href="ReadingPage.html">
                <i class="fas fa-book-open-reader"></i>
                <span>READING</span>
             </a>
            </li>
            <li><a href="MemoryMainPage.html">
                <i class="fas fa-puzzle-piece"></i>
                <span>MEMORY</span>
             </a>
            </li>
            <li><a href="#">
                <i class="fas fa-cog"></i>
                <span>Settings</span>
             </a>
            </li>
            <li class="logout"><a href="Login Page.php">
                <i class="fas fa-sign-out-alt"></i>
                <span>Logout</span>
             </a>
            </li>
        </ul>
    </div>

    <div class="main--content">
        <div class="header--wrapper">
            <div class="header--title">
                <span>Welcome
                </span>
                <h2><?php 
                 if(isset($_SESSION['registeremail'])){
                  $registeremail=$_SESSION['registeremail'];
                  $query=mysqli_query($conn,"SELECT register.* From register WHERE register.registeremail='$registeremail'");
                  while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'].' '.$row['lastName'];
                }
                 }
                ?></h2>
            </div>
            <div class="user--info">
                <a href="MemoryMainPage.html">
                    <i class="fas fa-envelope"></i>
                 </a>
                <img src="../images/fatheradminprofile.jpg" alt="Dad profile">
            </div>
        </div>
    

        <div class="main"></div>
<div class="statsContainer">
    <div class="statistics">
        <div class="stat-box Memory Stats" onclick="redirectToMemoryPage('Memory Stats')">Memory Stats: <span id="Memory Stats-store">Date Game Last Score: 12</span>  
            </div>
        <div class="stat-box Reading Stats" onclick="redirectToReadingPage('Reading Stats')"> Reading Last Score: 4<span id="quizScore"></span>
            
        </div>
    </div>
</div>


    <script src="../js/homescript.js"></script>
    <script src="../js/QuizScript.js"></script>
    <script src="../js/DateGameScript.js"></script>













</body>
</html>
