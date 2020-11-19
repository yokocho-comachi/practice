<?php

namespace Practice;

use Practice\{
    Teacher
};

/**
 * 先生のリスト
 */
class TeacherList extends Iteratable
{
    /** @var array $users 生徒のリスト **/
    protected $teachers = [];

    /** @var string iteratableProperty 回せるプロパティ **/
    protected $iteratableProperty = 'teachers';

    /**
     * 先生の追加
     *
     * @param Teacher $teacher 生徒オブジェクト
     */
    public function add(Teacher $teacher)
    {
        $this->teachers[] = $teacher;
    }
}
