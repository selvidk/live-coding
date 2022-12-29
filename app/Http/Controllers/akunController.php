<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class akunController extends Controller
{
    public function getAkun()
    {
        $data = User::all();
        return $data;
    }

    public function createAkun(Request $request)
    {
        try {
            User::create([
                'name'      => $request->nama,
                'email'     => $request->email,
                'role'      => $request->role,
                'status'    => 1,
                'password'  => Hash::make($request->password),
            ]);

            return 'sukses';
        } catch (\Exception $e) {
            return $e->getMessage();
        } 
    }
}
