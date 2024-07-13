@extends('admin.layouts.app')

@section('title', 'Category List Page')

@section('content')
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="overview-wrap">
                                <h2 class="title-1">Order List</h2>
                            </div>
                        </div>
                    </div>

                    @if (session('deleteSuccess'))
                        <div class="col-4 offset-8">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <i class="fa-solid fa-circle-xmark"></i> {{ session('deleteSuccess') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-3">
                            <h4 class="text-secondary">Search key : <span class="text-danger">{{ request('key') }}</span>
                            </h4>
                        </div>

                        <form action="{{ route('admin#changeStatus') }}" method="GET" class="col-5">
                            @csrf
                            <div class="input-group mb-3">
                                <select name="orderStatus" class="form-select" id="inputGroupSelect02">
                                    <option value="">All</option>
                                    <option value="0" @if(request('orderStatus') == '0') selected @endif>Pending</option>
                                    <option value="1" @if(request('orderStatus') == '1') selected @endif>Accept</option>
                                    <option value="2" @if(request('orderStatus') == '2') selected @endif>Reject</option>
                                </select>
                                <div class="input-group-append">
                                    <button type="submit" class="btn sm bg-dark ms-3 text-white input-group-text">Search</button>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="fa-solid fa-database mr-2"></i> {{ count($order) }}
                                    </span>
                                </div>
                            </div>
                        </form>

                        {{-- <div class="col-3 mb-3">
                            <form action="{{ route('admin#orderList') }}" method="GET">
                                @csrf
                                <div class="d-flex">
                                    <input type="text" name="key" class="form-control" placeholder="Search..."
                                        value="{{ request('key') }}">
                                    <button class="btn bg-dark text-white" type="submit">
                                        <i class="fa-solid fa-magnifying-glass"></i>
                                    </button>
                                </div>
                            </form>
                        </div> --}}
                    </div>

                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2 text-center">
                            <thead>
                                <tr>
                                    <th>User ID</th>
                                    <th>User Name</th>
                                    <th>Order Date</th>
                                    <th>Order Code</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody id="dataList">
                                @foreach ($order as $o)
                                    <tr class="tr-shadow" style="margin-bottom: 2px important">
                                        <input type="hidden" class="orderId" value="{{ $o->id }}">
                                        <td>{{ $o->user_id }}</td>
                                        <td>{{ $o->name }}</td>
                                        <td>{{ $o->created_at->format('F-j-Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin#listInfo',$o->order_code) }}">{{ $o->order_code }}</a>
                                        </td>
                                        <td>{{ $o->total_price }}Kyats</td>
                                        <td>
                                            <select name="status" class="form-control statusChange" id="statusChange">
                                                <option value="0" @if ($o == '0') selected @endif>Pending</option>
                                                <option value="1" @if ($o == '1') selected @endif>Accept</option>
                                                <option value="2" @if ($o == '2') selected @endif>Reject</option>
                                            </select>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{-- <div class="mt-3">
                            {{ $order->links() }}
                        </div> --}}
                    </div>

                    <!-- END DATA TABLE -->
                </div>
            </div>
        </div>
    </div>
    <!-- END MAIN CONTENT-->
@endsection

@section('scriptSource')
<script>
    $(document).ready(function(){
        // change status
        $('.statusChange').change(function(){

            $currentStatus = $(this).val();
            $parentNode = $(this).parents("tr");
            $orderId = $parentNode.find('.orderId').val();

            $data = {
                'orderId' : $orderId,
                'status' : $currentStatus
            };


            $.ajax({
                type : 'get',
                url : 'http://127.0.0.1:8000/order/ajax/change/status',
                data : $data,
                dataType : 'json',
            })
        })
    })
</script>
@endsection
