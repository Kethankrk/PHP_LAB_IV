<html>
<body>
<h2>Array Operations</h2>
<form action="" method="post">
    <input type="radio" name="arr" value="dis" required>Display Array<br>
    <input type="radio" name="arr" value="srt" required>Sorted Array<br>
    <input type="radio" name="arr" value="usrt" required">Without Duplicate<br>
    <input type="radio" name="arr" value="pop" required>Delete Last<br>
    <input type="radio" name="arr" value="rev" required>Array Reverse<br>
    <input type="radio" name="arr" value="sear" required>Array Search
    <input name="name"><br>
    <input type="submit" value="Submit"><br>
</form>

<?php
$names = ["Raju", "Kiran", "Anu", "Basheer", "Athul", "Jhon", "Akhil", "Athira", "Kiran", "Sivan"];
if ($_POST) {
    $name = $_POST['name'];
    $val = $_POST['arr'];
    echo "<h2>Result</h2>";
    switch ($val) {
        case "dis": 
            echo implode("<br>", $names); 
            break;
        case "srt": 
            sort($names); 
            echo implode("<br>", $names); 
            break;
        case "usrt": 
            echo implode("<br>", array_unique($names)); 
            break;
        case "pop": 
            array_pop($names); 
            echo implode("<br>", $names); 
            break;
        case "rev": 
            echo implode("<br>", array_reverse($names)); 
            break;
        case "sear": 
            $index = array_search($name, $names, true);
            echo $index !== false ? "$name present at index $index" : "$name not found"; 
            break;
    }
}
?>
</body>
</html>
