<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Proyect extends Model
{
    use HasFactory;

    protected $fillable = [
        'staff_id',
        'user_id',
        'area_raiz',
        'descripcion',
        'areas_vinculadas',
        'alcance',
        'notas',
        'estado',
    ];

    /**
     * Get all of the maintenances for the Proyect
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maintenances(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }

    /**
     * Get the staff that owns the Proyect
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function staff(): BelongsTo
    {
        return $this->belongsTo(Staff::class);
    }

    /**
     * Get the user that owns the Proyect
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

}
