<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UnitConversions extends Model
{
    use HasFactory;

    protected $table = 'unit_conversions';

    protected $fillable = [
        'from_unit_id',
        'to_unit_id',
        'factor',
    ];

    public function fromUnit(): BelongsTo
    {
        return $this->belongsTo(UnitCategory::class, 'from_unit_id');
    }

    public function toUnit(): BelongsTo
    {
        return $this->belongsTo(UnitCategory::class, 'to_unit_id');
    }
}
