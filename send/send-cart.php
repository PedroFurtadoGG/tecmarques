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
	$mail->AddAddress("vendas@tecmarques.com.br");
	$mail->AddAddress("vendas02@tecmarques.com.br");
	$mail->AddAddress("vendas03@tecmarques.com.br");

	$mail->IsHTML(true);
	$mail->Subject = utf8_encode('Orçamento | TECMARQUES | Formulário de orçamento');
	$mail->Body    = utf8_encode("

		Nome: ".$_POST['nome']." <br><br>
		E-mail: ". $_POST['email'] ."<br><br> 
		Telefone: ". $_POST['telefone'] ."<br><br> 
		Cidade: ". $_POST['cidade'] ."<br><br> 
		Estado: ". $_POST['estado'] ."<br><br> 
		Mensagem: ". $_POST['mensagem'] ."<br><br>
		
		<table width='100%'>
		  <thead>
			<tr>
			  <td>Nome</td>
			  <td>Modelo</td>
			  <td>Quantidade</td>
			  <td>Tipo</td>
			  <td></td>
			</tr>
		  </thead>
		  <tbody>
		  ".$_POST['produtos']."
		  </tbody>
		</table>");

	if(!$mail->Send()) {
		echo "
		<script>
			alert('Mensagem não enviada!');
			window.location.href='http://tecmarques.com.br/site/faca-seu-orcamento/';
		</script>
		";
		unset($_SESSION['BUY']);
	} else {
		echo "
		<script>
			alert('Obrigado! Mensagem enviada com sucesso.');
			window.location.href='http://tecmarques.com.br/site/faca-seu-orcamento/';
		</script>
		";
		unset($_SESSION['BUY']);
	}

?>