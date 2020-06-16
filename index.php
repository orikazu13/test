<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'kazuto';
$password = 'Kazu@1313';
try {
    $dbh = new PDO($dsn, $user, $password);
    print "Success\n";
    $sql ="select * from kazuto;";
    $result = $dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}
    $sql ="select * from sample;";
    $result = $dbh->query($sql);
?>

<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset="utf-8">
<title>vvvv</title>
<body>
    <?php foreach( $result as $value) {?>
    
        <h1><?php echo "$value[name]<br>";?></h1>
<?php } ?>
</body>     
</head>
</html>