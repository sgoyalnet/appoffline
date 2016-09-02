<?php 
header("Content-Type: text/cache-manifest");

echo "CACHE MANIFEST\n";

echo "# VERSION 1.1\n\n";

echo "CACHE:\n";

echo "index.php\n";
echo "page1.php\n";
echo "page2.php\n";
echo "scripts.js\n";
echo "style.css\n";
echo "images/112.jpg\n";
echo "offline.png\n\n";
echo "libs/bootstrap.min.css\n";
echo "libs/jquery-2.2.4.min.js\n";
echo "libs/bootstrap.min.js\n";


echo "NETWORK:\n";
echo "*\n\n\n";

echo "FALLBACK:\n";
echo "images/ offline.png";

?>