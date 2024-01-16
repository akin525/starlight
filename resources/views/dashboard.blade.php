@include('layouts.sidebar')
{{--<link rel="stylesheet" href="{{ mix('css/app.css') }}">--}}


<!-- Scripts -->
{{--<script src="{{ mix('js/app.js') }}" defer></script>--}}
{{--<div class="page-title">--}}
{{--    <div class="row align-items-center justify-content-between">--}}
{{--        <div class="col-xl-4">--}}
{{--            <div class="page-title-content">--}}
{{--                <h3>Dashboard</h3>--}}
{{--                <p class="mb-2">Welcome Back {{Auth::user()->name}}</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-auto">--}}
{{--            <div class="breadcrumbs"><a href="#">Home </a><span><i--}}
{{--                        class="ri-arrow-right-s-line"></i></span><a href="#">Dashboard</a></div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<div class="row">
<div class="panel-header   py-3 bubble-shadow" style="background: linear-gradient(to right, #132563,   #132563)!important">
    <div class="page-inner py-5">
        <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row py-4">
            <div>
                <h2 class="text-white  fw-bold">Welcome to Starlight-Communication</h2>
                <div class="card-title text-white" ><span class="text-white" id="greet"><b class="text-white">{{$greet}} {{Auth::user()->username}}</b></span> </div> <hr>

            </div>
            {{--                    <div class="ml-md-auto py-2 py-md-0">--}}
            {{--                        <button type="button" class="btn btn-warning btn-round mr-2" data-toggle="modal" data-target="#fundWalletModal">--}}
            {{--                            Fund Wallet--}}
            {{--                        </button>--}}


            {{--                        <a href="/404/page-not-found-error/page/" class="btn btn-info btn-round text-white" style="visibility:hidden">.</a>--}}

            {{--                    </div>--}}
        </div>
    </div>
</div>
    <div class="">
        <div class="">
            <div class="col-md-12">

                <div class="full-height">
                    <b><b>

                            <marquee style="background-color: white; color:#d1026d; padding: 10px; font-size: 15px;;">  MTN SME NOW AVAILABLE @ {{$price->tamount}} PER GB </marquee>

                        </b></b></div><b><b>


                    </b></b>
            </div>

        </div>
    </div>

{{--<div class="alert alert-primary alert-dismissible alert-additional fade show" role="alert">--}}
{{--    <div class="alert-body">--}}
{{--        <div class="d-flex">--}}
{{--            <div class="flex-grow-1">--}}
{{--                <h4 class="alert-heading"><b>Notification  !</b></h4>--}}
{{--                <p class="mb-0">Notification for Minimum amount funding</p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="alert-content">--}}
{{--        <p class="mb-0">{{$me->message}}t</p>--}}
{{--    </div>--}}
{{--</div>--}}
    <br><br><hr>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{route('select')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="https://play-lh.googleusercontent.com/Vse_HvYw4_KZsvVf0NXXWBNnwEq0GVsihLw5z9yzc14MY8vuBet4Vl_shjP0EGg0WuU">
                             </span>
                    {{--                            <div class="h6  text-dark">Data</div>--}}
                    <h6>Data</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{route('airtime')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="https://cloud.bekonta.com/public/user_dashboard/icons/airtime.svg">
                             </span>
                    <h6>Airtime</h6>
                    {{--                            <div class="h6  text-dark">Airtime</div>--}}
                </div>
            </div>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{url('picktv')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSw-WmPyjVF6CMyYO61o15KbQdyMRR5b9X18w&usqp=CAU">
                             </span>
                    <h6>Tv</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{url('elect')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="data:image/png;base64,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">
                             </span>
                    <h6>Electric</h6>
                    {{--                            <div class="h6 m-2 text-dark">Electricity</div>--}}
                </div>
            </div>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{url('waec')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="data:image/jpeg;base64,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">
                             </span>
                    <h6>Waec</h6>
                </div>
            </div>
        </a>
    </div>
    <div class="col-4 col-sm-3 col-lg-3">
        <a href="{{url('neco')}}">
            <div class="card">
                <div class="card-body p-3 text-center">
                             <span style="font-size: 30px;">
                                 <img width="50" src="data:image/jpeg;base64,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">
                             </span>
                    <h6>Neco</h6>
                </div>
            </div>
        </a>
    </div>


    <div class="row">
    <div class="col-xl-6 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"><b>Wallets</b></h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-primary"><span><i
                                        class="ri-wallet-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval(Auth::user()->wallet *1), 2)}}</h3>
                                <p>Wallet Balance</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-secondary"><span><i
                                        class="ri-wallet-2-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($totaldeposite *1), 2)}}</h3>
                                <p>Total Deposit</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-success"><span><i
                                        class="ri-wallet-3-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($bill *1), 2)}}</h3>
                                <p>Total Purchase</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                        <div class="stat-widget d-flex align-items-center">
                            <div class="widget-icon me-3 bg-danger"><span><i
                                        class="ri-wallet-3-line"></i></span></div>
                            <div class="widget-content">
                                <h3>₦{{number_format(intval($charge *1), 2)}} </h3>
                                <p>All Charges</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xxl-6 col-xl-6 col-lg-6">
        <div id="user-activity" class="card" data-aos="fade-up">
            <div class="card-header">
                <h4 class="card-title">Virtual Account Detail</h4>
            </div>
            <div class="card-body">
                <div class="chartjs-size-monitor">
                    <div class="chartjs-size-monitor-expand">
                        <div class=""></div>
                    </div>
                    <div class="chartjs-size-monitor-shrink">
                        <div class=""></div>
                    </div>
                </div>
                <div class="card">
                    <div class="">
                        <div class="alert alert-primary">
                                @if (Auth::user()->account_number==1 && Auth::user()->account_name==1)
                                    <a href='{{route('vertual')}}' class='btn btn-primary'>Click this section to get your  Virtual Bank Account</a>
                                @else
                                    <div class="row column1">
                                        <div class="col-md-7 col-lg-6">
                                            <div class="card-body">
                                                <ul style="list-style-type:square">
{{--                                                    <li class="text-white"><h6 class="text-white"><b>Personal Virtual Account Number</b></h6></li>--}}
{{--                                                    <br>--}}
                                                    <li class='text-white'><h6 class="text-white"><b>{{Auth::user()->account_name}}</b></h6></li>
                                                    <li class='text-white'><h6 class="text-white"><b>Account No:{{Auth::user()->account_number}}</b></h6></li>
                                                    @if(Auth::user()->bank==NULL)
                                                        <li class='text-white'><h6 class="text-white"><b>Bank: Wema</b></h6></li>
                                                    @else
                                                        <li class='text-white'><h6 class="text-white"><b>Bank: {{Auth::user()->bank}}</b></h6></li>
                                                    @endif
{{--                                                    <br>--}}
{{--                                                    <li class='text-white'><h6 class="text-white"><b>Note: All virtual funding are being set automatically</b></h6></li>--}}
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-7 col-lg-6">
                                            <div>
                                                <center>
                                                    <a href="#">
                                                        <img width="200" src="{{asset("star.png")}}"  alt="">
                                                    </a>
                                                </center>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-12">
        <div class="card">

            <div class="card-body">
                <div class="invoice-table">
                    <h4 class="fw-bold"><b>Purchase History</b></h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>
                                    <div class="form-check"><input class="form-check-input"
                                                                   type="checkbox" id="flexCheckDefault" value=""></div>
                                </th>
                                <th>Username</th>
                                <th>Product</th>
                                <th>Amount</th>
                                <th>Number</th>
                                <th>Date</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($bil3 as $dp)
                            <tr>
                                <td>
                                    <div class="form-check"><input class="form-check-input"
                                                                   type="checkbox" id="flexCheckDefault" value=""></div>
                                </td>
                                <td>{{$dp->username}}</td>
                                <td>{{$dp->plan}}</td>
                                <td>{{$dp->amount}}</td>
                                <td>{{$dp->phone}}</td>
                                <td>{{$dp->date}}</td>
                                <td>@if($dp->result==1)
                                        <span class="badge px-3 py-2 bg-success">Delivered</span>
                                    @else
                                        <span class="badge px-3 py-2 bg-warning">Pending</span>
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$bil3->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>
