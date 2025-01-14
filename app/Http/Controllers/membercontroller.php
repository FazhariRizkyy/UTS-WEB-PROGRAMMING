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
        $member = member::all();
        return response()->json([
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

        Member::create($data);

        return response()->json([
            'message_update' => "Data Added!"
        ]);
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
        // Validasi data jika diperlukan
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'jenis_kelamin' => 'required|string|max:10', // Sesuaikan dengan kebutuhan
        ]);

        // Temukan member berdasarkan ID
        $member = member::findOrFail($id);

        // Data yang ingin diperbarui
        $data = [
            'nama' => $request->input('nama'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ];

        // Memperbarui member
        $datas = Member::where('id', $id)->first();
        $member->update($data);

        return response()->json([
            'message_update' => "Data Updated!"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $data = member::findOrFail($id);
            $data = Member::where('id', $id)->first();

            $data->delete();

            return response()->json([
                'message_delete' => "Data Deleted!"
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Failed to delete data.',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
