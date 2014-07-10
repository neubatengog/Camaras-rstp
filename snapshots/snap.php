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

save_image('http://direccionip/snapshot.cgi','/var/www/camaras/snapshots/camara1.jpg');
save_image('http://direccionip/snapshot.cgi','/var/www/camaras/snapshots/camara2.jpg');
save_image('http://direccionip/snapshot.cgi','/var/www/camaras/snapshots/camara3.jpg');
save_image('https://direccionip/snapshot.cgi','/var/www/camaras/snapshots/mini.jpg');

?>
