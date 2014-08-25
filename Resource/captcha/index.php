<?php
session_start();
if(isset($_POST['submit']))
{
    if($_POST['sr_code'] == $_SESSION['code'])
    {
        $accept = "Chinh xac roi cung!!!";        
    }
    else
    {
        $error = 'Sai roi cung!!!';
    }
    
}
?>
<?php if(!empty($error)) echo $error;  ?>
<?php if(!empty($accept)) echo $accept; ?>
<form action="" method="post">
    <input type="text" name="sr_code" autofocus=""/><br />
    <img src="captcha.php" alt="captcha" /><br />
    <input type="submit" name="submit" value="submit"/><br />
</form>