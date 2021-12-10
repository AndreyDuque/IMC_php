<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC</title>
    <link rel="stylesheet" href="estilosIMC.css">
</head>
<body>
    <div class="contenedor">
    
        <header class="cabecera">
            <h1>Calcula tu Indice De Masa Corporal</h1>
        </header>

        <main class="cuerpo">
            <?php
                require './metodo_imc.php';
                $imc1=new IMC();
            ?>

            <form id="compra" action="imc.php" method="POST">
                    <h3>Calcular IMC</h3>
                    <br>
                    <label for="fnom">Nombre</label>
                    <br>
                    <input type="text" name="nombre" required="true">
                    <br>
                    <br>
                    <label for="fpeso">Peso(Kg)</label>
                    <br>
                    <input type="text" name="peso" required="true">
                    <br>
                    <br>
                    <label for="festatura">Estatura(Cm)</label>
                    <br>
                    <input type="text" name="estatura" required="true">
                    <br>
                    <br>
                    <button type="submit" name="btnCalcular">Calcular</button>
                    <?php

                        $flecha = array(
                            array("&nbsp","&nbsp","<b>P","R","O","&nbsp","&nbsp","&nbsp"),
                            array("&nbsp","&nbsp","C","U","R","&nbsp","&nbsp","&nbsp"),
                            array("&nbsp","&nbsp","A","C","U","&nbsp","&nbsp","&nbsp"),
                            array("I","D","A","R","S","I","E","M"),
                            array("&nbsp","P","R","E","D","E","T","&nbsp"),
                            array("&nbsp","U","S","A","L","&nbsp","&nbsp","&nbsp"),
                            array("&nbsp","&nbsp","&nbsp","U","D</b>","&nbsp","&nbsp","&nbsp")
                        );

                        $datos = array("<b>IMC: </b>",);

                        if(isset($_POST["btnCalcular"])):
                            $nombre=$_POST["nombre"];
                            $peso=$_POST["peso"];
                            $estatura=$_POST["estatura"];
                            echo "<br><br>";
                            $j=0;
                            $coun=0;
                            for($i=0; $i<8; $i++){
                                echo $flecha[$j][$i];
                                if($i==7){
                                    echo "<br>";
                                    $coun=$coun+1;
                                    $j=$j+1;
                                    $i=-1;
                                if($coun==7){
                                    $i=8;
                                }    
                                }
                            }
                            echo "<br>Su <b>IMC</b> es de: " .$imc1->calculoIMC($peso,$estatura) ."&nbsp" ."|" ."&nbsp" ."<b>Peso</b>: " 
                            .$peso ."Kg" ."&nbsp" ."|" ."&nbsp" ."<b>Estatura: </b>" .$estatura ."Cm";
                            echo "<br><br>";
                            echo $imc1->estado("<b>$nombre</b>",$imc1->calculoIMC($peso,$estatura));
                            
                        endif;
            
                    ?>
            </form>
        </main>

        <footer class="pie">
            <h3>
                Programación para la Web
                <br>
                Dubier Andrey Duque Galvis
            </h3>
        </footer>
    
    </div>
</body>
</html>