<html>
    <body>
        <form method="POST">
            Reg No.: <input type="number" name="rollno" required>
            <input type="submit" value="Fetch">
        </form>
    </body>
</html>
<?php
if($_POST){
    $rollno = $_POST['rollno'];
    $conn = pg_connect("host=127.0.0.1 dbname=college user=postgres password=9895");
    if(!$conn){
        echo "DB connection failed!";
        die();
    }
    $qry = "SELECT * FROM marklist WHERE rollno='$rollno'";
    $result = pg_query($conn, $qry);
    if(!pg_num_rows($result)) echo "No record found!";
    while($row=pg_fetch_row($result)){
        echo "Roll No: $row[0] <br> Name: $row[1] <br> Mark: $row[2] <br> Grade: $row[3] <br>";
    }
    pg_close($conn);
}
?>