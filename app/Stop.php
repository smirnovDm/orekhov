<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stop extends Model
{
    /**
     * @var string[]
     */
    protected $guarded = ['id'];

    /**
     * @var string
     */
    protected $table = 'stops';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
       return $this->belongsTo(City::class);
    }
}
