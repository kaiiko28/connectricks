@extends('layouts.user')

@section('styles')

<style>
    .btn-primary {
        background-color: yellow;
        border-color: yellow;
        color: #000;
    }

    .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open > .dropdown-toggle.btn-primary {
        background-color: #e7c50f;
        border-color: #e7c50f;
    }
    .dataTables_paginate .paginate_button.current, .dataTables_paginate .paginate_button.current:hover {
        background: #014802;
        color: #FFF;
        border-color: #014802;
    }
    .tile.tile-valign {
        line-height: 2em;
    }
</style>

@endsection

@section('breadcrumbs')
    <h1 style="width:100%">Dashboard 


        <form method="POST" action="{{ route('request1') }}">
            {{ csrf_field() }}

            <input class="hidden" style="display:none;" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
            <input class="hidden" style="display:none;" id="user_code" name="user_code" value="{{ Auth::user()->code }}" />
            <input class="hidden" style="display:none;" id="username" name="username" value="{{ Auth::user()->username }}" />
            
            <input class="hidden" id="encashments" style="display:none;" name="encashments" value="" />
            <input class="hidden" id="source" style="display:none;" name="source" value="" />


                <button id="redeem_reward" type="submit" class="btn btn-success redeem_reward disable-btn">CLAIM </button>
                



        </form>
    </h1>

@endsection
@section('content')
<!-- START WIDGETS -->
@php
    $time = date('h:i:sa',strtotime("+8 hours"));
    $now = date('l',strtotime("8 hours"));
    // $t = date("h")+8;
    // $new_time = date("$time:i");


    // echo "<br>";

    // echo $last;
    // echo "<br>";
    // $timestamp = time();

    // echo $now;

    // echo "<br>";
    // echo $time

@endphp

<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-puzzle-piece"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Solve Earnings</h4>
                </div>
                <div class="card-body">
                    {{ $captcha = number_format($UserCaptcha->Earnings, 2) }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-comments-dollar"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>My invite</h4>
                </div>
                <div class="card-body">
                    <span id="invite_earnings"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <button class="card-icon bg-primary" onclick="myFunction()" onclick="outFunc()">
                <i class="fas fa-copy"></i>
            </button>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>My invite</h4>
                </div>
                <div class="card-body"  style="overflow:auto;padding:0 15px 0 0px;">
                    <input type="text" class="reflink crop"  style="padding:0;background:transparent;border:none;width:100%!important;" value="{{ route('register') . '?refcode=' . Auth::user()->code }}" id="link" readonly>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- <div class="card-body">
    <div class="col-md-12">
        <div class="card text-center bg-success">
            <div class="card-body">
                <div class="row">
                        <div class="col-sm-9">
                                
                                
                        </div>
                        <div class="col-sm-3">
                                
                        </div>
                </div>

            </div>
        </div>

    </div>

    <hr>
    <div class="row">
            <div class="col-sm-6">
                    <div class="card text-center bg-info">
                        <div class="card-header text-center">
                            <h2>Account Info</h2>
                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Username:</td>
                                    <td>{{Auth::user()->username}}</td>
                                </tr>
                                <tr>
                                    <th>Name:</td>
                                    <td>{{Auth::user()->firstname . ' ' . Auth::user()->lastname}}</td>
                                </tr>
                                <tr>
                                    <th>Activation Code:</td>
                                    <td>{{Auth::user()->code}}</td>
                                </tr>
                                <tr>
                                    <th>Upline Referral Code:</td>
                                    <td>{{Auth::user()->referrer}}</td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
                <div class="col-sm-6">
                    <div class="card text-center bg-info">
                        <div class="card-header text-center">
                            <h2>Earnings </h2>

                            


                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Captcha:</td>
                                    <td>{{ $captcha = number_format($UserCaptcha->Earnings, 3) }}</td>
                                </tr>
                                <tr>
                                    <th>Invites:</td>
                                    <td><strong class="amount"><span id="invite_earnings"></span></strong></td>
                                </tr>
                                <tr>
                                    <th>Total:</td>

                                    <td>₱ <strong class="amount"><span id="total_gross"></span></strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>


                </div>
    </div>
</div> --}}

<div class="row" style="display:none!important;">

    {{-- <div class="row"> --}}


    <div class="col-sm-9">
        <div class="panel panel-default">
            <div class="panel-title">
                <div class="col-sm-8">
                        Invites
                </div>
                <div id="wallet" class="col-sm-4 text-center">

                    <form method="POST" action="{{ route('wallet') }}">
                        {{ csrf_field() }}
                        <input class="hidden" style="display:none;" id="deposit_amount" name="deposit_amount" value="" />
                        <input class="hidden" style="display:none;" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                        <input class="hidden" style="display:none;" id="email" name="email" value="{{ Auth::user()->email }}" />
                        <input class="hidden" style="display:none;" id="user" name="user" value="{{ Auth::user()->username }}" />


                        <button type="submit" id="invite_button" class="disable-btn invite_cost mb-1 mt-1 mr-1 btn btn-success btn-md">
                            <i class="fa fa-plus" aria-hidden="true"></i>
                            Deposit <strong class="amount"><span id="invite_earnings1"></span></strong> to Wallet
                        </button>
                    </form>
                </div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table id="invite_list" class="table datatable table-bordered">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>User Code</th>
                                <th>Rewards</th>
                                <th>Level</th>
                            </tr>
                        </thead>

                        <tbody>

                            @php
                                $myrefdirect = DB::table('referals')->where('Referer_code', auth()->user()->code)->get();
                                $myref_code = DB::table('referals')->where('Referer_code', auth()->user()->code)->pluck('MyRef_code');
                            @endphp

                            @if (count($myrefdirect)>0)
                                @foreach($myrefdirect as $myref)
                                    @if ($myref->MyRef_code != auth()->user()->code)
                                    <tr>
                                        <td>{{$myref->name}}</td>
                                        <td>{{$myref->MyRef_code}}</td>
                                        <td>30.00</td>
                                        <td class="center">level 1 (Direct)</td>
                                    </tr>


                                        @php
                                            $lvl1 = DB::table('referals')->where('Referer_code', $myref->MyRef_code)->get();
                                            $lvl1_code = DB::table('referals')->where('Referer_code', $myref_code)->pluck('MyRef_code');
                                        @endphp

                                        @if (count($lvl1) > 0)
                                            @foreach ($lvl1 as $lvl1)

                                                <tr>
                                                    <td>{{$lvl1->name}}</td>
                                                    <td>{{$lvl1->MyRef_code}}</td>
                                                    <td>10.00</td>
                                                    <td class="center">level 2</td>
                                                </tr>

                                                @php
                                                    $lvl2 = DB::table('referals')->where('Referer_code', $lvl1->MyRef_code)->get();

                                                @endphp


                                                @if (count($lvl2) > 0)
                                                    @foreach ($lvl2 as $lvl2)


                                                        <tr>
                                                            <td>{{$lvl2->name}}</td>
                                                            <td>{{$lvl2->MyRef_code}}</td>
                                                            <td>5.00</td>
                                                            <td class="center">level 3</td>
                                                        </tr>


                                                    @php
                                                        $lvl3 = DB::table('referals')->where('Referer_code', $lvl2->MyRef_code)->get();

                                                    @endphp


                                                    @foreach ($lvl3 as $lvl3)


                                                        <tr>
                                                            <td>{{$lvl3->name}}</td>
                                                            <td>{{$lvl3->MyRef_code}}</td>
                                                            <td>5.00</td>
                                                            <td class="center">level 4</td>
                                                        </tr>
                                                    @endforeach
                                                    @endforeach
                                                @endif

                                            @endforeach
                                        @endif

                                    @endif




                                @endforeach
                                @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



@section('scripts')

    <script>
        function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
        }


        var table = document.getElementById("invite_list"), sumVal = 0;

            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
            }
            var deposit = {{ $wallet->deposit + $wallet->withdrawal}};
            if(deposit > 0) {
                var total = sumVal - deposit;
            }
            else {
                var total = sumVal;
            }
            document.getElementById("invite_earnings").innerHTML = "₱ " + total;
            document.getElementById("invite_earnings1").innerHTML = "₱ " + total;

            document.getElementById('deposit_amount').value = total;


            if( total < 0) {

                $('.incashment_wallet').prop('disabled',true);

            }
            // console.log(gross);


            var gross = formatNumber({{$UserCaptcha->Earnings}} + total)  ;
            // var all = sumVal;

            document.getElementById("total_gross").innerHTML = gross;


    </script>

    <script>
        function myFunction() {
            var copyText = document.getElementById("link");
            copyText.select();
            copyText.setSelectionRange(0, 99999)
            document.execCommand("copy");
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copied!";
            }

            function outFunc() {
            var tooltip = document.getElementById("myTooltip");
            tooltip.innerHTML = "Copy Link";
            }
    </script>

    <script>
        var seen = {};
        $('table tr').each(function() {
        var txt = $(this).text();
        if (seen[txt])
            $(this).remove();
        else
            seen[txt] = true;
        });
    </script>

    <script>
        $('#invite_button').on('click',function(){
            $('#invite_button').on('click',function(){
                // let a common class(disable-btn) for each button which should be disabled for on second
                $('.disable-btn').prop('disabled',true);
                setTimeout(function(){
                // enable click after 1 second
                $('.disable-btn').prop('disabled',false);
                },10000); // 1 second delay
            });
        });
    </script>


@endsection