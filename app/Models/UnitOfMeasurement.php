<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UnitOfMeasurement extends Model
{
    use HasFactory;

    protected $table = 'unit_of_measurement';

    protected $fillable = [
        'name',
        'abbreviation',
        'category_id',
    ];

    protected $casts = [
        'name' => 'string',
        'abbreviation' => 'string',
        'category_id' => 'integer',
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(UnitCategory::class, 'category_id');
    }

    public function fromConversions(): HasMany
    {
        return $this->hasMany(UnitConversions::class, 'from_unit_id');
    }

    public function toConversions(): HasMany
    {
        return $this->hasMany(UnitConversions::class, 'to_unit_id');
    }
}
