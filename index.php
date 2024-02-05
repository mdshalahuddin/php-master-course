<?php

$names = ['sadek','ariful','sabir','kamrul'];
$users =[
    ['name'=>'rasel','email'=>'rasel@Email.com'],
    ['name'=>'nasir','email'=>'nasir@Email.com'],
    ['name'=>'ariful','email'=>'ariful@Email.com'],
    ['name'=>'samad','email'=>'samad@Email.com']
]

?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Php Loops</h1>
        </div>
    </header>
    <div class="container p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <h3 class="text-xl font-semibold mb-4">Using a for loop</h3>
            <ul class="mb-6">
                <?php for($i = 0; $i < count($names); $i++):?>
                <li><?= $names[$i]?></li>
                <?php endfor?>
            </ul>
            <h3 class="text-xl font-semibold mb-4">Using a foreach loop</h3>
            <ul class="mb-6">
                <?php foreach($names as $name):?>
                <li><?= $name?></li>
                <?php endforeach?>
            </ul>
            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with index</h3>
            <ul class="mb-6">
                <?php foreach($names as $index => $name):?>
                <li><?= $index.' '.$name?></li>
                <?php endforeach?>
            </ul>
            <h3 class="text-xl font-semibold mb-4">Using a foreach loop with associative array</h3>
            <ul class="mb-6">
                <?php foreach($users as $user):?>
                <li><?= $user['name'].' : '.$user['email']?></li>
                <?php endforeach?>
            </ul>
            <h3 class="text-xl font-semibold mb-4">getting key names and value from associative array </h3>
            <ul class="mb-6">
                <?php foreach($users as $user):?>
                <?php foreach($user as $key => $value):?>
                <li><?= $key.'='.$value?></li>
                <?php endforeach?>
                <?php endforeach?>
            </ul>

        </div>
    </div>
</body>

</html>