<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form>
            <input type="text" name="antal">
            <input type="submit">
        </form>
        
        <?php
            if(isset($_GET["antal"])){    
            $storlek = $_GET["antal"];
                
            $namn = array("martin","albin","klas","carl","fgt","prinsessukennyruuuuuuuuu","mr cool","apskaft","fett sne","rebecka");
            $used = array();
            
            echo "<ul>";
            
            for($i = 0; $i < $storlek; $i++){    
            
                do {
                    $sak = rand(0,9);
                } while(in_array($sak, $used));
            
                $used[] = $sak;   

                echo "<li>Det var en solig dag och ".$namn[$sak]." åt glass</li>";
            }
            
            echo "</ul>";
            }
            else{echo "Inga inmatade nummer";}
        
        ?>
    </body>
</html>
