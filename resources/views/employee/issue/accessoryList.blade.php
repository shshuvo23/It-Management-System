@extends('employee.master')

@section('title')
    Issue
@endsection

@section('page-title')
    Confirm Accessories
@endsection

@section('body')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-white bg-dark">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Used Accessories for Your Issue Please check carefully and Confirm</h4>
                </div>
                <div class="card-body">
                    <h4>Accessories Name</h4>
                    @if (count($accessoryData) > 0)
                        @foreach ($accessoryData as $feedbackId => $accessories)
                            <ol>
                                @foreach ($accessories['accessory_names'] as $index => $accessoryName)
                                    <li>{{ $accessoryName }}</li>
                                @endforeach
                            </ol>
                            @if ($accessories['status'] == 'Pending')
                                <a href="{{ route('status.approve', ['id' => $feedbackId]) }}"
                                    class="btn btn-primary text-white">Confirm Accessories</a>
                                <a href="{{ route('status.reject', ['id' => $feedbackId]) }}"
                                    class="btn btn-primary text-white">Reject Accessories</a>
                            @endif
                            {{-- <a href="{{ route('status.complete', ['id' => $issue->id]) }}" class="btn btn-primary text-white">Mark as confirm</a> --}}
                        @endforeach
                    @else
                        <p>No accessories found for this issue.</p>
                        <a href="{{ route('status.complete', ['id' => $issue->id]) }}"
                            class="btn btn-primary text-white">Confirm</a>
                    @endif
                    {{-- <a href="{{ route('status.complete', ['id' => $issue->id]) }}" class="btn btn-primary text-white">Confirm
                        Accessories</a> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
