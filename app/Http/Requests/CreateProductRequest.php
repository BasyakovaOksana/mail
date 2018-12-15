<?php
// класс валидции
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // здесь true
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        // возвращаем список правил
        return [
            'title' => 'required|unique:products',
            'content' => 'required',
            'price' => 'required'
        ];
    }

    public function messages()
    {
        // возвращаем список сообщений
        return [
            'required' => 'Поле :attribute обязательно для заполнения',
            'min' => 'Поле :attribute должно быть не менее 6 символов',
        ];
    }
    
    public function attributes()
    {
        // возвращаем список аттрибутов которые мы переименовали
        return [
            'title' => 'Название продукта'
        ];
    }
    
}
