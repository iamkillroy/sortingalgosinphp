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

    function array_insert(){
        //dear php: this needs to be a freaking function bro
        // i don't know what kinda hippie ahh grass smoking dude
        // decided that arrays don't need an insert method. this is
        // not c bro we're dynamically typed. just add my insert function
        // (loook at herrr she's a beaut innit)
        
    }
    function insert_sort($givenArray){
        $lenOfArrayGiven = count($givenArray);
        //insertion sort: insert at i for each value
        $unsortedArray = $givenArray;
        $sortedArray = array();
        for ($i = 0; $i<$lenOfArrayGiven-1; $i++){
            //first, let's get the unsorted array and append an element
            // to each part
            $valueInSortedArray = $unsortedArray[i];
            $updatedLenOfSortedArray = count($sortedArray);
            for ($j = 0; $j<=$updatedLenOfSortedArray; $j++){
                //here we do <= because we gotta make sure that
                // we can handle the initial edge case indexing
                // when we have
                //  unsorted[1,3,19,2....]
                //  sorted[]
                if ($j == $updatedLenOfSortedArray){
                    //here's that last index/zero index edge case
                    // if we have
                    // unsorted [27, 1,5,2,19]
                    // sorted [3,4,8]
                    // when we compare we're gonna see the insert is greater
                    // up until the end, where then we insert the top value
                    array_push($sortedArray, $valueInSortedArray);
                    //push here is lowkirk gross but we CAN do it because
                    // it's at the end of the array
                    // also it's push like enqueue on a Queue
                }
                else {

                }
            }
        }

        return
    }
    $myUnsortedArray = array(3,2,15,0,-3,14,28,50,1024);
    display_array($myUnsortedArray);
    echo '<br> Sorted:<br>';
    display_array(bubble_sort($myUnsortedArray));


?>
