<?php

namespace App\Livewire;

use App\Events\MessageEvent;
use App\Models\Message;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ChatComponent extends Component
{
    public string $message;
    public array $conversation = [];

    public function mount()
    {
        $messages = Message::all();
        foreach ($messages as $message) {
            $this->conversation[] = [
                'username' => $message->user->name,
                'message' => $message->message,
            ];
        }
    }

    public function submitMessage(): void
    {
        MessageEvent::dispatch(Auth::user()->id, $this->message);
        $this->message = '';
    }
    #[On('echo:our-channel,MessageEvent')]
    public function listenForMessage($data)
    {
        $this->conversation[] = [
            'username' => $data['username'],
            'message' => $data['message'],
        ];
    }

    public function render()
    {
        return view('livewire.chat-component');
    }
}
