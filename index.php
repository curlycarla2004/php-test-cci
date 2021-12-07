<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8" />
      <title>Ma première page PHP test github</title>
   </head>

   <body>
        <h1>Hello</h1>

        <?php
        
        //Exercise 1
        // $htprice = 150;
        // $tva = 20/100;
        // $ttc = $htprice * (1 + $tva);  
        // echo $ttc;

        //Exercise 2
        // echo '<br>';
        // echo 'In 65 000ms there is '. gmdate("H:i:s", 65000) . '. This is my result!';

        //Exerciese 3
        // echo '<br>';
        // $remise_5 = 5;
        // $remise_15 = 15;
        // $prix  = 504;

        // if($prix < 500) {
        //     echo 'The remise is 5% on price ';
        // }else {
        //     echo 'The remise is 15% on price ';
        // }
        // echo $prix;

        // Exercise 4

        // $hour = '15';
        // $minutes = date('i');

        // if($hour > 12 && $hour>6) {
        //     echo 'Bonne matinée';
        // } elseif ($hour<'13:30' && $hour> 12){
        //     echo 'Bonne appétit';
        // } elseif ($hour>'13:30' && $hour< 18){
        //     echo 'Bonne apres-midi';
        // } elseif ($hour> 18 && $hour< 23 ){
        //     echo 'Bonne soirée';
        // } elseif ($hour>23 && $hour< 5){
        //     echo 'Bonne appétit';
        // }
        //Exercise 5



        /* -------------------------
         * Total d'un achat
         * ------------------------- */
        echo '<h4>Exercice 1</h4>'; 
        
        $priceHT = 100;
        $vat = 20;
        $priceTTC = $priceHT * (1 + $vat/100);
        
        echo 'Prix TTC : '.$priceTTC;
        
        /* -------------------------
         * Conversion de date
         * Rappel : 1h = 60m = 3600s
         * ------------------------- */
        echo '<br><h4>Exercice 2</h4>';
        
        $time = 12334;
        $time = time();
        $h = intval($time/3600);
        $m = intval($time%3600 / 60);
        $s = intval($time%3600 % 60);
        
        echo $h.'h '.$m.'m '.$s.'s';
        
        /* -------------------------
         * Condition de remise
         * ------------------------- */
        echo '<br><h4>Exercice 3</h4>';
        
        $price = 1000;
        $remise1 = 5;
        $remise2 = 15;
        
        if ($price < 100) {
            echo 'Prix sans remise : '.$price;
        } elseif ($price < 500) {
            echo 'Prix avec remise '.$remise1.'% : '.($price*(1 - $remise1/100));
        } else {
            echo 'Prix avec remise '.$remise2.'% : '.($price*(1 - $remise2/100));
        }
        
        /* -------------------------
         * Message par heure
         * ------------------------- */
        echo '<br><h4>Exercice 4</h4>';
        
        $h = date('g')+5;
        $m = date('i');
        echo 'Il est '.$h.':'.$m.'<br>';
        
        if ($h < 5 or $h >= 23) {
            echo 'Bonne nuit';
        } elseif ($h < 12) {
            echo 'Bonne matinée';
        } elseif ($h + $m/100 < 13.3) {
            echo 'Bonne appétit';
        } elseif ($h < 18) {
            echo 'Bonne après-midi';
        } else {
            echo 'Bonne soirée';
        }
        

        echo '<br><h4>Exercice 1 Pratique Boucles</h4>';
        // $number = 5;
        // $star = str_repeat('*', $number);
        // for ($i = 0; $i < $number ; $i++) {
        //     $total = $star;
        //     $number++;
        // }
       
        // echo "<table border =\"1\" style='border-collapse: collapse'>";
        //     for ($row=1; $row <= 5; $row++) { 
        //         echo "<tr> \n";
        //         for ($col=1; $col <= 5; $col++) { 
        //             $p = $col * $row;
        //             echo "<td>$p</td> \n";
        //             }
        //             echo "</tr>";
        //         }
        //         echo "</table>";


        $rows = 4; 
        $cols = 3; 
        echo '<table border="1">'; 
        for($i=1;$i<=$rows;$i++){ echo '<tr>'; 
            for($j=1;$j<=$cols;$j++){ echo '<td>' . mt_rand($i, $i*100) . mt_rand($j, $j*100) . '</td>'; } 
            echo '</tr>'; 
        } 
        echo '</table>'; 
        
            

        ?><br>

      
   </body>
</html>