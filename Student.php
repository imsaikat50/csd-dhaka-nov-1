<?php
/**
 * Created by PhpStorm.
 * User: mizan
 * Date: 11/11/17
 * Time: 11:02 AM
 */

class DB
{
    public function __construct()
    {
        $this->connect = new PDO();
    }

}


class Student
{
    public $studentName;
    public $studentClass;
    public $studentRoll;

    public function __construct(string $studentName, string $studentClass, string $studentRoll)
    {
        $this->studentName = $studentName;
        $this->studentClass = $studentClass;
        $this->studentRoll = $studentRoll;
    }

    public function save()
    {
        //
        $connect = new DB();
        $connect->save($this);
    }

}

$handle = fopen("./csv", "r");

while($line = fgetcsv($handle, 80, ","))
{
    $student = new Student($line[0],$line[1],$line[2]);
    $student->save();
}