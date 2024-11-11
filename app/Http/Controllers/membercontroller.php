<?php

namespace App\Http\Controllers;

use App\Models\member;
use Illuminate\Http\Request;

class membercontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $member = member::paginate(5);
        return view('page.member.index')->with([
            'member' => $member,
    ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ];

        member::create($data);
        return back()->with('message_delete', 'Data Member Sudah dibuat');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ];

        $data = member::findOrFail($id);
        $data->update($data);
        return back()->with('message_delete', 'Data Member Sudah diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = member::findOrFail($id);
        $data->delete();
        return back()->with('message_delete','Data Member Sudah dihapus');
    }
}
