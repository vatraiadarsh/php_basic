<?php
$names=['anil','adarsh', 'pradip', 'prabin'];

for ($i=1; $i < count($names ); $i++) { 
    # code...
    echo $names[$i] . "\n";
} 


$nums=['id'=>1,'name'=>'John','age'=>14, 'percentage'=>45.90, 'status'=>false,'DoB'=>null];
var_dump($nums);

?>



<?php
#next way to make array

$employee=['id'=>1,'name'=>'adarsh','age'=>12];

$Employee[]=$employee;
print_r ($Employee);

//auta array ko vitra arko array xa
//bigger array vitra arko array xa

?>


<?php
#another way to decleare array
$Employee[]=['id'=>12,
            'name'=>'Shadow',
            'age'=>4];

print_r($Employee);

?>


<?php
#another way to make array
$employee=['id'=>5,'name'=>'Lucky','age'=>62];


array_push($employee,['id'=>5,'name'=>'Lucky','age'=>62]);
print_r($employee);


?>





