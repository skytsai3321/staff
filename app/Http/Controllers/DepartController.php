<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\DepartRepository;

class DepartController extends Controller
{
    protected $departRepo;

    public function __construct(DepartRepository $departRepo)
    {
        $this->departRepo = $departRepo;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $departs = $this->departRepo->index();
        return view('depart.index', ['departs' => $departs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('depart.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $depart = $this->departRepo->create(request()->only('name'));

        if ($depart) {
            return redirect()->route('depart.show', $depart->id);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $depart = $this->departRepo->find($id);

        if (!$depart) {
            return redirect()->route('post.index');
        }

        return view('depart.show', ['depart' => $depart]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $depart = $this->departRepo->find($id);

        if (!$depart) {
            return redirect()->route('depart.index');
        }

        return view('depart.edit', ['depart' => $depart]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update($id)
    {
        $result = $this->departRepo->update($id, request()->only(['name']));

        if (!$result) {
            return redirect()->route('depart.index');
        }
        return redirect()->route('depart.show', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $result = $this->departRepo->delete($id);

        if ($result) {
            return redirect()->route('depart.index');
        }

        return back();
    }
}
