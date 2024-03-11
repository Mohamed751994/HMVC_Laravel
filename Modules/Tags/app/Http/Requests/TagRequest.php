<?php

namespace Modules\Tags\app\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class TagRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        $image =  request()->isMethod('put') ?
            'nullable|mimes:png,jpg,jpeg,webp,svg,gif|max:1000' :
            'required|mimes:png,jpg,jpeg,webp,svg,gif|max:1000';
        return [
            'name_en' => 'required',
            'name_ar' => 'required',
            'image' => $image,
            'show_page' => 'required',
            'show_location' => 'required',
            'start_date' => 'required|date|after:now',
            'end_date' => 'required|date|after:start_date',
            'is_active' => 'nullable',
            'offer_status' => 'nullable',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
