<?php

namespace Practice;

use Practice\{
    Iteratable
};
use Practice\Students\{
    Student,
    BadStudent,
    GoodStudent,
    OrdinaryStudent
};

/**
 * 生徒のリスト
 */
class StudentList extends Iteratable
{
    /** @var array $users 生徒のリスト **/
    protected $students = [];

    /** @var string iteratableProperty 回せるプロパティ **/
    protected $iteratableProperty = 'students';

    /**
     * コンストラクタ
     *
     * @param array $students name, gender, age, deviation の順番で定義された配列
     */
    public function __construct(array $students = [])
    {
        foreach($students as $student) {
            $this->add($this->createStudent($student));
        }
    }

    /**
     * 生徒の追加
     *
     * @param Student $student 生徒オブジェクト
     */
    public function add(Student $student)
    {
        $this->students[] = $student;
    }

    /**
     * リストにフィルターをかけて、新しい生徒リストを作る
     *
     * @param  Closure     $func bool を返すクロージャー
     * @return StudentList
     */
    public function filter(Closure $func): StudentList
    {
        $newList = [];
        foreach ($this->students as $student) {
            if (!$func($student)) {
                continue;
            }
            $newList[] = $student->get();
        }

        return new static($newList);
    }

    /**
     * 生徒の作成
     *
     * @param  array  $student 生徒情報
     * @return Student
     */
    private function createStudent(array $student)
    {
        if ($student['deviation'] <= 30) {
            return new BadStudent(...array_values($student));
        }
        if ($student['deviation'] >= 60) {
            return new GoodStudent(...array_values($student));
        }

        return new OrdinaryStudent(...array_values($student));
    }
}
