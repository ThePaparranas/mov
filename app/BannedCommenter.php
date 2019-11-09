<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BannedCommenter
 *
 * @property int $id
 * @property int $user_id
 * @property int $days
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter whereDays($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BannedCommenter whereUserId($value)
 * @mixin \Eloquent
 */
class BannedCommenter extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'days',
    ];
}
