<?php

namespace App\Http\Requests\Donations;

use Illuminate\Foundation\Http\FormRequest;

class CreateDonationRequest extends FormRequest
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
            'name'=>'required',
            'email'=>'required',
            'contact'=>'required|numeric',
            'city'=>'required',
            'address'=>'required',
            'item'=>'required',
            'category'=>'required',
            'quantity'=>'required|numeric',
            'expiry'=>'required',
            'image'=>'required|image|mimes:jpeg,jpg,png,gif|max:3000',

        ];
    }
}
