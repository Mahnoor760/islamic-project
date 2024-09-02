<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Islamic Library System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Amiri+Quran&family=Aref+Ruqaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Nastaliq+Urdu:wght@400..700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
</head>
<style>
     body {
        font-family: "jameel";
        background-color: black;
        color: #bd8908; 
    }
</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Islamic Library</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="books.php">Books</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Authors</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Publishers</a>
                </li>
            </ul>
            <form class="d-flex ms-auto">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <img src="final1.png" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            <a href="hadith.php">
               <div class="card">
                    <img src="2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><strong>Mohammad Ashiq Ilahi</strong></h5>
                        <p>Islam publisher</p>
                    </div>
                </div></a>
            </div>
            
            <div class="col-md-4">
                <div class="card">
                <a href="quran.php">
                    <img src="4 (1).jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><strong>Miraculous Nature of Quran</strong></h5>

                    </div>
                </div></a>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="calender.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5><strong>Prayer Calender</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer bg-dark text-white">
        <div class="container">
            <span class="text-muted">Islamic Library System 2024</span>
        </div>
       
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>
</html>
