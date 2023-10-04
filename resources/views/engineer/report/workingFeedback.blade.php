@extends('master.master')
@section('title')
    Report
@endsection

@section('page-title')
    Wroking Feedback
@endsection

@section('body')
    <!-- table responsive -->
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-body">
                <h4 class="card-title">Accessories</h4>
                <div class="row">
                    <div class="col-sm-12 col-xs-12">
                        <form action="{{ route('submit.feedback', ['id' => $issue->id]) }}" method="POST">
                            @csrf
                            <div id="accessory-container">
                                <!-- Initial input fields -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="control-label mt-3">Accessories Name</label>
                                        <div class="input-group">
                                            <input type="text" name="accessory_name[]" class="form-control" aria-label="Text input with checkbox">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="control-label mt-3">Accessories Price</label>
                                        <div class="input-group">
                                            <span class="input-group-text">৳</span>
                                            <span class="input-group-text">0.00</span>
                                            <input type="number" name="accessory_price[]" class="form-control" aria-label="Amount (to the nearest dollar)">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-xs-right mt-3">
                                <button type="button" id="add-accessory" class="btn btn-info text-white">Add More</button>
                                <button type="submit" class="btn btn-info text-white">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
