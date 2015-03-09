<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 9:21 AM
 */

namespace Test\Behavioral\Iterator;

use DesignPatterns\Behavioral\Iterator\BookListReverseIterator as BaseBookListReverseIterator;

class BookListReverseIterator extends BaseBookListReverseIterator {
    public function rewind()
    {
        $this->currentBook = $this->bookList->count() - 1;
    }
}