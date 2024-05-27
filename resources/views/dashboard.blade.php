<x-app-layout>
    @section('title', 'Dashboard')
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
                {{--<x-welcome :consultations = "$consultations" />--}}

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
                            <th>Consultant</th>
                            <th>Date</th>
                            <th>Status</th>
                            <th>#</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($consultations as $consultation)
                            @if($consultation->status == "pending")
                                <tr>
                                    <td>{{ $consultation->consultantId->name }}</td>
                                    <td>{{ $consultation->date }}</td>
                                    <td>{{ $consultation->status }}</td>
                                    <td><a href="{{route('consultationcancel', ['id' => $consultation->id])}}" class="btn btn-danger btn-sm"
                                           onclick="return confirm('Are you sure, you want to cancel the consultation.!?')">
                                            Cancel</a></td>
                                </tr>
                            @endif
                        @endforeach
                        @foreach($consultations as $consultation)
                            @if($consultation->status == "accepted")
                                <tr>
                                    <td>{{ $consultation->consultantId->name }}</td>
                                    <td>{{ $consultation->date }}</td>
                                    <td>{{ $consultation->status }}</td>
                                    <td><button disabled class="btn btn-danger btn-sm">Cancel</button></td>
                                </tr>
                            @endif
                        @endforeach
                        </tbody>
                    </table>
                </div>


                <div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-content-between">
                    <a href="/consultation-history">Consultation history ...</a>
                    <a href="/new-consultation" class="btn btn-success btn-sm">New Consultation</a>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
