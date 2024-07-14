<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Que 10</title>
    <style>
        body {
            background-color: #edf1f5;
        }

        p {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            color: #85757f;
            text-align: center;
            font-size: 35px;
            background-color: #d5d1defe;
            margin-right: 15%;
            margin-left: 15%;
        }
        p:hover{
            color: black;
            background-color: aquamarine;
        }
        .Question{
            height: 12vh;
            background-color: aquamarine;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media (max-width:920px){
            .Question{
                height: 8vh;
            }
        }
    </style>
</head>

<body>
<div class="Question">
        <h1>Write a CSS file and attached to any 3 html webpage.</h1>
    </div>
    <?php
    if (isset($_GET['q']) && $_GET['q'] == 2) {
        ?>
            <p>2<sup>nd</sup> page</p>
            <p>Keshav Rajpoot</p>
            <p>I like to play Video Games</p>
        <?php
    } else if (isset($_GET['q']) && $_GET['q'] == 3) {
        ?>
            <div>
                <p>3<sup>rd</sup> page</p>
                <p>Keshav Rajpoot</p>
                <p>My Home Town is Jabalpur!</p>
            </div>
        <?php
    } else {
        ?>
            <p>1<sup>st</sup> page</p>
            <p>Keshav Rajpoot</p>
            <p>I am a student of Computer Science and Engineering</p>

        <?php
    }

    ?>

</body>

</html>