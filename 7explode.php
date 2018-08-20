<?php

$dob="2000-4-21";
$data=explode("_",$dob);

var_dump($data);


# NOTE:
        # We should set $data and $dob is holded by $data:: 
        # and we have stored inside the var_dump i.e holded
            # we can use print_r instead of var_dump 
            #figure out the difference


$dob="1995-07-17";
$result=explode("_",$dob);
print_r($result);