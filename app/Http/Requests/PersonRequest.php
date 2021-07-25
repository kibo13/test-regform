<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PersonRequest extends FormRequest
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
      'company' => ['required'],
      'address' => ['required'],
      'postcode' => ['required', 'numeric'],
      'email' => ['required', 'email'],
      'phone' => ['required', 'numeric'],
      'bank' => ['required', 'alpha'],
      'bin' => ['required', 'numeric', 'min:12'],
      'iik' => ['required', 'string', 'min:20'],
      'bik' => ['required', 'string', 'min:8'],
      'fio' => ['required'],
      'response_fio' => ['required'],
      'response_phone' => ['required', 'numeric'],
      'response_email' => ['required', 'email'],
      'domain' => ['required', 'string'],
      'captcha' => ['required', 'captcha'],
      'document' => ['required', 'max:2048'],
    ];
  }

  public function attributes()
  {
    return [
      'company' => '"Название организации"',
      'address' => '"Юридический адрес"',
      'postcode' => '"Эл.почтовый индекс"',
      'email' => '"Е-mail адрес организации"',
      'phone' => '"Телефон организации"',
      'bank' => '"Название банка"',
      'bin' => '"БИН"',
      'iik' => '"ИИК"',
      'bik' => '"БИК"',
      'fio' => '"ФИО руководителя организации"',
      'response_fio' => '"Ответственное лицо"',
      'response_phone' => '"Телефон ответственного лица"',
      'response_email' => '"E-mail ответственного лица"',
      'domain' => '"Желаемое название доменного имени в зоне edu.kz"',
      'captcha' => 'код с картинки'
    ];
  }

  public function messages()
  {
    return [
      'document.required' => 'Необходимо выбрать файл',
      'document.max' => 'Размер не должен превышать 2MB',
      'document.mimetypes' => 'Файлы должны быть в формате pdf',
      'required' => 'Необходимо заполнить :attribute',
      'numeric' => 'Значение :attribute должно быть числом',
      'email' => 'Значение :attribute не является правильным email адресом',
      'min' => 'Значение :attribute должно содержать минимум :min символов',
      'alpha' => 'Значение поля неверно. Поле может содержать только символы латиницы, кирилицы, казахские символы',
      'captcha' => 'Неправильный проверочный код'
    ];
  }
}