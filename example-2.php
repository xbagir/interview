<?php

declare(strict_types=1);

/**
 * Class PostService
 *
 * @author Maxim Bagirov <xbagir@gmail.com>
 */
class PostService
{
    /** @var Database */
    private Database $db;

    /**
     * PostService constructor.
     *
     * @param DatabaseInterface $db
     */
    public function __construct(DatabaseInterface $db)
    {
        $this->db = $db;
    }

    /**
     * @param PostDto $dto
     *
     * @return Post
     */
    public function createPost(PostDto $dto): Post
    {
        return  $this->db->createPost($dto);
    }

    /**
     * @param array $data
     *
     * @return Post
     */
    public function updatePost(array $data): Post
    {
        return  $this->db->updatePost($data);
    }
}