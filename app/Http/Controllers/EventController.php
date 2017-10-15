<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function saveEvent(Request $request)
    {

//        $this->validate($request, $rules);

        $event = new Event;

        $event->event_date = $request->input('event_date');
        $event->event_desc = $request->input('form_data');
        $event->contact_name = $request->input('contact_name');
        $event->contact_phone = $request->input('contact_phone');
        $event->contact_mail = $request->input('contact_mail');
        $event->message = $request->input('message');
        $event->suppliers = $request->input('suppliers');
        $event->status = $request->input('status');
        $event->submission_date = (new \DateTime())->format('Y-m-d H:i:s');

        $event->save();
        return $this->createSuccessResponse($request, 201);

    }

    public function getEvents(Request $request)
    {
        $suppliers = app('db')->select("SELECT * FROM w_events");
        return $this->createSuccessResponse($request, 200);
    }

}