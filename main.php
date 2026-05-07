<?php
    //i know i'm like 19 and php is kinda awful
    // but damn does it feel good to be back writing this
    // stuff. it's like c python and js had a bad boy
    // bastard son

    function display_array($arrayGiven){
        echo "<ul>";
        $lenOfArrayGiven = count($arrayGiven);
        for ($i = 0; $i<$lenOfArrayGiven; $i++){
            echo "<li>" . strval($arrayGiven[$i]) . "</li>";
        }
        echo "</ul>";
    }
    $myUnsortedArray = array(3,2,15,0,-3,14,28,50,1024);
    display_array($myUnsortedArray);


?>
