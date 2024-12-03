<html>
<body>
    <form method="POST">
        <input type="text" name="input" placeholder="Enter string" required>
        <input type="submit" value="Reverse">
    </form>
</body>
</html>
<?php
function reverse(){
    $str = $_POST['input'];
    $len = strlen($str);

    for($i = ($len - 1); $i >= 0; $i--){
        echo $str[$i];
    }
}
if ($_POST) {
    reverse();
}
?>
