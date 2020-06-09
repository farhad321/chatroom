@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">ارسال پیام</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <message></message>
                        {{--                            <script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>--}}
<ul>
    <li v-for="message in messages" v-text="message.message"></li>
</ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
