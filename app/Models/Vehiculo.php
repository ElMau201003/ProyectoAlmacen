<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    use HasFactory;

    protected $table = 'vehiculo';

    protected $primaryKey = 'idVehiculo';
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['placaVehiculo', 'tipoVehiculo', 'capacidadVehiculo'];

    public function rutas() {
        return $this->hasMany(Ruta::class);
    }
}
