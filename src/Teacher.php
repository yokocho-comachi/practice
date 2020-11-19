<?php

namespace Practice;

use Practice\{
    StudentList
};


/**
 * 先生
 */
class Teacher
{
    /** @var string $name 先生の名前 */
    protected $name = '';

    /** @var StudentList $studentList 受け持つ生徒のリスト */
    protected $studentList = null;

    /**
     * コンストラクタ
     *
     * @param string $name 氏名
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * 生徒のリストをセットする
     */
    public function setStudentList(StudentList $studentList)
    {
        $this->studentList = $studentList;
    }

    /**
     * 生徒リストの取得
     *
     * @return StudentList|null
     */
    public function getStudentList()
    {
        return $this->studentList;
    }

    /**
     * 名前の取得
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
}
