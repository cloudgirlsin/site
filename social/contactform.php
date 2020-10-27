<?php

if (isset($_POST['submit'])) {
     
     $name = $_POST['name'];
     $nameResp = $_POST['name-resp'];
     $phone = $_POST['tel'];
     $mailFrom = $_POST['mail']; 
     $site = $_POST['site'];
     $message = $_POST['message'];

     $mailTo="contato@cloudgirls.com.br";
     $headers="From: ".$mailFrom;
	 $subject="Projeto Social - novo site";
     $txt="Nome:" .$name. "Nome-Resp:" .$nameResp. ".\nTel:" .$phone. "Site:" .$site. ".\n\n".$message;

     mail($mailTo,$subject, $txt, $headers);
     header("Location: index.html?mailsend");

}
?>