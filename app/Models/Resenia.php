<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Reseña extends Model
{
    use HasFactory;
    protected $fillable = [
        'producto_id',
        'usuario_id',
        'calificacion',
        'comentario',
    ];
    // Relación muchos a uno con Producto
    public function producto()
    {
        return $this->belongsTo(Producto::class, 'producto_id');
    }
    // Opcional: Si tuvieras un modelo User en este microservicio, podrías definir la relación.
    // public function usuario()
    // {
    //     return $this->belongsTo(User::class, 'usuario_id');
    // }
}