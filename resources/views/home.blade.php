<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Media Online</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #d4f7a2;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .signup-container {
            background-color: #88cc00;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #333;
        }

        h3 {
            color: #555;
        }

        p {
            color: #3d3d3d;
        }

        ul, ol {
            margin-top: 10px;
            margin-bottom: 20px;
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            color: #41b9f9;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <h1>Media Belajar Onlinee</h1>
    <h3>Sosial Media Developer</h3>
    <p>Belajar dan berbagi agar hidup menjadi lebih baik</p>
    <h3>Benefit Join di Media Online Rifa</h3>
    <ul>
        <li>Mendapatkan motivasi dari sesama para Developer</li>
        <li>Sharing Knowledge</li>   
        <li>Dibuat oleh calon web developer terbaik</li>
    </ul>
    <h3>Cara Bergabung ke Media Online</h3>
    <ol type="1">
        <li>Mengunjungi Website ini</li>
        <li>Mendaftarkan di <a href="{{ url('form') }}">Form Sign Up</a></li>  
        <li>Selesai</li>
    </ol>
</body>

</html>