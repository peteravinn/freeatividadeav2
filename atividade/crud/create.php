<?php
//CONEXÃO E CADASTRO DE ATIVIDADE

// Dados de conexão LOCAL
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "atividade"

// Dados de conexão infinityFree

$servername = "sql208.epizy.com";
$username = "epiz_28402665";
$password = "EOzZTo1uVr";
$dbname	= "epiz_28402665_atividade";
;

try{
$conn = new PDO("mysql:host=$servername;dbname=$dbname=charset=utf8", $username, $password,);
// set the PDO error mode to exception
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$sql = "INSERT INTO dados (Aluno, Disciplina, 'Nota_1', 'Nota_2')
VALUES ('Andre', 'Web', 10, 10,)";
// use exec() bacause no results are returned
$conn->exec($sql); 
echo "atividade cadastrada com sucesso";
} catch(PDOException $e) {
echo" $sql . "<br>" . $e->getMessage();
}

$conn = null;
?>
