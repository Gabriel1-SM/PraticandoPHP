<?php
date_default_timezone_set('America/Sao_paulo');
echo "Agora São exatamente";
$manha = range(1,12);
$tarde = range(13,17);
$noite = range(18,23);
$hora = date('H:i');
    if (in_array($hora,$manha)){
        echo " $hora da manhã";
    } if(in_array($hora,$tarde)){
        echo " $hora da tarde";
    } if (in_array($hora,$noite)){
        echo " $hora da noite";
    };
