<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campagne extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'campagnes';

    protected $fillable = [
	'name'
	];

    public function users()
    {
        return $this->hasMany(User::class, 'fk_campagne_id');
    }
}
