<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Model o patients table.
 * 
 * @author Alexandru Bugarin <alexandru.bugarin@gmail.com>
 */
class Patient extends Model {

    /**
     * Get the user that have this patient.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() {
        return $this->belongsTo('App\User');
    }
    
}
