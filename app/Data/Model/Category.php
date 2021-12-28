<?php

namespace App\Data\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use SoftDeletes;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'categories';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'description', 'image'];

    function publishedJadwal(){
        return $this->hasMany(Jadwal::class)
            ->where('jadwal.published','=','1');
    }

    function unPublishedJadwal(){
        return $this->hasMany(Jadwal::class)
            ->where('jadwal.published','=','0');
    }
    function jadwal(){
        return $this->hasMany(Jadwal::class);
    }
    
}
