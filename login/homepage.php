<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Design Shop</title>
    <link rel="stylesheet" href="cssstyle.css">
    <style>
        body {
            font-family: 'Arial', sans-serif;
            font-size: 16px; 
            line-height: 1.6; 
            animation: fadeIn 2s ease-in-out;
        }

       
        h1 {
            font-family: 'Georgia', serif;
            font-size: 2.5rem; 
            color: #f11212;
            animation: slideInLeft 1s ease-out;
        }

        h2 {
            font-family: 'Verdana', sans-serif;
            font-size: 1.8rem;
            color: #df7e7e;
            animation: slideInRight 1s ease-out;
        }

        h3 {
            font-family: 'Tahoma', sans-serif;
            font-size: 1.6rem; 
            color: #b46969; 
            font-weight: bold; 
            animation: fadeIn 2s ease-in-out;
        }

      
        header {
            background: #b4cd13;
            color: #160505;
            padding: 10px 0;
            text-align: center;
            animation: fadeIn 3s ease-in-out;
        }

      
        #hero {
            padding: 20px;
            text-align: center;
            animation: slideInUp 2s ease-out;
        }

        #hero h2 {
            margin-bottom: 20px;
        }

        
        button {
            padding: 10px 20px;
            background-color: #f11212;
            color: white;
            border: none;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        button:hover {
            transform: scale(1.1);
        }

    
        #features {
            display: flex;
            justify-content: space-around;
            padding: 20px 0;
            animation: fadeIn 2s ease-in-out;
        }

        .feature-box {
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
            transition: transform 0.3s ease;
        }

        .feature-box:hover {
            transform: translateY(-10px);
        }

     
        footer {
            background: #b4cd13;
            color: #160505;
            text-align: left;
            padding: 10px 0;
            animation: fadeIn 2s ease-in-out;
        }

        footer nav ul {
            display: flex;
            list-style: none;
            padding: 0;
        }

        footer nav ul li {
            margin: 0 15px;
        }

        footer nav ul li a {
            color: #160505;
            text-decoration: none;
        }

        footer nav ul li a:hover {
            color: #f11212;
        }

      
        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        form label {
            display: block;
            margin: 10px 0 5px;
        }

        form input, form textarea, form button {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
        }  

       
        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }

        @keyframes slideInLeft {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(0); }
        }

        @keyframes slideInRight {
            0% { transform: translateX(100%); }
            100% { transform: translateX(0); }
        }

        @keyframes slideInUp {
            0% { transform: translateY(50px); opacity: 0; }
            100% { transform: translateY(0); opacity: 1; }
        }
    </style>
</head>
<body>
    
    <div style="text-align:center; padding:15%;">
      <p  style="font-size:50px; font-weight:bold;">
       Hello  <?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
       :)
      </p>
      <a href="logout.php">Logout</a>
    </div>
</body>
</html>