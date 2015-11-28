<?php
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    
    //var_dump($records);
    
    echo "Lista użytkowników : <br/>";
    foreach ($records as $rec)
    {
        echo $rec->username." - ";
        echo $rec->email."<br/>";
    }
    //echo "spec";