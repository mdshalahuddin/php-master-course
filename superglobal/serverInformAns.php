<?php
// Common server variable:

$requestMethod = $_SERVER['RESQUEST_METHOD'] ?? '';
$serverProtocol = $_SERVER['SERVER_PROTOCOL'] ?? '';
$serverName =  $_SERVER['SERVER_NAME'] ?? '';
$serverPort =  $_SERVER['SERVER_PORT'] ?? '';
$serverSoftware =  $_SERVER['SERVER_SOFTWARE'] ?? '';
$serverAdmin =  $_SERVER['SERVER_ADMIN'] ?? '';
$documentRoot =  $_SERVER['DOCUMENT_ROOT'] ?? '';
$scriptFilename =  $_SERVER['SCRIPT_FILENAME'] ?? '';
$scriptName =  $_SERVER['SCRIPT_NAME'] ?? '';
$phpSelf =  $_SERVER['PHP_SELF'] ?? '';
$remoteAddr =  $_SERVER['REMOTE_ADDR'] ?? '';
$connection =  $_SERVER['HTTP_CONNECTION'] ?? '';
$host =  $_SERVER['HTTP_HOST'] ?? '';
$referer = $_SERVER['HTTP_REFERER'] ?? '';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '';
$queryString =  $_SERVER['QUERY_STRING'] ?? '';
$requestUri =  $_SERVER['REQUEST_URI'] ?? '';


?>
<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="container mx-auto p-8 bg-white shadow-md mt-10 rouded-lg">
        <h1 class="text-3xl font-semibold mb-4 text-center ">Server Information</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Request Method:</strong>
                <?= $requestMethod?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Server Protocol:</strong>
                <?= $serverProtocol?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Server Name:</strong>
                <?= $serverName?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Server Port:</strong>
                <?= $serverPort?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Server Software:</strong>
                <?= $serverSoftware?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Server Admin:</strong>
                <?= $serverAdmin?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Document Root:</strong>
                <?= $documentRoot?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Script Filename:</strong>
                <?= $scriptFilename?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Script Name:</strong>
                <?= $scriptName?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Php Self:</strong>
                <?= $phpSelf?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Remote Addr:</strong>
                <?= $remoteAddr?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Connection:</strong>
                <?= $connection?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Host:</strong>
                <?= $host?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Referer:</strong>
                <?= $referer?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">User Agent:</strong>
                <?= $userAgent?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Query String:</strong>
                <?= $queryString?>
            </div>
            <div class="bg-gray-200 p-4 rounded-lg">
                <strong class="block">Request Uri:</strong>
                <?= $requestUri?>
            </div>

        </div>
    </div>
</body>

</html>