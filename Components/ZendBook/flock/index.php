<?php

$file = fopen("test.txt","w+");

// exclusive lock
if (flock($file, LOCK_EX|LOCK_NB))
{
    fwrite($file,"Write something");
}
else
{
    echo "Error locking file!";
    die;
}

while (true){
    echo 'true';
    sleep(10);
}

fclose($file);
?>
