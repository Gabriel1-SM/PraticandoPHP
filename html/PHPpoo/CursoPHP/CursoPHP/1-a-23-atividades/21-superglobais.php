<?php
/********** SuperGlobais *********/
/*
$GLOBALS:	Acessar variáveis globais dentro de funções
$_SERVER:	Dados do servidor e da requisição (array que contem indice)
$_REQUEST:	Coletar dados de GET/POST/COOKIE (não recomendado para tudo)
$_POST:	    Dados enviados por formulários via POST
$_GET:	    Dados enviados pela URL
$_FILES:	Upload de arquivos
$_ENV:	    Variáveis de ambiente do sistema
$_COOKIE:	Dados persistentes no navegador
$_SESSION:	Dados temporários do usuário no servidor
*/

$x = 10;
$y = 10;

function soma() {
    echo $GLOBALS['x'] + $GLOBALS['y'];
}
soma();

echo "<hr>";
/********** SERVER *********/
echo $_SERVER['PHP_SELF']."<BR>";
echo $_SERVER['SERVER_NAME']."<BR>";
echo $_SERVER['SCRIPT_FILENAME']."<BR>";
echo $_SERVER['DOCUMENT_ROOT']."<BR>";
echo $_SERVER['SERVER_PORT']."<BR>";
echo $_SERVER['REMOTE_ADDR']."<BR>";

/********** ´POST *********/

