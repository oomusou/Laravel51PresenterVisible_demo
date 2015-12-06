<?php
/**
 * User table的repository
 *
 * @version 0.1.0
 * @author oomusou
 * @date 11/25/15
 * @since 11/25/15 建立getAgeLargerThan()
 */

namespace MyBlog\Repositories;

use Doctrine\Common\Collections\Collection;
use MyBlog\User;

class UserRepository
{
    /** @var User 注入的User model */
    protected $user;

    /**
     * UserRepository constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * 回傳大於?年紀的資料
     *
     * @param integer $age
     * @return Collection
     */
    public function getAgeLargerThan($age)
    {
        return $this->user
            ->where('age', '>', $age)
            ->orderBy('created_at')
            ->get();
    }
}