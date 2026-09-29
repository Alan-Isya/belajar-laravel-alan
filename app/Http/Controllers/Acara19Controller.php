<?php

namespace App\Http\Controllers;

use App\Models\User;

class Acara19Controller extends Controller
{
    public function conditional()
    {
        // where()
        $where = User::where('status', 'active')->get();

        // orWhere()
        $orWhere = User::where('status', 'active')
            ->orWhere('role', 'admin')
            ->get();

        // whereBetween()
        $whereBetween = User::whereBetween('age', [18, 30])->get();

        // whereIn()
        $whereIn = User::whereIn('role', ['admin', 'editor'])->get();

        // whereNull()
        $whereNull = User::whereNull('email_verified_at')->get();

        // whereNotNull()
        $whereNotNull = User::whereNotNull('email')->get();

        // when()
        $role = 'admin';

        $when = User::when($role, function ($query, $role) {
            return $query->where('role', $role);
        })->get();

        return view('acara19-conditional', compact(
            'where',
            'orWhere',
            'whereBetween',
            'whereIn',
            'whereNull',
            'whereNotNull',
            'when'
        ));
    }

    public function relationships()
    {
        $user = User::where('email', 'john@example.com')->firstOrFail();

        // One to One
        $profile = $user->profile()->firstOrCreate(
            [
                'user_id' => $user->id
            ],
            [
                'bio' => 'Mahasiswa Teknik Informatika'
            ]
        );

        // One to Many
        $post1 = $user->posts()->firstOrCreate(
            [
                'title' => 'Belajar Laravel'
            ],
            [
                'content' => 'Mempelajari Eloquent ORM.'
            ]
        );

        $post2 = $user->posts()->firstOrCreate(
            [
                'title' => 'Belajar Eloquent'
            ],
            [
                'content' => 'Mempelajari Eloquent Relationships.'
            ]
        );

        // Many to Many
        $admin = \App\Models\Role::firstOrCreate([
            'name' => 'admin'
        ]);

        $editor = \App\Models\Role::firstOrCreate([
            'name' => 'editor'
        ]);

        $user->roles()->syncWithoutDetaching([
            $admin->id,
            $editor->id
        ]);

        return view('acara19-relationships', compact(
            'user',
            'profile',
            'post1',
            'post2'
        ));
    }

    // Mutator dan Accessor
    public function mutatorsAccessors()
    {
        $user = User::where('email', 'john@example.com')->firstOrFail();

        $user->first_name = 'john';
        $user->last_name = 'updated';
        $user->save();

        return view('acara19-mutator-accessors', compact('user'));
    }

    // Soft Deletes
    public function softDeletes()
    {
    $user = User::where('email', 'john@example.com')->firstOrFail();

    // Menghapus data secara soft delete
    $user->delete();

    // Mengambil data yang sudah di soft delete
    $withTrashed = User::withTrashed()
        ->where('email', 'john@example.com')
        ->first();

    // Mengambil hanya data yang sudah di soft delete
    $onlyTrashed = User::onlyTrashed()
        ->where('email', 'john@example.com')
        ->first();

    // Mengembalikan data
    $user->restore();

    return view('acara19-soft-deletes', compact(
        'user',
        'withTrashed',
        'onlyTrashed'
        ));
    }

    // Mass Assignment Protection
    public function massAssignment()
    {
        $user = User::where('email', 'john@example.com')->firstOrFail();

        $user->update([
            'first_name' => 'John',
            'last_name' => 'Mass Assignment',
            'status' => 'active',
            'role' => 'admin',
            'age' => 25,
        ]);

        return view('acara19-mass-assignment', compact('user'));
    }

    // Query Scope
    public function queryScopes()
    {
        $users = User::active()->get();

        return view('acara19-query-scope', compact('users'));
    }
}
