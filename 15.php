<html>
<body>
    <h2>Login</h2>
    <form method="POST">
        Username: <input type="text" name="usr" required><br>
        Password: <input type="password" name="pass" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
<?php
if ($_POST) {
    $usr = $_POST['usr'];
    $pass = $_POST['pass'];
    $conn = pg_connect("host=127.0.0.1 dbname=college user=postgres password=9895");
    if(!$conn){
        echo "connection Failed";
        die();
    }    
    $qry = "SELECT username FROM login WHERE username='$usr' AND password='$pass'";
    $result = pg_query($conn, $qry);
    $isValid = pg_num_rows($result);
    if($isValid) echo "$usr, you are logged in.";
    else echo "Invalid credentials!";
    pg_close($conn);
}
?>