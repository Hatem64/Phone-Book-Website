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
            <a class="active" href="home.html"> Home</a>
            <a href="search.php">Search</a>
            <a href="add.php">Add Contact</a>
            <a href="delete.php">Delete Contact</a>
            <a href="update.php">Update Contact</a>
        </div>

        <main>
            <table id='contacts'>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Phone</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody id="tbdy">
                        <?php
                        $myFile = fopen("data.txt", "r+") or die("file cannot be opened");
                        while(!feof($myFile)){
                          echo "<tr id='contInfo'>";
                          $line = fgets($myFile);
                          $ArrayLine = explode(",", $line);
                          echo "<td>$ArrayLine[0]</td>";
                          echo "<td>$ArrayLine[1]</td>";
                          echo "</tr>";
                        }
                        fclose($myFile);
                        ?>

                </tbody>
            </table>
        </main>
    </div>
</body>

</html>