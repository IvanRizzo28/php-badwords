<?php
if(isset($_POST)){
    $paragrafo=$_POST['paragrafo'];
    $parola=$_POST['parola'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <p><?php echo $paragrafo?></p>
    <span>Lunghezza: <?php echo strlen($paragrafo)?></span>
    <hr>
    <div>
        <p>
            <?php
                $secondoParagrafo=str_replace($parola,"***",$paragrafo);
                echo $secondoParagrafo;
            ?>
        </p>
        <span>Lunghezza: <?php echo strlen($secondoParagrafo) ?></span>
    </div>
</body>
</html>