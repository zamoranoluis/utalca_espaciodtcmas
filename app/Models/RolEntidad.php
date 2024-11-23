<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property int $user_id
 * @property string $entidad_id
 * @property string $rol
 * @property-read \App\Models\Entidad $entidad
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad whereEntidadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad whereRol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolEntidad whereUserId($value)
 *
 * @mixin \Eloquent
 */
class RolEntidad extends Model
{
    protected $table = 'rol_entidad';

    public $timestamps = false;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'entidad_id',
        'rol',
    ];

    /**
     * Relación: cada rol en entidad pertenece a un usuario.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Relación: cada rol en entidad pertenece a una entidad.
     */
    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'entidad_id', 'id');
    }
}
