<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Conta</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: #000000;
            padding: 30px;
        }

        .container {
            max-width: 600px;
            margin: auto;
            background: #fff2bc;
            padding: 30px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            border-radius: 8px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form label {
            display: block;
            margin-bottom: 5px;
            margin-top: 15px;
            color: #555;
            font-weight: 600;
        }

        form input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        .btn {
            margin-top: 20px;
            background: #D34746;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        .btn:hover {
            background: #45a049;
        }

        .back-link {
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #666;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Conta</h2>

        <form method="POST">
            @csrf
            @method('PUT')

            <label for="name">Nome</label>
            <input type="text" name="name" id="name" value="{{ old('name', auth()->user()->name) }}" required>

            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" value="{{ old('email', auth()->user()->email) }}" required>

            <label for="password">Nova Senha (opcional)</label>
            <input type="password" name="password" id="password">

            <label for="password_confirmation">Confirmar Senha</label>
            <input type="password" name="password_confirmation" id="password_confirmation">

            <button type="submit" class="btn">Salvar Alterações</button>
        </form>

        <div class="back-link">
            <a href="{{ route('dashboard') }}">← Voltar para o painel</a>
        </div>
    </div>
</body>
</html>
