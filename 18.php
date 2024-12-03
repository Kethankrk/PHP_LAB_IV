<html>
<body>
<h2>Last visited time on the web page</h2>
<?php
setcookie('lastVisit', date("G:i - m/d/y"), time() + 60 * 60 * 24 * 60);
echo isset($_COOKIE['lastVisit']) ? "Your last visit was - " . $_COOKIE['lastVisit'] : "Welcome! This is your first visit.";
?>
</body>
</html>
