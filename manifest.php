<?php 
header("Content-Type: text/cache-manifest");

echo "CACHE MANIFEST\n";

echo "# VERSION 1.0\n\n";

echo "CACHE:\n";

echo "index.html\n";
echo "page1.html\n";
echo "page2.html\n";
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