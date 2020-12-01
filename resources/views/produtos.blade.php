<h1>Produtos</h1>
<a href="http://localhost:8000/">Voltar ao Menu</a>
<h5>Lista de porcas, parafusos, e roelas </h5>
<?php
$n = $_GET['n'];
$a = ['porca','parafuso','roela'];
$aResutado = array();
$po = 1;
$pf = 2;
$ro = 3;
for ($i = 1; $i<$n+1; $i++){
    
    if($i==$po){
        echo ($po.'- '.$a[0]." diam: ".($i*5)." mm   <br>");
        $po = $po+3;
    }
    if($i==$pf){
        echo ($pf.'- '.$a[1]." diam: ".($i*5-5)." mm  <br> ");
        $pf = $pf+3;
    }
    if($i==$ro){
        echo ($ro.'- '.$a[2]." diam: ".($i*5-10)." mm <br> <br>");
        $ro = $ro+3;
    }

}