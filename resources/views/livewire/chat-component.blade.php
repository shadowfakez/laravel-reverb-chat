<div>
    @foreach( $conversation as $conversation_item )
        <div class="dialog">
            {{ $conversation_item['username'] }}: {{ $conversation_item['message'] }}
        </div>
    @endforeach
    <form wire:submit="submitMessage">
        <x-text-input wire:model="message" />
        <button type="submit">Send</button>
    </form>
</div>
