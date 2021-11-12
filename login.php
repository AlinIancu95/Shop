<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>eMAG.ro - Libertate in fiecare zi</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="mainDiv">
    <div class="boxCenter">
        <div class="boxLogo">
            <a href="index.php">
                <img src="images/logo.png" alt="logo">
            </a>
        </div>
        <div class="boxPanel">
            <div class="panelHeader">
                <h1>
                    Salut!
                </h1>
            </div>
            <div class="panelBody">
                <form action="processLogin.php" method="post">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter Email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Password">
                    </div>

                    <div class="formBtn">
                        <button type="submit" class="formButtonLogin btn btn-primary">Login</button>
                    </div>
                </form>
                <div>
                    Nu ai cont? Nu-ți face griji!
                    <br />
                    Poți crea unul in pasul următor.
                </div>
                <div class="text-muted mt-sm">
                    <div class="text-hr-line">
                        <span>sau</span>
                    </div>
                    <div>
                        intră în cont cu
                    </div>
                </div>
                <div>
                    <a href="#" class="btn btn-social facebook mt-md">
                        Facebook
                    </a>
                    <a href="#" class="btn btn-social2 google mt-md">
                        Google
                    </a>
                    <a href="#" class="btn btn-social3 apple mt-md">
                        Apple
                    </a>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" target="_blank">
                Ai nevoie de ajutor?
            </a>
        </div>
    </div>
    <div class="boxFooter">
        <ul class="footerBody">
            <li>
                <a href="#" target="_blank">
                    Cont client eMAG
                </a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="#" target="_blank">
                    Date cu caracter personal
                </a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="#" target="_blank">
                    ANPC
                </a>
            </li>
            <li>
                |
            </li>
            <li>
                <a href="#" target="_blank">
                    eMAG folosește cookie-uri
                </a>
            </li>
        </ul>
    </div>
</div>
</body>
</html>