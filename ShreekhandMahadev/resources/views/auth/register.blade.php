@extends('layout.app')

@section('content')
<div class="col-12 col-lg-12 col-xl-12" id="register">
    <div class="register-logo">
      <p class="login-box-msg">Register a new membership</p>
    </div>
    <form action="{{ route('save-register-user') }}" method="post" onsubmit="return validateForm()" class="custom-form contact-form bg-white shadow-lg">
        @csrf
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-4">
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Full name" id="name" name="name">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>
              <div style="margin: 5px;">
                <span id="nameError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('name')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror


              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Father/Husband Name" id="fatherOrHusband" name="fatherOrHusband">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                  <div style="color: red;">
                    <span id="nameError"></span>
                  </div>
                </div>
              </div>

              <div style="margin: 5px;">
                <span id="fatherOrHusbandError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>
              @error('fatherOrHusband')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror


              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Father/Husband Contact Number"  id="fatherOrHusbandContact" name="fatherOrHusbandContact">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              
              <div style="margin: 5px;">
                <span id="fhcError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('fatherOrHusbandContact')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="Date Of Birth" id="date_of_birth" name="date_of_birth">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div style="margin: 5px;">
                <span id="dobError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('date_of_birth')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror


              <div class="input-group mb-3">
                <input type="email" class="form-control" placeholder="Email" id="email" name="email">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div style="margin: 5px;">
                <span id="emailError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('email')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="number" class="form-control" placeholder="Mobile Number" id="number" name="number">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
              </div>
              <div style="margin: 5px;">
                <span id="emailError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('number')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <select  class="form-control" placeholder="Select Gender" id="gender" name="gender">
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value=="female">Female</option>
                  <option value=="others">Other</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-gender"></span>
                  </div>
                </div>

              </div>
              <div style="margin: 5px;">
                <span id="genderError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('gender')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <select  class="form-control"  id="nationality" name="nationality">
                  <option value="">Select Nationality</option>
                  <option value="male">Indian</option>
                  <option value="male">Other Country</option>
                </select>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-gender"></span>
                  </div>
                </div>

              </div>
              <div style="margin: 5px;">
                <span id="nationalityError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('nationality')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              
          </div>

          <div class="col-12 col-lg-9 col-xl-4">

            <div class="register-logo ">
              <p class="login-box-msg p-4"></p>
            </div>
            
            <div class="input-group mb-3">
              <select  class="form-control" placeholder="Select State" id="state" name="state_id">
                  <option value="">Select State</option>
                @foreach ($state as $st)
                  <option value="{{ $st->id }}">{{ $st->name }}</option>
                @endforeach
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div style="margin: 5px;">
              <span id="stateError"  style="color: red; font-size:15px; font-weight:700;" ></span>
            </div>

            @error('state_id')
            <div class="alert alert-danger" role="alert">
                <small>
                    <strong>{{ $message }}</strong>
                </small>
            </div>
            @enderror

            <div class="input-group mb-3">
              <select  class="form-control" placeholder="Select State" id="district" name="district_id">
                  <option value="male">Select Distrtict</option>
              </select>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <div style="margin: 5px;">
              <span id="districtError"  style="color: red; font-size:15px; font-weight:700;" ></span>
            </div>

            
            @error('district_id')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="date" class="form-control" placeholder="Enter Date Of reporting at Camp.." id="dateOfReporting" name="dateOfReporting">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              
            <div style="margin: 5px;">
              <span id="dateOfReportingError"  style="color: red; font-size:15px; font-weight:700;" ></span>
            </div>

              @error('dateOfReporting')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Name Of Near Relative"  id="nameOfRelative" name="nameOfRelative">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

                  
            <div style="margin: 5px;">
              <span id="nameOfRelativeError"  style="color: red; font-size:15px; font-weight:700;" ></span>
            </div>

              @error('nameOfRelative')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Enter Your Aadhar Card Number" id="addharNumber" name="addharNumber">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div style="margin: 5px;">
                <span id="addharNumberError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>


              
              @error('addharNumber')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Contact Number Near Relative" id="ContactOfNearRelative" name="ContactOfNearRelative">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-user"></span>
                  </div>
                </div>
              </div>

              <div style="margin: 5px;">
                <span id="ContactOfNearRelativeError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>
  
              
              @error('ContactOfNearRelative')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

              <div class="input-group mb-3">
                <input type="file" class="form-control" placeholder="Upload Id Proof" id="idProof" name="idProof">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                  </div>
                </div>
              </div>

              <div class="input-group mb-3">
                <textarea type="text" class="form-control" placeholder="Address" id="address" name="address"></textarea>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-home"></span>
                  </div>
                </div>
              </div>
  
              <div style="margin: 5px;">
                <span id="addressError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>
  
              @error('address')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror


              <div style="margin: 5px;">
                <span id="idProofError"  style="color: red; font-size:15px; font-weight:700;" ></span>
              </div>

              @error('idProof')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

             

              <div class="row">
                <div class="col-8">
                  <div class="icheck-primary">
                    <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                    <label for="agreeTerms">
                      <a href="#" style="font-size: 20px; font-weight:bold;"> I agree to the terms</a>
                    </label>
                  </div>
                </div>

                <div style="margin: 5px;">
                  <span id="agreeTermsError"  style="color: red; font-size:15px; font-weight:700;" ></span>
                </div>
  

                  
              @error('terms')
              <div class="alert alert-danger" role="alert">
                  <small>
                      <strong>{{ $message }}</strong>
                  </small>
              </div>
              @enderror

                <!-- /.col -->
                <div class="col-4">
                  <button type="submit" class="btn btn-primary btn-block">Register</button>
                  {{-- <input type="submit" value="Register" class="submit" id="submit" name="submit" /> --}}
                </div>
                <!-- /.col -->
              </div>
        </div>
      </form>
  </div>

  <script >
    $.ajaxSetup({
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $(document).ready(function () {
        $('#state').on('change',function(e) {
            var state_id = e.target.value;
            console.log(state_id);
            $.ajax({
                url:"{{ route('ajax-district') }}",
                // type:"POST",
                data: {
                  state_id: state_id
                },
                success:function (data) {
                    $('#district').empty();
                    $.each(data.districts[0].districts,function(index,districts){
                        $('#district').append('<option value="'+districts.id+'">'+districts.name+'</option>');
                    })
                }
            })
        });
    });



</script>
<script defer src="{{ asset('/assets/Auth/registerFormValidation.js') }}"></script>
@endsection
