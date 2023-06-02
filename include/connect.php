<?php

$con = mysqli_connect('localhost', 'root', '', 'My Store');
if (!$con){
    die(mysqli_error($con));
}