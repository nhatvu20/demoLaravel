<?php

namespace App\Http\Requests\Todos;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Validation\ValidationException;

class StoreTodosRequest extends FormRequest
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
            //
            'task' => 'required|min:2|max:10',
        ];
    }
    public function messages()
    {
        //
        return [
            'task.required' => 'Tên việc không được để trống',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        $validator->errors()->first();
        throw (new HttpResponseException(response()->json($validator, 422)));
    }
}
