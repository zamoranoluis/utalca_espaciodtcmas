<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property string $id
 * @property string $nombre
 * @property string $url
 * @property string $entidad_id
 * @property-read \App\Models\Entidad $entidad
 *
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico whereEntidadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|SocioEstrategico whereUrl($value)
 *
 * @mixin \Eloquent
 */
class SocioEstrategico extends Model
{
    protected $table = 'socio_estrategico';

    public $timestamps = false;

    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'url',
        'entidad_id',
    ];

    public function entidad()
    {
        return $this->belongsTo(Entidad::class, 'entidad_id', 'id');
    }
}
