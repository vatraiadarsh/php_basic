<?php
function add($x,$y){
    return $x+$y;
}


function power($x,$y){
    if($y==0){
        return 1;
    }
    return $x * power($x,($y-1));
}

function calculate($x,$y,$callback){
    return $callback($x,$y);
}

echo calculate(2,4,'power');

echo calculate(2,3,function($x,$y){
    return $x-$y;
});