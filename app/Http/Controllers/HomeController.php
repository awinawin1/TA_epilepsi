<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EpilepsiModel;


class HomeController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->EpilepsiModel = new EpilepsiModel();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('v_dashboard');
    }

    public function addfile()
    {
        Request()->validate([
            'nama' => 'required',
            // 'alamat' => 'required',
            'fileeg' => 'required',
        ]);
        
        $file = Request()->fileeg;
        $fileName = Request()->nama.'.'.$file->extension() ;
        $file->move(public_path('fileeg'), $fileName);
        
        $data =[
            'nama'=> Request()->nama,
            // 'alamat'=> Request()->alamat,
            'fileeg'=> $fileName,
        ];
        $this->EpilepsiModel->addData($data);
        return redirect()->route('dashboard')->with('pesan','berhasil ditambah');
    }

    public function history()
    {
        return view('v_history');
    }

    public function profile()
    {
        return view('v_profile');
    }

    public function crud()
    {
        return view('v_crud');
    }


   
}
