<?php
#           --------------------------------------------------------------------------------
                        #ALGORITHMS BUILD IN PHP                BUT
                        # IN ARRAY IS UNPRODUCTIVE ERROR MAY SEEN WHILE DOING LARGE PROJECT
#           --------------------------------------------------------------------------------

$nums=[345,365546,46745,23543,53654,4342,53654,-4548,-54,-102,-0.52,];

$found=my_in_array(345,$nums);
if ($found){
    echo "hurrae! hurrae!";
}else
{
    echo"not found";
}
function my_in_array($n,$arr){
    return in_array($n,$arr);
}
