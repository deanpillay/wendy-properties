@extends('layouts.admin.adminmaster')

@section('body')
        <div class="col-sm-9 offset-sm-3 col-md-10 offset-md-2 main">
          <h1>Add an Agent</h1>
          <br /><br />
          <form method="POST" action="/agents">

          {!! csrf_field() !!}

            <div class="form-group">
              <label for="profile_pic">Upload a profile picture</label>
              <input type="file" class="form-control-file" id="profile_pic" name="profile_pic" aria-describedby="fileHelp">
              <small id="fileHelp" class="form-text text-muted">Please upload an image format types JPEG, PNG of GIF, not exceeding 20kb file size</small>
              {{ ($errors->has('profile_pic')) ? $errors->first('profile_pic') : '' }}
            </div>
            <div class="form-group">
              <label for="firstname">Firstname</label>
              <input type="text" class="form-control" id="firstname" name="firstname" aria-describedby="emailHelp" placeholder="Enter your firstname">
              {{ ($errors->has('firstname')) ? $errors->first('firstname') : '' }}
            </div>
            <div class="form-group">
              <label for="lastname">Lastname</label>
              <input type="text" class="form-control" id="lastname" name="lastname" aria-describedby="emailHelp" placeholder="Enter your lastname">
              {{ ($errors->has('lastname')) ? $errors->first('lastname') : '' }}
            </div>
            <div class="form-group">
              <label for="cellphone">Cellphone number</label>
              <input type="number" class="form-control" id="cellphone" name="cellphone" aria-describedby="emailHelp" placeholder="Enter cellphone number">
              {{ ($errors->has('cellphone')) ? $errors->first('cellphone') : '' }}
            </div>
            <div class="form-group">
              <label for="email">Email address</label>
              <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              {{ ($errors->has('email')) ? $errors->first('email') : '' }}
            </div>            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
          
        </div>
      </div>
    </div>

@endsection