<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
  /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'gallery';
    protected $primaryKey="gallery_id";

    protected $fillable = ['gallery_name','facilities_id_fk'];
    			
}
