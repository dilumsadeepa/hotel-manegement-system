<?php 

$users = "CREATE TABLE `hotel`.`users` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `name` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `tel` VARCHAR(50) NOT NULL , `password` VARCHAR(255) NOT NULL , `address` VARCHAR(255) NOT NULL , `gender` VARCHAR(20) NOT NULL , `level` VARCHAR(10) NOT NULL DEFAULT '3' , `created_date` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB";


$bookrooms = "CREATE TABLE `hotel`.`bookrooms` ( `id` INT(100) NOT NULL AUTO_INCREMENT , `rid` VARCHAR(100) NOT NULL , `uid` VARCHAR(100) NOT NULL , `numof` VARCHAR(10) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB";



?>