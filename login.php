<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>
    <div class="login">
        <div class="login-container">
            <h1>Form Login <i class="fa-solid fa-circle-user"></i></h1>
            <form action="hasil.php" method="post">
                <div>
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" placeholder="Masukan nama" required>
                </div>
                <button type="submit" name="login">Login</button>
            </form>
        </div>
        <!-- setengah gambar -->
        <div class="image-half">
        </div>
    </div>
</body>
</html>
