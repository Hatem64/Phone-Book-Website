<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Delete Page</title>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
    <div>
        <header>
            <h1 id="title">Phone Book</h1>
        </header>
        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a href="add.php">Add Contact</a>
            <a href="delete.php">Delete Contact</a>
            <a class="active" href="update.php">Update Contact</a>
        </div>

        <main>
            <form id="form" method="post" action="#">
                <div id="searchblock">
                    <p class="pp">edit :</p>
                </div>
                <input type="text" name="search" id="searchContact" placeholder= "name" required></br></br>
                <input type="text" name="search2" id="searchContact" placeholder="Search" required></br></br>
                <input type="submit" value="Edit" id="addCont" name="go">
            </form>

<?php
$record = "";
$myFile = fopen("data.txt", "r+") or die("cannot open file");
while(!feof($myFile)){
  $line = fgets($myFile);
  $array = explode(",",$line);
  $array2 = explode(" ",$array[0]);
  if($array2[0] == $_GET["name"]){
    $record = $line;
  }
}
print_r($record);
$data = $_POST['search'] . "," . $_POST['search2'] . "\r\n";
print_r($data);
// print_r($_POST['search2']);
$contents = file_get_contents("data.txt");
$newContents = str_replace($record, "", $contents);
file_put_contents("data.txt",$newContents);
file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
// header("Location:home.php");
?>
</main>
    </div>
</body>

</html>