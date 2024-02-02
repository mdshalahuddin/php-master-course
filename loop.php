<?php

// for($i = 1; $i <= 20; $i++){ // 1 print
//     for($j = 1; $j <= 10; $j++){ // 10 print
//         echo $i.'x'.$j.'='.$i*$j.'<br>';
//     }
// }

// $numbers = [1,2,3,4,5];
// $sum = 0;

// foreach($numbers as $number){
    
//     $sum+=$number;
// }
// echo $sum;
$students =[
    'Bangla' => 77,
        'English' => 67,
        'Math' => 98,
        'Chemistry' => 57,
        'Physics' => 89
];
foreach($students as $key => $student){
    echo '<li>'.$key.' '.$student.'</li>';
}
?>