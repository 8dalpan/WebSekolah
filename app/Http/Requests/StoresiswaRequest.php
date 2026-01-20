<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoresiswaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        'nis' => 'required|unique:siswa,nis|max:255',
        'nama' => 'required',
        'jenis_kelamin' => 'required',
        'kelas' => 'required',
        'jurusan' => 'required',
        'no_hp' =>'required|regex:/^[0-9]+$/|max:13',
        'mapel_id' => 'required|exists:mapels,id'
    ];
    }
    public function messages()
    {
        return[
        'nis.required'=>'NIS Tidak Boleh Kosong',
        'nis.unique'=>'NIS Terdaftar',
        ];
    }
}
