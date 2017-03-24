<?php

	$BANCO  = "tecma713_2016";
	$SERVER = "localhost";
	$USER   = "tecma713_2016";
	$SENHA  = "tec@next";

	$CONNECT_X = mysql_connect($SERVER,$USER,$SENHA);
	$CONNECT   = mysql_select_db("$BANCO", $CONNECT_X);

	$URL = 'http://tecmarques.com.br/';

	session_name('tecmarques');
	session_start();

	if(!isset($_SESSION['BUY'])){
		$_SESSION['BUY'] = time();
	}

	$action = $_GET['action'];

	switch($action){
		
		case 'list':
			
			$session = $_SESSION['BUY'];
			
			$sql = mysql_query("SELECT id, codprd, model, name, quantity, code, session, category FROM wp_cart WHERE session = '".$session."'");
			
			if(mysql_num_rows($sql) == 0){
				$item = '<p>Nenhum produto adicionado!</p>';
			}else{
				$item = NULL;
				while($row = mysql_fetch_array($sql)){
					
					if($row['category'] == 'locations'){
						$tipo = "Locação";
					}
					else if($row['category'] == 'products'){
						$tipo = "Produto";
					}
					else{
						$tipo = "Serviço";
					}
					
					if($row['quantity'] == 0){
						$qtd = 1;
					}else{
						$qtd = $row['quantity'];
					}
					
					$item .= '<tr>
							  <td>'.$row['name'].'</td>
							  <td>'.$row['model'].'</td>
							  <td>'.$qtd.'</td>
							  <td>'.$tipo.'</td>
							  <td><a href="'.$URL.'cart.php?action=delete&id='.$row['id'].'" class="btn">Excluir</a></td>
							</tr>';
				}
			}
			
			echo $item;
		
		break;
		
		case 'insert':
		
			$codprd 	= $_GET['codprd'	];
			$name 		= $_GET['name'		];
			$code 		= $_GET['code'		];
			$model 		= $_GET['model'		];
			$quantity 	= ($_GET['quantity'] == 'undefined')? 1 : $_GET['quantity'];
			$category 	= $_GET['category'	];
			$session 	= $_SESSION['BUY'	];
			
			$insert = mysql_query("INSERT INTO wp_cart(codprd, model, name, quantity, code, session, category) 
									VALUES (".$codprd.", '".$model."', '".$name."', '".$quantity."', '".$code."', '".$session."', '".$category."')");
			
			if($insert){
				return 'sucsses';
			}else{
				return 'error';
			}
			
		break;
		
		case 'delete':
			
			$delete = mysql_query("DELETE FROM wp_cart WHERE id = ".$_GET['id']);
			
			if($delete){
				$link = $URL.'faca-seu-orcamento/';
				header('Location: '.$link);
			}else{
				$link = $URL.'faca-seu-orcamento/';
				header('Location: '.$link);
			}
			
		break;
		
		case 'count':
			
			$session = $_SESSION['BUY'];
			
			$sql = mysql_query("SELECT id, codprd, model, name, quantity, code, session FROM wp_cart WHERE session = '".$session."'");
			$count = mysql_num_rows($sql);
			
			echo $count;
			
		break;
		
	}


	mysql_close($CONNECT_X);

?>