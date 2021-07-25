<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  use HasFactory;

  protected $fillable = [
    'company',
    'address',
    'postcode',
    'email',
    'phone',
    'bank',
    'bin',
    'iik',
    'bik',
    'fio',
    'response_fio',
    'response_phone',
    'response_email',
    'domain',
    // 'document',
  ];
}
