<?php

namespace App\Http\Controllers;

use App\Models\User;

class EloquentController extends Controller
{
    // Bagian 1 - Create
    public function createData()
    {
        // Menggunakan Create()
        $john = User::firstOrCreate(
            ['email' => 'john@example.com'],
            [
                'name' => 'John Doe',
                'password' => 'password123'
            ]
        );

        // Menggunakan Save()
        $jane = User::firstOrCreate(
            ['email' => 'jane@example.com'],
            [
                'name' => 'Jane Doe',
                'password' => 'password123'
            ]
        );

        return view('eloquent-create', compact('john', 'jane'));
    }

   // Bagian 2 - Retrieve
    public function retrieveData()
    {
        // Mengambil semua data
        $users = User::all();

        // Mengambil data berdasarkan ID
        $userById = User::find(1);

        // Menggunakan Query Builder pada Eloquent
        $usersByEmail = User::where('email', 'john@example.com')->get();

        // Menggunakan firstOrFail()
        $userFirst = User::where('email', 'john@example.com')->firstOrFail();

        return view('eloquent-retrieve', compact(
            'users',
            'userById',
            'usersByEmail',
            'userFirst'
        ));
    }

    // Bagian 3 - Update
    public function updateData()
    {
        // Menggunakan Update()
        User::where('email', 'john@example.com')
            ->update([
                'name' => 'John Update'
            ]);

        // Menggunakan Save()
        $jane = User::where('email', 'jane@example.com')->first();

        if ($jane) {
            $jane->name = 'Jane Update';
            $jane->save();
        }

        $john = User::where('email', 'john@example.com')->first();
        $jane = User::where('email', 'jane@example.com')->first();

        return view('eloquent-update', compact(
            'john',
            'jane',
        ));
    }

    // Bagian 4 - Delete
    public function deleteData()
    {
        // Menggunakan Delete()
        $jane = User::where('email', 'jane@example.com')->first();

        if ($jane) {
            $jane->delete();
        }

        // Menggunakan Destroy
        User::destroy(1);

        return view('eloquent-delete');
    }
}
