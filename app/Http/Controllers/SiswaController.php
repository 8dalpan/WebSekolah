<?php

namespace App\Http\Controllers;
use App\Models\Mapel;
use App\Models\Siswa;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\StoresiswaRequest;

class SiswaController extends Controller
{
    public function index(Request $request){
        $keyword=$request->keyword;
        if ($keyword) {
                    $data = Siswa::with('mapel')
                    ->where('nama','LIKE','%'.$keyword.'%')
                    ->orWhere('nis','LIKE','%'.$keyword.'%' )
                    ->paginate(5);
        } else {
            $data=Siswa::with('mapel')->paginate(5);
        }
            $mapels = Mapel::all();
            return view('siswa',compact('data','mapels'));
    }
    public function store(StoresiswaRequest $request){
    Siswa::create($request->validated());
    return redirect('/siswa')
        ->with('status','success')
        ->with('message','Data Berhasil Disimpan');
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
