<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
     
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'activity';
    protected $primaryKey="activity_id";
    protected $fillable = ['activity_title','activity_description','activity_image'];
			
}
