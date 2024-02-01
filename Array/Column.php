<?php
    $info = array(
        array(
            'id' => 1,
            'name' => 'John',
            'city' => 'Sylhet'
        ),
        array(
            'id' => 2,
            'name' => 'David',
            'city' => 'Dhaka'
        ),
        array(
            'id' => 3,
            'name' => 'Wick',
            'city' => 'Rajshahi'
        )
    );

    $array = array_column($info,'city');

    echo '<pre>';
        print_r($array);
    echo '</pre>';
?>