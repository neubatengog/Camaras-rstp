<?php
function save_image($inPath,$outPath)
{ 
    $in=    fopen($inPath, "rb");
    $out=   fopen($outPath, "wb");
    while ($chunk = fread($in,8192))
    {
        fwrite($out, $chunk, 8192);
    }
    fclose($in);
    fclose($out);
}

save_image('http://camara1.colegiorauquen.local/snapshot.cgi','/var/www/camaras/snapshots/camara1.jpg');
save_image('http://camara2.colegiorauquen.local/snapshot.cgi','/var/www/camaras/snapshots/camara2.jpg');
save_image('http://camara3.colegiorauquen.local/snapshot.cgi','/var/www/camaras/snapshots/camara3.jpg');
save_image('https://mini.colegiorauquen.local/snapshot.cgi','/var/www/camaras/snapshots/mini.jpg');

?>