<?php namespace Laozellison\Contactus\Components;

use cms\Classes\ComponentBase;
use Input;
use Validator;
use Redirect;
// use Mail;
use Flash;

use Laozellison\Contactus\Models\Contact;

class Contactus extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name' => 'Contact Us Form',
            'description' => 'This is the component responsible for making the contact form useful'
        ];
    }

    public function onSend()
    {
        $validator = validator::make(
            [
                'name' => Input::get('name'),
                'email' => Input::get('email'),
                'subject' => Input::get('subject'),
                'message' => Input::get('message')
            ],
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'message' => 'required'
            ]
        );

        if ($validator->fails()) {
            Flash::error('You have an error in your contact form ,Please check, make corrections and re-submit , a field(s) is either empty or Invalid');
        }else{

            $contact = new Contact;
            $contact->name = Input::get('name');
            $contact->email = Input::get('email');
            $contact->subject = Input::get('subject');
            $contact->message = Input::get('message');
            $contact->save();

            Flash::success('Your message has been sent , Please keep in touch so we can serve you better');
        }
    }



}

