
<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO concursos (perior, valor, prova_data, horario, duracao, faixa, sexo,cursos, beneficios, sobre, material, gabarito, simulado)
VALUES ('".$_POST["perior"]."', ".$_POST["valor"]."', ".$_POST["prova_data"]."', ".$_POST["horario"]."', ".$_POST["duracao"]."', "
        . "".$_POST["faixa"]."',".$_POST["sexo"]."',".$_POST["cursos"]."',".$_POST["beneficios"]."',".$_POST["sobre"]."',"
        . "".$_POST["material"]."',".$_POST["gabarito"]."',".$_POST["simulado"]."',)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>