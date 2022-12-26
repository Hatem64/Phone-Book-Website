<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phone Book</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div>
        <header>
            <h1 id="title">Phone Book</h1>
        </header>
        <div class="navbar">
            <a href="home.php">Home</a>
            <a href="search.php">Search</a>
            <a class="active" href="add.php">Add Contact</a>
            <a href="delete.php">Delete Contact</a>
            <a href="update.php">Update Contact</a>
        </div>

        <main>
            <h2>Add Contact</h2>
            <form id="frm" name="info" method="POST" action="add.php">
                </br>
                <input type="text" name="contactName" class="addContact" id="name" placeholder="NAME" required></br></br>
                <input type="tel" name="contactNo" class="addContact" id="phone" placeholder="PHONE" required></br></br>
                <input type="submit" value="ADD" id="addCont" name="go">
            </form>
            </br>

            <?php
            $bool = false;
                if(!empty($_POST["contactName"]) || !empty($_POST["contactNo"] || $_POST["contactName"][0] != " ")){
                  $myFile = fopen("data.txt", "r+") or die("file cannot be opened");
                  while(!feof($myFile)){
                    echo "<tr id='contInfo'>";
                    $line = fgets($myFile);
                    $ArrayLine = explode(",", $line);
                    if($ArrayLine[0] == $_POST["contactName"] || $ArrayLine[0] == $_POST["contactName"]){
                      $bool = true;
                    }
                  }
                  // if()
                // $MyFile = fopen("data.txt", "a+") or die("cannot open this file");
                if($bool == true){
                  echo "<p> This contact exists </p>";
                }else{
                  $data = $_POST['contactName'] . "," . $_POST['contactNo'] . "\r";
                  $ret = file_put_contents('data.txt', $data, FILE_APPEND | LOCK_EX);
                }
                // header("Location:home.php");
              }
            ?>
        </main>
    </div>
</body>

</html>