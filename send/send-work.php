<?php
	
	error_reporting("E_NOTICE");	
	require("class.phpmailer.php");
	
	$mail = new PHPMailer();
	$mail->Port = 587;
	$mail->IsSMTP();
 	$mail->SMTPAuth = true;
    $mail->Host = "mail.nextsites.com.br";
    $mail->Username = 'programacao@nextsites.com.br';
    $mail->Password = "xyz@2016";
	
	$mail->From = "contato@tecmarques.com.br";
	$mail->FromName = "Contato - Tecmarques.com.br";
	$mail->AddAddress("tecmarques@tecmarques.com.br");

	$mail->IsHTML(true);
	$mail->Subject = 'Nova mensagem | TEC MARQUES | Trabalhe Conosco';
	
	$link  = NULL;
	
	if(!empty($_FILES)){
		
		$dir = '../uploads/'.date('Y').'/'.date('m').'/'.date('d').'/';
		$urlarq = 'uploads/'.date('Y').'/'.date('m').'/'.date('d').'/';
		if (!file_exists($dir)){
			mkdir($dir, 0755, true);
			chmod($dir, 0755);
		}

		$MaxTam = 1024 * 10240;

		$_FILES['arquivo']['name'] = array_unique($_FILES['arquivo']['name']);
		$imagens_form = $_FILES['arquivo'];

		foreach ($imagens_form['name'] as $chave => $nome_foto){
			$tamanho = $imagens_form['size'][$chave];
			if ($tamanho <= $MaxTam) {
				$tmp 	 = $imagens_form['tmp_name'][$chave];
				$type 	 = $imagens_form['type'][$chave];
				$extimg = explode(".", $imagens_form['name'][$chave]);
				$extimg = $extimg[count($extimg) -1];
				$arquivo = md5($imagens_form['name'][$chave].time()).".".$extimg;

				$upload = move_uploaded_file($tmp, $dir.$arquivo);

				if($upload){
					$link = "http://tecmarques.com.br/site/".$urlarq.$arquivo;
				}
			}
		}

	}
	
	$mail->Body    = "
		Nome: ".$_POST['nome']." <br>
		E-mail: ". $_POST['email'] ."<br>
		Telefone: ". $_POST['telefone'] ."<br>
		Mensagem: ".$_POST['mensagem']."<br>
		LINK DO CURRICULUM: <a href='".$link."'>".$link."</a>";
	
	if(!$mail->Send()) {
		echo "
		<script>
			alert('Mensagem não enviada!');
			window.location.href='http://tecmarques.com.br/site/trabalhe-conosco/';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Obrigado! Mensagem enviada com sucesso.');
			window.location.href='http://tecmarques.com.br/site/trabalhe-conosco/';
		</script>
		";
	}
	
?>