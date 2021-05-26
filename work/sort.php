<!DOCTYPE html>
<html>
<style>
h1 {
    text-align: center;
    font-family: serif;
    background-image: linear-gradient(to left, violet, indigo, blue, green, yellow, orange, red);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}
body {
    color: #ffffff;
    font-family: sans-serif;
}
</style>

<body style="background-color:#36393f;">
<h1>Bitte ausfüllen</h1>

<form action="sort.php" method="post">
    Zufällige Zahlen sortieren <input type="submit" value="✅">
</form>


<?php
    $loops = rand(22, 33);
    $zahlen = [];

    for ($i=0; $i < $loops; $i++) {
        $zahlen[$i] = rand(1, 1e6);
    }
    sort($zahlen);

    foreach ($zahlen as $num) {
        print("<span style=\"color:#ffff00\">".number_format($num)."</span><br>");
    }
    return;
?>

</body>
</html>
