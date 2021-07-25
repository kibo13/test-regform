<?php

namespace App\Http\Controllers;

use App\Models\Person;
use App\Http\Requests\PersonRequest;
use App\Mail\RegistrationAlert;
use Illuminate\Support\Facades\Mail;

class PersonController extends Controller
{
  public function index()
  {
    return view('register');
  }

  public function create(PersonRequest $request)
  {
    $person = Person::create($request->all());

    // Mail::to('karina@corp.mail.kz')->send(
    //   new RegistrationAlert($person)
    // );

    Mail::to('b-kim@internet.ru')->send(
      new RegistrationAlert($person)
    );


    return redirect()->route('index');
  }
}