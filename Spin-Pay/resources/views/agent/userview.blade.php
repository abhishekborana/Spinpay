@extends('agent.agentLayouts.header')
@include('agent.agentLayouts.header')
@push('title')
    <title>Agent Dashboard</title>
@endpush

<div class="navbar fixed-top">
    <div class="main-logo-head">
        SpinPay
    </div>
    <div class="nav-menu">
        <a href="">Vishal Sharma </a>&nbsp;&nbsp;&nbsp;
        <a href="{{url('agent/dashboard')}}">Dashboard </a>&nbsp;&nbsp;&nbsp;
        <a href=""> Logout</a>
    </div>
</div>
{{-- @php
    echo "<pre style='color:white'>";
    print_r($aadhar);
    echo '</pre>';
@endphp --}}
<div style="margin-top:70px">
    <div class="left-menu-div">
        <div class="menu-wrapper">

            <div class="menu-item-div active">
                <button class="m-btn"><i class="fas fa-user"></i><br>User</button>
            </div>

            <div class="menu-item-div">
                <a href="{{url('userview/transaction')}}/{{$user->id}}"><button class="m-btn"><i class="fas fa-glass-cheers"></i><br> Transactions</button></a>
            </div>

            <div class="menu-item-div">
                <button class="m-btn"><i class="fas fa-users"></i><br> Loans </button>
            </div>

            <div class="menu-item-div">
                <button class="m-btn"><i class="fas fa-info-circle"></i><br> Requests </button>
            </div>


        </div>

    </div>
    <div class="right-main-div">

        {{-- docs view modal --}}
        <!-- Button trigger modal -->
        {{-- <button style="float:right;margin-top:7px;text-decoration:none;"
       data-bs-toggle="modal" data-bs-target="#newStorageAddModel">Forgot Password ?</button> --}}

        {{-- docs view modal ends --}}
        <div class="main-heading">
            Basic Details
        </div>

        <div style="display:flex;height:350px;padding:20px;">
            <div class="userImageContainer" style="width:20%">
                <img src="{{ asset('storage') }}/{{ $user->image }}"
                    style="min-width:100%;max-width:100%;min-height:100%;max-height:100%;border-radius: 10px">
            </div>
            <div class="userDataContainer" style="margin-left:2%;width:30%">
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        user name
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->name . ' (' . $user->gender . ')' }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        phone
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->phone }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        email
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->email }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        address
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->address_line . ' ' . $user->city . ' ' . $user->state . ' ' . $user->pincode }}
                    </div>
                </div>
            </div>
            <div class="userDataContainer" style="margin-left:2%;width:20%">
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        age
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->age }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        date of birth
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->dob }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        joining date
                    </div>
                    <div style="color:white;font-size:24px">
                        {{ $user->created_at }}
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        role
                    </div>
                    <div style="color:white;font-size:24px">

                        @if ($user->role_id == 3)
                            <span style="color:green">Lender</span>
                        @else
                            <span style="color:blue">Borrower</span>
                        @endif
                    </div>
                </div>
            </div>

            <div class="userDataContainer" style="margin-left:2%;width:25%">
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        status
                    </div>
                    <div style="color:white;font-size:24px">

                        @if ($user->status == 'pending')
                            <span style="color:orange;">pending</span>
                        @elseif($user->status == 'approved')
                            <span style="color:green;">approved</span>
                        @else
                            <span style="color:red;">rejected</span>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        credit limit
                    </div>
                    <div style="color:white;font-size:24px">
                        @if ($user->credit_limit == '')
                            <span style="color:orange;">not assigned</span>
                        @else
                            <span style="color:green;">{{ $user->credit_limit }}</span>
                        @endif
                    </div>
                </div>
                <div>
                    <div class="sub-headings" style="color:grey;font-size:18px">
                        loan status
                    </div>
                    <div style="color:white;font-size:24px">
                        <span style="color:red;">due: 20 may 2022</span>
                    </div>
                </div>

            </div>
        </div>

        <div class="main-heading">
            Documents Details
        </div>

        <div style="display:flex;padding:20px;">
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="
                {{-- @if ($aadhar->document_image != '')
                   {{ asset('storage') }}/{{$aadhar->document_image}}
                @else    
                   {{ url('/images/notAvailable.png') }}
                @endif --}}
                " id="aadhar_image" width="100%" height="400px" style="border-radius: 10px;" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Aadhar
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="font-size:24px">
                            <span id="aadhar_status">Not available</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="aadhar_num">Not available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('aadhar_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="aadharAprBtn" onclick="AprvDoc({{ $user->id }},1,'approved','aadharAprBtn','aadhar_status')"
                                style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="aadharRejectBtn" onclick="AprvDoc({{ $user->id }},1,'reject','aadharRejectBtn','aadhar_status')" style="width:100%">Reject</button></div>

                    </div>

                </div>
            </div>
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="
                {{-- @if ($pan->document_image != '')
                   {{ asset('storage') }}/{{$pan->document_image}}
                @else    
                   {{ url('/images/notAvailable.png') }}
                @endif --}}
                " id="pan_image" width="100%" height="400px" style="border-radius: 10px" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Pan Card
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            <span id="pan_status">Not available</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="pan_num">Not Available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('pan_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="panAprBtn" onclick="AprvDoc({{ $user->id }},2,'approved','panAprBtn','pan_status')" style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="panRejectBtn" onclick="AprvDoc({{ $user->id }},2,'reject','panRejectBtn','pan_status')" style="width:100%">Reject</button></div>

                    </div>

                </div>
            </div>
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="" id="bankslip_image" width="100%" height="400px" style="border-radius: 10px" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Bank Slip
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            <span id="bankSlip_status"></span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="bankslip_num">Not available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('bankslip_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="bankSlipAprBtn" onclick="AprvDoc({{ $user->id }},4,'approved','bankSlipAprBtn','bankSlip_status')" style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="bankSlipRejectBtn" onclick="AprvDoc({{ $user->id }},4,'reject','bankSlipRejectBtn','bankSlip_status')" style="width:100%">Reject</button></div>
                    </div>

                </div>
            </div>


        </div>

        <div class="main-heading">
            Payslips Details
        </div>

        <div style="display:flex;padding:20px;">
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="" id="payslip1_image" width="100%" height="400px"
                    style="border-radius: 10px" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Payslip1
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            <span id="payslip1_status">Not available</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="payslip1_num">Not available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('payslip1_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="pay1AprBtn" onclick="AprvPaySlips({{ $user->id }},3,'approved','pay1AprBtn','payslip1_status',31)"
                                style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="pay1RejectBtn" onclick="AprvPaySlips({{ $user->id }},3,'reject','pay1RejectBtn','payslip1_status',31)" style="width:100%">Reject</button></div>

                    </div>

                </div>
            </div>
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="" id="payslip2_image" width="100%" height="400px"
                    style="border-radius: 10px" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Aadhar
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            <span id="payslip2_status">Not available</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="payslip2_num">Not available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('payslip2_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="pay2AprBtn" onclick="AprvPaySlips({{ $user->id }},3,'approved','pay2AprBtn','payslip2_status',32)"
                                style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="pay2RejectBtn" onclick="AprvPaySlips({{ $user->id }},3,'reject','pay2RejectBtn','payslip2_status',32)" style="width:100%">Reject</button></div>

                    </div>

                </div>
            </div>
            <div class="userImageContainer"
                style="width:32%;height:100%;margin-left:1%;padding:10px;border:1px solid white;border-radius:10px">
                <embed src="" id="payslip3_image" width="100%" height="400px"
                    style="border-radius: 10px" />
                <div style="margin-left:10px">
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Type: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            Aadhar
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4" style="color:white;font-size:24px">Status: </div>
                        <div class="col-6" style="color:aqua;font-size:24px">
                            <span id="payslip3_status">Not available</span>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px">Doc number: </div>
                        <div class="col-6" style="color:aqua;font-size:18px">
                            <p id="payslip3_num">Not available</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-primary"
                                style="width:100%" onclick="viewImage('payslip3_image')">View</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-success"
                                id="pay3AprBtn" onclick="AprvPaySlips({{ $user->id }},3,'approved','pay3AprBtn','payslip3_status',33)"
                                style="width:100%">Approve</button></div>
                        <div class="col-4" style="color:white;font-size:18px"><button class="btn btn-warning"
                                id="pay3RejectBtn" onclick="AprvPaySlips({{ $user->id }},3,'reject','pay3RejectBtn','payslip3_status',33)" style="width:100%">Reject</button></div>

                    </div>

                </div>
            </div>


        </div>


    </div>
</div>
<!-- Add New Storage Modal -->

<button id="openModalBtn" data-bs-toggle="modal" data-bs-target="#newStorageAddModel" style="display:none"></button>

<div class="modal fade bd-example-modal-lg" id="newStorageAddModel" data-bs-backdrop="static" data-bs-keyboard="false"
    tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true" style="min-width:90vw ">
    <div class="modal-dialog modal-lg" style="min-width:90vw; ">
        <div class="modal-content" style="min-width:90vw;min-height:90vh">
            <div class="modal-header" style="min-width:90vw;">
                <h6 class="modal-title" id="staticBackdropLabel">Document View</h6>
                <button type="button" data-bs-dismiss="modal" aria-label="Close" style="border:none;background:none;"><i
                        class="fas fa-times" style="color:blue;"></i></button>
            </div>
            <div class="modal-body" style="min-width:90vw;min-height:90vh">
                <embed id="modal-image-view" src="
                {{-- @if ($aadhar->document_image != '') --}}
                    {{-- {{ asset('storage') }}/{{$aadhar[0]->document_image}} --}}
                 {{-- @else    
                    {{ url('/images/notAvailable.png') }}
                 @endif --}}
                 " width="100%" height="1000px" style="border-radius: 10px" />
            </div>
        </div>
    </div>
</div>


@include('agent.agentLayouts.jsAgent')
<script>
    $(document).ready(function() {
        function loadDocs(){

        }
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/1",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                console.log(response);
                if (response['doc_image'] != "") {
                    $('#aadhar_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    $('#aadhar_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#aadhar_status').html(response['doc_verfy']);
                        $('#aadhar_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#aadhar_status').html(response['doc_verfy']);
                        $('#aadhar_status').css('color', 'green');
                        $('#aadharAprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#aadhar_status').html(response['doc_verfy']);
                        $('#aadhar_status').css('color', 'red');
                        $('#aadharRejectBtn').prop('disabled', true);
                    } else {
                        $('#aadhar_status').html('Not assigned');
                        $('#aadhar_status').css('color', 'aqua');
                    }
                } else {
                    $('#aadhar_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#aadhar_num').html('not available');
                    $('#aadharAprBtn').prop('disabled', true);
                    $('#aadharRejectBtn').prop('disabled', true);
                }
               
            }
        });
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/2",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                console.log(response);
                if (response['doc_image'] != "") {
                    $('#pan_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    $('#pan_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#pan_status').html(response['doc_verfy']);
                        $('#pan_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#pan_status').html(response['doc_verfy']);
                        $('#pan_status').css('color', 'green');
                        $('#panAprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#pan_status').html(response['doc_verfy']);
                        $('#pan_status').css('color', 'red');
                        $('#panRejectBtn').prop('disabled', true);
                    } else {
                        $('#pan_status').html('Not assigned');
                        $('#pan_status').css('color', 'aqua');
                    }
                } else {
                    $('#pan_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#pan_num').html('not available');
                    $('#panAprBtn').prop('disabled', true);
                    $('#panRejectBtn').prop('disabled', true);
                }
               
            }
        });
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/4",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                console.log(response['doc_verfy']);
                if (response['doc_image'] != "") {
                    $('#bankslip_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    // $('#bankslip_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#bankSlip_status').html(response['doc_verfy']);
                        $('#bankSlip_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#bankSlip_status').html(response['doc_verfy']);
                        $('#bankSlip_status').css('color', 'green');
                        $('#bankslipAprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#bankSlip_status').html(response['doc_verfy']);
                        $('#bankSlip_status').css('color', 'red');
                        $('#bankslipRejectBtn').prop('disabled', true);
                    } else {
                        $('#bankSlip_status').html('Not assigned');
                        $('#bankSlip_status').css('color', 'aqua');
                    }
                } else {
                    $('#bankslip_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#bankslip_num').html('not available');
                    $('#bankslipAprBtn').prop('disabled', true);
                    $('#bankslipRejectBtn').prop('disabled', true);
                }
               
            }
        });
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/3/31",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                // console.log('payslip'+i+'_image');
                if (response['doc_image'] != "") {
                    $('#payslip1_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    // $('#payslip1_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#payslip1_status').html(response['doc_verfy']);
                        $('#payslip1_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#paysli1_status').html(response['doc_verfy']);
                        $('#paysli1_status').css('color', 'green');
                        $('#paysli1AprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#payslip1_status').html(response['doc_verfy']);
                        $('#payslip1_status').css('color', 'red');
                        $('#payslip1RejectBtn').prop('disabled', true);
                    } else {
                        $('#payslip1_status').html('Not assigned');
                        $('#payslip1_status').css('color', 'aqua');
                    }
                } else {
                    $('#payslip1_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#payslip1_num').html('not available');
                    $('#payslip1AprBtn').prop('disabled', true);
                    $('#payslip1RejectBtn').prop('disabled', true);
                }
               
            }
        });
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/3/32",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                // console.log('payslip'+i+'_image');
                if (response['doc_image'] != "") {
                    $('#payslip2_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    // $('#payslip1_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#payslip2_status').html(response['doc_verfy']);
                        $('#payslip2_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#paysli2_status').html(response['doc_verfy']);
                        $('#paysli2_status').css('color', 'green');
                        $('#paysli2AprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#payslip2_status').html(response['doc_verfy']);
                        $('#payslip2_status').css('color', 'red');
                        $('#payslip2RejectBtn').prop('disabled', true);
                    } else {
                        $('#payslip2_status').html('Not assigned');
                        $('#payslip2_status').css('color', 'aqua');
                    }
                } else {
                    $('#payslip2_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#payslip2_num').html('not available');
                    $('#payslip2AprBtn').prop('disabled', true);
                    $('#payslip2RejectBtn').prop('disabled', true);
                }
               
            }
        });
        $.ajax({
            url: "/api/fetchUserDocs/"+{{$user->id}}+"/3/33",
            type: "get",
            dataType: "json",
            // data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                // console.log('payslip'+i+'_image');
                if (response['doc_image'] != "") {
                    $('#payslip3_image').prop('src', '{{ asset('storage') }}/' + response[
                        'doc_image']);
                    // $('#payslip1_num').html(response['doc_num']);
                    if (response['doc_verfy'] == "pending") {
                        $('#payslip3_status').html(response['doc_verfy']);
                        $('#payslip3_status').css('color', 'orange');
                    } else if (response['doc_verfy'] == "approved") {
                        $('#paysli3_status').html(response['doc_verfy']);
                        $('#paysli3_status').css('color', 'green');
                        $('#paysli3AprBtn').prop('disabled', true);
                    } else if (response['doc_verfy'] == "reject") {
                        $('#payslip3_status').html(response['doc_verfy']);
                        $('#payslip3_status').css('color', 'red');
                        $('#payslip3RejectBtn').prop('disabled', true);
                    } else {
                        $('#payslip3_status').html('Not assigned');
                        $('#payslip3_status').css('color', 'aqua');
                    }
                } else {
                    $('#payslip3_image').prop('src', "{{ asset('/images/notAvailable.png') }}");
                    $('#payslip3_num').html('not available');
                    $('#payslip3AprBtn').prop('disabled', true);
                    $('#payslip3RejectBtn').prop('disabled', true);
                }
               
            }
        });
        
 

    });

    function viewImage(divId) {
        var obj = document.getElementById(divId);
        var image_source = obj.src;
        console.log(image_source);
        $("#modal-image-view").prop('src', image_source);
        $('#openModalBtn').click();
    }
    function AprvDoc(userId, docId, request , btnId, docStatus) {
        console.log(userId + " " + docId);
        const getData = {
            'user_id' : userId,
            'doc_id' : docId,
            'request_type': request,
        };
        $.ajax({
            url: "/api/DocAprv",
            type: "post",
            // dataType: "json",
            data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                if(response['status']==200){
                    $('#'+docStatus).html(request);
                    $('#'+btnId).prop('disabled', true);
                    $('#'+btnId).prop('color', 'green');
                }else if(response['status']==400){
                    alert('failed');
                }
                

            }
        });
    }
    function AprvPaySlips(userId, docId, request , btnId, docStatus, docNum) {
        // console.log(userId + " " + docId);
        const getData = {
            'user_id' : userId,
            'doc_id' : docId,
            'request_type': request,
            'doc_num':docNum,
        };
        $.ajax({
            url: "/api/DocAprv",
            type: "post",
            // dataType: "json",
            data: getData,
            beforeSend: function() {

            },
            success: function(response) {
                if(response['status']==200){
                    $('#'+docStatus).html(request);
                    $('#'+btnId).prop('disabled', true);
                    $('#'+btnId).prop('color', 'green');
                }else if(response['status']==400){
                    alert('failed');
                }
                

            }
        });
    }


</script>
@include('agent.agentLayouts.footer')
