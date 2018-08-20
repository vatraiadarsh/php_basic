<?php

$content="google.com http://google.com www.google.com google.com.np google.co.uk";

$pattern="/google\.com?(\.\w{2})?/";
# "." vanako unique key ho tasaila "\" rakhako vanako yasli skip gara vanako yo chai content nai ho
# "." matrai vanako zero occurance vayo ra "\w" la naya character linxa
    # \w+ garo vana chai repeat vako pani auxa tara yeha repeat vako xaina [co matrai xa cco xaina]
        # so "\w" matrai hunxa
# Curley bracket vitra 2 lakha vana {2}, tasla duita character linxa . paxi
preg_match_all($pattern,$content,$matches);
print_r($matches);

?>






