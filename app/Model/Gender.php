<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use SoftDeletes;

class Gender extends Model
{
  protected $connection = 'mysql';
  protected $primaryKey = 'id';
  protected $table = 'genders';
  protected $fillable = ['contact_id', 'name'];
  public $timestamps = true;
  protected $dates = ['deleted_at'];
}
