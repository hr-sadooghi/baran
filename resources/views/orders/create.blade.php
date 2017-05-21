@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

    <form method="post" action="{{ url('orders/store') }}">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="domain">Domain Address:</label>
            <input type="text" class="form-control" id="domain" name="domain">
        </div>

        <div class="form-group">
            <label for="year">Year:</label>
            <select class="form-control" id="year" name="year">
                <option value="1">1</option>
                <option value="5">5</option>
            </select>
        </div>
        <div class="form-group">
            <label for="nic_handle">Nic Handle:</label>
            <input type="text" class="form-control" id="nic_handle">
        </div>

        <button type="submit" class="btn btn-primary">Register</button>
    </form>
    </div>
@endsection