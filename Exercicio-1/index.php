<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/Exercicio-1/formulario.css">
 <title>Exercicio-1</title>
 </head>
 <body>
    <fieldset id="box">
 <div><strong> <h1  id="tilulo"> Exercício 1 </h1></strong> </div>
 <p><h3 id= "text">Construir um algoritmo que leia 2 números e
    efetue a adição. Caso o valor somado seja
    maior que 20, este deverá ser apresentando
    somando-se a ele mais 8; caso o valor
    somado seja menor ou igual a 20, este deverá
    ser apresentado subtraindo-se 5.</h3></p>

    <div>
        <br /><form id=campo id="formulario" action="/Exercicio-1/index.php" method="post">
          <h4><label for= "number">Valor 1 </label></h4>
          <input type="number" placeholder= "Escolha um número..."name="value1"/>
         <h4> <label for= "number">Valor 2 </label></h4>
           <input type="number" placeholder="Escolha um número..." name="value2"/><br /> <br />
           <p><input type="submit" name="enviar" value="Enviar"/>	</p>
        </div>
  </fieldset>
</body>
</html> 