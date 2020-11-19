<?php

use Practice\{
    HeadTeacher,
    StudentList
};

require_once 'vendor/autoload.php';

$students = [
    [
        'name'      => '佐藤',
        'gender'    => 2,
        'age'       => 15,
        'deviation' => 55
    ], [
        'name'      => '鈴木',
        'gender'    => 2,
        'age'       => 14,
        'deviation' => 49
    ], [
        'name'      => '高橋',
        'gender'    => 1,
        'age'       => 15,
        'deviation' => 42
    ], [
        'name'      => '田中',
        'gender'    => 2,
        'age'       => 16,
        'deviation' => 70
    ], [
        'name'      => '伊藤',
        'gender'    => 1,
        'age'       => 14,
        'deviation' => 29
    ]
];

// 校長クラスの作成
$headTeacher = new HeadTeacher('遠屋');

// 校長は先生の作成と担当の生徒を振り分けをする
$teacher = $headTeacher->createTeacher('渡辺', new StudentList($students));

foreach ($teacher->getStudentList() as $student) {
    echo $student->name . ':' . $student->deviation . "\n";
}

foreach ($headTeacher->getTeacherList() as $teacher) {
  echo $teacher->getName() . "\n";
}

/*
 : 推定作業時間 30分 ~ 1h
 :
 : 問1. 今回、生徒を優秀な生徒、一般生徒、不良生徒 に振り分けました。
 :      生徒に挨拶メソッドを追加して、優秀な生徒、一般生徒、不良生徒にそれぞれ別の挨拶をさせてください。
 */
