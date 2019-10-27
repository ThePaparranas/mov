<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int size
 * @property mixed $list
 * @property \App\string $bytes
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class ImdbListsSplit extends Model
{
    protected $fillable = [
        'imdb_list_id',
        'name',
        'size',
        'linecount',
        'start_id',
        'end_id'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function list(): BelongsTo
    {
        return $this->belongsTo(ImdbList::class);
    }

    /**
     * @return string
     */
    public function getBytesAttribute(): string
    {
        return formatBytes($this->size);
    }
}
