<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    //var_dump($Orders);
    //var_dump($Users);
    
    echo "Lista Order : </br></br>";
    
    foreach ($Orders as $ord)
    {
        foreach ($Users as $usr)
        {
            if($ord->user_id == $usr->id)
            {
                echo "Imie : ".$usr->username."</br>"."Email : ".$usr->email."</br>"."Zamówienie numer : ".$ord->order_id."</br>"."Data : ".$ord->date_time."</br>"."---------------------------"."</br>";
            }          
        }
        //echo $rec->order_id." - ";
        //echo $rec->user_id." - ";
        //echo $rec->date_time."<br/>";
        
        
    }
    //echo "spec";