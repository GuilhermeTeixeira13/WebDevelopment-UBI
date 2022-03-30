<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="pacientes2.css" rel="stylesheet" />
  <title>Document</title>
</head>
<body>
  <?php 
    $xml = simplexml_load_file("pacientes.xml");
    echo "<h2>Pacientes</h2><br />";

    echo "<table border='1'>";
    echo "<tr><td>ID</td><td>Sexo</td><td>Ano Nascimento</td><td>BI</td><td>Contribuinte</td><td>Sistema de Saúde</td><td>Doutor</td></tr>";
    foreach($xml->children() as $paciente)
    {  
      if((date("Y") - $paciente->anoNascimento) < 18){
        echo "<tr>";  
        echo "<td>".$paciente->id."</td>";
        echo "<td>".$paciente->sexo."</td>";
        echo "<td>".$paciente->anoNascimento."</td>";
        echo "<td>".$paciente->bi."</td>";
        echo "<td>".$paciente->contribuinte."</td>";
        echo "<td>".$paciente->sistemaSaude."</td>";
        if($paciente->sexo == "M"){
          echo "<td>Dr.Marcelo Pereira</td>";
        }
        else{
          echo "<td>Dra.Josefina Fontes</td>";
        }
        echo "</tr>";
      }      
    }
    echo "</table>";
  ?>
</body>
</html>