<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 12/11/17
 * Time: 10:57 AM
 */

if(strlen($_POST['password'])<6)
    echo "Sorry invalid password";
else
    echo "Thanks for Login - ".$_POST['username'];