<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostUpdateRequest extends FormRequest
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
            'slug'          => 'required|unique:posts,slug,'. $this->post,
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
            'file.required'     => 'Arquivo requerido',
            'status:required'   => 'O estado é requerido',
        ];
    }
}
