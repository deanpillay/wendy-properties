@extends('layouts.master')

@section('body')
        <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
          <h1>Contact Us</h1>
          <br /><br />
          <form method="POST" action="/listings">

          {!! csrf_field() !!}

            <div class="form-group">
              <label for="firstname">firstname</label>
              <input type="text" class="form-control" id="firstname" name="firstname"  placeholder="Enter your firstname">
              {{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <textarea type="text" class="form-control" id="lastname" name="lastname"  placeholder="Enter your lastname"></textarea>
              {{ ($errors->has('lastname')) ? $errors->first('lastname') : '' }}
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
              {{ ($errors->has('email')) ? $errors->first('email') : '' }}
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea type="text" class="form-control" id="message" name="message"  placeholder="Enter number of bedrooms"></textarea>
              {{ ($errors->has('message')) ? $errors->first('message') : '' }}
            </div>             
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
        </div>
      </div>
    </div>

@endsection