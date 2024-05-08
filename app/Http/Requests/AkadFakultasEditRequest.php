<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AkadFakultasEditRequest extends FormRequest
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
            
				"universitas_id" => "filled",
				"kode_fakultas" => "filled|string",
				"nama_fakultas" => "filled|string",
				"keterangan" => "nullable",
            	"captcha" => "filled|captcha",
        ];
    }

	public function messages()
    {
        return [
			"captcha" => __('invalidCaptchaCode'),
            //using laravel default validation messages
        ];
    }

    /**
     *  Filters to be applied to the input.
     *
     * @return array
     */
    public function filters()
    {
        return [
            //eg = 'name' => 'trim|capitalize|escape'
        ];
    }
}
