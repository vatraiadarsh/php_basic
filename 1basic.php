<?php

for ($i=1; $i <=10 ; $i++) { 
    # code...
    echo "hello world<br>\n"; 
}

function add ($x,$y){
    return $x+$y;
}

echo add(10,56) . ":" . 'is the sum' . "\n";

# NOTE:
        # . is used for concadination
        # "\n" is for new line
            #==> it should be always written inside "" [not'']


function sub ($x,$Y){
    return $x-$Y;
}
echo sub (2,4) .":" . 'is the difference';
