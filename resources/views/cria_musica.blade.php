<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Música</title>
    <style>
        body {
            background-color: #0a0a0a;
            color: #f5f5dc;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            background-color: #111111;
            padding: 30px;
            border-radius: 20px;
            border: 2px solid #ff0000;
            box-shadow: 0 0 10px rgba(255, 0, 0, 0.3);
        }
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
        select,
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
    <h1>Adicionar Música</h1>
    <form action="#" method="POST" enctype="multipart/form-data">
        <label>Título da Música</label>
        <input type="text" name="titulo" required>

        <label>Selecionar Álbum</label>
        <select name="album_id" required>
            <option value="">Selecione</option>
            <option value="1">Álbum 1</option>
            <option value="2">Álbum 2</option>
            <option value="3">Álbum 3</option>
        </select>

        <label>Letra da Música</label>
        <textarea name="letra" rows="4"></textarea>

        <label>Arquivo de Áudio</label>
        <input type="file" name="audio" accept="audio/*" required>

        <button type="submit">Salvar Música</button>
    </form>
</div>

</body>
</html>
