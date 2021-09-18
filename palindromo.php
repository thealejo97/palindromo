<?php
$cadena='abccbx';


IsCasiPalindromo($cadena);

function IsCasiPalindromo($cadena){
    $cadenainvertida = strrev($cadena);
    if ($cadena == $cadenainvertida){
    	$palindromo = true;
        echo "La cadena ". $cadena . " es un palíndromo\n";
    }else{
        $list_cadena = str_split($cadena ); // Creamos una lista con la palabra cadena(STR)
        $list_cadena_invertida = str_split($cadenainvertida);  // Creamos una lista con la palabra  invertida(STR)
        for ($i = 0; $i < count($list_cadena); $i++) { // Vamos a mirar cada carater de la lista palabra original
        	$aux_array= $list_cadena;// Creamos un array auxiliar con la palabra
        	$letra_cambiar =$aux_array[$i]; // Miramos que letra vamos a cambiar de la palabra original
        	
        	
        	//Genero el abcedario para cambiar la letra por cada letra del abcdario
        	for($j=65; $j<=90; $j++) {  
                $letra = strtolower(chr($j)); // Saco la a...b...c...d...->z
                $aux_array[$i] = $letra; //Le cambio al auxiliar(que es la palabra original) la primera letra con a, luego con b... y asi
                $palabraConLetraNueva = implode('',$aux_array); // Guardo la palabra nueva con la letra cambiada
                $palabraConLetraNuevaInvertida = strrev($palabraConLetraNueva);// Invierto la palabra con la nueva letra
                if ($palabraConLetraNueva == $palabraConLetraNuevaInvertida){ // Verificamos si al cambiar la primera letra ya es un palindromo
                	echo "\n";
                	//Imprimo mensaje de que letra deberia cambiar (SOLO INFORMATIVO)
                	echo "Para volver la palabra ". implode('',$list_cadena). " un palindromo ";
                    echo "debe cambiar la letra '".$letra_cambiar. "' por '".$letra ."' para encontrar el palindromo ".$palabraConLetraNueva. "!!!";
                    //Devuelvo true
                    return true;
                }
                //Si no lo es, continua para cambiar la letra por b ...c ...d
                // Una vez acaba la primera letra si al cambiarla por todas las letras no encontro palindromo
                // comienza con la segunda cambiandola hasta que encuentre un palindromo
                
        	}
        }
    echo "No hay forma de obtener un palindromo modificando un solo carácter ";
    return false;
    }

}
?>
