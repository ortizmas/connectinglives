<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostStoreRequest extends FormRequest
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
        $rules = [
            'user_id'       => 'required|integer',
            'category_id'   => 'required|integer',
            'name'          => 'required',
            'slug'          => 'required|unique:posts,slug,',
            'excerpt'       => 'required',
            'tags'          => 'required|array',
            'body'          => 'required',
            'status'        => 'required|in:DRAFT,PUBLISHED'
        ];

        if ($this->get('file')) {
            $rules = array_merge($rules, ['file' => 'mimes:jpg.jpeg.png']); 
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'name.required'     => 'O nome é requerido',
            'slug.required'     => 'A etiqueta é requerido e unico',
            'excerpt.required'  => 'Resumen requerido',
            'body.required'     => 'Resumen requerido',
            'body.required'     => 'Conteudo requerido',
            'file.required'     => 'A extensão do arquivo não é valido',
            'status:required'   => 'O estado é requerido',
        ];
        //return $rules;
    }
}
