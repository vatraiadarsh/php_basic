

<?php
$content="google.com http://google.com www.google.com google.com.np google.co.uk";

$pattern="/(http:\/\/)?(www\.)?google\.com?(\.\w{2})?/";

# Here i need the www also so (www\.)?
# Ani pheri aagadi ko http pani xodnu vayana tasial (htpp://)?
    # (htpp://) ko yo slash li unique banako ((htpp:\/\/))
preg_match_all($pattern,$content,$matches);
print_r($matches);
