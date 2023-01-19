@extends('layouts.institution')

@section('css')
<link rel="stylesheet" href="{{ asset('css/institution-chat.css') }}">
@endsection

@section('main')
<div class="institution-chat">
    <h1>Chat</h1>
    <div class="ui grid">
        <div class="four wide column box-column left-box">
            <div class="ui search">
                <div class="ui icon input">
                    <input class="prompt" type="text" placeholder="Cari peserta">
                    <i class="search icon"></i>
                </div>
                <div class="results"></div>
            </div>
            <button onclick="toggleChat()" id="chatButton">
                <div class="ui grid">
                    <div class="three wide column initial-column">
                        <div class="circle-bg">
                            <h3>B</h3>
                        </div>
                    </div>
                    <div class="thirteen wide column detail-column">
                        <h5>Bambang</h5>
                        <p>081274829382</p>
                    </div>
                </div>
            </button>
            <button>
                <div class="ui grid">
                    <div class="three wide column initial-column">
                        <div class="circle-bg">
                            <h3>R</h3>
                        </div>
                    </div>
                    <div class="thirteen wide column detail-column">
                        <h5>Rahayu</h5>
                        <p>081277459382</p>
                    </div>
                </div>
            </button>
            <button>
                <div class="ui grid">
                    <div class="three wide column initial-column">
                        <div class="circle-bg">
                            <h3>S</h3>
                        </div>
                    </div>
                    <div class="thirteen wide column detail-column">
                        <h5>Sutejo</h5>
                        <p>087829103821</p>
                    </div>
                </div>
            </button>
            <button>
                <div class="ui grid">
                    <div class="three wide column initial-column">
                        <div class="circle-bg">
                            <h3>R</h3>
                        </div>
                    </div>
                    <div class="thirteen wide column detail-column">
                        <h5>Rifki</h5>
                        <p>087712312392</p>
                    </div>
                </div>
            </button>
            <button>
                <div class="ui grid">
                    <div class="three wide column initial-column">
                        <div class="circle-bg">
                            <h3>AT</h3>
                        </div>
                    </div>
                    <div class="thirteen wide column detail-column">
                        <h5>Ahmad Tauhid</h5>
                        <p>081295838392</p>
                    </div>
                </div>
            </button>
        </div>
        <div class="eleven wide column box-column right-box">
            <div class="empty-chat-right-box-container" id="blank-chat">
                <img src="{{ asset('images/institution/chat.png') }}" alt="chat">
                <p>Mulai pesan baru</p>
            </div>
            <div class="filled-chat-right-box-container" id="filled-chat">
                <h2>Bambang</h2>
                <img src="{{ asset('images/institution/filledChat.png') }}" alt="filledChat">
                <div class="ui form">
                    <div class="field">
                        <input type="text" class="icon-inp" placeholder="Tulis pesan Anda">
                        <button class="send-btn"><img src="{{ asset('images/institution/send-chat.png') }}" alt=""></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
    function toggleChat() {
        var emptyChat = document.getElementById('blank-chat');
        var filledChat = document.getElementById('filled-chat');

        // get the current value of the clock's display property
        var emptyDisplaySetting = emptyChat.style.display;

        // also get the clock button, so we can change what it says
        var chatButton = document.getElementById('chatButton');

        // now toggle the clock and the button text, depending on current state
        if (emptyDisplaySetting == 'block') {
        // clock is visible. hide it
            emptyChat.style.display = 'none';
            filledChat.style.display = 'block';
        }
        else {
        // clock is hidden. show it
            emptyChat.style.display = 'block';
            filledChat.style.display = 'none';
        }
    }
</script>
@endsection