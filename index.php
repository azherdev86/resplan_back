<?php


$user1 = array("email"    => "keg@resplan.ru", 
               "fullname" => "Ким Евгений",
               "position" => "Фронт",
               "unit"     => "Штаб"
               );


$user2 = array("email"    => "azh@resplan.ru", 
               "fullname" => "Алексей Жердев",
               "position" => "Бэк",
               "unit"     => "Штаб"
               );

$user = array($user1, $user2);


$user = array("user" => $user);


header('Content-Type: application/json;');

echo json_encode($user);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

