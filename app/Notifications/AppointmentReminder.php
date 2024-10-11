<?php

namespace App\Notifications;

use App\Models\Appointment;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Mail;

class AppointmentReminder extends Notification
{
    use Queueable;
    public $appointment;

    public function __construct(Appointment $appointment)
    {
        $this->appointment = $appointment;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {


    // return (new MailMessage)

    //             ->subject('Appointment Reminder')
    //             ->view('emails.appointment_reminder', ['appointment' => $this->appointment]);

                return (new MailMessage)
                ->subject('Your Pet Care Appointment Confirmation')
                ->greeting('Hello ' . $this->appointment->petowner_name . ',')
                ->line('Your appointment has been successfully scheduled.')
                ->line('Appointment Details:')
                ->line('Pet Name: ' . $this->appointment->pet_name)
                ->line('Pet Type: ' . $this->appointment->pet_type)
                ->line('Date: ' . $this->appointment->appointment_date)
                ->line('Time: ' . $this->appointment->appointment_time)
                ->line('Service: ' . $this->appointment->service_required)
                ->action('View Appointment Details', url('/appointments'))
                ->line('Thank you for choosing our services!');


        // Mail::to('recipient@example.com')->send(new TestEmai());

        // return 'Test email sent!';
        // return (new MailMessage)
        //     ->subject('Reminder: Upcoming Veterinary Appointment')
        //     ->greeting('Hello ' . $notifiable->name . ',')
        //     ->line('This is a reminder for your upcoming veterinary appointment for your pet, ' . $this->appointment->pet->name . '.')
        //     ->line('Appointment Date: ' . $this->appointment->appointment_date->format('M d, Y h:i A'))
        //     ->action('View Appointment', url('/appointments/' . $this->appointment->id))
        //     ->line('Please make sure your pet receives timely care.');
    }
}
