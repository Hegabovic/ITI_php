<?php

if (isset($_POST["submit"])) {
    $is_valid=true;
    $field = array();
    $name = $_POST["username"];
    $mail = $_POST["email"];
    $my_msg = $_POST["message"];


    if (strlen($name) < 10 && strlen($name) > 0) {
//    echo "<h5 style='color: blue'>Username : $name</h5>";

    } else {
        echo " <h6><span style='color: red'>**</span>please enter a Valid Username</h6>";
        $is_valid=false;
    }

    if (filter_var($mail, FILTER_VALIDATE_EMAIL)) {
//    echo "<h5 style='color: blue'>Email : $mail</h5>";

    } else {
        echo " <h6><span style='color: red'>**</span>please enter a Valid Email</h6>";
        $is_valid=false;
    }

    if (strlen($my_msg) < 255 && strlen($my_msg) > 0) {
//    echo "<h5 style='color: blue'>Massage :$my_msg</h5>";

    } else {
        echo " <h6><span style='color: red'>**</span>please don't exceed 255 letters </h6>";
        $is_valid=false;
    }

    if($is_valid){
        echo "<h5 style='color: blue'>Username : $name</h5>";
        echo "<h5 style='color: blue'>Email : $mail</h5>";
        echo "<h5 style='color: blue'>Massage :$my_msg</h5>";
    }
}
function get_default($field){
    if(isset($_POST[$field])){
        echo $_POST[$field];
    } else{
        echo "";
    }

}
?>

<html>
<head>
    <title> contact form </title>
</head>

<body>
<h3> Contact Form </h3>
<div id="after_submit">

</div>
<form id="contact_form" action="index.php" method="POST" enctype="multipart/form-data">


    <div class="row">
        <label class="required" for="name">Your name:</label><br/>
        <input id="name" class="input" name="username" type="text" value="<?php get_default("username")?>" size="30"/><br/>

    </div>
    <div class="row">
        <label class="required" for="email">Your email:</label><br/>
        <input id="email" class="input" name="email" type="text" value="<?php get_default("email")?>" size="30"/><br/>

    </div>
    <div class="row">
        <label class="required" for="message" >Your message:</label><br/>
        <textarea id="message" class="input" name="message" rows="7" cols="30"><?php get_default("message")?></textarea><br/>

    </div>

    <input id="submit" name="submit" type="submit" value="Send email"/>
    <input id="clear" name="clear" type="reset" value="clear form"/>

</form>
</body>

</html>

