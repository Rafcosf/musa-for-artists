<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Álbum</title>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #121212;
            color: #f5f5dc;
        }

        .album-container {
            max-width: 800px;
            margin: 50px auto;
            background-color: #1e1e1e;
            border-radius: 12px;
            padding: 40px;
            box-shadow: 0 0 20px rgba(192, 57, 43, 0.3);
        }

        .album-header {
            border-bottom: 2px solid #c0392b;
            margin-bottom: 30px;
            padding-bottom: 20px;
        }

        .album-title {
            font-size: 2.5em;
            color: #f5f5dc;
        }

        .album-artist {
            color: #ccc;
            margin-top: 5px;
            font-style: italic;
        }

        .tracklist {
            list-style: none;
            padding: 0;
        }

        .track {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #2a2a2a;
            padding: 15px 20px;
            margin-bottom: 10px;
            border-left: 5px solid #c0392b;
            border-radius: 6px;
            transition: background-color 0.2s;
        }

        .track:hover {
            background-color: #333;
        }

        .track-name {
            font-weight: 500;
        }

        .track-duration {
            color: #c0392b;
            font-weight: bold;
        }
    </style>
</head>
<body>

    <div class="album-container">
        <div class="album-header">
            <div class="album-title">Cowboy Carter</div>
            <div class="album-artist">beyoncé</div>
        </div>

        <ul class="tracklist">
            <li class="track">
                <span class="track-name">1. Ameriican Requiem</span>
                <span class="track-duration">1:22</span>
            </li>
            <li class="track">
                <span class="track-name">2. Blackbird</span>
                <span class="track-duration">3:47</span>
            </li>
            <li class="track">
                <span class="track-name">3. Amen</span>
                <span class="track-duration">4:15</span>
            </li>
        </ul>
    </div>

</body>
</html>

