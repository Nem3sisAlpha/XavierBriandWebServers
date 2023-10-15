<!DOCTYPE html>

<html>
<body>


Welcome <?= echo $_POST["name"]; ?><br>

<?=
if ($_POST["Yes"]){
    echo "You like photography!";
}
else {
    echo "What are you doing here if you don't like photography?";
}

?>


</body>
</html>