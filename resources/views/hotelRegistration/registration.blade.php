@extends('layouts.userprofileadmin')
<link rel="stylesheet" href="">
@section('content')

        <div class ="container">
        <h3>Hotel Reservation</h3>
            <div class="container" style="margin-top:100px">

            <div class="row">
               
                <div class="col-md-10 ">
                <!-- Material form register -->
        <div class="card">

            <h5 class="card-header info-color white-text text-center py-4">
                <strong>Sign up</strong>
            </h5>

                <!-- Form -->
                <form class="text-center" style="color: #757575;"  method="POST" action="/boatregistration">
                    @csrf
                    <div class="form-row">
                        <div class="col">
                            <!-- Hotel Name -->
                            <div class="md-form">
                                <input type="text" id="hotelName" class="form-control" name="hname">
                                <label for="HotelName">Name of the Hotel</label>
                            </div>
                        </div>
                        <div class="col">
                            <!-- Hotel ID -->
                            <div class="md-form">
                                <input type="text" id="hotelID" class="form-control" name="ID">
                                <label for="Hotel ID">Hotel ID</label>
                            </div>

                            <!-- Hotel Owner ID -->
                            <div class="md-form">
                                <input type="text" id="OwnerlID" class="form-control" name="ownerID">
                                <label for="Hotel ID">Owner ID</label>
                                </div>

                        <div class="col">
                            <div class="md-form">
                                <input type="text" id="Regno" class="form-control" name="regno">
                                <label for="Regno">Government Registration number</label>
                            </div>

                        </div>
                    </div>

                    {{-- boat type --}}
                    <select class="mdb-select md-form form-control" name="btype">
                        <option value="" disabled selected>Choose your boat type</option>
                        <option value="1">Option 1</option>
                        <option value="2">Option 2</option>
                        <option value="3">Option 3</option>
                    </select>

                    {{-- location --}}
                    
                <!-- Photo location -->
                 <!-- Photo ID -->
                    
                
                
                    <!-- Phone number -->
                    <div class="md-form">
                        <input type="password" id="Phone" class="form-control" aria-describedby="materialRegisterFormPhoneHelpBlock" name="tp">
                        <label for="Phone">Phone number</label>
                        
                    </div>

                    
            

                    <!-- Sign up button -->
                <input type="submit" class="btn btn-outline-info btn-rounded btn-block my-4 waves-effect z-depth-0">

                    <!-- Social register -->
                    <p>or sign up with:</p>

                    <a type="button" class="btn-floating btn-fb btn-sm">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a type="button" class="btn-floating btn-tw btn-sm">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a type="button" class="btn-floating btn-li btn-sm">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a type="button" class="btn-floating btn-git btn-sm">
                        <i class="fa fa-github"></i>
                    </a>

                    <hr>

                    <!-- Terms of service -->
                    <p>By clicking
                        <em>Sign up</em> you agree to our
                        <a href="" target="_blank">terms of service</a> and
                        <a href="" target="_blank">terms of service</a>. </p>

                </form>
                <!-- Form -->

            </div>

        </div>
        <!-- Material form register -->
                </div>
                    <div class="col-md-2">
                    </div>
                    
            </div>   
        
            </div>
        </div>


        <div>
            <!-- Material form register -->

        @endsection()
        <script src="js/formvalidation.js"></script>
        <script>


        </script>