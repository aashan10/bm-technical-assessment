<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Two Way Binding Example</title>
</head>
<body class="bg-yellow-100">
<?php include __DIR__ . '/partials/navbar.php'; ?>
<div class="box max-w-7xl w-full mx-auto">
    <pre class="overflow-x-scroll">
        <?= $data; ?>
    </pre>
</div>

<style>
    .box {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    body {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #fefefe;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
