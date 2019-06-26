<?php

namespace App\Repositories;

use App\User;

class UserRepository
{
    public function index()
    {
        return User::with('departs')->paginate(5);
    }

    public function find($id)
    {
        return User::with('departs')->find($id);
    }

    public function update($id, array $data)
    {
        $user = User::find($id);
        return $user ? $user->update($data) : false;
    }

    public function delete($id)
    {
        return User::destroy($id);
    }
}
