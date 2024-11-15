@extends('layouts.admin')

@section('content')
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <!-- Filter Section -->
            <div class="row mb-3">
                <div class="col-lg-12">
                    <form action="{{ route('sales.calculateOrdersByTime') }}" method="POST" class="form-inline">
                        @csrf
                        <div class="form-group mr-3">
                            <label for="month" class="mr-2">Month:</label>
                            <select name="month" id="month" class="form-control" required>
                                <option value="">Select Month</option>
                                @foreach(range(1, 12) as $m)
                                    <option value="{{ $m }}" {{ request('month') == $m ? 'selected' : '' }}>
                                        {{ DateTime::createFromFormat('!m', $m)->format('F') }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mr-3">
                            <label for="year" class="mr-2">Year:</label>
                            <select name="year" id="year" class="form-control" required>
                                <option value="">Select Year</option>
                                @for($y = date('Y'); $y >= 2000; $y--)
                                    <option value="{{ $y }}" {{ request('year') == $y ? 'selected' : '' }}>
                                        {{ $y }}
                                    </option>
                                @endfor
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </form>
                </div>
            </div>
            
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                   @if(isset( $calculateOrders[0] ))
                         <h3>{{ $calculateOrders[0] }} $</h3>
                    @endif
                            <p>Sales</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="small-box bg-success">
                        <div class="inner">
                        @if(isset( $calculateOrders[1] ))
                        <h3>   {{ $calculateOrders[1] }}</h3>
                            @endif
                            <p>Orders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                        @if(isset( $calculateOrders[2] ))
                        <h3>   {{ $calculateOrders[2] }}</h3>
                         @endif
                            <p>Products</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
