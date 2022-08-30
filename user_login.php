<?php
     session_start();
   $db = mysqli_connect("localhost","root","","telecommunication_and_management_system");
   if(!$db)
   {
   	die ("database not connected".mysqli_connect_error($db));
   }
    if(isset($_POST['submit']))
  {
     $user_email=$_POST['email'];
     $user_password=$_POST['password'];
     $sql="SELECT * FROM user WHERE EMAIL='$user_email' AND PASSWORD='$user_password' ";

     $result = mysqli_query($db,$sql);
     $r= mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result)==1) {
      $_SESSION['name']=$r['NAME'];
   }
     else
     {
      echo "problem".mysqli_error($db);
     }
  }
?>



<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="description"
        content="MegaPhone, widely abbreviated as MP, will be the leading telecommunications service provider in Bangladesh,">
    <meta name="keywords" content="MegaPhone, MobileOperator">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>MegaPhone - A mobile operator</title>

    <style>
        * {
            padding: 0;
            margin: 0;
            text-decoration: none;
            list-style: none;
            box-sizing: border-box;
        }

        /* CSS Reset */

        /* HTML Body */

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: montserrat;
        }

        /* HTML Body */


        /* Navigation Bar Start */

        header {
            position: sticky;
            top: 0;
            z-index: 100;
        }

        nav {
            background: black;
            height: 80px;
            width: 100%;
        }

        label.logo {
            color: white;
            font-size: 35px;
            line-height: 80px;
            padding: 0 100px;
            font-weight: bold;
        }

        nav ul {
            float: right;
            margin-right: 20px;
        }

        nav ul li {
            display: inline-block;
            line-height: 80px;
            margin: 0 5px;
        }

        nav ul li a {
            color: white;
            font-size: 17px;
            padding: 7px 13px;
            border-radius: 3px;
            text-transform: uppercase;
        }

        a.active,
        a:hover {
            background: #1b9bff;
            transition: 0.5s;
        }

        .user {
            background-color: rgb(151, 151, 241);
        }

        .user p {
            text-align: center;
            padding: 30px 0;
            font-size: 30px;
            color: white;
            font-weight: 600;
        }

    

        .service {
            background: rgba(126, 53, 126, 0.863);
            width: 100%;
            padding: 1px 0px;
        }

        .title h2 {
            color: white;
            font-size: 25px;
            width: 1130px;
            margin: 24px auto;
            text-align: center;
        }

        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 400px;
        }

        .card {
            height: 250px;
            width: 335px;
            padding: 20px 35px;
            background: #191919;
            border-radius: 20px;
            margin: 15px;
            position: relative;
            overflow: hidden;
            text-align: center;
        }

        .card i {
            font-size: 50px;
            display: block;
            text-align: center;
            margin: 25px 0px;
            color: #f9004d;

        }

        h5 {
            color: white;
            font-size: 23px;
            margin-bottom: 15px;
        }

        .pra p {
            color: #fcfc;
            font-size: 16px;
            line-height: 27px;
            margin-bottom: 25px;
        }

        .card .button {
            background-color: #f9004d;
            color: white;
            text-decoration: none;
            border: 2px solid transparent;
            font-weight: bold;
            padding: 9px 22px;
            border-radius: 30px;
            transition: .4s;
        }

        .card .button:hover {
            background-color: transparent;
            border: 2px solid #f9004d;
            cursor: pointer;
        }

        #contact {
    padding: 5px 0;
}

.contact-section {
    background: url(bg.png) no-repeat center;
    background-size: cover;
    padding: 40px 0;
    background: url(2.jpg);
    font-family: "montserrat", sans-serif;
}

.contact-section h1 {
    text-align: center;
    color: whitesmoke;
    font-size: 60px;
}

.border {
    width: 100px;
    height: 10px;
    background: #34495e;
    margin: 40px auto;
}

.contact-form {
    max-width: 600px;
    margin: auto;
    padding: 0 10px;
    overflow: hidden;
}

.contact-form-text {
    display: block;
    width: 100%;
    box-sizing: border-box;
    margin: 16px 0;
    border: 0;
    background: #111;
    padding: 20px 40px;
    outline: none;
    color: whitesmoke;
    transition: 0.5s;
}

textarea.contact-form-text {
    resize: none;
    height: 120px;
}

.contact-form-btn {
    float: right;
    border: 0;
    background: #34495e;
    color: whitesmoke;
    padding: 12px 50px;
    border-radius: 20px;
    cursor: pointer;
    transition: 0.5s;
}

.contact-form-btn:hover {
    background: #2980b9;
}

    </style>

</head>


<body>
    <!-- Navigation Bar Start -->
    <header>
        <nav>
            <label class="logo">MegaPhone</label>
            <ul>
                <li><a class="active" href="index.html">Log Out</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <div class="user">
            <P> Welcome
                <?php echo ($_SESSION['name']);?>
            </P>
        </div>


        <section id="service">
            <div class="service">
                <div class="title">
                    <h2>Check This Out</h2>
                </div>

                <div class="box">
                    <div class="card">
                        <i class="fas fa-wifi"></i>
                        <h5>Buy Packs</h5>
                        <div class="pra">
                            <p> Click here buy your necessary packs</p>

                            <p style="text-align: center;">
                                <a class="button" href="CartBody.php">Buy</a>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <i class="far fa-clock"></i>
                        <h5>Recharge Account</h5>
                        <div class="pra">
                            <p>Recharge through online banking</p>

                            <p style="text-align: center;">
                                <a class="button" href="#">Recharge</a>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <i class="far fa-comment"></i>
                        <h5>Contact Us</h5>
                        <div class="pra">
                            <p>Contact us for updating information</p>

                            <p style="text-align: center;">
                                <a class="button" href="#user_contact">Update</a>
                            </p>
                        </div>
                    </div>

                    <div class="card">
                        <i class="far fa-clock"></i>
                        <h5>Payment History</h5>
                        <div class="pra">
                            <p>Check payment history</p>
                            <p style="text-align: center;">
                                <a class="button" href="#">Check</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="user_contact">
            <div class="contact-section">

                <h1>Contact Us</h1>
                <div class="border"></div>
                <form class="contact-form" action="feedback.php" method="POST" autocomplete="off">
                    <input type="text"id="name" name="name" class="contact-form-text" placeholder="Your name">
                    <input type="email" id="email" name="email" class="contact-form-text" placeholder="Your email">
                    <input type="text" id="text" name ="text" textarea  class="contact-form-text" placeholder="Your message"></textarea>
                    <input type="submit" name="submit" class="contact-form-btn" value="Send">
                </form>
            </div>
        </section>
        
    </main>
</body>

</html>

</body>

</html>
