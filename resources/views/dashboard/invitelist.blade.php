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
</style>

@endsection

@section('breadcrumbs')

    <h1>My Invites</h1>
    
@endsection
@section('content')


<!-- START WIDGETS -->
<div class="card text-center bg-primary">

    <div class="card-body">
        <div class="row">
            <div class="col-sm-8">
                <h5>Joiners Reward</h5>
                <strong class="amount"><span id="invite_earnings"></span></strong>
            </div>
            <div class="col-sm-4">
                <form method="POST" action="{{ route('request1') }}">
                        {{ csrf_field() }}
                        <input class="hidden" style="display:none;" id="deposit_amount" name="encashments" value="" />
                        <input class="hidden" style="display:none;" id="user_id" name="user_id" value="{{ Auth::user()->id }}" />
                        <input class="hidden" style="display:none;" id="user_code" name="user_code" value="{{ Auth::user()->code }}" />
                        <input class="hidden" style="display:none;" id="user" name="user" value="{{ Auth::user()->username }}" />
                        <input class="hidden" style="display:none;" id="source" name="source" value="Invite" />


                        <button type="submit" id="invite_button" class="form-control disable-btn invite_cost mb-1 mt-1 mr-1 btn btn-info btn-md incashment_wallet">

                            CLAIM<strong class="hidden" style="display:none;"><span id="invite_earnings1"></span></strong>
                        </button>
                    </form>

            </div>
        </div>
    </div>
</div>
<div class="card-body">
        

    <div class="panel panel-default">
        <div class="panel-body">
            <div class="">
                <table id="invite_list" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>User Code</th>
                            <th>Reward</th>
                            <th>Level</th>
                        </tr>
                    </thead>

                    <tbody>

                        @php
                            $t = date('h', +8);
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

@endsection





@section('scripts')
    <script src="{{ asset('/')}}/dashboard/modules/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#invite_list').DataTable();
        } );
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

        $(document).ready(function(){
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

            function formatNumber(num) {
            return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
            }


            var table = document.getElementById("invite_list"), sumVal = 0;

            for(var i = 1; i < table.rows.length; i++)
            {
                sumVal = sumVal + parseInt(table.rows[i].cells[2].innerHTML);
            }
            var deposit = ({{ $wallet->deposit}} + {{$wallet->withdrawal}});
            console.log(deposit);
            if(deposit > 0) {
                var total = sumVal - deposit;
                // var total = sumVal;

                console.log(" deposit > 0 -- sum value: " + sumVal);
                console.log(" deposit > 0 -- deposit: " + deposit);
                console.log(" deposit > 0 -- total: " + total);
            }
            else {
                var total = sumVal;
            }


            if( total == 0) {
            document.getElementById("invite_earnings").innerHTML = "Reward is Fully claimed";
            }
            else {
                document.getElementById("invite_earnings").innerHTML = "₱ " + total;
            }

            document.getElementById("invite_earnings1").innerHTML = "₱ " + total;

            document.getElementById('deposit_amount').value = total;


            if( total < 500) {

                $('.incashment_wallet').prop('disabled',true);

            }
            console.log("sum value: " + sumVal);
            // console.log(gross);


            var gross = formatNumber({{$UserCaptcha->Earnings}})  ;
            // var all = sumVal;

            document.getElementById("total_gross").innerHTML = gross;
        });
    </script>



@endsection
