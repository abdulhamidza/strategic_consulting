<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    {{--<x-application-logo class="block h-12 w-auto" />--}}

    <h1 class="mt-8 text-2xl font-medium text-gray-900">
        My Messages
    </h1>
</div>

<div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
    <table style="margin: 0" class="table table-bordered table-striped">
        <thead>
        <tr>
            <th>Consultant</th>
            <th>Date</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        {{--@if(Auth::user()->pendingLoans()->count() > 0)
            @foreach(Auth::user()->pendingLoans() as $loan)
                <tr>
                    <td class="pending-loan">{{$loan->status}}</td>
                    <td>{{$loan->userId->name}}</td>
                    <td>{{$loan->bookId->title}}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td style="text-align: center" colspan="5">No Requested Books</td>
            </tr>
        @endif--}}
        </tbody>
    </table>
</div>


<div class="p-6 lg:p-8 bg-white border-b border-gray-200">
    <h1 style="color: red" class="text-2xl font-medium text-gray-900">
        Borrowed Books
    </h1>
</div>
