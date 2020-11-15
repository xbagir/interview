<?php

declare(strict_types=1);

/**
 * Class GetPosts
 */
class GetPostsImmutable
{
    /** @var array  */
    private array $postIds;

    /**
     * @return array
     */
    public function getPostIds(): array
    {
        return $this->postIds;
    }

    /**
     * @param array $postIds
     *
     * @return $this
     */
    public function setPostIds(array $postIds): self
    {
        $this->postIds = $postIds;

        return $this;
    }
}