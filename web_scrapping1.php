<?php

$content="google.com http://google.com www.google.com google.com.np google.co.uk";

preg_match_all ("/google.com/",$content,$matches);
# google.com $content bata match garda ani match vako li print garda
print_r($matches);

# Yasla k vano vana kati wota google.com xa teha match huna tasli print garida



