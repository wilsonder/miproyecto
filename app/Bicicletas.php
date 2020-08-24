<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicletas extends Model
{
    
    protected $table = 'bicicletas';
    
    
    protected $fillable = ['nombre', 'precio', 'stock', 'imagenes', 'url'];
 
    
    public function imagenesbicicletas()
    {
        return $this->hasMany('App\Imgbicicletas');
    }
    


}
