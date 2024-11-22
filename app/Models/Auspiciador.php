<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property string $id
 * @property string $nombre
 * @property string $url
 * @property string $entidad_id
 * @property-read \App\Models\Entidad $entidad
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador whereEntidadId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador whereNombre($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Auspiciador whereUrl($value)
 * @mixin \Eloquent
 */
class Auspiciador extends Model
{
    protected $table = 'auspiciador';

    public $timestamps = false;
    protected $keyType = 'string';

    public $incrementing = false;

    protected $fillable = [
        'id',
        'nombre',
        'url',
        'entidad_id'
    ];

    public function entidad() {
        return $this->belongsTo(Entidad::class,"entidad_id","id");
    }
}
