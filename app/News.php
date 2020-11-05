<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'news';
    protected $primaryKey="news_id";
    protected $fillable = ['news_description','news_title','news_image'];
    
}
