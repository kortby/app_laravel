<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'owner_id',
        'title',
        'body',
    ];

    public function path()
    {
        return "/posts/{$this->id}";
    }

    /**
     * Get the date format.
     *
     * @param  string  $value
     * @return string
     */
    public function getFormattedDateAttribute()
    {
        return Carbon::parse($this->created_at)->format('F j, Y');
    }

    /**
     * Get the long text format.
     *
     * @param  string  $value
     * @return string
     */
    public function getTruncatedBodyAttribute()
    {
        return Str::of($this->body)->limit(80, ' ...');
    }
}
