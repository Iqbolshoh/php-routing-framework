<?php

use App\Core\Router;
use App\Core\Request;

require_once __DIR__ . '/../vendor/autoload.php';

$request = new Request();
$router = new Router();

require_once __DIR__ . '/../routes/web.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My App | <?php echo basename($_SERVER['REQUEST_URI']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://iqbolshoh.uz/favicon.ico" type="image/x-icon">
</head>

<body>
    <div>
        <?php $router::dispatch($request); ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>