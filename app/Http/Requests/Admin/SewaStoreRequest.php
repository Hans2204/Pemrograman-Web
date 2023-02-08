<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SewaStoreRequest extends FormRequest
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
            'nama_dvd' => 'required',
            'harga_sewa' => 'required',
            'gambar' => 'required|image',
            'tahun' => 'required',
            'genre' => 'required',
            'durasi' => 'required',
            'status' => 'required',
            'deskripsi' => 'required',
            'SU' => 'required',
            '13+' => 'required',
            '17+' => 'required',
            '21+' => 'required',
        ];
    }
}
