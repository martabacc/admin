<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAnnouncementRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'start_time' => 'required',
            'end_time' => 'required',
            'html_code' => 'required',
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Bagian Judul Harus Diisi',
            'name.max' => 'Judul hanya sebatas 255 Karakter.',
            'html_code.required'  => 'Bagian Isi Pengumuman harus diisi',
        ];
    }
}
