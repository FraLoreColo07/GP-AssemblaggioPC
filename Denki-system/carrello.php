<html>

<head>
    <link rel="stylesheet" href="_css/stile1.css" type="text/css">
    <link rel="stylesheet" href="_css/font.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    
</head>

<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="nav-link"><img src="_imm/ico.png" height="62" width="62"></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="home.php">Home
                <a class="nav-link" href="buy.php">Buy a PC</a>
                <a class="nav-link" href="buyapc.php">ViewPHP</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENU</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.html">LOGIN</a>
                <a class="dropdown-item" href="register.html">SIGN IN</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="carrello.php">Carrello</a>
            </div>
        </div>
        
</nav><br>
    <main role="main" class="container">
        <div class="row">
            <div class="col-xl-2"></div>
            <div class="col-xl-8 text-center bg-light"><br>
                <div class="table-responsive">
                <h3>CARRELLO</h3>
                <table class="table tablesearch-table table-bordered table-striped tablemanager">
                    <thead><tr>
                        <th>Nome</th>
                        <th>Prezzo</th>
                    </tr></thead>
                    <tbody>
                    <?php
                        session_start();
                        require_once('db.php');
                        
                        $userid = $_SESSION['session_user'];
                        
                        $query = "SELECT tipo, ID_prodotto FROM `carrello` WHERE ID_utente = '$userid'";
                        
                        $check = $conn->prepare($query);
                        $check->execute();
                        $rows = $check->fetchAll(PDO::FETCH_ASSOC);
                        
                        $totale = 0.0;
                        
                        foreach($rows as $row) {
                            $type = $row['tipo'];
                            $product = $row['ID_prodotto'];
                        
                            $q_prodotto = "SELECT nome, prezzo FROM $type WHERE ID = $product";
                            
                            $q_check = $conn->prepare($q_prodotto);
                            $q_check->execute();
                            $q_row = $q_check->fetchAll(PDO::FETCH_ASSOC);
                            
                            foreach($q_row as $q_result) {
                                echo "<tr><td>".$q_result['nome']
                                ."</td><td>".$q_result['prezzo']
                                ."</td></tr>";
                                
                                $totale = $totale + $q_result['prezzo'];
                            }
                        }
                    ?>
                    </tbody>
                </table>
                <?php echo $totale; ?>
                </div>
            
            </div>
        </div>

    </main>
	
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script src="_script/script1.js"></script>
</html>