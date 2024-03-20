<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <form>
            <h1>Register</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" required name="name" id="">
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="text" placeholder="Email" required name="email" id="">
                <i class='bx bxl-gmail'></i>
            </div>
            <div class="input-box">
                <input type="password" placeholder="password" name="password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Already Have Any Account? <a href="/">login</a></p>
            </div>
        </form>
    </div>
</body>

</html>
