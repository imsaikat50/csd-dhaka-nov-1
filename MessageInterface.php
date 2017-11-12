<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 11/11/17
 * Time: 2:33 PM
 */

interface  MessageInterface
{
    public function sendMessage();
}

class Email implements MessageInterface
{
    public function sendMessage()
    {
        echo "Sending Email \n";
    }
}

class SMS implements MessageInterface
{
    public function sendMessage()
    {
        echo "Sending SMS \n";
    }
}

class Pusher implements MessageInterface
{
    public function sendMessage()
    {
        echo "Sending Push Notification \n";
    }
}

class Notification
{

    public function send(MessageInterface $obj)
    {
        $obj->sendMessage();
    }

    public function reSend(MessageInterface $obj)
    {
        $obj->sendMessage();
    }

    public function log(MessageInterface $obj)
    {
        $obj->sendMessage();
    }

}

$email = new Email();
$notifiaction = new Notification();
$notifiaction->send($email);

$sms = new SMS();
$notifiaction = new Notification();
$notifiaction->send($sms);

$push = new Pusher();
$notifiaction = new Notification();
$notifiaction->send($push);