<?php 
 

function dataPt($dados){
   
    $a= explode('-',$dados );
     return "$a[2]/$a[1]/$a[0]";
    


}


?>