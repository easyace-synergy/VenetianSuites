<?php namespace Laozellison\Bookings\Models;

use Model;

/**
 * Model
 */
class Booking extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'laozellison_bookings_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
