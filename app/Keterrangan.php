<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keterrangan extends Model
{
    //
    protected $table = 'keterangann';
	protected $fillable = [
        'keadaan','transmisi','bhnbkr','thnklr','harga','desk','motorrr_id'];

        public function motorrrs(){

	return $this->belongsTo('App\Motorrr');
}
}
