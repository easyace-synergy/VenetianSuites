<?php namespace Laozellison\Reservations\Components;



use cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
use Mail;
use Flash;

use laozellison\Bookings\Models\Booking;

class Reservations extends ComponentBase
{
    public function componentDetails()
    {
            return [
                'name'=>'Hotel Reservation',
                'description'=>'Book a Room in The Hotel'
            ];    
    }

     public function onSave(){

            $validator = validator::make(
                    [
                        'surname' => Input::get('surname'),
                        'check_in' => Input::get('check_in'),
                        'check_out' => Input::get('check_out'),
                        'suites' => Input::get('suites'),
                        'email' => Input::get('email'),
                        'suites' => Input::get('suites')
                    ],
                    [
                        'surname' => 'required',
                        'check_in' => 'required',
                        'check_out' => 'required',
                        'suites' => 'required',
                        'email' => 'required|email',
                        'suites' => 'required'
                    ]
            );

            if ($validator->fails()) {
                # code...
                // return Redirect::back()->withErrors($validator);
                Flash::error('You have an error in your form ,Please check and re-submit , a field(s) is either empty or Invalid');
            }else{

            $booking = new Booking;

            // $ref_no = "VS".mt_rand(1000, 9000);

            $booking->surname = Input::get('surname');
            $booking->ref_number = $ref_no = "VS".mt_rand(1000, 9000);
            $booking->check_in = Input::get('check_in');
            $booking->check_out = Input::get('check_out');
            $booking->room_plan = Input::get('suites');
            $booking->email = Input::get('email');
            $booking->save();


                // Sending Email
                    $vars = [
                        'name' => Input::get('surname'), 
                        'email' => Input::get('email'),
                        'check_in' => Input::get('check_in'),
                        'check_out' => Input::get('check_out'),
                        'room_plan' => Input::get('suites'),
                        'ref_no' => $ref_no
                    ];

                    Mail::send('laozellison.reservations::mail.message', $vars, function($message) {
 
                        $message->to(Input::get('email'), Input::get('surname'));
                        $message->subject('Venetian Suites Reservation Details');
                        $message->cc('laozofficial@gmail.com', 'Ellison');
                        $message->bcc('laozoffical@gmail.com');

                    });

                    Flash::success('Your Reservation Details have been emailed to you');

        }
     }
}