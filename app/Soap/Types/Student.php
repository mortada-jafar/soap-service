<?php

namespace App\Soap\Types;


class Student
{
    /**
     * @var int
     */
    public $id;
    /**
     * @var string
     */
    /**
     * @var string
     */
    public $national_code;
    /**
     * @var string
     */
    public $student_no;
    /**
     * @var string
     */
    public $name;
    /**
     * @var string
     */
    public $university;
    /**
     * @var string
     */
    public $grade;

    /**
     * Student constructor.
     * @param $id
     * @param $national_code
     * @param $student_no
     * @param $name
     * @param $university
     * @param $grade
     */
    public function __construct($id, $national_code, $student_no, $name, $university, $grade)
    {
        $this->id = $id;
        $this->national_code = $national_code;
        $this->student_no = $student_no;
        $this->name = $name;
        $this->university = $university;
        $this->grade = $grade;
    }

}
