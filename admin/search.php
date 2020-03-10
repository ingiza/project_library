<?php
    require_once "header.php";
?>
<body class="body" style="margin-top:20px;background-size:cover;background-image:url(./images/search.jpg)">
<div class="container-fluid">
    <div class ="row">
        <div class="col-3">
        <a href="dashbord.php"><i class="fas fa-arrow-left fa-2x"></i></a>
        </div>
        <div class="col-6">
        <input class="form-control" style="font-size:30px;border-decoration:none;margin-top:345px;border-radius:50px;text-align:center;" type="text" placeholder="Search Book" aria-label="Search">
            <br>
        <button  id="btn" style="border-radius:50px;width:150px;border:none;margin-left:45%;outline:none;">search</button>
        </div>
       <div class="col-3"></div>
    </div>
</div>
<script>
    jQuery(document).ready(function() {
    $("#btn").on("click", "#1abc9c', function() {
       $(this).css("background-color", "#9683ec");
       $(this).css("color", "#2d2746");
    });

    $("btn").on("click", "#blue', function() {
       $(this).css("background-color", "#00bfff");
       $(this).css("color", "#002633");
    });
});
</script>