<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $nombre
 * @property string $slogan
 * @property string $descripcion_corta
 * @property string $descripcion_larga
 * @property bool $publica
 * @property bool $interna
 * @property string $entidad_id
 * @property-read \App\Models\Entidad $entidad
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\RolLineaDeTrabajo> $rolesDeUsuarios
 * @property-read int|null $roles_de_usuarios_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereDescripcionCorta($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereDescripcionLarga($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereEntidadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereInterna($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo wherePublica($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LineaDeTrabajo whereSlogan($value)
 *
 * @mixin \Eloquent
 */
class LineaDeTrabajo extends Model
{
    protected $table = 'lineadetrabajo';

    public $timestamps = false;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'descripcion',
        'entidad_id',
        'publica',
        'interna',
    ];

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'entidad_id', 'id');
    }

    public function rolesDeUsuarios()
    {
        return $this->hasMany(RolLineaDeTrabajo::class);
    }
}
