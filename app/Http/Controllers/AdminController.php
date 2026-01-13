<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class AdminController extends Controller
{
    //
    public function index(){
        return view('dashboard');
    }

    public function siswa(){
        $data=siswa::all();
        return view('siswa',compact('data'));

    }
    public function addsiswa(Request $request){
    Siswa::create($request->all());
    return redirect('/siswa');
    }
    public function deletesiswa($id) {
        $siswa=Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');

    }
    public function guru(){
        $data=Guru::all();
        return view('guru',compact('data'));
    }

    public function addguru(Request $request){
     Guru::create($request->all());
     return redirect('/guru');
    }
    public function deleteguru($id){
        $guru=Guru::findOrFail($id);
        $guru->delete();
        return redirect('/guru');
    }
    public function editguru(Request $request,$id){
        $guru=Guru::findOrFail($id);
        return view('editguru',compact('guru'));
    }
}
