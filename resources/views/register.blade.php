@extends('layouts.master')

@section('content')
<div class="container">
  <h1 class="register-title">Регистрация</h1>

  <form
    class="register-form"
    action="{{ route('create') }}"
    method="POST"
    enctype="multipart/form-data">
    @csrf

    <div class="row">

      <!-- company -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="company">Название организации:</label>
        <input
          type="text"
          class="form-control @error('company') is-invalid @enderror @if(old('company')) is-valid @endif" id="company"
          name="company"
          placeholder="КГУ СШ №24 акимата города Нур-Султан"
          value="{{ old('company') }}">

        @error('company')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- address -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="address">Юридический адрес:</label>
        <input
          type="text"
          class="form-control @error('address') is-invalid @enderror @if(old('address')) is-valid @endif" id="address"
          name="address"
          placeholder="КГУ СШ №24 акимата города Нур-Султан"
          value="{{ old('address') }}">

        @error('address')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- postcode -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="postcode">Почтовый индекс:</label>
        <input
          type="text"
          class="form-control @error('postcode') is-invalid @enderror @if(old('postcode')) is-valid @endif"
          id="postcode"
          name="postcode"
          value="{{ old('postcode') }}">

        @error('postcode')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- phone -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="phone">Номер телефона организации:</label>
        <input
          type="text"
          class="form-control @error('phone') is-invalid @enderror @if(old('phone')) is-valid @endif"
          id="phone"
          name="phone"
          placeholder="(727) 259 34 34"
          value="{{ old('phone') }}">

        @error('phone')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- email -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="email">Эл. Почта (организации):</label>
        <input
          type="text"
          class="form-control @error('email') is-invalid @enderror @if(old('email')) is-valid @endif"
          id="email"
          name="email"
          placeholder="primer@scool.edu.kz"
          value="{{ old('email') }}">

        @error('email')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- bin -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="bin">БИН:</label>
        <input
          type="text"
          class="form-control @error('bin') is-invalid @enderror @if(old('bin')) is-valid @endif"
          id="bin"
          name="bin"
          placeholder=""
          maxlength="12"
          value="{{ old('bin') }}">

        @error('bin')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- iik -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="iik">ИИК:</label>
        <input
          type="text"
          class="form-control @error('iik') is-invalid @enderror @if(old('iik')) is-valid @endif"
          id="iik"
          name="iik"
          placeholder=""
          maxlength="20"
          value="{{ old('iik') }}">

        @error('iik')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- bank -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="bank">Название банка:</label>
        <input
          type="text"
          class="form-control @error('bank') is-invalid @enderror @if(old('bank')) is-valid @endif"
          id="bank"
          name="bank"
          placeholder=""
          value="{{ old('bank') }}">

        @error('bank')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- bik -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="bik">БИК:</label>
        <input
          type="text"
          class="form-control @error('bik') is-invalid @enderror @if(old('bik')) is-valid @endif"
          id="bik"
          name="bik"
          placeholder=""
          maxlength="8"
          value="{{ old('bik') }}">

        @error('bik')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- fio -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="fio">Фамилия Имя Отчество (руководителя):</label>
        <input
          type="text"
          class="form-control @error('fio') is-invalid @enderror @if(old('fio')) is-valid @endif"
          id="fio"
          name="fio"
          placeholder="Иванов Иван Иванович"
          value="{{ old('fio') }}">

        @error('fio')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- response_fio -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="response_fio">Ответственное лицо:</label>
        <input
          type="text"
          class="form-control @error('response_fio') is-invalid @enderror @if(old('response_fio')) is-valid @endif"
          id="response_fio"
          name="response_fio"
          placeholder="Иванов Иван Иванович"
          value="{{ old('response_fio') }}">

        @error('response_fio')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- response_phone -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="response_phone">Телефон ответственного лица:</label>
        <input
          type="text"
          class="form-control @error('response_phone') is-invalid @enderror @if(old('response_phone')) is-valid @endif"
          id="response_phone"
          name="response_phone"
          placeholder="(727) 123 34 56"
          value="{{ old('response_phone') }}">

        @error('response_phone')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- response_email -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="response_email">E-mail ответственного лица:</label>
        <input
          type="text"
          class="form-control @error('response_email') is-invalid @enderror @if(old('response_email')) is-valid @endif"
          id="response_email"
          name="response_email"
          placeholder="primer@example.edu.kz"
          value="{{ old('response_email') }}">

        @error('response_email')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- domain -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="domain">Название доменного имени в зоне edu.kz:</label>
        <input
          type="text"
          class="form-control @error('domain') is-invalid @enderror @if(old('domain')) is-valid @endif"
          id="domain"
          name="domain"
          placeholder=""
          value="{{ old('domain') }}">

        @error('domain')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

    </div>

    <div class="row align-items-end">
      <!-- document -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="file">
          Загрузите копию свидетельства о государственной регистрации организации или другой документ удостоверяющий организацию в формате pdf (Размер не должен превышать 2МБ):
        </label>

        <div class="register-form__upload">
          <input
            type="text"
            class="register-form__tip"
            id="note"
            placeholder="Загрузите документы"
            value="">

          <input
            type="file"
            class="register-form__file @error('document') is-invalid @enderror"
            id="document"
            name="document[]"
            accept="application/pdf"
            multiple />

          @error('document')
          <span class="register-form__error invalid-feedback bk-alert-danger" role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
        </div>

      </div>

      <!-- captcha -->
      <div class="col-md-4 mb-3">
        <label class="register-form__label" for="captcha">
          Введите код с картинки:
        </label>

        <div class="mb-2" id="captcha-img">
          {!! captcha_img() !!}
        </div>

        <input
          type="text"
          class="form-control @error('captcha') is-invalid @enderror"
          id="captcha"
          name="captcha"
          value="{{ old('captcha') }}">

        @error('captcha')
        <span class="invalid-feedback bk-alert-danger" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>

      <!-- button -->
      <div class="col-md-4 mb-3">
        <button class="btn btn-warning register-form__submit">Регистрация</button>
      </div>
    </div>
  </form>
</div>
@endsection
