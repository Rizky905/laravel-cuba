<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
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
        $formName = $this->get('form_name');
        if ($formName == 'create_web' || 'update_web') {
            return [
                'name' => 'required|max:100',
                'url' => 'required|max:100',
                'pic' => 'required|max:100',
                'pic_contact' => 'required|max:255',
                'description' => 'max:500',
            ];
        }
    }

    public function messages()
    {
        $formName = $this->get('form_name');
        if ($formName == 'create_web' || 'update_web') {
            return [
                'name.required' => 'Name is required !',
                'url.required' => 'Url is required !',
                'pic.required' => 'PIC is required !',
                'pic_contact.required' => 'PIC Contact is required !',
            ];
        }
    }
}
