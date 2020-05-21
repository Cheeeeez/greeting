<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dictionary</title>
    <link rel="stylesheet" href="dictionary-style.css">
    <script src="https://kit.fontawesome.com/8a4d4ec110.js" crossorigin="anonymous"></script>
    <style>
        #main {
            width: 800px;
            height: 200px;
            margin: auto;
            background-color: antiquewhite;
            text-align: center;
            font-size: 20px;
        }

        h1 {
            color: royalblue;
        }

        #result {
            color: darkorange;
            margin-top: 25px;
            font-size: 30px;
        }

        .container {
            overflow: hidden;
            white-space: nowrap;
            width: 300px;
            margin: auto;
        }

        .container input#input_box {
            border-radius: 5px;
            outline: none;
            height: 25px;
            width: 300px;
        }

        .container:hover button.icon, .container:active button.icon, .container:focus button.icon {
            outline: none;
            margin-left: -37px;
        }
    </style>
</head>
<body>
<div id="main">
    <div class="container">
        <form method="post">
            @csrf
            <h1>Dictionary</h1>
            <div class="input_area">
                <input type="search" name="keyword" id="input_box" placeholder="example:  mango...">
                <button type="submit" class="icon"><i class="fas fa-search"></i></button>
            </div>
            <div id="result"><?php if (isset($result)):?>
                {{$keyword}}: {{$result}}
                <?php endif;?>
            </div>
        </form>
    </div>
</div>
</body>
</html>
