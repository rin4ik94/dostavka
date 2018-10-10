<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBranchRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
        public function authorize()
    {
        if (\Auth::user()->can['Филиали']) {
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
            'name' => 'required',
            'manager_id' => 'required|integer|exists:managers,id',
            'region_id' => 'required|integer|exists:regions,id',
            'address' => 'required|min:10|max:1000',
            'status' => 'required|boolean',
            'workingModes' => 'required',
        ];
    }
}
