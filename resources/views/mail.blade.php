<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="utf-8" />
</head>

<body>
  <h3>Информация:</h3>
  <ul class="d-flex flex-column">
    <li>
      <span>
        Наименование организации:
      </span>
      {{ $person->company }}
    </li>
    <li>
      <span>
        Юридический адрес организации:
      </span>
      {{ $person->address }}
    </li>
    <li>
      <span>
        Почтовый индекс:
      </span>
      {{ $person->postcode }}
    </li>
    <li>
      <span>
        Телефон организации:
      </span>
      {{ $person->phone }}
    </li>
    <li>
      <span>
        E-mail адрес организации:
      </span>
      {{ $person->email }}
    </li>
    <li>
      <span>
        БИН организации
      </span>
      {{ $person->bin }}
    </li>
    <li>
      <span>
        ИИК организации
      </span>
      {{ $person->iik }}
    </li>
    <li>
      <span>
        Наименование банка
      </span>
      {{ $person->bank }}
    </li>
    <li>
      <span>
        БИК организации
      </span>
      {{ $person->bik }}
    </li>
    <li>
      <span>
        ФИО руководителя организации
      </span>
      {{ $person->fio }}
    </li>
    <li>
      <span>
        Ответственное лицо
      </span>
      {{ $person->response_fio }}
    </li>
    <li>
      <span>
        E-mail ответственного лица
      </span>
      {{ $person->response_email }}
    </li>
    <li>
      <span>
        Телефон ответственного лица
      </span>
      {{ $person->response_phone }}
    </li>
    <li>
      <span>
        Желаемое название доменного имени в зоне edu.kz
      </span>
      {{ $person->domain }}
    </li>
  </ul>

</body>

</html>
