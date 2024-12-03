<html>
<body>
    <form method="POST">
        Name: <input type="text" name="name" required><br>
        Number: <input type="number" name="age" required><br>
        Gender: <input type="radio" name="gender" value="female" required> female
        <input type="radio" name="gender" value="male"> male <br>
        Email: <input type="email" name="email" required><br>
        Qualification: <select name="qualification">
            <option value="Plus Two">+2</option>
            <option value="UG">UG</option>
            <option value="PG">PG</option>
        </select>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_POST) {
    echo "<h2>Bio Data</h2>";
    echo "Name: " . $_POST["name"] . "<br>";
    echo "Age: " . $_POST["age"] . "<br>";
    echo "Gender: " . $_POST["gender"] . "<br>";
    echo "Email: " . $_POST["email"] . "<br>";
    echo "Qualification: " . $_POST["qualification"];
}
?>
