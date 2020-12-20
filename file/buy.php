<html>

<head>
    <link rel="stylesheet" href="_css/stile1.css" type="text/css">
    <link rel="stylesheet" href="_css/font.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <?php require_once('db.php');
    //include("vincoli.php"); 
    session_start();
   ?>
</head>

<body>
    <?php
        //require 'vincoli.php';
        if(isset($_POST['vinCpu']) && isset($_POST['visCPU']) && isset($_POST['vinConsumo'])){
            $_SESSION['socket'] = $_POST['vinCpu'];
            $_SESSION['cpu'] = $_POST['visCPU'];
            if(!(empty($_SESSION['consumo'])))
                $_SESSION['consumo'] += $_POST['vinConsumo'];
            else
                $_SESSION['consumo'] = $_POST['vinConsumo'];
        } else if(isset($_POST['vinRam'])&& isset($_POST['vinCPU']) && isset($_POST['visSM']) && isset($_POST['vinNRam']) && isset($_POST['vinCRam']) && isset($_POST['vinScheda']) && isset($_POST['consumo']) && isset($_POST['sata']) && isset($_POST['m2']) && isset($_POST['pci'])){
            $_SESSION['socket'] = $_POST['vinCPU'];
            $_SESSION['tipoRam'] = $_POST['vinRam'];
            $_SESSION['nRam'] = $_POST['vinNRam'];
            $_SESSION['vinCRam'] = $_POST['vinCRam'];
            $_SESSION['vinScheda'] = $_POST['vinScheda'];
            $_SESSION['motherboard'] = $_POST['visSM'];
            if(!(empty($_SESSION['consumo'])))
                $_SESSION['consumo'] += $_POST['vinConsumo'];
            else
                $_SESSION['consumo'] = $_POST['vinConsumo'];
            
            $_SESSION['sata'] = $_POST['sata'];
            $_SESSION['m2'] = $_POST['m2'];
            $_SESSION['pci'] = $_POST['pci'];
        } else if(isset($_POST['vinRam']) && isset($_POST['visRam']) && isset($_POST['vinNRam']) && isset($_POST['vinCRam'])){
            $_SESSION['vinCRam'] = $_POST['vinCRam'];
            $_SESSION['nRam'] = $_POST['vinNRam'];
            $_SESSION['tipoRam'] = $_POST['vinRam'];
            $_SESSION['ram'] = $_POST['visRam'];
        }
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a href="index.php" class="nav-link"><img class="mx-auto" src="_imm/ico.png" height="62" width="62"></a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="home.php">Home</a>
                <a class="nav-link" href="buy.php">Buy a PC</a>
                <a class="nav-link" href="buyapc.php">ViewPHP</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">MENU</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">LOGIN</a>
                <a class="dropdown-item" href="register.html">SIGN IN</a>
                <a class="dropdown-item" href="carrello.php">Carrello</a>
                <div class="dropdown-divider"></div>
                <form action="logout.php">
                    <button type='submit' name='logout' value='logout' class="dropdown-item">
                        LOGOUT
                    </button>
                </form>
            </div>
        </div>

    </nav>
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-xl-12 text-Center"><br>
                <h3>SCHERMATA SELEZIONE COMPONENTI</h3>
            </div>
        </div><br>
        <div>
            <div>
                <div>
                    <div>
                        
                        <?php
                            if(empty($_SESSION['cpu'])){
                                echo '<div class="w-100">
                                <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                    data-target="#cpuDatagrid">CPU-Visualizza Componenti</button><br>
                            </div><br>';
                                echo '<div class="collapse" id="cpuDatagrid">
                                    <input type="text" class="form-control mb-3 tablesearch-input"
                                        data-tablesearch-table="#cpu-table" placeholder="Search">
                                    <div class="table-responsive">
                                        <form method="POST" action="addCarrello.php">
                                            <table id="mo-table"
                                                class="table tablesearch-table table-bordered table-striped tablemanager">
                                                <thead>
                                                    <tr>
                                                        <th>Seleziona</th>
                                                        <th>Nome</th>
                                                        <th>Socket</th>
                                                        <th>Core</th>
                                                        <th>Thread</th>
                                                        <th>Frequenza base</th>
                                                        <th>Consumo</th>
                                                        <th>Prezzo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                        $query = "SELECT nome, socket, core, threads, frequenza_base, consumo, prezzo 
                                                                FROM cpu 
                                                                WHERE socket LIKE '".$_SESSION['socket']."'";

                                                    $check = $pdo->prepare($query);
                                                    $check->execute();
                                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
                                                    
                                                    $index = 1;
                                                    foreach($rows as $row) {
                                                        //if ($vincoli['consumo'] + $row['consumo'] <= $vincoli_max['consumo']) {
                                                            echo "<tr><td><input type='radio' name='idCPU' value='".$index."'</td>".
                                                            "<td><input type='text' name='txtNome".$index."' readonly value='".$row['nome']
                                                            ."'></td><td><input type='text' name='txtSocket".$index."' readonly value='".$row['socket']
                                                            ."'></td><td>".$row['core']
                                                            ."</td><td>".$row['threads']
                                                            ."</td><td>".$row['frequenza_base']
                                                            ."</td><td><input type='text' name='nmbConsumo".$index."' readonly value='".$row['consumo']
                                                            ."'>"
                                                            ."</td><td><input type='text' name='nmbPrezzo".$index."' readonly value='".$row['prezzo']
                                                            ."'</td></tr>";
                                                            $index++;
                                                        //}
                                                    }
                                                echo '</tbody>
                                            </table>
                                            <button type="submit" name="btncpu" value=\'cpu\'>Aggiungi al carrello</button>
                                        </form>
                                    </div>
                                </div>';
                            } else 
                                echo '<span>'.$_SESSION['cpu'].'</span>';
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl">
                        <?php
                                if(empty($_SESSION['motherboard'])){
                                echo '<div class="w-100">
                                    <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                        data-target="#moDatagrid">Motherboard-Visualizza Componenti</button><br>
                                </div>
                                <div class="collapse" id="moDatagrid">
                                    <div class="table-responsive">
                                        <form method="post" action=\'addCarrello.php\'>
                                            <table class="table tablesearch-table table-bordered table-striped tablemanager">
                                                <thead>
                                                    <tr>
                                                        <th>Seleziona</th>
                                                        <th>Nome</th>
                                                        <th>Socket</th>
                                                        <th>Formato scheda</th>
                                                        <th>Tipologia RAM</th>
                                                        <th>Espansione max</th>
                                                        <th>Slot RAM max</th>
                                                        <th>Consumo</th>
                                                        <th>Prezzo</th>
                                                    </tr>
                                                </thead>
                                                <tbody>';
                                                       $query = "SELECT * FROM scheda_madre
                                                            WHERE socket LIKE '". $_SESSION['socket'] ."' AND 
                                                            n_slot_RAM >= ". $_SESSION['nRam']." AND
                                                            espansione_MAX >= ".$_SESSION['vinCRam']." AND 
                                                            tipologia_RAM LIKE '".$_SESSION['tipoRam']."' AND
                                                            formato_scheda LIKE '".$_SESSION['vinScheda']."' AND
                                                            SATA_III >= ".$_SESSION['sata']." AND 
                                                            connettori_M2 >= ".$_SESSION['m2']." AND
                                                            n_slot_PCI_EX4 >= ".$_SESSION['pci'];
                                                        //echo $query;
                                                        $check = $pdo->prepare($query);
                                                        $check->execute();
                                                
                                                        $rows = $check->fetchAll(PDO::FETCH_ASSOC);
                                                        
                                                        $index = 1;
                                                        foreach($rows as $row) {
                                                            echo "<tr><td><input type='radio' name='idSM' value='".$index."'</td>".
                                                            "<td><input type='text' name='txtNome".$index."' readonly value='".$row['nome']."'></td>".
                                                            "</td><td><input type='text' name='txtSocket".$index."' readonly value='".$row['socket']
                                                            ."'></td><td><input type='text' name='txtFormato".$index."' readonly value='".$row['formato_scheda']
                                                            ."'</td><td><input type='text' name='txtTipologia".$index."' readonly value='".$row['tipologia_RAM']
                                                            ."'</td><td><input type='text' name='txtEspansione".$index."' readonly value='".$row['espansione_MAX']
                                                            ."'</td><td><input type='text' name='txtNSlot".$index."' readonly value='".$row['n_slot_RAM']
                                                            ."'</td><td><input type='text' name='txtSATA".$index."' readonly value='".$row['SATA_III']
                                                            ."'</td><td><input type='text' name='txtM2".$index."' readonly value='".$row['connettori_M2']
                                                            ."'</td><td><input type='text' name='txtPCI".$index."' readonly value='".$row['n_slot_PCI_EX4']
                                                            ."'</td><td><input type='text' name='nmbConsumo".$index."' readonly value='".$row['consumo']
                                                            ."'</td><td><input type='text' name='nmbPrezzo".$index."' readonly value='".$row['prezzo']
                                                            ."'</td></tr>";
                                                            $index++;
                                                        }
                                                
                                                echo '</tbody>
                                            </table>
                                            <button type="submit" name=\'btnMadre\' value=\'madre\'>Aggiungi al carrello</button>
                                        </form>
                                    </div>
                                </div>';
                            } else
                                echo '<span>'.$_SESSION['motherboard'].'</span>';
                        ?>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#coolDatagrid">CPU Cooler-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="coolDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#cool-table" placeholder="Search">
                            <div class="table-responsive">
                                <table class="table tablesearch-table table-bordered table-striped tablemanager">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Socket</th>
                                            <th>Tipo</th>
                                            <th>Controller RGB</th>
											<th>Consumo</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									$query = "SELECT nome, socket_supportate, tipo, controller_RGB, prezzo FROM dissipatore
									WHERE socket_supportate LIKE '".$_SESSION['socket']."'";
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
                                      echo "<tr><td>".$row['nome']
                                        ."</td><td>".$row['socket_supportate']
                                        ."</td><td>".$row['tipo']
                                        ."</td><td>".$row['controller_RGB']
										."</td><td>".$row['consumo']
                                        ."</td><td>".$row['prezzo']
                                        ."</td></tr>";
									}
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#ramDatagrid">RAM-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="ramDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#ram-table" placeholder="Search">
                            <div class="table-responsive">
                                <table id="ram-table" class="table tablesearch-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Capacitá</th>
                                            <th>Tipologia RAM</th>
                                            <th>Frequenza</th>
                                            <th>CAS Latency</th>
											<th>Consumo</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php/*
									$query = "SELECT nome, capacità, kit, tipo, frequenza, CAS_Latency, prezzo FROM ram
									WHERE tipo LIKE '".$vincoli['ram']."'";
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										if ($vincoli['consumo'] + $row['consumo'] <= $vincoli_max['consumo']
										&& $vincoli['nram'] + $row['kit'] <= $vincoli_max['nram']
										&& $vincoli['sizeram'] + $row['capacità'] <= $vincoli_max['sizeram']) {
											echo "<tr><td>".$row['nome']
											."</td><td>".$row['capacità']
											."</td><td>".$row['tipo']
											."</td><td>".$row['frequenza']
											."</td><td>".$row['CAS_Latency']
											."</td><td>".$row['prezzo']
											."</td></tr>";
										}
									}*/
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#gpuDatagrid">GPU-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="gpuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#gpu-table" placeholder="Search">
                            <div class="table-responsive">
                                <table id="gpu-table"
                                    class="table tablesearch-table table-bordered table-striped tablemanager">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Modello</th>
                                            <th>Produttore</th>
                                            <th>Memoria dedicata</th>
                                            <th>Velocitá memoria</th>
                                            <th>Consumo</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php/*
									//todo: vincolo SLI
									$query = "SELECT nome, modello, produttore, memoria_dedicata, velocità_memoria, consumo, prezzo FROM scheda_video
									WHERE 1";
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										if ($vincoli['consumo'] + $row['consumo'] <= $vincoli_max['consumo']) {
											echo "<tr><td>".$row['nome']
											."</td><td>".$row['modello']
											."</td><td>".$row['produttore']
											."</td><td>".$row['memoria_dedicata']
											."</td><td>".$row['velocità_memoria']
											."</td><td>".$row['consumo']
											."</td><td>".$row['prezzo']
											."</td></tr>";
										}
									}*/
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#ssdDatagrid">SSD-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="ssdDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#ssd-table" placeholder="Search">
                            <div class="table-responsive">
                                <table id="ssd-table" class="table tablesearch-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Slot</th>
                                            <th>Capacitá</th>
                                            <th>Consumo</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                    //todo vincolo
                                    /*
									$query = "SELECT nome, tipo, slot, capacità, consumo, prezzo FROM dischi WHERE 1
                                    ";
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										if ($vincoli['consumo'] + $row['consumo'] <= $vincoli_max['consumo']) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['tipo']
										."</td><td>".$row['slot']
										."</td><td>".$row['capacità']
										."</td><td>".$row['prezzo']
										."</td></tr>";
										}
									}*/
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#psuDatagrid">Power Supply Unit-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="psuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#psu-table" placeholder="Search">
                            <div class="table-responsive">
                                <table id="psu-table" class="table tablesearch-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Tipo</th>
                                            <th>Efficienza</th>
                                            <th>Potenza</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php/*
									$query = "SELECT nome, tipo, efficienza, potenza, prezzo FROM alimentatore
									WHERE potenza > ".$vincoli['consumo'];
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['tipo']
										."</td><td>".$row['efficienza']
										."</td><td>".$row['potenza']
										."</td><td>".$row['prezzo']
										."</td></tr>";
									}*/
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse"
                                data-target="#caseDatagrid">CASE-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse" id="caseDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input"
                                data-tablesearch-table="#case-table" placeholder="Search">
                            <div class="table-responsive">
                                <table id="case-table" class="table tablesearch-table table-bordered table-striped">
                                    <thead>
                                        <tr>
											<th>Seleziona</th>
                                            <th>Nome</th>
                                            <th>Dimensioni</th>
                                            <th>Peso</th>
                                            <th>LED</th>
                                            <th>Scheda madre supportata</th>
                                            <th>Prezzo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
									$query = "SELECT nome, dimensioni, peso, led, scheda_madre_supportata, prezzo FROM `case` WHERE 1
                                    ";
									
									$check = $pdo->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['dimensioni']
										."</td><td>".$row['peso']
										."</td><td>".$row['led']
										."</td><td>".$row['scheda_madre_supportata']
                                        ."</td><td>".$row['prezzo']
										."</td></tr>";
									}
								?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div><br>
            </div>
        </div>

        
        <!-- The Modal ------CPU---------------------------------------------------------------------------------
                <div class="modal fade" id="cpuArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header 
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti CPU</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body 
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-cpu">Seleziona Nome: </label><select name='cpu'>
                                <?php /*
                                    $socket2 = $_SESSION['socket'];
                                    if(!empty($_SESSION['socket']))
                                        $query = "SELECT nome, socket, core, threads, frequenza_base, consumo, prezzo,ID
                                                FROM cpu 
                                                WHERE socket LIKE '".$_SESSION['socket']."'";
                                    else 
                                        $query = "SELECT nome, socket, core, threads, frequenza_base, consumo, prezzo, ID 
                                        FROM cpu 
                                        WHERE 1";

                                    $check = $pdo->prepare($query);
                                    $check->execute();
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            $temp = $row['ID'].','.$row['socket'];
                                            echo '<option value=\''.$temp.'\'>'.$row['nome']." ".$row['prezzo'].'€</option>';
                                    }*/
                                ?>
                            </select>
                            <button type="submit" name="btncpu" value='cpu'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer 
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-cpu">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="MArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header 
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti Motherboard</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body 
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-madre">Seleziona Nome: </label><select name='madre'>
                                <?php
                                    /*
                                    $query = "SELECT * FROM scheda_madre WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnMadre' value='madre'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>
                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-mo">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="COArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti CPU Cooler</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-dissipatore">Seleziona Nome: </label><select name='dissipatore'>
                                <?php
                                    $query = "SELECT * FROM dissipatore WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnDissipatore' value='dissipatore'>Aggiungi al
                                carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-co">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="RArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti RAM</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-ram">Seleziona Nome: </label><select name='ram'>
                                <?php
                                    $query = "SELECT * FROM ram WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnRam' value='ram'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-ram">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="GPUArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti GPU</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-gpu">Seleziona Nome: </label><select name='gpu'>
                                <?php
                                    $query = "SELECT * FROM scheda_video WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnGpu' value='gpu'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-gpu">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="SSDArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti disco rigido</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-dischi">Seleziona Nome: </label><select name='dischi'>
                                <?php
                                    $query = "SELECT * FROM dischi WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['tipo']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnDischi' value='dischi'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-ssd">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="PSUArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti PSU</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-alimetatore">Seleziona Nome: </label><select name='alimetatore'>
                                <?php
                                    $query = "SELECT * FROM alimentatore WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome']." ".$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnPSU' value='psu'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-psu">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="CASEArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti CASE</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <form method="post" action="addCarrello.php">
                            <label for="id-case">Seleziona Nome: </label><select name='case'>
                                <?php
                                    $query = "SELECT * FROM `case` WHERE 1";
								
                                    $check = $pdo->prepare($query);
                                    $check->execute();
    
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);

                                    foreach($rows as $row) {
                                            echo '<option value=\''.$row['ID'].'\'>'.$row['nome'].' '.$row['prezzo'].' €</option>';
                                    }
                                ?>
                            </select>
                            <button type="submit" name='btnCase' value='case'>Aggiungi al carrello</button>
                        </form>
                        <br>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-case">Close</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="helpArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Information</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <p>Per visualizzare i componenti, premere sui pulsanti centrali</p>
                        <p>Per richiedere un componente, premere sui pulsanti laterali e inserire il nome</p>
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-help">Close</button>
                    </div>
                </div>
            </div>
        </div>*/
        ?>-->

    </main>
    <?php

    ?>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="_script/script2.js"></script>
<script src="_script/auto-tables.js"></script>

</html>