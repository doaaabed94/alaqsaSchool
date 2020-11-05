<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeLibrary extends Model
{
     /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'library_type';
    protected $primaryKey="library_type_id";

    protected $fillable = ['library_type_name'];
    
}
