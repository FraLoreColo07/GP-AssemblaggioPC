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
        <img src="_imm/ico.png" width="62" height="62" alt="">
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home
                    <a class="nav-link active" href="buy.php">Buy a PC</a><span class="sr-only">(current)</span></a>
                <a class="nav-link" href="#">Contact</a>
                <a class="nav-link" href="buyapc.php">ViewPHP</a>
            </div>
        </div>
        <div class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">BUY MENU</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="login.php">LOGIN</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">...</a>
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
            <div class="col-sm-2">
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
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary" data-toggle="collapse" data-target="#cpuDatagrid">CPU-Visualizza Componenti</button><br>
                        </div><br>
                        <div class="collapse"id="cpuDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#cpu-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="cpu-table" class="table tablesearch-table table-bordered table-striped">
								
                                  <thead><tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Prezzo</th>
                                    <th>n_Articoli</th>
                                    <th>Socket</th>
                                    <th>Core</th>
                                    <th>Thread</th>
                                    <th>frequenza_base</th>
                                    <th>frequenza_turbo</th>
                                    <th>RAM_supportata</th>
                                    <th>conf_PCI-EX</th>
                                    <th>cache_L2</th>
                                    <th>Smart_Cache(L3)</th>
                                    <th>Consumo</th>
                                    <th>Dissipatore_incluso</th>
                                  </tr></thead>
                                  <tbody id="tbCPU">
                                      
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>  
                </div>
                <div class="row">
                    <div class="col-xl">
                        <div class="w-100">
                            <button class="myFont btn btn-secondary" data-toggle="collapse" data-target="#moDatagrid">Motherboard-Visualizza Componenti</button><br>
                        </div>
                        <div class="collapse"id="moDatagrid">
                            <input type="text" class="form-control mb-3 tablesearch-input" data-tablesearch-table="#mo-table"  placeholder="Search">
                            <div class="table-responsive">
                                <table id="mo-table" class="table tablesearch-table table-bordered table-striped">
                                  <thead><tr>
                                    <th>ID</th>
                                    <th>Nome</th>
                                    <th>Produttore</th>
                                    <th>Prezzo</th>
                                    <th>n_Articoli</th>
                                    <th>Socket</th>
                                    <th>Formato-scheda</th>
                                    <th>Tipologia-Ram</th>
                                    <th>frequenza_max_RAM</th>
                                    <th>n_slot_RAM</th>
                                    <th>espansione_MAX</th>
                                    <th>n_slot_PCI-EX3</th>
                                    <th>n_slot-PCI-EX4</th>
                                    <th>connettori_M.2</th>
                                    <th>USB_2</th>
                                    <th>USB_3.2_gen1</th>
                                    <th>USB_3.2_gen2</th>
                                    <th>USB_3.2_typeC</th>
                                    <th>SATA_III</th>
                                    <th>HDMI</th>
                                    <th>VGA</th>
                                    <th>DISPLAY_PORT</th>
                                    <th>Consumi_WATT</th>
                                  </tr></thead>
                                  <tbody id="tbMO">
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>  
                </div>

            </div>
        </div>
        <!-- The Modal ------CPU--------------------------------------------------------------------------------->
        <div class="modal fade" id="cpuArea">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">

                    <!-- Modal Header -->
                    <div class="modal-header">
                        <h4 class="modal-title">Seleziona componete CPU</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>

                    <!-- Modal body -->
                    <div class="modal-body">
                        <label for="id-cpu">Inserisci ID:</label><input type="text" id="id-cpu"><br>
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
                        <label for="moData">Elenco Dati Motherboard</label>
                        <select id="moData"></select><br>
                        <label for="id-mo">ID:</label><input type="text" id="id-mo" disabled><label for="prod-mo">
                            Produttore:</label><input type="text" id="prod-mo" disabled><label for="mod-mo">
                            Modello:</label><input type="text" id="mod-mo" disabled><br>
                        <label for="so-mo">Socket:</label><input type="text" id="so-mo" disabled> <label for="form-mo">
                            Formato-scheda:</label><input type="text" id="form-mo" disabled><label for="nram-mo">
                            n_slot_RAM:</label><input type="text" id="nram-mo" disabled><br>
                        <label for="ti-mo">Tipologia RAM:</label><input type="text" id="ti-mo" disabled> <label
                            for="esp-mo"> Espansione_MAX:</label><input type="text" id="esp-mo" disabled><label
                            for="HDMI-mo"> HDMI:</label><input type="text" id="HDMI-mo" disabled><br>
                        <button id="imm-mo">Immagine</button>
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
                        Modal body..
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
                        Modal body..
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
                        Modal body..
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
                        Modal body..
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
                        Modal body..
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
                        Modal body..
                    </div>

                    <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                            id="button1-case">Close</button>
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