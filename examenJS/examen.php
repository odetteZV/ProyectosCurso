<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/examen.css">
</head>
<body>

<h1>Test de JavaScript</h1>
 <?php

$db= new SQlite3('examen.db'); 
$cadena= "SELECT * FROM T_Preguntas";
$res =  $db->query($cadena);

echo('<form method="get" action="resultado.php">');
while ($row = $res->fetchArray()){

    echo("<div class='question'>"
    .$row['codigo'].".-".$row['pregunta'].
    "<label>a.<input value='a' type='radio' name='".$row['codigo']."'>".$row['a']."</label>".
    "<label>b.<input value='b' type='radio' name='".$row['codigo']."'>".$row['b']."</label>".
    "<label>c.<input value='c' type='radio' name='".$row['codigo']."'>".$row['c']."</label>".
        "</div>");
}
echo('<input class="button" type="submit" name="Enviar">');
echo('</form>');
$db->close(); 

?> 

</body>
</html>