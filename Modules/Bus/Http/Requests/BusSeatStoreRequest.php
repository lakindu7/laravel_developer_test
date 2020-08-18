<?php

namespace Modules\Bus\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BusSeatStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'seat_number' => 'required',
            'price' => 'required',
            'bus_id' => 'required'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
