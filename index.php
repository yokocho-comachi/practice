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
        'deviation' => 70
    ]
];

// 校長クラスの作成
$headTeacher = new HeadTeacher('遠屋');

// 校長は先生の作成と担当の生徒を振り分けをする
$teacher = $headTeacher->createTeacher('渡辺', new StudentList($students));

/*
 : 推定作業時間 1 ~ 2h
 :
 : 問1. 以下の条件を満たすように、生徒の名前(name)と偏差値(deviation)の一覧を表示して下さい。
 :
 : 条件1. 配列ではなく、 $teacher に格納された生徒の情報を表示すること
 : 条件2. 必要であればファイルの追加・修正をしても良い
 */

var_dump($teacher);

 /*
  : 推定作業時間 1 ~ 2h
  :
  : 問2. 以下の条件を満たすように、$headTeacher がもっている、先生の名前一覧を表示して下さい。
  :
  : 条件1. 必要であればファイルの追加・修正をしても良い
  : 条件2. 問1の処理と共通化を図ること
  */
