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
                <a class="nav-link active" href="buy.php">Buy a PC</a><span class="sr-only">(current)</span></a>
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
    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-xl-12 text-Center">
                <h3>SCHERMATA SELEZIONE COMPONENTI</h3>
            </div>
        </div><br>
        <div class="row">
            <?php
                echo '<div class="col-sm-2">
                    <p>COMPONENTI SCELTI:</p>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#cpuArea"><img src="_imm/_symbol/symbol-cpu.png"
                                class="mx-auto d-block"></a>
                        <b>CPU-Processor</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#MArea"><img src="_imm/_symbol/symbol-mainboard.png"
                                class="mx-auto d-block"></a>
                        <b>Motherboard</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#COArea"><img src="_imm/_symbol/symbol-diss.png"
                                class="mx-auto d-block"></a>
                        <b>CPU Cooler</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#RArea"><img src="_imm/_symbol/symbol-ram.png"
                                class="mx-auto d-block"></a>
                        <b>RAM</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#GPUArea"><img src="_imm/_symbol/symbol-gpu.png"
                                class="mx-auto d-block"></a>
                        <b>GPU</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#SSDArea"><img src="_imm/_symbol/symbol-ssd.png"
                                class="mx-auto d-block"></a>
                        <b>SSD</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#PSUArea"> <img src="_imm/_symbol/symbol-psu.png"
                                class="mx-auto d-block"></a>
                        <b>Power Supply Unit</b>
                    </div>
                    <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#CASEArea"> <img src="_imm/_symbol/symbol-case.png"
                                class="mx-auto d-block"></a>
                        <b>CASE</b>
                    </div>
                </div>';
            ?>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#cpuDatagrid">CPU-Visualizza Componenti</button><br>
                        </div><br>
                        <div class="collapse"id="cpuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#cpu-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="mo-table" class="table tablesearch-table table-bordered table-striped tablemanager">
                                  <thead><tr>
									<th>Nome</th>
                                    <th>Socket</th>
                                    <th>Core</th>
                                    <th>Thread</th>
                                    <th>Frequenza base</th>
                                    <th>Consumo</th>
                                    <th>Prezzo</th>
                                  </tr></thead>
                                  <tbody>
                                  <?php
                                   require_once('db.php');
                                    $query = "SELECT nome, socket, core, threads, frequenza_base, consumo, prezzo 
                                              FROM cpu 
                                              WHERE 1
                                    ";

                                    $check = $conn->prepare($query);
                                    $check->execute();
                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['socket']
										."</td><td>".$row['core']
										."</td><td>".$row['threads']
										."</td><td>".$row['frequenza_base']
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
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#moDatagrid">Motherboard-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="moDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#mo-table"  placeholder="Search">
                            <div class="table-responsive">
                                       <table class="table tablesearch-table table-bordered table-striped tablemanager">
							<thead><tr>
								<th>Nome</th>
								<th>Socket</th>
								<th>Formato scheda</th>
								<th>Tipologia RAM</th>
								<th>Espansione max</th>
								<th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, socket, formato_scheda, tipologia_ram, espansione_max, prezzo FROM scheda_madre WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['socket']
										."</td><td>".$row['formato_scheda']
										."</td><td>".$row['tipologia_ram']
										."</td><td>".$row['espansione_max']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#coolDatagrid">CPU Cooler-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="coolDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#cool-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table class="table tablesearch-table table-bordered table-striped tablemanager">
							<thead><tr>
								<th>Nome</th>
								<th>Socket</th>
								<th>Tipo</th>
								<th>RGB</th>
								<th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, socket_supportate, tipo, controller_RGB, prezzo FROM dissipatore WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['socket_supportate']
										."</td><td>".$row['tipo']
										."</td><td>".$row['controller_RGB']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#ramDatagrid">RAM-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="ramDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#ram-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="ram-table" class="table tablesearch-table table-bordered table-striped">
							<thead><tr>
								<th>Nome</th>
								<th>Socket</th>
								<th>Formato scheda</th>
								<th>Tipologia RAM</th>
								<th>Espansione max</th>
								<th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, socket, formato_scheda, tipologia_ram, espansione_max, prezzo FROM scheda_madre WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['socket']
										."</td><td>".$row['formato_scheda']
										."</td><td>".$row['tipologia_ram']
										."</td><td>".$row['espansione_max']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#gpuDatagrid">GPU-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="gpuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#gpu-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="gpu-table" class="table tablesearch-table table-bordered table-striped tablemanager">
							<thead><tr>
								<th>Nome</th>
								<th>Modello</th>
								<th>Produttore</th>
								<th>Memoria dedicata</th>
								<th>Velocitá memoria</th>
                                <th>Consumo</th>
                                <th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, modello, produttore, memoria_dedicata, velocità_memoria, consumo, prezzo FROM scheda_video WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['modello']
										."</td><td>".$row['produttore']
										."</td><td>".$row['memoria_dedicata']
										."</td><td>".$row['velocità_memoria']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#ssdDatagrid">SSD-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="ssdDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#ssd-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="ssd-table" class="table tablesearch-table table-bordered table-striped">
                                  <thead><tr>
								<th>Nome</th>
								<th>Tipo</th>
								<th>Slot</th>
								<th>Capacitá</th>
                                <th>Consumo</th>
                                <th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, tipo, slot, capacità, prezzo FROM dischi WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['tipo']
										."</td><td>".$row['slot']
										."</td><td>".$row['capacità']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#psuDatagrid">Power Supply Unit-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="psuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#psu-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="psu-table" class="table tablesearch-table table-bordered table-striped">
                                  <thead><tr>
								<th>Nome</th>
								<th>Tipo</th>
								<th>Efficienza</th>
								<th>Potenza</th>
                                <th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, tipo, efficienza, potenza, prezzo FROM alimentatore WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
                                    $check->execute();

                                    $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
									foreach($rows as $row) {
										echo "<tr><td>".$row['nome']
										."</td><td>".$row['tipo']
										."</td><td>".$row['efficienza']
										."</td><td>".$row['potenza']
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
                            <button class="myFont btn btn-secondary btn-block" data-toggle="collapse" data-target="#caseDatagrid">CASE-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="caseDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#case-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="case-table" class="table tablesearch-table table-bordered table-striped">
                                 <thead><tr>
								<th>Nome</th>
								<th>Dimensioni</th>
								<th>Peso</th>
								<th>LED</th>
								<th>Scheda madre supportata</th>
                                <th>Prezzo</th>
							</tr></thead>
							<tbody>
								<?php
									$query = "SELECT nome, dimensioni, peso, led, scheda_madre_supportata, prezzo FROM `case` WHERE 1
                                    ";
									
									$check = $conn->prepare($query);
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
            <div class="col-sm-2">
                <div class="border border-dark rounded text-center">
                        <a data-toggle="modal" data-target="#helpArea"><img src="_imm/_symbol/symbol-help.png" 
                        width="62" height ="62" class="mx-auto d-block"></a>
                        <b>Info-Help</b>
                </div>
            </div>
        </div>
        <!-- The Modal ------CPU--------------------------------------------------------------------------------->
        <div class="modal fade" id="cpuArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti CPU</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-cpu">Inserisci Nome:</label><input type="text" id="id-cpu" name="cpu">
							<input type="submit">
						</form>
						<br>
						<?php
							if ($_SERVER["REQUEST_METHOD"] == "POST") {
								$val = $_POST['cpu'];
								$query = "SELECT * FROM cpu WHERE nome = ".$val;
								
								$check = $conn->prepare($query);
                                $check->execute();

                                $rows = $check->fetchAll(PDO::FETCH_ASSOC);
									
								foreach($rows as $row) {
										echo $row['nome']." ".$row['prezzo'];
								}
							}
						?>
                    </div>

                    <!-- Modal footer -->
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

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Componenti Motherboard</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-mo">Inserisci Nome:</label><input type="text" id="id-mo">
							<input type="submit">
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
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-co">Inserisci Nome:</label><input type="text" id="id-co">
							<input type="submit">
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
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-ram">Inserisci Nome:</label><input type="text" id="id-ram">
							<input type="submit">
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
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-gpu">Inserisci Nome:</label><input type="text" id="id-gpu">
							<input type="submit">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
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
                        <h4 class="modal-title">Componenti SSD</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-ssd">Inserisci Nome:</label><input type="text" id="id-ssd">
							<input type="submit">
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
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-psu">Inserisci Nome:</label><input type="text" id="id-psu">
							<input type="submit">
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
						<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
							<label for="id-case">Inserisci Nome:</label><input type="text" id="id-case">
							<input type="submit">
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
        </div>
        
        
    </main>
    
     
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="_script/script2.js"></script>
<script src="_script/auto-tables.js"></script>

</html>
