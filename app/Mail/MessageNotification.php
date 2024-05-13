<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

use Auth;
use App\Models\User;
use App\Models\Message;

class MessageNotification extends Mailable
{
    use Queueable, SerializesModels;

    public $origin_user;
    public $receive_user;
    public $newMessage;

    public $url;

    /**
     * Create a new message instance.
     */
    public function __construct(Message $newMessage, User $origin_user, User $receive_user)
    {
        $this->newMessage = $newMessage;
        $this->origin_user = $origin_user;
        $this->receive_user = $receive_user;
        $this->url = route('message.index');
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'メッセージ確認',
        );
    }


    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.message-notification')
        ->subject('メッセージ確認');

    }
}
