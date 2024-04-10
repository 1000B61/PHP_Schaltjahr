<?php
function schalt($Jahr){
if($Jahr%4==0 && $Jahr%100==0 && $Jahr%400==0)
    return true;
else if($Jahr%4==0 && $Jahr%100==0)
    return false;
else if($Jahr%4==0)
    return true;
else return false;
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Schalt</title>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="GET">
<input type="text" name="Jahr" id="Jahr">
<input type="submit" name="send" value="Schaltjahr?">
</form>
<?php if(isset($_GET["send"]))
    if(is_numeric($_GET["Jahr"])&& strlen($_GET["Jahr"])==4)
        if(schalt($_GET["Jahr"])){?><p><?php echo $_GET["Jahr"];?> ist ein Schaltjahr.</p><?php }else {?> <p><?php echo $_GET["Jahr"];?> ist kein Schaltjahr.</p> <?php } ?>