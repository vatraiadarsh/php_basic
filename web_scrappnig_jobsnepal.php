<?php
$url='http://www.jobsnepal.com/';

$content=file_get_contents($url);
// enter ra return hanako jati ""(blank space la replace garida vano $content ma)

$pattern=('/<a class="job-item" (.*?) href="(.*?)" >\n(.*?)<\/a>/');
#-------------------saabbai vanako 0 vayo----------------------------
#--------->index1[1]-------------->-2[2]-------------->3[3]

//<a class="job-item" id="job-110566" href="http://www.jobsnepal.com/job/tech-lead-angular-2-expert/110566" >
//Tech Lead (Angular 2+ Expert) 						</a>


# '<a class="job-item" (.*?) href="(.*?)" >' "this block of code is considered as the zero index"

# <a class="job-item" id="job-110505" href="http://www.jobsnepal.com/job/node-react-developer/110505" >
    # This is the code so 
        # id="job-110505" vitra j vatya pani hunxa mali matlap xaina so "(.*?)" vanako j xa tahai 

# href="http://www.jobsnepal.com/job/node-react-developer/110505"  yeha pani j vaya pani matlab vayana so
    #(.*?)


preg_match_all($pattern,$content,$matches);

$file=fopen("jobsite.csv","w+");
# CSV Comma-separated values
# W+ vanako yeha chai wrote mode ma vayo

foreach($matches[2]as $k=>$link){
    $title=trim($matches[3][$k]);

    echo "Title:".$title."\n";
    #trim to remove white space
    echo "link:". $link . "\n";

    fwrite($file,$title.",".$link."\r\n");
}

fclose($file);

echo"data scrabbed";