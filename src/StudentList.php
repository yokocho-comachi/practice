<?php

namespace Practice;

use Practice\{
    Student,
    Iteratable
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
            $this->add(new Student(...array_values($student)));
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
}
