<html>
<body>
<form method="POST">
  <label>Choose Your Favorite Fruit</label>
  <select name="f" required>
    <option value="">(Please Select)</option>
    <option>Grape</option>
    <option>Banana</option>
    <option>Chicku</option>
    <option>Apple</option>
    <option>Orange</option>
    <option>Pine Apple</option>
  </select>
  <input type="submit" value="SELECT">
</form>

<?php if (!empty($_POST['f'])){
   echo " <h2>You have indicated that you like {$_POST['f']}</h2>";
}
?>
</body>
</html>
