<?php

// if the url field is empty
if(isset($_POST['url']) && $_POST['url'] == ''){

    if($_POST["message"] == "" || $_POST["name"] == ""){
        echo "<p><b><h2>No message received. Try again.</h2></b></p>";
    } else {
        // then send the form to your email
        echo "<p><b><h2>Thank you for the message. I will get back to you as soon as possible.</h2></b></p>";
        mail( 'me@bkenneweg.com', 'Contact Form', print_r($_POST,true) );
    }
}

?>


<script>
setTimeout(function () {
   window.location.href= 'https://www.bkenneweg.com'; // the redirect goes here

},2500); //  2 seconds
</script>