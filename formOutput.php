<?php

$lentele = $_GET['lentele'];
$procentai = $_GET['procentai'];
$proc = $lentele
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Užduotys</title>
    <style>
           body {
            background-image: url('https://tailwindcss.com/_next/static/media/docs@tinypng.61f4d3334a6d245fc2297517c87ae044.png');
            background-repeat: no-repeat;
            background-size: cover;
        }
        .container {
            display: flex;
            flex-direction: column;
            max-width: 800px;
            margin: 30px auto;
            align-items: center;
            justify-content: center;
            
        }

        tr td {
          width: 30px;
          height: 30px;
            text-align: center;
            vertical-align: middle;
        }

        .header {
            background-color: lightgreen;
            padding: 0;
            margin: 0;
        }

        .btn {
            text-decoration: none;
            max-width: 200px;
            padding: 15px;
            background-color: red;
            color: white;
            border-radius: 50px;
            border: none;
            align-self: center;
        }
        img {
            margin: 0;
            padding: 0;
            width: 50px;
            height: 50px;
        }
        #img2 {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Užduočių lentelė</h1>
        <table border="1">
        
        <?php for ($x = 0; $x <=$lentele; $x++){ ?>
            <th class='header'><?=($x==0)? '<img src="https://www.dlf.pt/png/big/21/214310_png-files.png">' : $x ?></th>
         
      <?php  } ?>

      <?php for ($i = 1; $i <= $lentele; $i++) { ?>
               
                <tr>
                    <td class='header'><?= $i?></td>
                    <?php for ($y = 1; $y <= $lentele; $y++) { ?>
                        
                        <td><?=  (rand(0,100)<$procentai)?'<img id="img2" src="https://www.freeiconspng.com/thumbs/x-png/x-png-18.png">' : $i * $y ?></td>
                    <?php } ?>
                </tr>
                
            <?php } ?>
        </table>

        <br> <a class="btn" href="forma.php">Grįžti atgal</a>
    </div>

</body>

</html>