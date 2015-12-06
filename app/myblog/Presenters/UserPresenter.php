<?php

namespace MyBlog\Presenters;

use MyBlog\User;

class UserPresenter
{
    /**
     * 是否顯示email
     *
     * @param User $user
     * @return string
     */
    public function showEmail(User $user)
    {
        if ($user->show_email == 'Y')
            return '<h2>' . $user->email . '</h2>';
        else
            return '';
    }
}