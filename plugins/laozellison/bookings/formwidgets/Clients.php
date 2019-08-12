<?php namespace Laozellison\Bookings\FormWidgets;

    use Backend\Classes\FormWidgetBase;
    use Config;
    use Laozellison\Bookings\Models\Booking;


    class Clients extends FormWidgetBase
    {

            public function widthDetails()
            {

                return [
                    'name' => 'Clients',
                    'Description' => 'Client Bookings and  Reservations'
                ];

            }


            public function render()
            {
                return $this->makePartial('clients');
            }

            
    }


?>