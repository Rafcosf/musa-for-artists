<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Álbum</title>
    <style>
        body {
            background-color: #0a0a0a;
            color: #f5f5dc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 10px;
            background-color: #1a1a1a;
            border: 1px solid #444;
            border-radius: 10px;
            color: #f5f5dc;
            margin-bottom: 20px;
        }
        button {
            background-color: #ff0000;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #cc0000;
        }     background-color: #111111;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #ff0000;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
        
        h1 {
            color: #ff0000;
            text-align: center;
            margin-bottom: 25px;
        }
        label {
            display: block;
            margin-bottom: 8px;
        }
        input[type="text"],
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            background-color: #1a1a1a;
            border: 1px solid #444;
            border-radius: 10px;
            color: #f5f5dc;
            margin-bottom: 20px;
        }
        button {
            background-color: #ff0000;
            color: white;
            padding: 12px 24px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }
        button:hover {
            background-color: #cc0000;
        }
    </style>
</head>
<body>

<div class="container">
    <h1>Criar Álbum</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label>Nome do Álbum</label>
        <input type="text" name="nome" required>

        <label>Descrição</label>
        <textarea name="descricao" rows="4"></textarea>

        <label>Capa do Álbum</label>
        <input type="file" name="capa" accept="image/*">

        <button type="submit">Salvar Álbum</button>
    </form>
</div>

</body>
</html>
