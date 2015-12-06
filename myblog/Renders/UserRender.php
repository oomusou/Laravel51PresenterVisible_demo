<?php
/**
 * Your file description
 *
 * @version 0.1.0
 * @author oomusou
 * @date 11/26/15
 * @since 11/26/15 description
 */

namespace MyBlog\Renders;

use MyBlog\User;

class UserRender
{
    /**
     * 是否顯示email
     *
     * @param User $user
     * @return bool
     */
    public function doesShowEmail(User $user)
    {
        if ($user->show_email == 'Y')
            return true;
        else
            return false;
        
    }
}