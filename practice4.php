<!DOCTYPE html>
<html>
    <head>
        <title>Lab 7 Practice 4</title>
        <h1>EECS 348 Lab Seven Practice Four</h1>
    </head>

    <body>
        <form action="" method="post">Enter number: 
            <input type="text" name="num">
            <input type="submit" value="generate">
        </form>

        <?php
            $num = intval($_POST["num"]);

            if ($num < 1) {
                echo "Invalid";
            }

            else {
                echo "<table>";
                echo "<tr><th> </th>";
                for ($i=1; $i<=$num; $i++) {
                    echo "<th>" . $i . "</th>";
                }
                echo "</tr>";

                for ($i=1; $i<=$num; $i++) {
                    echo "<tr><th>" . $i . "</th>";
                    for ($j=1; $j<=$num; $j++) {
                        echo "<td>" . ($i * $j) . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>

        <style>
            th {
                border: 2px solid;
            }

            td {
                border: 1px solid;
            }
        </style>
    </body>
</html>