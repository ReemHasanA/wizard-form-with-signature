@extends('layout')

@section('body')

    @session('success')
    <div class="alert alert-success  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ session()->get('success') }}</strong>
    </div>
    @endsession
    @session('errors')
    <div class="alert alert-danger  alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </strong>
    </div>
    @endsession
    <form method="POST" id="regForm" action="{{ url('update', $admission) }}">
        @csrf
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <strong class="m-3">Admission Timings</strong>
            <div class="d-flex flex-lg-wrap">
                <x-forms.date-time-input name="admission_start_time" :model="$admission"/>
                <x-forms.date-time-input name="OR_start_time" :model="$admission"/>
                <x-forms.date-time-input name="surgery_start_time" :model="$admission"/>
                <x-forms.date-time-input name="anesthesia_start_time" :model="$admission"/>
                <x-forms.date-time-input name="surgery_end_time" :model="$admission"/>
                <x-forms.date-time-input name="anesthesia_end_time" :model="$admission"/>
                <x-forms.date-time-input name="OR_discharge_end_time" :model="$admission"/>
                <x-forms.date-time-input name="RR_time_out" :model="$admission"/>
            </div>

            <div class="d-flex justify-content-between p-3 durations">
                <div class="duration-box" style="--c :#f23e7d">
                    <h2>∭</h2>
                    <div>
                        <h5>Procedure Duration:</h5>
                        <h5>02:33</h5>
                    </div>
                </div>
                <div class="duration-box" style="--c :#5c6bc0">
                    <h2>&infin;</h2>
                    <div>
                        <h5>OR Booking Duration: </h5>
                        <h5>03:15</h5>
                    </div>
                </div>
            </div>

            <div>
                <strong>Approval Status</strong>
                <table class="table">
                    <thead>
                        <tr>
                            <th>Seq</th>
                            <th>User ID</th>
                            <th>Full Name</th>
                            <th>Approval Status</th>
                            <th>Date/Time</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                            <i class="fa fa-file-text-o" aria-hidden="true"></i>
                            Approve/Reject
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div class="input-group">
                    <label class="col-3" for="approval_notes">Notes:(If Any)</label>
                    <input class="col-9 form-control" type="text" id="approval_notes" name="approval_notes" placeholder="Enter note if you have any" value="{{old('approval_notes', $admission)}}">
                </div>
                <div class="m-auto col-3 p-3">
                    <input type="radio" class="btn-check d-none" name="status" id="status-approve" autocomplete="off" value="approve"
                    @checked(old('status', $admission))
                    >
                    <label class="btn btn-success" for="status-approve"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> Approve</label>
                    
                    <input type="radio" class="btn-check d-none" name="status" id="status-reject" autocomplete="off" value="reject"
                    @checked(old('status', $admission))
                    >
                    <label class="btn btn-danger" for="status-reject"><i class="fa fa-thumbs-o-down" aria-hidden="true"> Reject</i></label>
                </div>
            </div>

        </div>
        <div class="tab col-md-12">
            <strong>Progress Notes:</strong>

            <div class="form-group">
                <label for="note_types">Note Types</label>
                <br>
                <select name="note_types" id="note_types" class="form-control with-search" style="width:100%">
                    <option value="">Select Types:</option>
                    <option value="progress_notes">Progress Notes</option>
                    <option value="nurse_notes">Nurse Notes</option>
                    <option value="doctor_orders">Doctor Orders</option>
                    <option value="OR_notes">OR Notes</option>
                    <option value="anesthesia_notes">Anesthesia Notes</option>
                </select>
            </div>
            <div>
                <label class="" for="">Signature:</label>
                <br/>
                <div id="signaturePad" ></div>
                <br/>
                <button id="clear" class="btn btn-danger btn-sm">Clear Signature</button>
                <input id="signatureJSON" name="signature" class="d-none" value="{{old('signature', $admission)}}"></input>
            </div>
        </div>
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="nextBtn" onclick="next(1)" class="btn btn-danger">Next</button>
            </div>
        </div>

    </form>

@endsection
