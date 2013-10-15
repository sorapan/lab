<?php



define('HOLD_TIME',30);
set_time_limit(HOLD_TIME+1);
$expire = time()+HOLD_TIME;

$a=30;

while( $a != 0 ){

    sleep(1);
    $a--;

}
echo 'god';






