<html>
	<head>
		<title>Test PHP</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"><style type="text/css">
<!--
body {
	background-color: #FFFFFF;
}
table, td, th {
  border: 1px solid black;
}

table { 
  border-collapse: collapse;
  background-color: #FFFFFF;
}
-->
</style></head>

	<body>
		<br>

	  <div align="left">
		<?php
 
			 function tableme($result){				
				$header='';  				
				$rows='';
				
				$header='<tr>'; 							
				$finfo = $result->fetch_fields();
				foreach ($finfo as $val)  
					$header.='<th>'.$val->name.'</th>';
				$header.='</tr>';  
						 
				
				while ($row = $result->fetch_object()) {
					$rows.='<tr>'; 
					foreach($row as $value){ 
						$rows .= "<td>".$value."</td>"; 
					} 
					$rows.='</tr>'; 					 
				} 
				return '<table style="border:1px;border-collapse: collapse;">'.$header.$rows.'</table>';
			}

			$domain =  $_SERVER['SERVER_NAME'];
            //echo $domain;
			
			//nomeutente.altervista.org
			$user = str_replace(".altervista.org","",$domain); 
			$pwd = "";
			$dbname = "my_".$user;
            
			//Connessione a MySQL 
			$conn = new mysqli("localhost",$user,$pwd,$dbname);
			if ($conn->connect_error)
			{
				die("Connection failed: " . $conn->connect_error);
				exit;
			}
 

			//*** Visualizza le tabelle presenti
			$sql = "SHOW TABLES FROM $dbname";
            $result = $conn->query($sql);

            if (!$result) {
                echo "DB Error, could not list tables\n";
                echo 'MySQL Error: ' . mysql_error();
                exit;
            }
			echo "<form method='get'>";
			echo "Tabelle: <select name='tabName'  >";
            while ($row = $result->fetch_row())  
                echo "<option> $row[0] </option>";
			echo "</select>";
			echo "<input type='submit' value='VAI'>";
			echo "</form>";

			//query
			if(isset($_GET["tabName"])){				
				$Query="SELECT * FROM ".$_GET["tabName"];

				$Res=$conn->query($Query);

				if (!$Res)
					print ("Errore nella query!");
				else
					echo tableme($Res);
			}
			$conn->close();
		?>

   		</div>
	</body>
</html>