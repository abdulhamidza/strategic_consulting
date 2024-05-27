<x-app-layout>
    @section('title', 'Messages')
    <x-slot name="header">
        <div class="flex items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('dashboard') }}" class="hover:underline">{{ __('Dashboard') }}</a>
            </h2>
            <div style="width: 20px" class=""> <!-- Use mx-2 for horizontal margin -->
                <span class="text-gray-400"></span>
            </div>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                <a href="{{ route('messages') }}" class="hover:underline">{{ __('Messages') }}</a>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{--<x-message />--}}
                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    {{--<x-application-logo class="block h-12 w-auto" />--}}

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        My Consultations
                    </h1>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                    <table style="margin: 0" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>Status</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Reply</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach(Auth::user()->getMessages() as $message)
                            @if($message->status == "new")
                                <tr>
                                    <td>{{ $message->status }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->reply }}</td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach(Auth::user()->getMessages() as $message)
                            @if($message->status == "read")
                                <tr>
                                    <td>{{ $message->status }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->reply }}</td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach(Auth::user()->getMessages() as $message)
                            @if($message->status == "replied")
                                <tr>
                                    <td>{{ $message->status }}</td>
                                    <td>{{ $message->subject }}</td>
                                    <td>{{ $message->message }}</td>
                                    <td>{{ $message->reply }}</td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-content-between">
                    <a href="/#"></a>
                    <a href="/new-message" class="btn btn-success btn-sm">New Message</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
