<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CinesRequest extends FormRequest
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
            'imagenC'        => 'required',
            'nombre'         => 'required|min:3|max:150',
            'ubicacion'      => 'required|min:3|max:100',
            'contacto'       => 'required|numeric|digits_between:11,11',
            'pagina'         => 'required|min:3|max:100'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [

            "required"         => "El campo :attribute es obligatorio.",
            "numeric"          => "El campo :attribute debe ser numérico.",
            "digits_between"   => "El campo :attribute debe tener entre :min y :max dígitos.",
            "max"              => "El campo :attribute no debe ser mayor que :max caracteres.",
            "min"              => "El campo :attribute debe contener al menos :min caracteres.",
            "unique"           => "El campo :attribute ya ha sido registrado.",
            "email"            => "El campo :attribute no tiene un correo válido",

            /*"accepted"         => ":attribute debe ser aceptado.",
            "active_url"       => ":attribute no es una URL válida.",
            "after"            => ":attribute debe ser una fecha posterior a :date.",
            "alpha"            => ":attribute solo debe contener letras.",
            "alpha_dash"       => ":attribute solo debe contener letras, números y guiones.",
            "alpha_num"        => ":attribute solo debe contener letras y números.",
            "array"            => ":attribute debe ser un conjunto.",
            "before"           => ":attribute debe ser una fecha anterior a :date.",
            "between"          => [
                "numeric" => ":attribute tiene que estar entre :min - :max.",
                "file"    => ":attribute debe pesar entre :min - :max kilobytes.",
                "string"  => ":attribute tiene que tener entre :min - :max caracteres.",
                "array"   => ":attribute tiene que tener entre :min - :max ítems.",
            ],
            "boolean"          => "El campo :attribute debe tener un valor verdadero o falso.",
            "confirmed"        => "La confirmación de :attribute no coincide.",
            "date"             => ":attribute no es una fecha válida.",
            "date_format"      => ":attribute no corresponde al formato :format.",
            "different"        => ":attribute y :other deben ser diferentes.",
            "digits"           => ":attribute debe tener :digits dígitos.",
            "digits_between"   => ":attribute debe tener entre :min y :max dígitos.",
            "email"            => ":attribute no es un correo válido",
            "exists"           => ":attribute es inválido.",
            "filled"           => "El campo :attribute es obligatorio.",
            "image"            => ":attribute debe ser una imagen.",
            "in"               => ":attribute es inválido.",
            "integer"          => ":attribute debe ser un número entero.",
            "ip"               => ":attribute debe ser una dirección IP válida.",
            "max"              => [
                "numeric" => ":attribute no debe ser mayor a :max.",
                "file"    => ":attribute no debe ser mayor que :max kilobytes.",
                "string"  => ":attribute no debe ser mayor que :max caracteres.",
                "array"   => ":attribute no debe tener más de :max elementos.",
            ],
            "mimes"            => ":attribute debe ser un archivo con formato: :values.",
            "min"              => [
                "numeric" => "El tamaño de :attribute debe ser de al menos :min.",
                "file"    => "El tamaño de :attribute debe ser de al menos :min kilobytes.",
                "string"  => ":attribute debe contener al menos :min caracteres.",
                "array"   => ":attribute debe tener al menos :min elementos.",
            ],
            "not_in"           => ":attribute es inválido.",
            "numeric"          => ":attribute debe ser numérico.",
            "regex"            => "El formato de :attribute es inválido.",
            "required"         => "El campo :attribute es obligatorio.",
            "required_if"      => "El campo :attribute es obligatorio cuando :other es :value.",
            "required_with"    => "El campo :attribute es obligatorio cuando :values está presente.",
            "required_with_all" => "El campo :attribute es obligatorio cuando :values está presente.",
            "required_without" => "El campo :attribute es obligatorio cuando :values no está presente.",
            "required_without_all" => "El campo :attribute es obligatorio cuando ninguno de :values estén presentes.",
            "same"             => ":attribute y :other deben coincidir.",
            "size"             => [
                "numeric" => "El tamaño de :attribute debe ser :size.",
                "file"    => "El tamaño de :attribute debe ser :size kilobytes.",
                "string"  => ":attribute debe contener :size caracteres.",
                "array"   => ":attribute debe contener :size elementos.",
            ],
            "string"           => "El :attribute debe ser una cadena de texto.",
            "timezone"         => "El :attribute debe ser una zona válida.",
            "unique"           => ":attribute ya ha sido registrado.",
            "url"              => "El formato :attribute es inválido.",*/
        ];
    }
}
