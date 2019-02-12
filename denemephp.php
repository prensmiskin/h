<?php
    
    @$username = $_POST['username'];

   
    echo $username;

    
?>

<form action="/" method="post"> <!-- You can change this as POST or GET -->
    <input type="text" name="username" />
    <input type="submit" value="Submit" />
</form>