<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBannerRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'banner_name' => 'required | unique:home_banners,banner_name',
            'banner_order' => 'required',
            'banner_link' => 'required',
            'mobileview' => 'required',
            'banner_image' => 'required|mimes:jpg,png,jpeg',
        ];
        
    }
}
