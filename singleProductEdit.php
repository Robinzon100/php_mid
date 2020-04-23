
<?php

include "./includes/header.php";

 ?>

<script src="https://code.jquery.com/jquery-3.5.0.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<form action="" id="form" method="post">
    <!-- <input type="number" name="amount" > -->
    <input type="text" name="name" >
    <input type="date" name="data" >
    <input type="hidden" name="id" data-id="<?php echo $_GET["id"] ?>">
    <!-- <input type="text" name="bar" > -->
    <!-- <input type="text" name="name" > -->
    <!-- <input type="text" name="name" > -->
    <button type="submit" id="submit">update</button>
</form>

<h1 id="result"></h1>


<script>


$(document).on("click", "#submit",function(e) {
          
            e.preventDefault();

            let name = $("input[name='name']").val();
            let data = $("input[name='data']").val();
            let id = $("input[name='id']").attr("data-id");
        
            $.ajax({
                url: "./PHP/queries.php",
                type: "post",
                data: {
                    action: 'update',
                    id: id,
                    name: name,
                    data: data
                },
                success:function(result) {
                    // $("#result").html(result);
                }
            })
            $("#form")[0].reset();
            
      });

</script> 