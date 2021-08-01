<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class MemberController extends Controller
{
    public function index()
    {
        return view('member.index', [
            'title' => 'People',
            'people' => User::all()
        ]);
    }

    public function show(User $user)
    {
        return view('member.show', [
            'title' => $user->username,
            'name' => $user->name,
            'post' => $user->post
        ]);
    }
}
