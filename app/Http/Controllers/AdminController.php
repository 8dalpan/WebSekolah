<?php

namespace App\Http\Controllers;

use App\Models\Guru;
use App\Models\Mapel;
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
    $request->validate([
        'nis' => 'required|unique:siswa,nis|max:255',
        'nama' => 'required',
        'jenis_kelamin'=>'required',
        'kelas'=>'required',
        'jurusan'=>'required',
        'no_hp'=>'required|regex:/^[0-9]+$/|max:13',
    ]);
    Siswa::create($request->all());
    return redirect('/siswa');
    }
    public function editsiswa($id){
        $siswa=Siswa::findOrFail($id);

        return view('editsiwa',compact('siswa'));
    }
    public function updatesiswa(Request $request,$id){
        $siswa=siswa::findOrFail($id);
        $siswa->update($request->only([
            'nis','nama','jenis_kelamin','kelas','jurusan','no_hp'
        ]));
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
    $request->validate([
    'nip' => 'required|unique:guru,nip|max:20',
    'nama' => 'required|max:50',
    'jenis_kelamin' => 'required',
    'mata_pelajaran' => 'required|max:30',
    'no_hp' => 'required|regex:/^[0-9]+$/|max:13',
    'alamat' => 'required|max:200',
    'status_kepegawaian' => 'required|max:30',
]);
        Guru::create($request->all());
        return redirect('/guru');
        }
        public function editguru($id){
            $guru=Guru::findOrFail($id);
            return view('editguru',compact('guru'));
        }
        public function updateguru(Request $request,$id){
        $guru=Guru::findOrFail($id);
        $guru->update($request->only([
            'nip','nama','jenis_kelamin','mata_pelajaran','no_hp','alamat','status_kepegawaian'
        ]));
        return redirect('/guru');
    }
    public function deleteguru($id){
        $guru=Guru::findOrFail($id);
        $guru->delete();
        return redirect('/guru');
    }


    public function mapel(){
        $data=Mapel::all();
        return view('mapel',compact('data'));
    }

    public function addmapel(Request $request){
    Mapel::create($request->all());
    return redirect('/mapel');
    }

    public function deletemapel($id){
        $data=Mapel::findOrFail($id);
        $data->delete();
        return redirect('/mapel');
    }
        public function editmapel($id){
            $mapel=Mapel::findOrFail($id);
            return view('editmapel',compact('mapel'));
        }

        public function updatemapel(Request $request,$id){
            $mapel=Mapel::findOrFail($id);
            $mapel->update($request->only([
                'nama_mapel'
            ]));
            return redirect('/mapel');
        }

}
