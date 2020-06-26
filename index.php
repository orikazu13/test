<?php
$dsn = 'mysql:dbname=test_DB;host=localhost;';
$user = 'kazuto';
$password = 'kazu1313';
try {
    $dbh = new PDO($dsn, $user, $password);
    print "Success\n";
    $sql ="select * from user;";
    $result = $dbh->query($sql);
    
} catch (PDOException $e) {
    print "Failed: " . $e->getMessage() . "\n";
    exit();
}
    $sql ="select * from sample;";
    $result = $dbh->query($sql);
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javascript Lesson</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fruir">
            <div class="nav-header">
                <a class="navbar-brand" href="index.html">LAMP SAMPLE PAGE</a>
            </div>
        </div>


    </nav>
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4">DB Manager -sample_db</h1>
            <p class="read">sampleのやつやぞ<br>aaaaaaaaaaaS</p>
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-tabs">
            <li class="nav-item">
            <a href="#select" class="nav-link active" data-toggle="tab">sel</a>
            </li>
            <li class="nav-item">
            <a href="#insert" class="nav-link" data-toggle="tab">ins</a>
            </li>
            <li class="nav-item">
            <a href="#up" class="nav-link" data-toggle="tab">up</a>
            </li>
            <li class="nav-item">
            <a href="#dele" class="nav-link" data-toggle="tab">del</a>
            </li>
        </ul>
        <div class="tab-content">

            <div class="tab-pane active " id="select">
                <table class="table table-striped table-hover mt-2">
                    <caption>Show User Table</caption>
                    <thead class="thead-dark">
                        <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>age</th>
                        </tr>
                    </thead>
                    <tbody class="">
                    <?php foreach($result as $value) { ?>
                        <tr>
                            <th><?php echo "$value[id]";?></th>
                            <th><?php echo "$value[name]";?></th>
                            <th><?php echo "$value[age]";?></th>
                        </tr>
                        <?php } ?>
                        <tr>
                            <th>2</th>
                            <th>aaa</th>
                            <th>23</th>
                        </tr>
                        <tr>
                            <th>3</th>
                            <th>aaa</th>
                            <th>23</th>
                        </tr>
                    </tbody>
                    </table>
            </div>
            <div class="tab-pane" id = "insert">
                <form class = "mt-5"action="./insert.php" method="POST">
                    <div class="form-group">
                        <label for="id">ID</label>
                        <input type="text" class="form-control" id="id" name="id">
                    </div>
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="age">AGE</label>
                        <input type="text" class="form-control" id="age" name="age">
                    </div>
                    <button type="submit" class="btn btn-primary">insert</button>
                </form>
            </div>
            <div class="tab-pane"id ="up">
                <p>sample 3</p>
            </div>
            <div class="tab-pane"id ="dele">
                <p>sample 4</p>
            </div>
        </div>

    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>