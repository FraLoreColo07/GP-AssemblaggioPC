<?php
    require_once('db.php');
    session_start();
    require 'vincoli.php';
    if($_POST['btncpu']=='cpu'){
        $cpu = $_POST['idCPU'];
        $IDUser = $_SESSION['session_user'];
        $nome = $_POST['txtNome'.$cpu];
        $socket = $_POST['txtSocket'.$cpu];
        $consumo = $_POST['nmbConsumo'.$cpu];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                           VALUES ('$IDUser','". $cpu ."', 'cpu');";
        
        echo $query2;
        try {
          $pdo->exec($query2);
          
          echo '<form method=\'POST\' action="buy.php">'
          . '<input style=\'display: none\' readonly type=\'text\' name=\'vinCpu\' value=\''.$socket.'\'>' .
           '<input style=\'display: none\' readonly type=\'text\' name=\'visCPU\' value=\''.$nome.'\'>'.
           '<input style=\'display: none\' readonly type=\'number\' name=\'vinConsumo\' value=\''.$consumo.'\'>'.
           '<input type=\'submit\' value=\'Conferma aggiunta articolo\'>'.
           '</form>';
          //header('Refresh: 0; url=buy.php');
        } catch (PDOException $e){
          echo $e;
        }

    } else if($_POST['btnMadre'] == 'madre'){
        $val = $_POST['idSM'];
        $IDUser = $_SESSION['session_user'];
        $nome = $_POST['txtNome'.$val];
        $socket = $_POST['txtSocket'.$val];
        $formato = $_POST['txtFormato'.$val];
        $tipologia = $_POST['txtTipologia'.$val];
        $espansione = $_POST['nmbEspansione'.$val];
        $nSlot = $_POST['nmbNSlot'.$index];
        $sata = $_POST['nmbSATA'.$index];
        $m2 = $_POST['nmbM2'.$index];
        $PCI = $_POST['nmbPCI'.$index];
        $consumo = $_POST['nmbConsumo'.$index];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                            VALUES ('$IDUser', $val, 'scheda_madre');";
        echo $query2;
        try {
            $pdo->exec($query2);



        echo '<form method=\'POST\' action="buy.php">'.
        '<input style=\'display: none\' readonly type=\'text\' name=\'vinRam\' value=\''.$tipologia.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'vinNRam\' value=\''.$nSlot.'\'>'.
        '<input style=\'display: none\' readonly type=\'text\' name=\'vinCPU\' value=\''.$socket.'\'>' .
        '<input style=\'display: none\' readonly type=\'text\' name=\'visSM\' value=\''.$nome.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'vinCRam\' value=\''.$espansione.'\'>'.
        '<input style=\'display: none\' readonly type=\'text\' name=\'vinScheda\' value=\''.$formato.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'consumo\' value=\''.$consumo.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'sata\' value=\''.$sata.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'m2\' value=\''.$m2.'\'>'.
        '<input style=\'display: none\' readonly type=\'number\' name=\'pci\' value=\''.$PCI.'\'>'.
        '<input type=\'submit\' value=\'Conferma aggiunta articoli\' name=\'confSM\'>'.
        '</form>';
        } catch (PDOException $e){
            echo $e;
        }
    } else if($_POST['btnDissipatore'] == 'dissipatore'){
        $val = $_POST['dissipatore'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                           VALUES ('$IDUser', $val, 'dissipatore');";
        echo $query2;
        try {
          $pdo->exec($query2);
          header('Location: buy.php');
        } catch (PDOException $e){
          echo $e;
        }
    } else if($_POST['btnRam'] == 'ram'){
        $val = $_POST['ram'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                            VALUES ('$IDUser', $val, 'ram');";
        echo $query2;
        try {
            $pdo->exec($query2);
            header('Location: buy.php');
        } catch (PDOException $e){
            echo $e;
        }
    } else if($_POST['btnGpu'] == 'gpu'){
        $val = $_POST['gpu'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                            VALUES ('$IDUser', $val, 'scheda_video');";
        echo $query2;
        try {
            $pdo->exec($query2);
            header('Location: buy.php');
        } catch (PDOException $e){
            echo $e;
        }
    } else if($_POST['btnDischi'] == 'dischi'){
        $val = $_POST['dischi'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                           VALUES ('$IDUser', $val, 'dischi');";
        echo $query2;
        try {
          $pdo->exec($query2);
          header('Location: buy.php');
        } catch (PDOException $e){
          echo $e;
        }
    } else if($_POST['btnPSU'] == 'psu'){
        $val = $_POST['alimetatore'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                            VALUES ('$IDUser', $val, 'alimentatore');";
        echo $query2;
        try {
            $pdo->exec($query2);
            header('Location: buy.php');
        } catch (PDOException $e){
            echo $e;
        }
    } else if($_POST['btnCase'] == 'case'){
        $val = $_POST['case'];
        $IDUser = $_SESSION['session_user'];
        $query2="INSERT INTO carrello (ID_utente, ID_prodotto, tipo)
                                            VALUES ('$IDUser', $val, 'case');";
        echo $query2;
        try {
            $pdo->exec($query2);
            header('Location: buy.php');
        } catch (PDOException $e){
            echo $e;
        }
    }
?>