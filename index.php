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
<!--        <form>
            <input type="text" name="namn">
            <input type="submit"> 
        </form>-->
        <?php
        
//        var_dump($_GET);
//        echo $_GET["namn"];
        
        $namn = array("martin","albin","klas","carl","fgt","prinsessukennyruuuuuuuuu","mr cool","apskaft","fett sne","rebecka");
        $sak = rand(0,9);
        
        echo "Det var en solig dag och ".$namn[$sak]." åt glass";
        
        
        
        ?>
    </body>
</html>
