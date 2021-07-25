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
    $params = $request->all();

    if ($request->has('document')) {
      $files = $request->file('document');

      foreach ($files as $file) {
        $name = $file->getClientOriginalName();
        $file->move(public_path() . '/files/', $name);
        $data[] = $name;
      }

      $params['document'] = json_encode($data);
    }

    $person = Person::create($params);

    Mail::to('karina@corp.mail.kz')->send(
      new RegistrationAlert($person)
    );

    return redirect()->route('index');
  }
}