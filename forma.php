<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Užduočių lentelė</title>
    <style>
        body {
            background-image: url('https://tailwindcss.com/_next/static/media/docs@tinypng.61f4d3334a6d245fc2297517c87ae044.png');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            
            border: 2px solid black;
            box-shadow: 0px 1px 26px 22px rgba(0, 0, 0, 0.75);
            -webkit-box-shadow: 0px 1px 26px 22px rgba(0, 0, 0, 0.75);
            -moz-box-shadow: 0px 1px 26px 22px rgba(0, 0, 0, 0.75);
            border-radius: 30px;
            padding: 50px;
            display: flex;
            flex-direction: column;
            max-width: 800px;
            margin: 0 auto;
            margin-top: 100px;
            align-items: center;
            justify-content: center;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        .radio {
            padding: 50px;
        }

        .radioParent {
            display: flex;
            flex-direction: row;
        }

        button {
            width: 150px;
            padding: 20px;
            background-color: green;
            color: white;
            align-self: center;
            border-radius: 15px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Atsitiktinės užduočių lentelės generatorius</h1>
        <form action="formOutput.php" method="GET">
            <div class="radioParent">
                <div class="radio">
                    <p><b>Lentelės dydis:</b></p>
                    <div class="radioInputs">
                        <div>
                            <input type="radio" id="radio" name="lentele" value="12" required>
                            <label for="vyras">1 - 12</label>
                        </div>
                        <div>
                            <input type="radio" id="radio" name="lentele" value="15">
                            <label for="moteris">1 - 15</label>
                        </div>
                        <div>
                            <input type="radio" id="radio" name="lentele" value="20">
                            <label for="kita">1 - 20</label>
                        </div>
                    </div>
                </div>
                <div class="radio">
                    <p><b>Užduoties sunkumas procentais:</b></p>
                    <div class="radioInputs">
                        <div>
                            <input type="radio" id="radio" name="procentai" value="10" required>
                            10 %
                        </div>
                        <div>
                            <input type="radio" id="radio" name="procentai" value="30">
                            30 %
                        </div>
                        <div>
                            <input type="radio" id="radio" name="procentai" value="50">
                            50 %
                        </div>
                    </div>
                </div>
            </div>
            <button type="submit">Patvirtinti</button>
        </form>
    </div>

</body>

</html>