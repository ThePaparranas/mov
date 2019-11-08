<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\ImdbListsSplit
 *
 * @property int $id
 * @property int $imdb_list_id
 * @property string $name
 * @property int $size
 * @property int $linecount
 * @property string $start_id
 * @property string $end_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $bytes
 * @property-read \App\ImdbList $list
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereEndId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereImdbListId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereLinecount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereStartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbListsSplit whereUpdatedAt($value)
 * @mixin \Eloquent
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
