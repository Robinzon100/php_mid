
<?php

include "./includes/header.php";

 ?>

<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<form action="" id="form" method="post">
    <!-- <input type="number" name="amount" > -->
    <input type="text" name="name" >
    <input type="date" name="data" >
    <!-- <input type="text" name="bar" > -->
    <!-- <input type="text" name="name" > -->
    <!-- <input type="text" name="name" > -->
    <button type="submit" id="submit">insert</button>
</form>

<h1 id="result"></h1>


<script>


$(document).on("click", "#submit",function(e) {
           console.log("asdasd")
            e.preventDefault();

            let name = $("input[name='name']").val();
            let amount = `${1 + Math.floor(Math.random() * 100)}`;
            let data = $("input[name='data']").val();

            let bar_code = `${1 + Math.floor(Math.random() * 1646516546)}`;
            let expiration = `${10 + Math.floor(Math.random() * 30)}`;
            let input_date = new Date();




            var submit = $("#submit").val();
            $.ajax({
                url: "./PHP/queries.php",
                type: "post",
                data: {
                    action: "insert",
                    name: name,
                    amount: amount,
                    data: data,
                    bar_code: bar_code,
                    expiration: expiration,
                    input_date: input_date
                },
                success:function(result) {
                    $("#result").html(result);
                }
            })
            $("#form")[0].reset();
            
      });

</script> 