<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailEmailSender;
use Illuminate\Support\Facades\DB;


class SendEmailController extends Controller
{
    public function send_email(Request $request)
    {

        $data1['data'] = "Sample Data will be passed on E-Mail";
        $data1['site'] = "https://translate.google.com/";
        // return '111';
        // MailEmailSender data,subject,view
        // Mail::to("software_dev4@hrd-s.com")->send(new MailEmailSender($data1, 'Hazard Patrol', 'emailTemplate.hpm'));
        Mail::to("raojew@astern.live")->send(new MailEmailSender($data1, 'Hazard Patrol', 'emailTemplate.hpm'));

        if (Mail::failures()) {
            return "NO-GOOD";
        } else {
            return 'GOOD';
        }


        /* -------------------------------------------------------------------------- */
        /*                           merong data na pinapasa                          */
        /* -------------------------------------------------------------------------- */
        if ($request->id) :
            return 'meron' . $request->id;
        /* -------------------------------------------------------------------------- */
        /*                                    wala                                    */
        /* -------------------------------------------------------------------------- */
        else :
            return 'wala' . $request->id;
        endif;
        /* -------------------------------------------------------------------------- */
        /*                                   end if                                   */
        /* -------------------------------------------------------------------------- */

        $data = DB::connection('HPM')
            ->table('HazardPatrolMonitoring')
            ->wherenull('ConfirmedDate')
            ->wherenull('DeletedDate')
            ->where('CreatedDate', '>', '2023-05-01 00:00:00')
            ->get();

        foreach ($data as $obj) {
            $data1['data'] = "Sample Data will be passed on E-Mail";
            $data1['site'] = "https://translate.google.com/";
            // return '111';
            // MailEmailSender data,subject,view
            // Mail::to("software_dev4@hrd-s.com")->send(new MailEmailSender($data1, 'Hazard Patrol', 'emailTemplate.hpm'));
            Mail::to("smd_isd@hrd-s.com")->send(new MailEmailSender($data1, 'Hazard Patrol', 'emailTemplate.hpm'));

            if (Mail::failures()) {
                return "NO-GOOD";
            }
        }
    }
}
