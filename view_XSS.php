<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS</title>
    <style>
        img{
            height: 200px;
            width: 200px;
        }
        h1{
            color: red;
        }
        h1,p{
            text-align: center;
        }
    </style>
</head>
<body>
    <main style="margin: auto;">
        <div style="display: flex;
            justify-content: center;">
            <img src="https://static.vecteezy.com/system/resources/thumbnails/017/172/388/small_2x/warning-message-concept-represented-by-exclamation-mark-icon-exclamation-symbol-in-circle-png.png" alt="Panneau Attention">
        </div>
        <h1>Hacking détecter</h1>
        <p>Attention du XSS à été retrouver</p>
    </main>
</body>
</html>