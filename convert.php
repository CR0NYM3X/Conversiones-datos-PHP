<?php



// Convertir String a Binario
function str2bin($str){
$bin=null;
    //dividir la cadena y pasarla a un array
    $str_arr = str_split($str, 4);
    
    for($i = 0; $i<count($str_arr); $i++)
        //convertir, corregir ceros y concatenar cada subcadena
        $bin = $bin.str_pad(decbin(hexdec(bin2hex($str_arr[$i]))), strlen($str_arr[$i])*8, "0", STR_PAD_LEFT);
    
    //retornar el resultado
    return $bin;
}







// Convertir String a Hexadecimal
function strToHex($string,$separador="\x"){
    $hex = '';
    for ($i=0; $i<strlen($string); $i++){
        $ord = ord($string[$i]);

        $hexCode = dechex($ord);
        
        $hex .= $separador.substr('0'.$hexCode, -2);
    }
    return ($hex);
}





//Convertir String a Ascii
function StrToAscii($str,$separador=" "):string
{
    $txt="";

    for ($i=0; $i < strlen($str) ; $i++) { 
        $txt.= $separador.ord($str[$i]);
    }

    return $txt;
}





/*
Convierta enteros positivos de 16 bits del host al orden de bytes de la red. En máquinas donde el orden de bytes del host es el mismo que el orden de bytes de la red, esto no es operativo; de lo contrario, realiza una operación de intercambio de 2 bytes.
*/

// Convierte a 16bit el numero que ingreses siempre y cuando se a menor de 16bits, que sea menor que 32767 decimal si se ingresa un numero que sea de 16 bits se invertira el procesos y se convertira el numero a 8 bits
function htons($num)
{
    $bin=decbin($num);
  //  if (strlen($bin)>=16)
    //    return $num;

    $restante= 16- strlen($bin);
    $cerosFaltantes='';

    for ($i=1; $i <= $restante ; $i++) { 
        $cerosFaltantes.='0';
    }

    $bin = $cerosFaltantes.$bin;
    return bindec(substr($bin, 8).substr($bin, 0,8));

}


//print_r(htons(255)."\n");
//print_r(strToHex("hola"));






?>