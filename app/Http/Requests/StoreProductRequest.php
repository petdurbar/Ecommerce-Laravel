<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'product_name' => 'required|unique:softsaro__products,product_name',
            // 'featured' => 'required',
            'featured_image' => 'required',
            'category' => 'required',
            'product_order' => 'numeric',

            'product_price' => 'required|numeric',
            'cutoff_price' => 'numeric',

            'cost_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'margin' => 'required|numeric',
            // 'referal_commission_percentage' => 'required|numeric',
            'affiliate_commission_percentage' => 'nullable|numeric',
            'incentive_commission_percentage' => 'required|numeric',
            // 'referal_commission_amount' => 'required|numeric',
            'mrp_price' => 'required|numeric',
            'description' => 'required',
        ];
    }
}
