<?php

namespace Practice;

/**
 * 生徒
 */
class Student
{
    /** @var array $data 生徒のデータ */
    private $data = [
        'name'      => '',
        'gender'    => 0,
        'age'       => 0,
        'deviation' => 50
    ];

    /**
     * コンストラクタ
     *
     * @param string $name      名前
     * @param int    $gender    性別
     * @param int    $age       年齢
     * @param int    $deviation 偏差値
     */
    public function __construct(string $name, int $gender, int $age, int $deviation)
    {
        $this->data = compact('name', 'gender', 'age', 'deviation');
    }

    /**
     * property overload
     *
     * @param  string $name property name
     * @return mixed
     */
    public function __get(string $name)
    {
        return $this->get($name);
    }

    /**
     * アクセサー
     *
     * @param  string $name アクセスしたいプロパティ名
     * @return mixed
     */
    public function get(string $name = '')
    {
        if (!strlen($name)) {
            return $this->data;
        }
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }

        $trace = debug_backtrace();
        trigger_error(
            'Undefined property via __get(): ' . $name
            . ' in ' . $trace[0]['file']
            . ' on line ' . $trace[0]['line'],
            E_USER_NOTICE
        );
    }
}
