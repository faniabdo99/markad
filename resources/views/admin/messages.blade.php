@include('layout.header')
<body class="admin-body">
    @include('layout.navbar')
    <main>
        @php $PageName = "جميع الرسائل" @endphp
        @include('admin.adminHeader')
        <div class="container-fluid">
        <section class="admin-statics">
            <div class="row">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <div class="admin-card">
                        <h4>جميع الرسائل ({{$AllMessages->count()}})</h4>
                        @if(session()->has('success'))
                        <br>
                            <div class="success-list">
                                {{ session()->get('success') }}
                            </div>
                        <br>
                        @elseif(session()->has('error'))
                        <br>
                        <div class="success-list">
                            {{ session()->get('error') }}
                        </div>
                         <br>
                        @endif
                        @forelse ($AllMessages as $Message)
                        <div class="single-message">
                                @if($Message->is_support_ticket == 1) <p class="support-ticket"> Support Ticket Opened <i class="fas fa-ticket-alt"></i></p>@endif
                            <p class="text-left contact-information"><b>From : </b> {{$Message->user_name}} < {{$Message->user_contact_method}} > </p>
                            <p class="text-left message-content">
                                {{$Message->message}}
                            </p>
                            <ul>
                            <li><a class="btn btn-success" href="{{ route('message.archive' , $Message->id) }}">Archive</a></li>
                            <li><a class="btn btn-danger" href="{{ route('message.delete' , $Message->id) }}">Delete</a></li>
                            </ul>
                        </div>
                        @empty 
                        <p>You Have No New Messages , Great !</p>
                        @endforelse
                    </div>

                    <div class="admin-card">
                            <h4>رسائل مؤرشفة ({{$AllArchived->count()}})</h4>
                            @forelse ($AllArchived as $Message)
                            <div class="single-message">
                                    @if($Message->is_support_ticket == 1) <p class="support-ticket"><i class="fas fa-ticket-alt"></i> This is Support Ticket !</p>@endif
                                <p class="text-left contact-information"><b>From : </b> {{$Message->user_name}} < {{$Message->user_contact_method}} > </p>
                                <p class="text-left message-content">
                                    {{$Message->message}}
                                </p>
                                <ul>
                                <li><a class="btn btn-danger" href="{{ route('message.delete' , $Message->id) }}">Delete</a></li>
                                </ul>
                            </div>
                            @empty 
                            <p>You Have No New Messages , Great !</p>
                            @endforelse
                        </div>
                </div>
              </div>
        </section>
        </div>
    </main>

    
    @include('layout.scripts')
</body>
</html>