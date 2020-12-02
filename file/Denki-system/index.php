<html>

<head>
    <link rel="stylesheet" href="_css/stile1.css" type="text/css">
    <link rel="stylesheet" href="_css/font.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <img class="mx-auto"src="_imm/ico.png" height="62" width="62">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="buy.php">Buy a PC</a>
                <a class="nav-link" href="#">Contact</a>
                <a class="nav-link" href="buyapc.php">ViewPHP</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">HOME MENU</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">LOGIN</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">...</a>
            </div>
        </div>
        
    </nav>

    <main role="main" class="container">
        <br><br>
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8 bg-light">
                <div class="text-center">
                    <h1>Progetto GP "Denky Systems"</h1>
                    <p>Questo progetto ha come suo scopo quello di simulare in modo completo il 
                        un sito internet per l'assemblaggio e il commercio di pc/componenti elettronici online, lo sviluppo del progetto e gestito da</p>
                    <p><a href="#" class="btn">Giovanni Cappellini</a> -Documentatore-</p>
                    <p><a href="#" class="btn">Fabio Casetta</a> -Programmatore-</p>
                    <p><a href="#" class="btn">Francesco Colombo</a> -Programmatore Designer-</p>
                    <p><a href="#" class="btn">Lorenzo Pirola</a> -Programmatore-</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="container">
            <div id="demo" class="carousel slide" data-ride="carousel">

            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active"></li>
                <li data-target="#demo" data-slide-to="1"></li>
                <li data-target="#demo" data-slide-to="2"></li>
                <li data-target="#demo" data-slide-to="3"></li>
                <li data-target="#demo" data-slide-to="4"></li>
                <li data-target="#demo" data-slide-to="5"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active radiusMy">
                    <img src="_imm/340347.jpg" alt="bit" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/340348.jpg" alt="scheda madre" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/340349.jpg" alt="CPU" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/423176.jpg" alt="CPU" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/546183.jpg" alt="CPU" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/546187.jpg" alt="CPU" width="1500" height="600">
                </div>
                <div class="carousel-item radiusMy">
                    <img src="_imm/559127.jpg" alt="CPU" width="1500" height="600">
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div><br>
        </div>
        
        
    </main>


</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="_script/script1.js"></script>
</html>