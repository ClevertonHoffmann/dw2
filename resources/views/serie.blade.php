<h1>Serie</h1>
<a href="http://localhost:8000/">Voltar ao Menu</a>
<h5>Serie gerada conforme valores de x, y e z passados na url respectivamente </h5><br>

<?php
$x = $_GET['x'];
$y = $_GET['y'];
$z = $_GET['z'];

echo("<h5>Iniciando em ".$x." até ".$y.", com intervalo de ".$z." </h5>");

if($x=='x' || $y=='y' || $z=='z'){
    echo("Passe um valor para a(s) variável(is) que falta(m), para gerar a serie!");
}else{
    if($z<0){
        for ($i = $x; $i>$y-1; $i=$i+$z){

            echo ''.$i.'<br>';
    
        }
    }else{
        for ($i = $x; $i<$y+1; $i=$i+$z){

            echo ''.$i.'<br>';
    
        }
    }
    if(($y>$x)&&($z<=0)||($y<$x)&&($z>=0)){
        echo("Informe um valor válido para gerar uma série!");
    }
}