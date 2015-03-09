<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:51 AM
 */

namespace Test\Behavioral\Iterator;

use DesignPatterns\Behavioral\Iterator\Book;
use DesignPatterns\Behavioral\Iterator\BookList;
use DesignPatterns\Behavioral\Iterator\BookListIterator;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $books = array(
            array(
                "title" => "1er livre",
                "author" => "1er auteur"
            ),
            array(
                "title" => "2eme livre",
                "author" => "2eme auteur"
            ),
            array(
                "title" => "3eme livre",
                "author" => "3eme auteur"
            )
        );

        $bookList = new BookList();

        foreach($books as $book)
        {
            $book = new Book($book["title"], $book["author"]);

            $bookList->addBook($book);
        }

        $iterators = array(
            new BookListIterator($bookList),
            new BookListReverseIterator($bookList),
        );

        foreach($iterators as $iterator)
        {
            echo "===".get_class($iterator)." start with n° ".$iterator->key()." ===".PHP_EOL;

            foreach($iterator as $book)
            {
                /** @var $book Book */

                echo "the book n°".$iterator->key()." : ".$book->getAuthorAndTitle().PHP_EOL;
            }
        }
    }

}
