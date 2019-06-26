<?php

namespace App\Repositories;

use App\Depart;

class DepartRepository
{
    public function index()
    {
        return Depart::with('user')->paginate(5);
    }

    public function find($id)
    {
        return Depart::with('user')->find($id);
    }

    public function delete($id)
    {
        return Depart::destroy($id);
    }

    public function create(array $data)
    {
        return auth()->user()->departs()->create($data);
    }

    public function update($id, array $data)
    {
        $depart = Depart::find($id);
        return $depart ? $depart->update($data) : false;
    }
}
