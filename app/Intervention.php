<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model of interventions table.
 *
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class Intervention extends Model {

    /**
     * Mass assignable attributes.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'user_id',
    ];

    /**
     * Get the user that owns the intervention.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }

    /**
     * Order by created_at.
     * 
     * @param $query
     * @return mixed
     */
    public function scopeLast($query) {
        return $query->orderBy('created_at', 'desc');
    }

}
