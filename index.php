<?php
    if(isset($_POST['view'])){
        header("content-type:application/pdf");
        readfile('file/simple.pdf');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    button:hover{
        background:lightskyblue;
        color:white;
    }
</style>
<body>
    <form action="" method="POST">
        <button name="view">View File PDF</button>
    </form>
</body>
</html>