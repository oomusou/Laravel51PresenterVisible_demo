<?php
/**
 * UserController
 *
 * @version 0.1.0
 * @author oomusou
 * @date 11/25/15
 * @since 11/25/15 使用DI注入UserRepository
 */

namespace App\Http\Controllers;

use App\Http\Requests;
use MyBlog\Repositories\UserRepository;

class UserController extends Controller
{
    /** @var  UserRepository 注入的UserRepository */
    protected $userRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->userRepository
            ->getAgeLargerThan(60);

        return view('users.index', compact('users'));
    }
}
