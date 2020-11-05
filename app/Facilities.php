<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Facilities extends Model
{
   //
       /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'facilities';
    protected $primaryKey="facilities_id";

    protected $fillable = ['facilities_name	'];
    
}
