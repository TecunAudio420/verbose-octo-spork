

<?php

//user must enter-> username="ltecu", password="asdfgh" to gain access to the NASA API search page, search.php

session_start();

// information of user, usually stored in a database
$firstname = "Lucas";
$lastname = "Tecun ";
$username = "ltecu ";
$password = "asdfgh";

if( !empty($_POST["username"]) && !empty($_POST["password"]) ){
    // check the identity of the user 

    if( 
        strcasecmp($_POST["username"], $username ) == 0 || 
        strcasecmp($_POST["password"], $password) == 0 ){

        // store in the session information related to the user that logged in
        $_SESSION["logged"] = true;
        $_SESSION["ID"] = $username;
    
        // if the there is a match the user is validated with the information in our backend (e.g. database)
        echo "Hi " . $firstname . "," . "<br />";
        echo "Go to the your <a href=\"search.php\">NASA API search :]</a> page" . "<br />";
        echo "...or you can just hang here for a while...";

    }else{
        echo "Wrong username/password. <a href=\"login.php\">Try again</a>";
    }

}else{
    header('Location: login.php');
}
