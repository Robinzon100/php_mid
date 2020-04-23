
<?php

include "./PHP/queries.php";
$queries = new Queries();

 

$rows = $queries->getAllProducts();
foreach ($rows as $row) {
    echo "<div class='single_question' >";
        echo "<p>".$row['name']."</p>";
        echo "<p>".$row['amount']."</p>";
        echo "<p>".$row['data']."</p>";
        echo "<p>".$row['bar_code']."</p>";
        echo "<p>".$row['expiration']."</p>";
        echo "<p>".$row['input_date']."</p>";

    echo "</div>";
}


?>