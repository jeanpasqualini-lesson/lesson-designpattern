<?php
/**
 * Created by PhpStorm.
 * User: darkilliant
 * Date: 3/9/15
 * Time: 6:42 AM
 */

namespace Test\More\Repository;


use DesignPatterns\Repository\Post;
use DesignPatterns\Repository\Storage;

class PostRepository {

    private $persistence;

    public function __construct(Storage $persistence)
    {
        $this->persistence = $persistence;
    }

    /**
     * Returns Post object by specified id
     *
     * @param int $id
     * @return Post|null
     */
    public function getById($id)
    {
        $arrayData = $this->persistence->retrieve($id);
        if (is_null($arrayData)) {
            return null;
        }

        $post = new Post();
        $post->setId($id);
        $post->setAuthor($arrayData['author']);
        $post->setCreated($arrayData['created']);
        $post->setText($arrayData['text']);
        $post->setTitle($arrayData['title']);

        return $post;
    }

    /**
     * Save post object and populate it with id
     *
     * @param Post $post
     * @return Post
     */
    public function save(Post $post)
    {
        $id = $this->persistence->persist(array(
            'author' => $post->getAuthor(),
            'created' => $post->getCreated(),
            'text' => $post->getText(),
            'title' => $post->getTitle()
        ));

        $post->setId($id);
        return $post;
    }

    /**
     * Deletes specified Post object
     *
     * @param Post $post
     * @return bool
     */
    public function delete(Post $post)
    {
        return $this->persistence->delete($post->getId());
    }
}