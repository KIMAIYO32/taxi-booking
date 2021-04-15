<?php

define('SERVER','localhost');
define('USERNAME','root');
define('PASSWORD','');
define('DATABASE','ptaxi');


$link=mysqli_connect(SERVER,USERNAME,PASSWORD,DATABASE);

if ($link==false){
    die("ERROR IN CONNECTION".mysqli_connect_error());
}