@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Chat</div>

                    <div class="card-body">
                        <div class="messages">
                            @foreach ($messages as $message)
                                <div class="message">
                                    <strong>{{ $message->user->name }}:</strong> {{ $message->message }}
                                </div>
                            @endforeach
                        </div>

                        <form id="chat-form">
                            <div class="form-group">
                                <input type="text" name="message" class="form-control" placeholder="Type your message...">
                            </div>

                            <button type="submit" class="btn btn-primary">Send</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('js/app.js') }}"></script>

    <script>
        const chatForm = document.getElementById('chat-form');
        const chatInput = chatForm.querySelector('input[name="message"]');
        const messagesContainer = document.querySelector('.messages');

        Echo.private('chat')
            .listen('ChatMessageEvent', (event) => {
                const messageElement = document.createElement('div');
                messageElement.classList.add('message');
                messageElement.innerHTML = `<strong>${event.user.name}:</strong> ${event.message.message}`;
                messagesContainer.appendChild(messageElement);
            });

        chatForm.addEventListener('submit', (event) => {
            event.preventDefault();

            const message = chatInput.value;

            axios.post('/chat', {
                message: message,
            })
            .then(response => {
                chatInput.value = '';
            })
            .catch(error => {
                console.log(error);
            });
        });
    </script>
@endsection