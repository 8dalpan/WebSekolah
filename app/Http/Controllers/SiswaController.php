<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoresiswaRequest;

class SiswaController extends Controller
{
    //

    public function index(){
        $data=siswa::paginate(5);
        return view('siswa',compact('data'));

    }
    public function store(StoresiswaRequest $request){
    $siswa=Siswa::create($request->validated());
    return redirect('/siswa');
    }
    public function show($id){
        $siswa=Siswa::findOrFail($id);
        return view('editsiwa',compact('siswa'));
    }
    public function update(Request $request,$id){
        $siswa=siswa::findOrFail($id);
        $siswa->update($request->only([
            'nis','nama','jenis_kelamin','kelas','jurusan','no_hp'
        ]));
        return redirect('/siswa');

    }
    public function destroy($id) {
        $siswa=Siswa::findOrFail($id);
        $siswa->delete();
        return redirect('/siswa');

    }
}
