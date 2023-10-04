@extends('master.master')

@section('title')
    Report
@endsection

@section('page-title')
    Report Detail
@endsection

@section('body')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Issue Code</th>
                                <th>Report Title</th>
                                <th>Report Detail</th>
                                <th>Working Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th>{{ $report->issue_code }}</th>
                                <th>{{ $report->title->problem_title }}</th>
                                <th>{!! $report->description !!}</th>
                                <th>
                                    @if ($report->issue_status == 0)
                                        <a href="" class="badge rounded-pill bg-info">Pending</a>
                                    @elseif ($report->issue_status == 1)
                                        <a href="" class="badge rounded-pill bg-info">Working</a>
                                    @else
                                        <a href="" class="badge rounded-pill bg-info">Complete</a>
                                    @endif
                                </th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Used Accessories List for this report</h4>
                    <div class="table-responsive m-t-40">
                        @if (session('message'))
                            <div class="alert alert-success">
                                <h4 style="text-align: center;">{{ session('message') }}</h4>
                            </div>
                        @endif
                        <table id="example23" class="display nowrap table table-hover table-striped border" cellspacing="0"
                            width="100%">
                            <thead>
                                <tr>
                                    <th>id</th>
                                    <th>Accessories Name</th>
                                    <th>Price</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($accessoryData as $feedbackId => $accessories)
                                    @foreach ($accessories['accessory_names'] as $index => $accessoryName)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $accessoryName }}</td>
                                            <td class="fw-bold ">
                                                {{ number_format($accessories['accessory_prices'][$index], 0) }} /= ৳</td>
                                            <td>{{ $accessories['status'] }}</td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
