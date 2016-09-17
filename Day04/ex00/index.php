<?php
session_start();
if ($_GET['login'])
{
    if ($_GET['submit'] == "OK")
    {
        $_SESSION['login'] = $_GET['login'];
        if ($_GET['passwd']) {
            $_SESSION['passwd'] = $_GET['passwd'];
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<form method="get" action="index.php">
    <label>Username:<input name="login" type="text" value="<?php if($_SESSION['login']) echo $_SESSION['login']; ?>"  /> </label>
    <br>
    <label>Password:<input name="passwd" type="text" value="<?php if($_SESSION['passwd']) echo $_SESSION['passwd']; ?>" /></label>
    <br>
    <input type="submit" name="submit" value="OK" />
</form>
</body>
</html>
