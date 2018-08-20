
<?php

#           --------------------------------------------------------------------------------
                        # from php command another way
#           --------------------------------------------------------------------------------
//TO print the number of strings
?>

<?php


$text="PHP is a popular general-purpose scripting language that is especially suited to web development.";
$text .="Fast, flexible and pragmatic, PHP powers everything from your blog to the most popular websites in the world.";

$keywords=[];
preg_match_all("/([a-z]+)/is",$text,$matches);
// 'W+' vanako word count garnuparna vayo $text ma match garna vayo ani matches ma haldina vayo
// yo code lakhisakapaxi aaba seperator vanara lakhnu parana sab seperate garara a to z samma ko value matrai dina vayo
// khali matrai xodo vana auta matrai auna vayo ta "+" pani lakho vana connecting words wa number jaha samma xa teha pugna vayo

if(!empty($matches)){
   foreach($matches[0] as $match){
       print_r($match);
   }
}

?>

<?php
$contact='977-98-18236867';

preg_match_all("/([0-9]+)/is",$contact,$result);
#"preg_match_all" garda sabai match garna vayo
#"preg_match0" garda auta matrai match huna vayo
print_r($result);