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
        $total_siswa=Siswa::count();
        $total_guru=Guru::count();
        return view('dashboard',compact('total_siswa','total_guru'));
    }

    public function siswa(){
        $data=siswa::paginate(5);
        return view('siswa',compact('data'));

    }
    public function addsiswa(Request $request){
    Siswa::create($request->all());
    return redirect('/siswa');
    }
    public function editsiswa($id){
        $siswa=Siswa::findOrFail($id);

        return view('editsiwa',compact('siswa'));
    }
    public function updatesiswa(Request $request,$id){
        $siswa=siswa::findOrFail($id);
        $siswa->update($request->all());
        return redirect('/siswa');

    }
    public function deletesiswa($id) {
        $siswa=Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');

    }
    public function guru(){
        $data=Guru::Paginate(5);
        return view('guru',compact('data'));
    }

    public function addguru(Request $request){
        Guru::create($request->all());
        return redirect('/guru');
        }
        public function editguru($id){
            $guru=Guru::findOrFail($id);
            return view('editguru',compact('guru'));
        }
        public function updateguru(Request $request,$id){
        $guru=Guru::findOrFail($id);
        $guru->update($request->all());
        return redirect('/guru');
    }
    public function deleteguru($id){
        $guru=Guru::findOrFail($id);
        $guru->delete();
        return redirect('/guru');
    }

}
