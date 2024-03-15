<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductRequest extends FormRequest
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
            'product_name' => 'required|unique:softsaro__products,product_name,' . $this->product->id,
            'description' => 'required',
            'product_price' => 'required|numeric',
            'product_stock' => 'required|numeric',
            'cost_price' => 'required|numeric',
            // 'cutoff_price' => 'numeric',
            'product_order' => 'numeric',
            // 'referal_commission_percentage' => 'required|numeric',
            'affiliate_commission_percentage' => 'nullable|numeric',
            'incentive_commission_percentage' => 'required|numeric',
            // 'referal_commission_amount' => 'required|numeric',
            // 'margin'=> 'required|numeric',
            // 'commission_result'=> 'required|numeric',
            'mrp_price' => 'required|numeric',


        ];
    }
}
