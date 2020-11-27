<?php

namespace App\Soap\Student;

use App\Soap\Types\Student;

/**
 * Methods used by Demo service class.
 */
class StudentProvider
{

    /**
     * Returns array of products by search criteria.
     *
     * @return \App\Soap\Types\Student[]
     */
    public static function getAllStudents(): array
    {

        $students = \App\Student::all();
        $result = array();
        foreach ($students as $item){
            array_push($result,
                new Student(
                    $item->id,
                    $item->national_code,
                    $item->student_no,
                    $item->name,
                    $item->university,
                    $item->grade
                )
            );
        }
        return $result;
    }

}
