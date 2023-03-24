<?php

session_start();

if (!isset($_SESSION['$sessionkey'])) {
    header('location: ./../');
    exit;
}

include 'databaseConfig.php';

            $stmt = $con->prepare('SELECT email, firstname, lastname, gender, phonenumber FROM userstudents WHERE id = ?');
            $stmt->bind_param('i', $_SESSION['id']);
            $stmt->execute();
            $stmt->bind_result($email, $firstname, $lastname, $gender, $phonenumber);
            $stmt->fetch();
            $stmt->close();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jrey Library | Students' Dashboard</title>

    <script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width ="0";
    }
</script>

<style type="text/css">

.avatar {
                border-radius: 50%;
                height: 96px;
                width: 100px;
            }
            .body-profile {
                background-color: lightyellow;
            }
            .button-link {
                border-radius: 14px;
                background-color: lightgrey;
            }
        
        .l {
            font-weight: bolder;
            color: red;
            text-shadow: 1px 1px 1px blue;
            font-size: 23px;
        }
        .details {
            font-size: 23px;
            text-shadow: 2px 2px 2px white;
            color: black;
        }
        .details2 {
            font-size : 17px;
            text-shadow: 1px 1px 1px white;
            font-weight: bold;
        }
        .div-profile {
            float : left;
            width : 60%;
            background-color: #fef9f8;
            text-align: left;
            height: 355px;
        }
        .div-2 {
            float: right;
            width: 35%;
            height: 355px;
            background-color: cream;
            text-align: center;
        }
        .fieldset {
            text-align: center;
            background-color: white;
        }
        .fieldset2 {
            height: 335px;
        }
        .h4 {
            font-size: 35px;
            font-weight: bolder;
            text-decoration: underline;
            font-family: courier;
            color: black;
            text-shadow: 3px 3px 2px red;
        }
        .link {
            text-decoration : none;
            font-weight: bold;
        }

        .link2 {
            text-decoration : none;
            font-weight: bold;
            font-size: 20px;
        }
        .span-name {
            color: hotpink;
            text-shadow: 1px 1px 1px blue;
        }
        
        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 1;
            top: 0;
            left: 0;
            background-color: #aaaa55;
            overflow-x: hidden;
            padding-top: 60px;
            transition: 0.8s;
        }

        .sidenav a {
            padding: 8px 8px 8px 32px;
            text-decoration: none;
            font-size: 25px;
            color: #111;
            font-weight: bold;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .spa:hover {
            cursor: pointer;
            background-color: ;
        }

        .spa {
            width: 5%;
        }

        .di {
            background-color: black;
            width: 50px;
            margin-left: 10px;
            height: 8px;
            margin-top: 7px;
        }

        #main {
            transition: margin-left .5s;
            padding: 20px;
        }


        @media screen and (max-height:  450px) {
            .sidenav {
                padding-top: 15px;
            }
            .sidenav a {
                font-size: 18px;
            }
        }

        @media(max-device-width: 480px) {
            .details {
            font-size: 35px;
            text-shadow: 2px 2px 2px white;
            color: black;
        }
            .details2 {
            font-size : 35px;
            text-shadow: 1px 1px 1px white;
            font-weight: bold;
        }

            .div-profile {
            font-size: 35px;
            float : left;
            width : 70%;
            background-color: #fef9f8;
            text-align: left;
            }

            .div-2 {
            margin: 0 auto;
            margin-top: 400px;
            width: 98%;
            background-color: cream;
            text-align: center;
        }

            .fieldset {
            text-align: center;
            background-color: white;
            height: 700px;
        }

            .fieldset2 {
                height: 500px;
                margin: 0 auto;
                background-color: white;
                width: 95%;
        }

            .h4 {
            font-size: 45px;
            font-weight: bolder;
            text-decoration: underline;
            font-family: courier;
            color: black;
            text-shadow: 3px 3px 2px red;
        }

            .l {
            font-weight: bolder;
            color: red;
            text-shadow: 1px 1px 1px blue;
            font-size: 35px;
        }

            .link2{
            color: darkgreen;
            text-decoration : none;
            font-weight: bold;
            font-size: 35px;
            }
        }
    </style>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/jrey-library.css">

    <!-- js bootstrap external links-->
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <!--Favicon links-->
    <link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

</head>
<body style="background-color: ;">

    <center><h2 class="display-1">MASENO CORRECTION CENTRE</h2></center>
    <hr>

    <div id="mySidenav" class="sidenav">
        <div class="list-group">
        <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
        <li class="list-group-item"><a href="dashboard.php">
        <img src="icons/speedometer.svg">&nbsp;&nbsp;Dashboard</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Number of Inmates</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Transferred Inmates</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Released Inmates</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Visited Inmates</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Report a Problem</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;Prison Rules and Regulations</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/person-fill.svg">&nbsp;&nbsp;My Profile</a></li>
        <li class="list-group-item"><a href="#">
            <img src="icons/share-fill.svg">&nbsp;&nbsp;Share</a></li>
        <li class="list-group-item"><a href="log-Out.php">
            <img src="icons/box-arrow-up-right.svg">&nbsp;&nbsp;Log Out</a></li>
        </div>
            
        <br><hr><p style="text-align: center;">
            <img src="./../../../icons/facebook.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="./../../../icons/instagram.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="./../../../icons/twitter.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="./../../../icons/snapchat.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="./../../../icons/whatsapp.svg">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </p><hr><br>
    </div>

    <div onclick="openNav()" class="spa">
        <div class="di"></div>
        <div class="di"></div>
        <div class="di"></div>
    </div>

    <div id="main">
        
       <form action="update_profile.php" method="POST" class="">
        <fieldset class="fieldset"><legend><h4 class="display-4">Profile Update.</h4></legend>

         <div class="container">
            <p><img src="avatar.png" class="avatar"></p>
            
            <p><label class="l">Name:</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" name="firstname" value="<?=$firstname?>" class="form-control">
                &nbsp;&nbsp;<input type="text" name="lastname" value="<?=$lastname?>" class="form-control"></p>
            
            <p><label class="l">Gender:</label>
                &nbsp;&nbsp;<input type="text" name="gender" value="<?=$gender?>" class="form-control"></b></p>

            <p><label class="l">Phone Number:</label>&nbsp;&nbsp;
                <input type="text" name="phonenumber" value="<?=$phonenumber?>" class="form-control"></p>

                <p><input type="submit" name="" value="Update Profile" class="btn btn-primary" style="width: 100%;"></p>

        </div>    
</fieldset>
</form>
        </div>
</fieldset>
    </div>
    </center>
    </div>

</body>
</html>