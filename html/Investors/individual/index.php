<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nipponseika Recruit LP</title>
    <!-- Link tới Tailwind đã build -->
    <link href="./css/style.css" rel="stylesheet">
</head>
<?php
function asset($path)
{
    return "/nipponseika-recruit-lp/" . ltrim($path, '/');
}
?>

<body class="">
    <!-- Main -->
    <main class="w-full mx-auto">
        <?php include 'section1.php' ?>
        <?php include 'section4.php' ?>
        <?php include 'section5.php' ?>
        <?php include 'section6.php' ?>

    </main>



</body>

</html>