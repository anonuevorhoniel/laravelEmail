@extends('layouts/layout_dashboard')

@section('content')
<div class="card" style="margin-top: 2%; height: 100%; padding:2%">
    <center>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{auth()->user()->email}}" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <div class="form-check">
        
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </center>
    </div>
@endsection