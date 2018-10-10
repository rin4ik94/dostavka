<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if (\Auth::user()->can['Продукты']) {
        return true;
        }
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
      return [
        'name_uz' => 'required',
        'name_ru' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        'measurement' => 'required',
        'new_price' => 'required',
        'category_id' => 'required',
        'manager_id' => 'required',
        'status' => 'required',
      ];
    }
}
