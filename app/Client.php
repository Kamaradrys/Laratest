<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    protected $attributes =  [
        'status' => 0
     ];

    public function scopeStatus($query)
    {
    	return $query->where('status',1)->get();

    }

    public function Entreprise()
    {
        return $this->BelongsTo('App\Entreprise');
    }

    public function getStatusAttribute($attributes)
    {
        
  return $this->getStatusOptions()[$attributes];

    }

    public function getStatusOptions()
    {
        return [
            '0'=>'Inactif',
            '1'=>'Actif',
        ];


    }

}
