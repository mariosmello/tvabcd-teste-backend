<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Doctor;
use Mail;
use Validator;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth', ['only' => ['dashboard']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index', [
            'doctors' => Doctor::orderBy('id', 'asc')->get(),
            'clients' => Client::orderBy('id', 'asc')->get()
        ]);
    }

    public function dashboard() {
        return view('dashboard', [
            'doctors' => Doctor::orderBy('id', 'asc')->get(),
            'clients' => Client::orderBy('id', 'asc')->get(),
            'appointments' => Appointment::orderBy('id', 'asc')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:2|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|min:8|max:255'
        ]);

        if ($validator->fails()) {
            return redirect('/')
                ->withInput()
                ->withErrors($validator);
        }
        $input = $request->all();

        $appointment = new Appointment;
        $appointment->fill($input);
        $appointment->save();
        Mail::send(
            'emails.new_appointment', ['appointment' => $appointment], function($message) use ($appointment) {
            $message
                ->from('admin@localhost', 'Your Application Appointment')
                ->to('admin@localhost', 'ADMIN')
                ->to($appointment->email, $appointment->name)
                ->subject('A new appointment has arrived!');
        });
        return redirect('/appointment_success');
    }

}
