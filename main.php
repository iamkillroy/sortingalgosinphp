<?php
    //i know i'm like 19 and php is kinda awful
    // but damn does it feel good to be back writing this
    // stuff. it's like c python and js had a bad boy
    // bastard son

    function display_array($arrayGiven){
        echo "<ul>";//start the ul
        $lenOfArrayGiven = count($arrayGiven);
        //get the count
        // pretty simple, just iterate
        for ($i = 0; $i<$lenOfArrayGiven; $i++){
            //oh php, oh php, what the freak is this syntax
            //why do I concat with periods?
            //strval isn't that bad but still bad
            echo "<li>" . strval($arrayGiven[$i]) . "</li>";
        }
        echo "</ul>";
    }
    function bubble_sort($arrayGiven){
        //start with the unsorted array as the sorted array
        // so we try and solve it
        $sortedArray = $arrayGiven;
        $lenOfArrayGiven = count($sortedArray);
        //allsorted will be true
        //when... uh it's all sorted
        // otherwise like ellen degeneres said
        // "just keep swimming"
        $allsorted = false;
        while (!$allsorted){
            //now we iterate WITHIN the array for the array len
            $thisIterationIsSorted = true;
            for ($i = 0; $i<$lenOfArrayGiven-1; $i++){
                if ($sortedArray[$i] > $sortedArray[$i+1] && $i+1 != $lenOfArrayGiven){
                    //hahaha! you've failed my base case!
                    //this means the listed isn't sorted
                    $thisIterationIsSorted = false;
                    //and we need to swap the values
                    $temp = $sortedArray[$i];
                    $sortedArray[$i] = $sortedArray[$i+1];
                    $sortedArray[$i+1] = $temp;
                }
            }
            if ($thisIterationIsSorted){
                //we did it-- yipee!!
                $allsorted = true;
            }
        }


        return $sortedArray;
    }

    function insert_sort($givenArray){
        $lenOfArrayGiven = count($givenArray);
        //insertion sort:
        for ($i = 0; $i<$lenOfArrayGiven-1; $i++){
            //
        }

        return
    }
    $myUnsortedArray = array(3,2,15,0,-3,14,28,50,1024);
    display_array($myUnsortedArray);
    echo '<br> Sorted:<br>';
    display_array(bubble_sort($myUnsortedArray));


?>
