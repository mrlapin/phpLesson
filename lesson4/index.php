<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>calc</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<form method="post" action="calculated.php">
    <input type="text" name="a" value=<?php echo (isset($a) ? $a : "");?>>
    <?php echo $operator; ?>
    <input type="text" name="b" value=<?php echo '"'. $b . '"';?>> = <?php echo $res; ?>
    <br><br>
    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
</form>
<br>
<p><?php echo $warning; ?></p>
</body>
</html>