<?php

namespace App\Http\Requests\order;


// declare path model (bahwa request ini untuk model User)
use App\Models\operational\Order;

// request from form
use Illuminate\Foundation\Http\FormRequest;

// to send response
use Symfony\Component\HttpFoundation\Response;

class StoreorderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
            //field request and validation
            'concert_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'required',
                'string',
                'max:50'
            ],
            'email' => [
                'required',
                'string',
                'max:50'
            ],
            'phone' => [
                'nullable',
                'string',
                'max:20',
            ],
        ];
    }
}
