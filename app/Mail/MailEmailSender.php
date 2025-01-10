<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailEmailSender extends Mailable
{
    use Queueable, SerializesModels;

    private $_data;
    private $_subject;
    private $_view;


    /**
     * Create a new message instance.
     *
     * @return void
     */

    // public function __construct()
    // {
    //     //
    // }

    // added
    public function __construct($data, $subject, $view)
    {
        $this->_data = $data;
        $this->_subject = $subject;
        $this->_view = $view;

    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // kouzou-registration@hrd-s.com - KIDD
        // return $this->from('smd_isd_test@hrd-s.com')->subject($this->_subject)->view($this->_view, $this->_data);
        return $this->from('kahit_sino@gmail.com')->subject($this->_subject)->view($this->_view, $this->_data);
    }
}
