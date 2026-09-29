<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class QueryBuilderController extends Controller
{
    // Bagian 1 - Pengenalan & Pembuatan Data Baru
    public function index()
    {
        if (!DB::table('users')->where('email', 'johndoe@example.com')->exists()) {
            DB::table('users')->insert([
                'name' => 'John Doe',
                'email' => 'johndoe@example.com',
                'password' => bcrypt('password123')
            ]);
        }

        if (!DB::table('users')->where('email', 'jane@example.com')->exists()) {
            $id = DB::table('users')->insertGetId([
                'name' => 'Jane Doe',
                'email' => 'jane@example.com',
                'password' => bcrypt('password123')
            ]);
        } else {
            $id = DB::table('users')
                ->where('email', 'jane@example.com')
                ->value('id');
        }

        return view('query-builder', compact('id'));
    }

    // Bagian 2 - Mengambil Data Dari Database
    public function getData()
    {
        // Mengambil semua data
        $users = DB::table('users')->get();

        // Mengambil satu data berdasarkan email
        $user = DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->first();

        // Mengambil kolom tertentu
        $selectedUsers = DB::table('users')
            ->select('id', 'name', 'email')
            ->get();

        return view('query-builder-data', compact(
            'users',
            'user',
            'selectedUsers'
        ));
    }

    // Bagian 3 - Memperbarui Data
    public function updateData()
    {
        DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->update([
                'name' => 'John Updated'
            ]);

        $user = DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->first();

        return view('query-builder-update', compact('user'));
    }

    // Bagian 4 - Menghapus Data
    public function deleteData()
    {
        DB::table('users')
            ->where('email', 'johndoe@example.com')
            ->delete();

        return view('query-builder-delete');
    }

    //Bagian 5 - Mengambil Daftar Nilai Kolom
    public function pluckData()
    {
        $names = DB::table('users')->pluck('name');
        $users = DB::table('users')->pluck('name', 'email');

        return view('query-builder-pluck', compact(
            'names',
            'users'
        ));
    }

    //Bagian 6 - Agregat
    public function aggregateData()
    {
        $totalUsers = DB::table('users')->count();
        $totalId = DB::table('users')->sum('id');
        $averageId = DB::table('users')->avg('id');
        $maxId = DB::table('users')->max('id');
        $minId = DB::table('users')->min('id');

        return view('query-builder-aggregate', compact(
            'totalUsers',
            'totalId',
            'averageId',
            'maxId',
            'minId',
        ));
    }

    //Bagian 7 - Join
    public function joinData()
    {
        $users = DB::table('users')
            ->join('orders','users.id','=','orders.user_id')
            ->select(
                'users.name',
                'orders.total_price'
            )
            ->get();

        $leftJoinUsers = DB::table('users')
            ->leftJoin('orders', 'users.id', '=', 'orders.user_id')
            ->select(
                'users.name',
                'orders.total_price',
            )
            ->get();

        return view('query-builder-join', compact(
            'users',
            'leftJoinUsers'
        ));
    }

    //Bagian 8 - Pengurutan, Limit, dan Offset
    public function orderData()
    {
        // Mengurutkan berdasarkan nama
        $orderedUsers = DB::table('users')
            ->orderBy('name', 'asc')
            ->get();

        // Membatasi jumlah data
        $limitedUsers = DB::table('users')
            ->limit(10)
            ->get();

        // Menggunakan offset dan limit
        $offsetUsers = DB::table('users')
            ->offset(1)
            ->limit(10)
            ->get();

        return view('query-builder-order', compact(
            'orderedUsers',
            'limitedUsers',
            'offsetUsers',
        ));
    }

    // Bagian 9 - Subquery
    public function subqueryData()
    {
        $users = DB::table('users')
            ->select('name')
            ->selectSub(function ($query) {
                $query->from('orders')
                    ->selectRaw('count(*)')
                    ->whereColumn('orders.user_id', 'users.id');
            }, 'order_count')
            ->get();

        return view('query-builder-subquery', compact('users'));
    }

    //Bagian 10 - Query Raw
    public function rawData()
    {
        // Menggunakan Raw untuk Select
        $totalUsers = DB::table('users')
            ->selectRaw('COUNT(*) as total_users')
            ->first();

         // Mengunakan Raw dalam where
        $users = DB::table('users')
            ->whereRaw('id > ?', [0])
            ->get();

        return view('query-builder-raw', compact(
            'totalUsers',
            'users'
        ));
    }
}
