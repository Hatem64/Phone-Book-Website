<?php
            if (isset($_POST["search"])) {
              echo "<table>";
              $myFile = fopen("data.txt", "r+") or die("cannot open file");
              while(!feof($myFile)){
                $line = fgets($myFile);
                $array = explode(",",$line);
                if(strpos($array[0], $_POST["search"]) !== false){
                  $name = $array[0];
                  $phone = $array[1];
                  echo "<tr><td> $name </td>";
                  echo "<td> $phone </td>";
                  echo "<form id='frm' name='info' method='POST' action='deleteUser.php'>";
                  echo "<td> <input type='submit' name='submit'  value='$name' id='Delete'></td></tr>";
                  echo "</form>";
                }
              }
              echo "</table>";
              // header("Location:delete.php");
            }
            ?>