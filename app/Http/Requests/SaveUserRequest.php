<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
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
        if ($this->method() == 'PUT') {
            if($this->password){
                if(auth()->user()->hasRole('admin')){
                    return [
                        //
                        'name' => 'required|max:255|string',
                        'email' => 'required|email|max:255|string',
                        'password' =>  'required|confirmed|min:8|string',
                        'roles'=>'required'
                    ];
                }else{
                    return [
                        //
                        'name' => 'required|max:255|string',
                        'email' => 'required|email|max:255|string',
                        'password' =>  'required|confirmed|min:8|string',
                        
                    ];
                }
            }
            else{
                if(auth()->user()->hasRole('admin')){
                    return [
                        //
                        'name' => 'required|max:255|string',
                        'email' => 'required|email|max:255|string',
                        'roles'=> 'required'
                    ];
                }else{
                    return [
                        //
                        'name' => 'required|max:255|string',
                        'email' => 'required|email|max:255|string',
                    ];
                }
              
            }
        } else {
            if(auth()->user()->hasRole('admin')){
                return [
                    //
                    'name' => 'required|max:255|string',
                    'email' => 'required|unique:users|email|max:255|string',
                    'password' => 'required|confirmed|min:8|string',
                    'roles'=>'required'
                ];
            }else{
                return [
                    //
                    'name' => 'required|max:255|string',
                    'email' => 'required|unique:users|email|max:255|string',
                    'password' => 'required|confirmed|min:8|string',
                ];
            }
         
        }
    }
}
