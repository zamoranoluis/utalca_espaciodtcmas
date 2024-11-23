<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $rol
 * @property int $user_id
 * @property string $lineadetrabajo_id
 * @property-read \App\Models\LineaDeTrabajo $lineadetrabajo
 * @property-read \App\Models\User $user
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo whereLineadetrabajoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo whereRol($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|RolLineaDeTrabajo whereUserId($value)
 *
 * @mixin \Eloquent
 */
class RolLineaDeTrabajo extends Model
{
    protected $table = 'rol_lineadetrabajo';

    public $timestamps = false;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'user_id',
        'lineadetrabajo_id',
        'rol',
    ];

    public function lineadetrabajo()
    {
        return $this->belongsTo(LineaDeTrabajo::class, 'lineadetrabajo_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
