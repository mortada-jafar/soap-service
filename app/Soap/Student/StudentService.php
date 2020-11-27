<?php

namespace App\Soap\Student;


use App\Soap\Student\StudentProvider as Provider;
use App\Student;
use SoapFault;

/**
 * An example of a class that is used as a SOAP gateway to application functions.
 */
class StudentService
{


    /**
     * Remove User.
     *
     * @param string $national_code
     * @return array
     */
    public function deleteStudent($national_code)
    {
        Student::where([
            'national_code' => $national_code,
        ])->delete();
        return ['msg' => 'removed'];
    }

    /**
     * Create User.
     *
     * @param string $national_code
     * @param string $student_no
     * @param string $name
     * @param string $university
     * @param float $grade
     * @return array
     */
    public function storeStudent($national_code, $student_no, $name, $university, $grade)
    {
        Student::create([
            'national_code' => $national_code,
            'student_no' => $student_no,
            'name' => $name,
            'university' => $university,
            'grade' => $grade,
        ]);
        return ['msg' => 'created'];
    }
    /**
     * Update User.
     *
     * @param int $id
     * @param string $national_code
     * @param string $student_no
     * @param string $name
     * @param string $university
     * @param float $grade
     * @return array
     */
    public function updateStudent($id,$national_code, $student_no, $name, $university, $grade)
    {
        Student::find($id)->fill([
            'national_code' => $national_code,
            'student_no' => $student_no,
            'name' => $name,
            'university' => $university,
            'grade' => $grade,
        ])->save();
        return ['msg' => 'updated'];
    }

    /**
     * Returns an array of products by search criteria.
     *
     * @return \App\Soap\Types\Student[]
     * @throws SoapFault
     */
    public function getStudents(): array
    {
        return Provider::getAllStudents();

    }
}
