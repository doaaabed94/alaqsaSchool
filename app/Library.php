<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Library extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'library';
    protected $primaryKey="library_id";
    protected $fillable = ['library_id','library_title','library_description','library_type_id_fk','library_images'];

	
}
