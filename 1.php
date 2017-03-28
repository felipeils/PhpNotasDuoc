<?php
function validaRut($rut){
    if(strpos($rut,"-")==false){
        $RUT[0] = substr($rut, 0, -1);
        $RUT[1] = substr($rut, -1);
    }else{
        $RUT = explode("-", trim($rut));
    }
    $elRut = str_replace(".", "", trim($RUT[0]));
    $factor = 2;
    for($i = strlen($elRut)-1; $i >= 0; $i--):
        $factor = $factor > 7 ? 2 : $factor;
        $suma += $elRut{$i}*$factor++;
    endfor;
    $resto = $suma % 11;
    $dv = 11 - $resto;
    if($dv == 11){
        $dv=0;
    }else if($dv == 10){
        $dv="k";
    }else{
        $dv=$dv;
    }
   if($dv == trim(strtolower($RUT[1]))){
       return true;
   }else{
       return false;
   }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
       <form method="post" action="">
<label for="rut">Ingresa tu RUT para validar</label>
<input name="rut" value="" type="text" />
<input type="submit" value="probar" />
</form>
<div>
<?php 
if($_POST['rut']){
    if(validaRut($_POST['rut'])==true){
        echo "El rut ".$_POST['rut']." es v&aacute;lido";
    }else{
         echo "El rut ".$_POST['rut']." no es incorrecto";
    }
}

?>
</div>

    </body>
</html>