<html>
<body>
<form method="post">
<h1>BANK BALANCE</h1>
<table>
<tr><td>Account number:</td><td><input type="text" name="accno"></td></tr>
<tr><td>Amount:</td><td><input type="text" name="amount"></td></tr>
<tr>
  <td>Transaction Type:</td>
  <td>
    <input type="radio" name="transaction" value="deposit" required>Deposit
    <input type="radio" name="transaction" value="withdrawal" required>Withdrawal
  </td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" value="UPDATE"></td></tr>
</table>
</form>

<?php
if ($_POST) {
    $accno = $_POST['accno'];
    $amount = $_POST['amount'];
    $transaction = $_POST['transaction'];
    $con = pg_connect("host=localhost dbname=college user=postgres password=ihrd2020") or die("Cannot Connect");

    $qry = "SELECT * FROM bank WHERE accno='$accno'";
    $result = pg_query($con, $qry);
    $row = pg_fetch_row($result);
    if ($row) {
        $oldbalance = $row[2];
        echo "<table border=1 align=center>
                <tr><th colspan=2>OLD BANK BALANCE</th></tr>
                <tr><td>Account No</td><td>{$row[0]}</td></tr>
                <tr><td>Balance</td><td>{$oldbalance}</td></tr>
              </table>";

        $newbalance = $transaction == "withdrawal" ? $oldbalance - $amount : $oldbalance + $amount;
        $updateqry = "UPDATE bank SET balance='$newbalance' WHERE accno='$accno'";
        $updateresult = pg_query($con, $updateqry);

        if ($updateresult) {
            echo "<table border=1 align=center>
                    <tr><th colspan=2>NEW BANK BALANCE</th></tr>
                    <tr><td>Account No</td><td>{$row[0]}</td></tr>
                    <tr><td>Balance</td><td>{$newbalance}</td></tr>
                  </table>";
        } else {
            echo "Update failed: " . pg_last_error();
        }
    } else {
        echo "Account not found.";
    }
}
?>
</body>
</html>
