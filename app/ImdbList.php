<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * App\ImdbList
 *
 * @property int $id
 * @property string $name
 * @property string $url
 * @property string $description
 * @property int $size
 * @property int $linecount
 * @property string $last_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read string $bytes
 * @property-read bool $outdated
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\ImdbListsSplit[] $splits
 * @property-read int|null $splits_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereLastId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereLinecount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\ImdbList whereUrl($value)
 * @mixin \Eloquent
 */
class ImdbList extends Model
{
    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'outdated', 'bytes'
        ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'url', 'description', 'size', 'linecount',
    ];

    /**
     * @return bool
     */
    public function getOutdatedAttribute()
    {
        if (null === $this->updated_at) {
            return true;
        }

        $now = now();
        $then = $this->updated_at;
        $elapsed = $then->addHours(24);

        return $now > $elapsed;
    }

    /**
     * @return string
     */
    public function getBytesAttribute(): string
    {
        return formatBytes($this->size);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function splits(): HasMany
    {
        return $this->hasMany(ImdbListsSplit::class);
    }
}
