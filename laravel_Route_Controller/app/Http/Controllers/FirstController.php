<?php

namespace App\Http\Controllers;

use App\Models\Identitas;
use Illuminate\Http\Request;
use Illuminate\support\Facades\DB;

class FirstController extends Controller
{
    public function coba1(){
        echo "Belajar Route dan Controller - part 1";
    }

    public function dashboard(){
        return view("dashboard");
    }

    public function coba3(){
        echo "Belajar Route dan Controller - part 3";
    }

    public function coba4(){
        echo "Belajar Route dan Controller - part 4";
    }

    public function showForm(){
        return view('form');
    }
    public function submit(Request $request)
    {
        $fullname = $request->input('fullname');
        $umur = $request->input('umur');
        $alamat = $request->input('alamat');

        DB::table('identitas')->insert([
            'fullname' => $fullname,
            'umur' => $umur,
            'alamat' => $alamat,
        ]);

        $submitBaru = (object) [
            'fullname' => $fullname,
            'umur' => $umur,
            'alamat' => $alamat
        ];

        return redirect('/dashboard')->with('succes', 'Data mahasiswa berhasil ditambahkan.')->with('submitBaru', $submitBaru);

    }

    public function read(){
        return view('dashboard');
    }
}
