<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motorrr extends Model
{
    //
    protected $table = 'motorrrs';
	protected $fillable = [
        'nama','merk','tipe','foto'];

}
