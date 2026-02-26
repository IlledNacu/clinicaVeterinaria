<?php
//php artisan make:model Consultorio -mcr
//php artisan make:model Doctor -mcr
//php artisan make:model Horario -mcr
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consultorio extends Model
{
    use HasFactory;

    // private $fillable = ['nombre','ubicacion','capacidad','telefono','especialidad','estado'];
    protected $fillable = ['nombre','ubicacion','capacidad','telefono','especialidad','estado'];

    public function doctores(){
        return $this->hasMany(Doctor::class);
    }

    public function horarios(){
        return $this->hasMany(Horario::class);
    }
}
