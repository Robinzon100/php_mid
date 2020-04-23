
<?php

include "./includes/header.php";
include "./PHP/queries.php";
$queries = new Queries();

?>


<?php


 

$rows = $queries->getAllProducts();
foreach ($rows as $row) {
   
    echo "<div class='single_question' style='border: 2px solid black; padding: 2rem; display: inline-block;' >";
        echo "<p name='id' >".$row['id']."</p>";
        echo "<p name='name' >".$row['name']."</p>";
        echo "<p name='amount' >".$row['amount']."</p>";
        echo "<p name='data' >".$row['data']."</p>";
        echo "<p name='bar_code' >".$row['bar_code']."</p>";
        echo "<p name='expiration' >".$row['expiration']."</p>";
        echo "<p name='input_date' >".$row['input_date']."</p>";

        echo "<button id='submit' data-id=".$row['id'].">delete this </button>";

    echo "</div>";
}


?>


<script>


$(document).on("click", "#submit",function(e) {

            let id = $('#submit').attr("data-id")


            var submit = $("#submit").val();
            $.ajax({
                url: "./PHP/queries.php",
                type: "post",
                data: {
                    action: "delete",
                    id: id
                },
                success:function(result) {
                    $("#result").html(result);
                }
            })
            $("#form")[0].reset();
            
      });

</script> 