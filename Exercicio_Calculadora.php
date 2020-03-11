<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8"/>
        <title> Exemplo</title>
    </head>
    <body>
        <h1>Calculadora Básica</h1>
        
        <form action="Exercicio_calculadora.php" method="POST">
            <fieldset>
                <legend>Digite os valores: </legend>
                <p>
                    <label>Primeiro Número: </label>
                    <input  type="text" name="num1"/>
                </p>
                <p>
                    <label>Segundo Número: </label>
                    <input type="text" name="num2"/> 
                </p>
                <p>
                    <label>Escolha a operação: </label>
                    <select name="operacao">
                        <option value="soma">Soma (+)</option>
                        <option value="subtracao">Subtração (-)</option>
                        <option value="multiplicacao">Multiplicação (*)</option>
                        <option value="divisao">Divisão (/)</option>
                    </select>
                </p>
                <input type="submit" value="Calcular" />   
            </fieldset>  
        </form>
            
        <?php           
            if(!empty($_POST)){
                $num1=$_POST["num1"];
                $num2=$_POST["num2"];
                $operacao=$_POST["operacao"];

                if($operacao=="soma"){
                    $soma=$num1+$num2;

                    echo "<h3>O resultado da sua soma é: $soma </h3>";
                } elseif($operacao=="subtracao"){
                    $subtracao=$num1-$num2;

                    echo "<h3>O resultado da sua subtração é: $subtracao </h3>";
                } elseif($operacao=="multiplicacao"){
                    $multiplicacao=$num1*$num2;

                    echo "<h3>O resultado da sua multiplicação é: $multiplicacao </h3>";
                } elseif($operacao=="divisao"){
                    $divisao=$num1/$num2;

                    echo "<h3>O resultado da sua divisão é: $divisao </h3>";
                }
            }
        ?>
    </body>
</html>