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
        </tr>
        </thead>
        <tbody>
        @if($consultations->count() > 0)
            @foreach($consultations as $consultation)
                <tr>
                    <td>{{ $consultation->consultant_id }}</td>
                    <td>{{ $consultation->date }}</td>
                    <td>{{ $consultation->status }}</td>
                </tr>
            @endforeach
        @else
            <tr>
                <td style="text-align: center" colspan="5">No Requested Books</td>
            </tr>
        @endif
        </tbody>
    </table>
</div>


<div class="p-6 lg:p-8 bg-white border-b border-gray-200 flex justify-content-between">
    <a href="/consultation-history">Consultation history ...</a>
    <a href="/new-consultation" class="btn btn-success btn-sm">New Consultation</a>
</div>
