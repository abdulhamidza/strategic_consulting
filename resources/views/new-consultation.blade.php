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
                {{--<x-new-consultation :consultations="$consultations" />--}}

                <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
                    {{--<x-application-logo class="block h-12 w-auto" />--}}

                    <h1 class="mt-8 text-2xl font-medium text-gray-900">
                        New Consultations
                    </h1>
                </div>

                <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
                    <form role="form" action="/consultationstore" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="title">
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <input type="text" class="form-control" name="description" id="description" placeholder="description">
                            </div>
                            <div class="form-group">
                                <label for="date">Date and Time</label>
                                <input type="datetime-local" class="form-control" id="date" name="date"
                                       value="2024-01-01T12:00" min="2024-01-01T00:00" max="2026-12-30T23:59" />
                            </div>
                            <div class="form-group">
                                <label for="duration">Duration</label>
                                <select class="form-control" id="duration" name="duration">
                                    <option value="60">1 Hour</option>
                                    <option value="120">2 Hour</option>
                                    <option value="180">3 Hour</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="consultant_id">Consultant</label>
                                <select class="form-control" name="consultant_id" id="consultant_id">
                                    @foreach($consultants as $consultant)
                                        <option value="{{ $consultant->id }}">{{ $consultant->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="customer_entity">Customer Entity</label>
                                <select class="form-control" name="customer_entity" id="customer_entity">
                                    <option value="person">Person</option>
                                    <option value="institution">Institution</option>
                                </select>
                            </div>
                        </div><!-- /.box-body -->

                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
