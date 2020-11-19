<?php

namespace Practice;

use IteratorAggregate;
use ArrayIterator;

/**
 *
 */
class Iteratable implements IteratorAggregate
{
    /** @var string iteratableProperty 回せるプロパティ **/
    protected $iteratableProperty = '';

    /**
     * イテレータの取得
     *
     * @return ArrayIterator
     */
    public function getIterator()
    {
        return new ArrayIterator($this->{$this->iteratableProperty});
    }
}
