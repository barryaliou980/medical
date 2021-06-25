<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;
use Alert;

class SendMailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        $cv = null;
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'object' => 'required',
            'email' => 'required',
            'message' => 'required|min:3'
        ]);
        if ($request->object == "postuler") {
            $data = array(
                'email' => $request->email,
                'subject' => "Message de contact  provenant du site Sérénité Santé ",
                'body' => $request->message,
                'nom' => $request->lastName,
                'prenom' => $request->firstName,
                'object' => $request->object,
                'speciality' => $request->specialty,
            );
            Mail::send('mailP', $data, function ($message) use ($data, $request) {
                $message->from('barrydev980@gmail.com', 'Serenite Sante');
                $message->to('barryaliou980@kalinkotech.com');
                $message->subject($data['subject']);
                if ($request->hasFile('cv')) {
                    $cv = time() . "_" . $request->file('cv')->getClientOriginalName();
                    $cv = str_replace(' ', '', $cv);
                    $cv = str_replace('é', 'e', $cv);
                    $cv = str_replace('è', 'e', $cv);
                    $cv = str_replace('à', 'a', $cv);
                    $cv = str_replace('ç', 'c', $cv);
                    $cv = str_replace("'", '', $cv);
                    $cv = str_replace('-', '_', $cv);
                    $cv = str_replace(':', '_', $cv);
                    $request->file('cv')->move(public_path('docs/cv'),  $cv);
                    $message->attach(public_path() . '/docs/cv/' . $cv);
                }
            });
            if ($request->hasFile('cv')) {
                File::delete(public_path() . '/docs/autres/' . $cv);
            }
        } else {
            $data = array(
                'email' => $request->email,
                'subject' => "Message de contact  provenant du site Sérénité Santé ",
                'body' => $request->message,
                'nom' => $request->lastName,
                'prenom' => $request->firstName,
                'object' => $request->object,
            );
            Mail::send('mailC', $data, function ($message) use ($data) {
                $message->from('barrydev980@gmail.com', 'Serenite Sante');
                $message->to('barryaliou980@kalinkotech.com');
                $message->subject($data['subject']);
            });
        }
        Alert::success('Succès', 'Merci de nous avoir écrit! nous repondrons dans les plus bref delais');
        return back()->with('success', 'Merci de nous avoir ecris! nous repondrons dans les plus bref delais');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
