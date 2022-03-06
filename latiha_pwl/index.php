<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Berbagi Sesama</title>
  </head>
  <body>
  <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">BerSam</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=profile">Profile</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=kontak">Kontak</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=qna">Q n A</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="?menu=login">Log In</a>
                </li>
                
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            </div>
        </div>
        </nav>
        
        <div class=container>
            <?php
                error_reporting(0);
                $menu=$_GET['menu'];
                if ($menu=='login'){
                    echo "<h2>Log In</h2>";
                    include "login.php";
                }
                else
                if ($menu=='profile'){
                    echo "<h1>Selamat Datang!</h1>";
                    include "profile.php";
                    
                }
                else
                if($menu=='kontak'){
                    echo "<h2>ini halaman kontak</h2>";
                }
                else
                if($menu=='qna'){
                    echo "<h2>ini halaman Q n A</h2>";
                }
                else
                {
                    include "home.php";
                }

            ?>
        </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>