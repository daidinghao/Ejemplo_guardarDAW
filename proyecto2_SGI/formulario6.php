        <?php
            if(isset($_POST['ElementosPasado'])){
                $lista = $_POST['ElementosPasado'];
            }else{
                $lista = [];
            }
            if(isset($_POST['Elemento'])){
                $lis[] = $_POST['Elemento'];
            }
        ?>
<html>
<head><title>Ejercicio</title></head>
<body>
    <form action="" method="post">
      
    <label for="Elemento">Elemento de Lista:</label><br>
    <input type="text" name="Elemento" value=""><br>

        <?php
            foreach($lista as $Elmento){
                echo '<input type="hidden" name="ElementosPasado[]" value="'.$Elemento.'"><br>';
            }
        ?> 

    <input type="submit" value="Enviar"><br>
    </form>
    <ul>
        <?php
            foreach($lis as $Elemento){
                echo "<li>$Elemento</li>";
             }
        ?>
    </ul>
</body>
</html>


