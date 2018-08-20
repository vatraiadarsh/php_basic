<?php

#           --------------------------------------------------------------------------------
                        # PHP INBUILD ALGORITHM
#           --------------------------------------------------------------------------------

$nums=[345,365546,46745,23543,53654,4342,53654,-4548,-54,-102,-0.52,];

array_multisort($nums);
print_r($nums);
# By default it will take assending order

// for desending order

$nums=[345,365546,46745,23543,53654,4342,53654,-4548,-54,-102,-0.52,];

array_multisort($nums,SORT_DESC);
var_dump($nums);
