<?php

include "emailVerifier.php";

if($_POST){
    if(isset($_POST["Email"])){
        echo $response;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Email Verifier</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    
    <div class="container">
        <h1>CONTACT US</h1>
        <p>Have a question or need assistance? <br> Drop us a message, and we'll get back to you shortly.</p>
        <form method="POST" id="form">
            <div class="form-input">
                <label for="name">Name</label>
                <input type="text" name="Name" placeholder="Enter name here" id="name">
            </div>
            <div class="form-input">
                <label for="email">Email</label>
                <input type="email" name="Email" placeholder="example@domain.com" id="email">
            </div>
            <div class="form-input">
                <label for="comments">Comments</label>
                <textarea name="Comments" id="comments" placeholder="Enter questions or comments here" cols="30" rows="10"></textarea>
            </div>
            <div class="form-input">
                <button type="submit" value="Submit" id="submit-btn">
            </div>
        </form>
    </div>
</body>
<script>
    $(document).ready(function () {
  $("form").submit(function (event) {
    var formData = {
      name: $("#name").val(),
      email: $("#email").val(),
      comments: $("#comments").val(),
    };

    $.ajax({
      type: "POST",
      url: "emailVerifier.php",
      data: formData,
      dataType: "json",
      encode: true,
    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });
});
</script>
</html>