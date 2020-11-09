<?php

namespace Practice;

use Practice\{
    Teacher,
    TeacherList,
    StudentList
};

/**
 * 校長先生
 */
class HeadTeacher extends Teacher
{
    /** @var TeacherList $teacherList 先生のリスト */
    private $teacherList;

    /**
     * コンストラクタ
     *
     * @param string $name 氏名
     */
    public function __construct(string $name)
    {
        parent::__construct($name);

        $this->teacherList = new TeacherList();
    }

    /**
     * 校長先生は先生と生徒の割り振りができる
     *
     * @param  string      $teacherName 先生の名前
     * @param  StudentList $studentList 生徒リスト
     * @return Teacher
     */
    public function createTeacher(string $teacherName, StudentList $studentList): Teacher
    {
        $teacher = new Teacher($teacherName);
        $teacher->setStudentList($studentList);

        $this->teacherList->add($teacher);

        return $teacher;
    }
}
