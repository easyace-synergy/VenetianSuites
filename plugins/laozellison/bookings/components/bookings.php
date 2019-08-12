<?php namespace Laozellison\Bookings\Components;

        use cms\Classes\ComponentBase;
        use Laozellison\Bookings\Models\Booking;
        

        class Bookings extends ComponentBase
            {
                public function componentDetails()
                {
                    return [
                        'name' => 'Hotel Reservations',
                        'description' => 'Book your hotel room here'
                    ];
                }

                // This array becomes available on the page as {{ component.posts }}
                public function posts()
                {
                    return ['First Post', 'Second Post', 'Third Post'];
                }
            }




?>