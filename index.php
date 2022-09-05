<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./multimedia/game_fun_family_bingo_activity_icon_225822.png"  alt="imagen juego bingo">
    <link rel="stylesheet" href="./css/style.css">
    <title>Juego del Bingo</title>
</head>
<body class="body">
    <p align='center'>BIENVENIDOS AL JUEGO DEL BINGO!</p>

<?php 

function generar_array_numeros_aleatorios() {
    $carton = [];
    for($i=0; $i<=13; $i++){  
        $numerosCarton=mt_rand(1,89);
        
        while (in_array($numerosCarton, $carton )){
            $numerosCarton = mt_rand(1, 89); 
        }
        array_push($carton,$numerosCarton);      
    }  
    sort($carton);
    return $carton;
}

$valor_array = generar_array_numeros_aleatorios();
$ultimo_num = 90;

$tabla = "<table width='25%' border='1' align='center'>
            <tr> <td>$valor_array[0]</td> <td bgcolor='black'></td> <td>$valor_array[1]</td> <td bgcolor='black' bgcolor='black'></td> <td>$valor_array[2]</td> <td>$valor_array[3]</td> <td bgcolor='black'></td> <td>$valor_array[4]</td> <td bgcolor='black'></td> </tr>
            <tr> <td bgcolor='black'></td> <td>$valor_array[5]</td> <td>$valor_array[6]</td> <td bgcolor='black'></td> <td>$valor_array[7]</td> <td bgcolor='black'></td> <td>$valor_array[8]</td> <td bgcolor='black'></td> <td>$valor_array[9]</td> </tr>
            <tr> <td>$valor_array[10]</td> <td bgcolor='black'></td> <td bgcolor='black'></td> <td>$valor_array[11]</td> <td bgcolor='black'></td> <td>$valor_array[12]</td> <td>$valor_array[13]</td> <td bgcolor='black'></td> <td>$ultimo_num</td> </tr>
          </table> 
        <div  align='center' style='margin-top:20px ;
        '><input id= 'div_boton' style='color=red' type='button' value='Actualizar' onclick = 'location.reload()'> </div>";

echo $tabla;


$numeros = 15;
$cant_bolas = 40;
$bolas_totales = 90;

function calcular_probabilidades($numeros, $cant_bolas, $bolas_totales){
    return $numeros/$cant_bolas/$bolas_totales;
}

$resultado_prob = calcular_probabilidades($numeros, $cant_bolas, $bolas_totales);
echo "-Las probabilidades de adivinar los 15 numeros</br> en 40 bolas es de " . $resultado_prob . ".";


function calcular_cant_combinaciones_cartones($numeros, $bolas_totales ){
    return $numeros*$bolas_totales;
}

$resultado_cartones = calcular_cant_combinaciones_cartones($numeros, $bolas_totales );
echo "</br> -La cantidad de combinaciones posibles de cartones es de " . $resultado_cartones . ".";

?>
</body>
</html>




