<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactUS\StoreContactUsRequest;
use App\Models\ContactUs;
use App\Models\User;
use App\Notifications\ContactFormSubmitted;
use Illuminate\Support\Facades\Notification;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->paginate(10);
        return view('backend.contact.index', compact('contacts'));
    }

    public function store(StoreContactUsRequest $request)
    {
        $user = User::first();
        $contact = ContactUs::create($request->validated());
        Notification::send($user, new ContactFormSubmitted($contact) );
        return back()
            ->with('success', 'Feedback  has been sent successfully.');
    }

    public function destroy(ContactUs $contact)
    {
        $contact->delete();
        return back();
    }

    public function deleteNotification(ContactUs $contact)
    {
        $contact->update([
            'notificable_id' => !$contact->notificable_d
        ]);
        return back();
    }

    public function readAllNotification()
    {
        foreach (auth()->user()->unreadNotifications as $notification) {
            $notification->markAsRead();
        }
        return back();
    }
}
