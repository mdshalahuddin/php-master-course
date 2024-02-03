<?php

$listings = [
    [
        'id'=>1,
        'title'=> 'Software Engineer',
        'description' => 'We are seeking a skilled software engineer to develop high-quality software solution.',
        'salay' => 8000,
        'location'=> 'Dhaka',
        'tags'=> ['Software Development','java','Php']
    ],
    [
        'id'=>2,
        'title'=> 'Marketing Specialist',
        'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
        'salay' => 6000,
        'location'=> 'Sylhet',
        'tags'=> ['Digital Marketing','Social Media','SEO']
    ],
    [
        'id'=>3,
        'title'=> 'Accountant',
        'description' => 'We are hiring a skilled experienced accountant to develop high-quality software solution.',
        'salay' => 8000,
        'location'=> 'Chitagang',
        'tags'=> ['Accountant','Bookkeeping','Financial']
    ],
    [
        'id'=>4,
        'title'=> 'UX Designer',
        'description' => 'We are seeking  a skilled UX Design  to develop high-quality software solution.',
        'salay' => 8000,
        'location'=> 'Rajshahi',
        'tags'=> ['User Experience','Wireframing','Prototyping']
    ],
    [
        'id'=>5,
        'title'=> 'Customer Service',
        'description' => 'We are looking  for a friendly  to develop high-quality software solution.',
        'salay' => 8000,
        'location'=> 'Rajshahi',
        'tags'=> ['Customer Support','Communication','Problem Solving']
    ],
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
            <h1 class="text-3xl font-semibold">Job Listing</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="md my-4">
            <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Software Engineer</h2>
                    <p class="text-gray-700 text-lg mt-2">We are seeking a skilled software engineer to develop
                        high-quality software solution.
                    </p>
                    <ul class="mt-4">
                        <li class="mb-2">
                            <strong>Salary</strong>$8000
                        </li>
                        <li class="mb-2">
                            <strong>Location:</strong>Dhaka
                        </li>
                        <li class="mb-2">
                            <strong>Tags:</strong>Software Development,java,Php
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="md my-4">
            <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                <div class="p-4">
                    <h2 class="text-xl font-semibold">Marketing Specialist</h2>
                    <p class="text-gray-700 text-lg mt-2">We are looking for a marketing specialist to develop and
                        implement effective marketing strategies.
                    </p>
                    <ul class="mt-4">
                        <li class="mb-2">
                            <strong>Salary</strong>$7000
                        </li>
                        <li class="mb-2">
                            <strong>Location:</strong>Sylhet
                        </li>
                        <li class="mb-2">
                            <strong>Tags:</strong>Digital Marketing,Social Media,SEO
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>