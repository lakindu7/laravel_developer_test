<?php

namespace Modules\SuperAdmin\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SuperAdminStoreRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     *
     *
     *      English uppercase characters (A – Z)
     *      English lowercase characters (a – z)
     *      Base 10 digits (0 – 9)
     *      Non-alphanumeric (For example: !, $, #, or %)
     *
     *
     */
    public function rules()
    {
        return [
            'name' => ['required','regex:/^[a-zA-Z]+(?:\s[a-zA-Z]+)+$/'],
            'email' => ['required','email','unique:super_admins'],
            'password' => ['required', 'min:6','regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/', 'confirmed']
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
