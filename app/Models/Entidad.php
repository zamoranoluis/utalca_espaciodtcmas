<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property string $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $slogan
 * @property string $instagram
 * @property string $telefono
 * @property string $email
 * @property string $ubicacion_nombre
 * @property float $ubicacion_latitud
 * @property float $ubicacion_longitud
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auspiciador> $auspiciadores
 * @property-read int|null $auspiciadores_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\LineaDeTrabajo> $lineasDeTrabajo
 * @property-read int|null $lineas_de_trabajo_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RolEntidad> $rolentidades
 * @property-read int|null $rolentidades_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Auspiciador> $sociosEstrategicos
 * @property-read int|null $socios_estrategicos_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereDescripcion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereInstagram($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereSlogan($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereTelefono($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereUbicacionLatitud($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereUbicacionLongitud($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Entidad whereUbicacionNombre($value)
 * @mixin \Eloquent
 */
class Entidad extends Model
{
    protected $table = 'entidad';

    public $timestamps = false;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'slogan',
        'instagram',
        'email',
        'ubicacion_latitud',
        'ubicacion_longitud'
    ];

    /**
     * Relación: una entidad tiene muchos roles en diferentes usuarios.
     */
    public function rolentidades()
    {
        return $this->hasMany(RolEntidad::class);
    }

    /**
     * Relación: una entidad tiene muchas lineas de trabajo
     */
    public function lineasDeTrabajo()
    {
        return $this->hasMany(LineaDeTrabajo::class);
    }

    public function auspiciadores()
    {
        return $this->hasMany(Auspiciador::class);
    }

    public function sociosEstrategicos()
    {
        return $this->hasMany(Auspiciador::class);
    }
}
