<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <pre>
        <?php
        require_once'Caneta.php';
        
        /*$c1 = new Caneta;
        $c1->setModelo("Bic");
        $c1->setCor("Azul");
        $c1->setPonta(2.0);
        $c1->setTampado(true);
        $c1->rabiscar();
        
        
        $c2 = new Caneta;
        $c2->setModelo("Bic");
        $c2->setCor("Vermelha");
        $c2->setPonta(1.5);
        $c2->setTampado(False);
        $c2->rabiscar();*/
        $c1 = new Caneta("Bic","Azul","Fina",1.5);
        $c2 = new Caneta("Bic","Vermelha","Grossa",2.0);
        $c1->setTampado(false);
        $c1->rabiscar();
        $c2->setTampado(true);
        $c2->rabiscar();
        
        print "<p>Eu tenho uma caneta {$c1->getModelo()} de cor {$c1->getCor()}.</p>";
        print_r($c1);
        print_r($c2);
        
        ?>
        </pre>
    </body>
</html>
