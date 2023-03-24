<?php

session_start();

if (!isset($_SESSION['currentStudent'])) {
    header('location: ./..');
    exit;
}

//pages required
require('./../requires/database-Config.php');


            $stmt = $dbconnect->prepare('SELECT email, profilepic, firstname, secondname, lastname, gender, phonenumber FROM userstudents WHERE id = ?');
            $stmt->bind_param('i', $_SESSION['id']);
            $stmt->execute();
            $stmt->bind_result($email, $profilepic, $firstname, $secondname, $lastname, $gender, $phonenumber);
            $stmt->fetch();
            $stmt->close();

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Jrey Library | Student Update Profile</title>

    <script type="text/javascript">
    function openNav() {
        document.getElementById("mySidenav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("mySidenav").style.width ="0";
    }
</script>

<style type="text/css">

            .prof {
                width: 100px; 
                height: 100px; 
                border-radius: 100%;
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

            #btn {
                font-size: 37px;
                height: 75px;
                font-weight: bolder;
            }
            .span {
            font-size: 27px;
            font-weight: bolder;
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

            .form-control {
            font-size: 50px;
            font-weight: bold;
            }

            #g {
                width: 34px;
                border-color: red;
                height: 34px;
            }

            .l {
            font-weight: bolder;
            color: red;
            text-shadow: 1px 1px 1px blue;
            font-size: 35px;
            }

            .prof {
                width: 200px; 
                height: 200px; 
                border-radius: 100%;
            }


            .link2{
            color: darkgreen;
            text-decoration : none;
            font-weight: bold;
            font-size: 35px;
            }

            .radio {
                border-radius: 40px;
                width: 30px;
                height: 30px;
            }
            #text {
                font-size: 35px;
                font-weight: bold;
                color: darkred;
            }
        }
    </style>

    <script type="text/javascript">
        function sub() {
            var firstname = document.profile.firstname.value;
            var lastname = document.profile.lastname.value;
            var gender = document.profile.gender.value;
            var email = document.profile.email.value;
            var phonenumber = document.profile.phonenumber.value;

            if (firstname == "") {
                alert('First Name must be filled');
                return false;
            } else if (lastname == "") {
                alert('Last Name must be filled');
                return false;
            } else if (gender == "") {
                alert('Choose your gender');
                return false;
            } else if (email == "") {
                alert('Email address must be filled');
                return false;
            } else if (phonenumber == "") {
                alert('Phone number must be filled');
                return false;
            }
        }
    </script>

    <link rel="stylesheet" type="text/css" href="./..css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="./..css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./..css/library-jrey.css">

    <!-- js bootstrap external links-->
    <script type="text/javascript" src="../js/bootstrap.js"></script>

    <!--Favicon links-->
    <link rel="shortcut icon" href="./../../../favicon.ico" type="image/x-icon">
    <link rel="icon" href="./../../../favicon.ico" type="image/x-icon">

</head>
<body style="background-color: ;">

    <div><?php include('../includes/header-all.php'); ?></div>

    <div><?php require ('./a.php');?></div>

    <div id="main">
        
       <form action="update-prof-server.php" method="POST" class="" name="profile" onsubmit="return sub()">
        
        <center><h4 class="display-4">Profile Update.</h4></center><br>

         <div class="container">
            <p><a href="update-profile-pic.php"><img src="./userProfile/<?=$profilepic?>" alt="Update My Photo" class="prof"></a></p>
            
            <p><span class="span">Name</span></p>
                    <p>
                        <input type="text" name="firstname" value="<?=$firstname?>" placeholder="First Name" id="text" class="form-control text">
                    </p>
                    
                    <p>
                        <input type="text" name="secondname" value="<?=$secondname?>" placeholder="Second Name (Optional)" id="text" class="form-control text">
                    </p>
                    
                    <p>
                        <input type="text" name="lastname" value="<?=$lastname?>" placeholder="Last Name" id="text" class="form-control text">
                    </p>
            
            <p><span class="span">Gender</span></p>
            
            <p>
                <input type="radio" name="gender" value="Male" id="g" class="form-check-input radio">
                <span class="span">&nbsp;Male</span>&nbsp;&nbsp;&nbsp;
                <input type="radio" name="gender" value="Female" id="g" class="form-check-input radio"> 
                <span class="span">&nbsp;Female</span>

            </p>

            <p><span class="span">Email</span>
                &nbsp;&nbsp;<input type="text" name="email" value="<?=$email?>" placeholder="example@mail.com" id="text" class="form-control text"></b></p>

            <p><span class="span">Phone Number</span>
                <input type="text" name="phonenumber" value="<?=$phonenumber?>" placeholder="+254 " id="text" class="form-control text"></p>

                <p><input type="submit" name="" id="btn" value="Update Profile" class="btn btn-primary" style="width: 100%;"></p>

        </div>    
</form>
        </div>
    </div>
    </center>
    </div>

    <div><?php include('../includes/footer-all.php'); ?></div>

</body>
</html>