<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #3f0575;
            text-align: center;
            color: white;
        }
        .box{
            position: absolute;
            top: 67%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 10px;
        }
        a{
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-color: #3f0575;
            border-radius: 10px;
            padding: 10px;
        }
        a:hover{
            background-color: #3f0575;
        }

        .img{
            padding: 15px;
            width: 20%;
            border-radius: 10px;
            font-size: 15px;
        }
    </style>
</head>
<body>
    <br>
    <h1>LANCHONET</h1>
    <img src="assets/img/logos/logo.png" alt="" class="img">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2>Logue ou Faça um cadastro para acessar a LanchoNet</h2>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>
</html>