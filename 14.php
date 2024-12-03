<html>
<body>
    <form method="POST">
        <input type="number" name="number" placeholder="Enter a number" required>
        <input type="submit" value="Check">
    </form>
</body>
</html>
<?php
if ($_POST) {
    $num = $_POST["number"];
    $sum = 0;
    for ($i = 1; $i <= $num / 2; $i++){
        if ($num % $i == 0) $sum += $i;
    }
    echo $num == $sum ? "Perfect" : ($sum > $num ? "Abundant" : "Deficient");
}
?>
