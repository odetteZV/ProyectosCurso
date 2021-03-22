<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$db= new SQlite3('examen.db');

  
$db->exec("CREATE TABLE T_Preguntas(codigo INTEGER PRIMARY KEY, pregunta TEXT, a TEXT, b TEXT, c TEXT)");

$db->exec("INSERT INTO T_Preguntas VALUES(1,'¿En qué lugar se ejecuta generalmente el código JavaScript?', 'Servidor', 'Cliente (en el propio navegador de internet)', 'En tu casa')");
$db->exec("INSERT INTO T_Preguntas VALUES(2,'JavaScript es un tipo de lenjuage...', 'Compilado', 'Intérpretado', 'Ambos')");
$db->exec("INSERT INTO T_Preguntas VALUES(3,'For es una estructura de control de flujo de tipo... ', 'Alternativa', 'Opcional', 'Repetitiva')");
$db->exec("INSERT INTO T_Preguntas VALUES(4,'¿Cúal de los siguientes no es un método de los Arrays?','.indexOf', '.push','.getElementById')");
$db->exec("INSERT INTO T_Preguntas VALUES(5,'¿Qué método regresa el valor -1 cuando no se encuentra un elemento en un Array?', 'Slice()', 'IndexOf()', 'Push()')");
$db->exec("INSERT INTO T_Preguntas VALUES(6,'El método Pop:', 'Elimina el último elemento de un array', 'Agrega un elemento al final del array', 'Elimina el primer elemento del array')");
$db->exec("INSERT INTO T_Preguntas VALUES(7,'JavaScritp es un lenguaje que permite', 'Estructurar la información de un sitio web', 'Dar estilos a un sitio web', 'Hacer un sitio web dinámico')");
$db->exec("INSERT INTO T_Preguntas VALUES(8,'¿Qué es una funcion?', 'Bloque de código que se ejecuta al llamarlo', 'Objeto similar a una lista', 'Permite ejecutar el flujo de ejecución de las instrucciones de un programa')");
$db->exec("INSERT INTO T_Preguntas VALUES(9,'¿Cuál de los siguientes son eventos del DOM?', 'Onclick', 'Onchange', 'Ambos')");
$db->exec("INSERT INTO T_Preguntas VALUES(10,'JavaScript es..', 'Debilmente tipado', 'Lenguaje marcado', 'Ambos')");


$res = $db->query('SELECT * FROM T_Preguntas');

while ($row = $res->fetchArray()) {
    echo($row['codigo']."&nbsp;".$row['pregunta']."&nbsp;".$row['a']."&nbsp;".$row['b']."&nbsp;".$row['c']."<br>");
}

?>

<hr>

 <?php
$db= new SQlite3('examen.db');

  
$db->exec("CREATE TABLE T_Respuestas(codigo INTEGER PRIMARY KEY, respuesta TEXT)");

$db->exec("INSERT INTO T_Respuestas VALUES(1,'b')");
$db->exec("INSERT INTO T_Respuestas VALUES(2,'b')");
$db->exec("INSERT INTO T_Respuestas VALUES(3,'c')");
$db->exec("INSERT INTO T_Respuestas VALUES(4,'c')");
$db->exec("INSERT INTO T_Respuestas VALUES(5,'b')");
$db->exec("INSERT INTO T_Respuestas VALUES(6,'a')");
$db->exec("INSERT INTO T_Respuestas VALUES(7,'c')");
$db->exec("INSERT INTO T_Respuestas VALUES(8,'a')");
$db->exec("INSERT INTO T_Respuestas VALUES(9,'c')");
$db->exec("INSERT INTO T_Respuestas VALUES(10,'a')");


$res = $db->query('SELECT * FROM T_Respuestas');

while ($row = $res->fetchArray()) {
    echo($row['codigo']."&nbsp;".$row['respuesta']."<br>");
}

?> 
</body>
</html>