<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articale extends Model
{
    //
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'articales';
    protected $primaryKey="articales_id";
    protected $fillable = ['articale_type','articales_title','articales_description','articales_image'];


    
}
