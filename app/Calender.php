<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calender extends Model
{
     
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'calendar';
    protected $primaryKey="calender_id";
    protected $fillable = ['title','start','end','color'];
			
}
