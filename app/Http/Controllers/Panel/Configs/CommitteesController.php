<?php

namespace App\Http\Controllers\Panel\Configs;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CommitteesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $committees = (new \App\Committee)->all();
        return view('panel.configs.committees.all', compact('committees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dropdown_icons = dropdown_generator((new \App\Icon)->all(), ["id" => "title"]);
        return view('panel.configs.committees.create', compact('dropdown_icons'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateEditCommitteeRequest $request)
    {
        (new \App\Committee)->create($request->all());

        return redirect()->action('Panel\Configs\CommitteesController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $committee = (new \App\Committee)->findOrFail($id);
        $dropdown_icons = dropdown_generator((new \App\Icon)->all(), ["id" => "title"]);
        return view('panel.configs.committees.edit', compact('committee', 'dropdown_icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CreateEditCommitteeRequest $request, $id)
    {
        (new \App\Committee)->findOrFail($id)->update($request->all());
        return redirect()->action('Panel\Configs\CommitteesController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        (new \App\Committee)->destroy($id);
        return redirect()->action('Panel\Configs\CommitteesController@index');

    }
}
