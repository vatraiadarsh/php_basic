<?php

#           --------------------------------------------------------------------------------
                        #BASIC ALGORITHM FOR OTHER LANGUAGE ALSO
#           --------------------------------------------------------------------------------
//TO print the number of strings
?>

<?php

$text="PHP is a popular general-purpose scripting language that is especially suited to web development.";
$text .="Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.";

$pos=0;
$length=strlen($text);

$keywords=[];

function getKeyWord($key){
    global $keywords;
    foreach($keywords as $k=>$v){
        if($v['key']==$key){
            return $k;
        }
    }
    return -1;
}

 
$key='';

$seperators=['',".",',',' '];

while($pos<$length){
    $char=$text[$pos];
    if(!in_array($char,$seperators)){
        $key .=$char;  

    }else{
        $key=strtolower($key);
        $keyIndex=getKeyWord($key);
        if ($keyIndex==-1){
            array_push($keywords,['key'=>$key,'count'=>1]);
        }else{
            $counter=$keywords[$keyIndex]['count'];   
            $keywords[$keyIndex]['count']=$counter+1;
            }
        $key=''; 
    }
    $pos++;
}

//print_r($keywords);
foreach ($keywords as $k) {
    echo $k['key'] . '=' . $k['count']."\n";
}
?>




