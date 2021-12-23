<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table="Students";
 	protected $primaryKey="id";
 	protected $fillable=['nim','nama_lengkap','jurusan'];
}
