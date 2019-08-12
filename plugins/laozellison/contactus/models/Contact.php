<?php namespace Laozellison\Contactus\Models;

use Model;

/**
 * Model
 */
class Contact extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'laozellison_contactus_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];
}
