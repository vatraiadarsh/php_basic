<?php

$content="google.com http://google.com www.google.com google.com.np google.co.uk";

# Aaba hamili http pani chaiyo hara aaba

$pattern="/google.com?/";
# Sajilo ko lagi pattern vanara chuttako 
# com? xa becaues google.com & google.co.uk pani xa so 
    #  "m" is optional ("m" huna pani sakxa nahuna pani sakxa)

preg_match_all($pattern,$content,$matches);
print_r($matches);