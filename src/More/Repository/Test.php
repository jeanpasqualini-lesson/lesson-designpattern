<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/5/15
 * Time: 7:38 AM
 */

namespace Test\More\Repository;

use DesignPatterns\Behavioral\Command\HelloCommand;
use DesignPatterns\Behavioral\Command\Invoker;
use DesignPatterns\Behavioral\Command\Receiver;
use DesignPatterns\Creational\Builder\BikeBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use DesignPatterns\More\ServiceLocator\DatabaseService;
use DesignPatterns\More\ServiceLocator\LogService;
use DesignPatterns\More\ServiceLocator\ServiceLocator;
use DesignPatterns\Repository\MemoryStorage;
use DesignPatterns\Repository\Post;
use Test\TestInterface;

class Test implements TestInterface {

    public function describe()
    {

    }

    public function runTest()
    {
        $storage = new MemoryStorage();

        $postRepository = new PostRepository($storage);

        $post = new Post();

        $post->setTitle("un post");

        $postRepository->save($post);

        $otherPost = $postRepository->getById(6);

        echo "unknow post : ".gettype($otherPost).PHP_EOL;

        $myPost = $postRepository->getById($post->getId());

        echo "my post : ".gettype($myPost)." : ".$myPost->getTitle().PHP_EOL;
    }
}