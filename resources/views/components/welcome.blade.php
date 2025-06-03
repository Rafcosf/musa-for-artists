<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            width: 100vw;
            height: 100vh;
            display: flex;
            color: #D44747;
            margin: 0;
        }

        a {
            text-decoration: none;
            color: white;
            font-weight: bold;
        }

        h1 {
            font-family: 'Arial';
            font-weight: bold;
            font-size: 100px;
        }

        .div1 {
            width: 50%;
            height: inherit;
            background-image: url();
        }

        .div2 {
            width: 50%;
            height: inherit;
            background-color: #FFECC0;
        }

        .div3 {
            width: 100%;
            display: flex;
            justify-content: center;
            gap: 40px;

        }

        .register-btn {
            border: none;
            width: 150px;
            height: 50px;
            ;
            background-color: #D44747;
            color: white;
            border-radius: 10px;
        }
    </style>
</head>

<body>
    <div class="div1"></div>
    <div class="div2">
        <div style="display: flex; justify-content: center; align-items: center; height: 20%;"><img
                src="public\assets\musa_logo.png" alt="logo_musa">
        </div>
        <div>
            <h1>Para artistas de <p style="background-color: #D44747;color:white;margin:0; width: 60%;">qualidade</p>
            </h1>
        </div>
        <div class="div3">
            <a href="{{route('register')}}" class="register-btn  ">
                Cadastrar novo usuário</a>

            <a href="{{route('login')}}" class=" register-btn">Login</a>
        </div>

    </div>
    </div>
</body>

</html>