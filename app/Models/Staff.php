<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Staff extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'full_name',
        'nit',
        'area',
    ];

    /**
     * Get all of the proyects for the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function proyects(): HasMany
    {
        return $this->hasMany(Proyect::class);
    }

    /**
     * Get all of the maintenance for the Staff
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function maintenance(): HasMany
    {
        return $this->hasMany(Maintenance::class);
    }
}
