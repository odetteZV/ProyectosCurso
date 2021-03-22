<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/resultado.css">
</head>
<body>

<h1>Resultado</h1>
<?php

$contador=0;

$db= new SQlite3('examen.db'); 
$cadena= "SELECT * FROM T_Respuestas";
$res =  $db->query($cadena);

while ($row = $res->fetchArray()){

    if($row['respuesta'] == $_GET[$row['codigo']] ){
        $contador++;
    }
echo("<div class='respuestas'>");    
echo($row['codigo'].".".$_GET[$row['codigo']] );
    if($row['respuesta'] == $_GET[$row['codigo']]){
        echo(' <span class="ok">correcto!</span>');
    }else{
        echo(' <span class="error">incorrecto!</span>');
    }
echo("</div>");
}

$db->close(); 

if ($contador >= 5){
    echo("<div class='result'>");
    echo("<span>Tu nota es: $contador</span>");
    echo("<img class='gif' src='imagenes/unnamed.gif'>"); 
    echo("</div>");
}else{
    echo("<div class='result'>");
    echo("<span>Tu nota es: $contador</span>");
    echo("</div>");
}

$porcentajeNota = ($contador * 100) / (10);


?> 

</body>
</html>
<!--  $p1= $_GET[1] == $_GET[$row['codigo'], $_GET[$row['codigo'] ==respuesta escogida enviada en la url  -->