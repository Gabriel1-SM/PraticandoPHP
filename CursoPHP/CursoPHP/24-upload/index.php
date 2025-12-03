<html>
    <body>
<?php
if(isset($_POST['enviar-formulario'])):
 $formatosPermitidos = array( "png");
 $quantidadeArquivos = count($_FILES['arquivo']['name']);
 $contador = 0;
 while ($contador < $quantidadeArquivos):

 $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);
 if(in_array($extensao, $formatosPermitidos)):
  $pasta = "arquivos/";
  $temporario = $_FILES['arquivo']['tmp_name'][$contador];
  $novoNome = uniqid().".$extensao";

   if(move_uploaded_file($temporario, $pasta.$novoNome)):
        $mensagem[] = "Upload feito com sucesso!";
   else:
        $mensagem[] = "erro não foi possivel fazer upload";
   endif;
   
   else:
    $mensagem[] = "formato invalido";
    endif;
echo $mensagem;
endwhile;
endif;
?>
    
<form action="<php echo $_SERVER['PHP_SELF']; ?>" method="POST"
    enctype="multipart/form-data">
    <input type="file" name="arquivo[]" multiple><br>
    <input type="submit" name="enviar-formulario">
</form>
</body>
</html>