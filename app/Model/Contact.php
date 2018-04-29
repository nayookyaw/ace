<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Contact extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'contacts';
  protected $fillable = ['firstname', 'lastname','age', 'email', 'phone', 'subject', 'message'];
  public $timestamps = true;
  protected $dates = ['deleted_at'];

}
