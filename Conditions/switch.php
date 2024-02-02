<?php

/* 

    $mark = 75;

    switch(true) {
        case ($mark >=80):
            echo 'A+';
            break;
        case ($mark >=70 && $mark <=79):
            echo 'A';
            break;
        case ($mark >=60 && $mark <=69):
            echo 'B';
            break;
        case ($mark >=50 && $mark <=59):
            echo 'C';
            break;
        case ($mark >=40 && $mark <=49):
            echo 'D';
            break;
        default:
            echo 'You are Failed';
    }

    */

    $food = "Mango";

    switch($food) {
        case 'Orange':
            echo 'This is Orange';
            break;
        
        case 'Banana':
            echo 'This is Banana';
            break;

        case 'Mango';
            echo 'This is Mango';
            break;

        default:
            echo 'Food name not match!';
    }