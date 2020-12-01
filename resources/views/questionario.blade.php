<h1>Questionário</h1>
<a href="http://localhost:8000/">Voltar ao Menu</a> </br></br>

<?php

$r1 = $_GET['r1']; 
$r2 = $_GET['r2']; 
$r3 = $_GET['r3']; 
$r4 = $_GET['r4']; 
$r5 = $_GET['r5']; 
$r6 = $_GET['r6']; 
$r7 = $_GET['r7']; 
$r8 = $_GET['r8']; 
$r9 = $_GET['r9']; 
$r10 = $_GET['r10'];

if(($r1!='r1')&&($r2!='r2')&&($r3!='r3')&&($r4!='r4')&&($r5!='r5')&&($r6!='r6')&&($r7!='r7')&&($r8!='r8')&&($r9!='r9')&&($r10!='r10')){

    if($r1 == 'A'){
        echo ('Questão 1 respondida corretamente Resposta:'.$r1);
    }else{
        echo ('Questão 1 alternativa '.$r1.' ERRADA! Resposta Correta: A');
    }
    echo('<br><br>');
    if($r2 == 'B'){
        echo ('Questão 2 respondida corretamente Resposta:'.$r2);
    }else{
        echo ('Questão 2 alternativa '.$r2.' ERRADA! Resposta Correta: B');
    }
    echo('<br><br>');
    if($r3 == 'C'){
        echo ('Questão 3 respondida corretamente Resposta:'.$r3);
    }else{
        echo ('Questão 3 alternativa '.$r3.' ERRADA! Resposta Correta: C');
    }
    echo('<br><br>');
    if($r4 == 'D'){
        echo ('Questão 4 respondida corretamente Resposta:'.$r4);
    }else{
        echo ('Questão 4 alternativa '.$r4.' ERRADA! Resposta Correta: D');
    }
    echo('<br><br>');
    if($r5 == 'E'){
        echo ('Questão 5 respondida corretamente Resposta:'.$r5);
    }else{
        echo ('Questão 5 alternativa '.$r5.' ERRADA! Resposta Correta: E');
    }
    echo('<br><br>');
    if($r6 == 'E'){
        echo ('Questão 6 respondida corretamente Resposta:'.$r6);
    }else{
        echo ('Questão 6 alternativa '.$r6.' ERRADA! Resposta Correta: E');
    }
    echo('<br><br>');
    if($r7 == 'D'){
        echo ('Questão 7 respondida corretamente Resposta:'.$r7);
    }else{
        echo ('Questão 7 alternativa '.$r7.' ERRADA! Resposta Correta: D');
    }
    echo('<br><br>');
    if($r8 == 'C'){
        echo ('Questão 8 respondida corretamente Resposta:'.$r8);
    }else{
        echo ('Questão 8 alternativa '.$r8.' ERRADA! Resposta Correta: C');
    }
    echo('<br><br>');
    if($r9 == 'B'){
        echo ('Questão 9 respondida corretamente Resposta:'.$r9);
    }else{
        echo ('Questão 9 alternativa '.$r9.' ERRADA! Resposta Correta: B');
    }
    echo('<br><br>');
    if($r10 == 'A'){
        echo ('Questão 10 respondida corretamente Resposta:'.$r10);
    }else{
        echo ('Questão 10 alternativa '.$r10.' ERRADA! Resposta Correta: A');
    }
    echo('<br><br>');

}else{

echo("Responda na barra de pesquisa TODAS as questões com as alternativas A até E respectivamente para cada questão conforme considerar a resposta correta! (Resultado apenas se responder todas as questões) <br><br>");

for ($i = 1; $i<11; $i++){
    echo('
            Questão '.$i.':
            ................
            
                <br><br>
                Alternativa A - .....
                <br><br>
                Alternativa B - .....
                <br><br>
                Alternativa C - .....
                <br><br>
                Alternativa D - .....
                <br><br> 
                Alternativa E - .....
                <br><br> 
                <br><br> 
    ');
    }

}

?>