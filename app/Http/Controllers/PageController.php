<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function diensten()
    {
        return view('diensten');
    }

    public function projecten()
    {
        return view('projecten');
    }

    public function waarom()
    {
        return view('waarom');
    }

    public function contact()
    {
        return view('contact');
    }

    public function hoeIkWerk()
    {
        return view('hoe-ik-werk');
    }

    public function admin($secret = null)
    {
        $expected = trim((string) config('app.admin_secret'), '/');
        $given = trim((string) $secret, '/');

        if (!$expected || !$given || $given !== $expected) {
            abort(404);
        }

        $messages = ContactMessage::latest()->get();
        return view('admin', compact('messages'));
    }

    public function metiBarber()
    {
        return view('meti-barber');
    }

    public function contactStore(Request $request)
    {
        $data = $request->validate([
            'service' => 'nullable|string|max:255',
            'details' => 'nullable|json',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'company' => 'nullable|string|max:255',
            'preference' => 'nullable|string|max:50',
            'message' => 'nullable|string|max:5000',
        ]);

        $data['service'] = $data['service'] ?: 'Homepage contact';
        $data['message'] = $data['message'] ?? '';
        $data['details'] = !empty($data['details']) ? json_decode($data['details'], true) : null;

        ContactMessage::create($data);

        return back()->with('success', __('Bedankt voor uw bericht! Ik heb uw aanvraag goed ontvangen en neem binnen de 24 uur contact met u op.'));
    }
}
