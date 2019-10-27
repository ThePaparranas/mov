<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property int $id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property mixed $updates
 * @property bool $outdated
 * @property string name
 * @property string url
 * @property string $bytes
 * @property int $size
 * @property int $linecount
 * @property mixed $splits
 * @method static ImdbList find($id)
 * @method static ImdbList whereName($list)
 * @method static ImdbList first()
 * @mixin Model
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
