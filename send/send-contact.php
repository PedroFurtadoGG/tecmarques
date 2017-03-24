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
	$mail->Subject = utf8_encode('Nova mensagem | TEC MARQUES | Formulário de contato');
	$mail->Body    = utf8_encode("
		Nome: ".$_POST['nome']." <br><br>
		E-mail: ". $_POST['email'] ."<br><br> 
		Telefone: ". $_POST['telefone'] ."<br><br> 
		Mensagem: ".$_POST['mensagem']);
	
	if(!$mail->Send()) {
		echo "
		<script>
			alert('Mensagem não enviada!');
			window.location.href='http://tecmarques.com.br/site/fale-conosco/';
		</script>
		";
	} else {
		echo "
		<script>
			alert('Obrigado! Mensagem enviada com sucesso.');
			window.location.href='http://tecmarques.com.br/site/fale-conosco/';
		</script>
		";
	}

?>