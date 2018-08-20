<?php


#           --------------------------------------------------------------------------------
                        #BASIC ALGORITHM FOR OTHER LANGUAGE ALSO
#           --------------------------------------------------------------------------------



$nums=[345,365546,46745,23543,53654,4342,53654,-4548,-54,-102,-0.52,];

for ($i=0; $i < count($nums); $i++) {
   for ($j=$i+1; $j < count($nums); $j++) { 
       if ($nums[$i]> $nums[$j]){
        $temp=$nums[$i];
        $nums[$i]=$nums[$j];
        $nums[$j]=$temp;
       }
   }
}

print_r ($nums);



# NOTE:
        # To change into assending order or desending order just change "if ($nums[$i]> $nums[$j])" to
        # if ($nums[$i] $nums[$j])

?>




<?php


#           --------------------------------------------------------------------------------
                        #BASIC ALGORITHM FOR OTHER LANGUAGE ALSO
#           --------------------------------------------------------------------------------
//TO SEARCH NUMBER IN THE ARRAY

$nums=[345,365546,46745,23543,53654,4342,53654,-4548,-54,-102,-0.52,];

$found=false;//bec harayara ta khojako ho
foreach ($nums as $n) {
    if ($n==36){
        $found=true; #bhatayama true vanxau
        break;
    }
}

if ($found){ # bec $found is true "bhatayama true" 
    echo "HURRA! it's found";
}
else
{
    echo"oops not found";
}
