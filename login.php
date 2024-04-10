<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de login</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background: #3f0575
        }
        div{
            background-color: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            padding: 80px;
            border-radius: 15px;
            color: #fff;
        }
        input{
            padding: 15px;
            border: none;
            outline: none;
            font-size: 15px;
        }
        .inputSubmit{ 
            background-color: #4B0082;
            border: none;
            padding: 15px;
            width: 100%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        
            
        }
        .inputSubmit:hover{
            background-color: #3f0575;
            cursor: pointer;
        }

        .button{
            background-color: #cc0210;
            border: none;
            padding: 15px;
            width: 5%;
            border-radius: 10px;
            color: white;
            font-size: 15px;
        }

        .button:hover{
            background-color: #8B0000;
            cursor: pointer;
        }

    </style>
</head>
<body>
    <a href="home.php"><input class="button" type="button" value="Voltar" value="Enviar"></a>  
    <div>
        <h1>Login</h1>
        <form action="index.html" method="POST">
            <input type="text" name="email" placeholder="Email" required>
            <br><br>
            <input type="password" name="senha" placeholder="Senha" required>
            <br><br>
            <input class="inputSubmit" type="submit" name="submit" value="Enviar" required>
        </form>
    </div>
</body>
</html>