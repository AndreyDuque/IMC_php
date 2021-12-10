<?php

class IMC{

    public function calculoIMC($peso,$estatura){
            $imc=$peso/(($estatura/100)*($estatura/100));
            return $imc;
        }

    public function estado($nom,$imc){
        if($imc < 18.5){
            echo $nom .", tienes bajo peso";
        }
        elseif($imc >= 18.5 && $imc < 25){
            echo $nom .", tu peso esta dentro de lo normal";
        }
        elseif($imc >= 25 && $imc < 30){
            echo $nom .", tienes sobrepeso";
        }
        elseif($imc >= 30 && $imc < 35){
            echo $nom .", tienes obesidad clase uno";
        }
        elseif($imc >= 35 && $imc < 40){
            echo $nom .", tienes obesidad clase dos";
        }
        else{
            echo $nom .", tienes obesidad clase tres";
        }
    }

}
?>