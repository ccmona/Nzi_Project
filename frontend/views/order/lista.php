<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    //var_dump($Orders);
    
    echo "Lista Order : </br></br>";
    
    foreach ($Orders as $ord)
    {
        echo $ord['order_id']." - ";
        echo $ord['username']." - ";
        echo $ord['email']." - ";
        echo $ord['date_time']."</br>";
    }
        