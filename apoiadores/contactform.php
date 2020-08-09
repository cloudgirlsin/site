<?php

if (isset($_POST['submit'])) {
     
     $name = $_POST['name'];
     $phone = $_POST['tel'];
     $mailFrom = $_POST['mail']; 
     $message = $_POST['message'];

     $mailTo="contato@cloudgirls.com.br";
     $headers="From: ".$mailFrom;
	 $subject="Apoiadores Cloud Girls";
     $txt="Nome:" .$name. ".\nTel:" .$phone. ".\n\n".$message;

     mail($mailTo,$subject, $txt, $headers);
     header("Location: index.html?mailsend");

}
?>