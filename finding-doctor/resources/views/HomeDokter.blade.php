<!DOCTYPE html>
<html lang="en">
</div>
<button type="onoff" class="available" onclick="onoff(this)" ><div>status</div></button>
</form>
<script>
var buttonstate=0;
function onoff(element)
{
  buttonstate= 1 - buttonstate;
  var blabel, bstyle, bcolor;
  if(buttonstate)
  {
    blabel="available";
    bstyle="green";
    bcolor="lightgreen";
  }
  else
  {
    blabel="not available";
    bstyle="lightgray";
    bcolor="gray";
  }
  var child=element.firstChild;
  child.style.background=bstyle;
  child.style.color=bcolor;
  child.innerHTML=blabel;
}</script>



<form action="/HomeDokter/profile" id="contact_form" method="post" enctype="multipart/form-data">
    @csrf
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5">
                    @if(auth('doctor')->user()->picture)
                    <img class="rounded-circle mt-5 mb-4" width="150px" src="{{ asset('storage/'. auth('doctor')->user()->picture) }}">
                    @else
                        <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
                    @endif
                    <input type="file" name="picture" class="form-control" placeholder="enter first name" />
                    <span class="font-weight-bold"></span><span class="text-black-50"></span><span> </span></div>
                <div class="text-center">
                    <a class="btn btn-primary profile-button" href="/HomeDokter/logout">Log Out</a>
                </div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                <div class="row mt-2">

                <ul class="form"> 
                    
                <div class="col-md-12"  style="margin-left: -25px;">
                    <input type="hidden" name="id" value="{{ auth('doctor')->user()->id }}">
            <label>First Name</label>
            <input type="text" name="first_name" id="firstname" value="{{ auth('doctor')->user()->first_name }}" class="form-control" placeholder="enter first name"  onblur="if(this.value == '') { this.value = 'First Name'; }" onfocus="if(this.value == 'First Name') { this.value = ''; }" />
</div>

                    <div class="col-md-12" style="margin-left: -25px;">
            <label>Last Name</label>
            <input type="text" name="last_name" id="lastname" value="{{ auth('doctor')->user()->last_name }}" class="form-control" placeholder="enter last name"  onblur="if(this.value == '') { this.value = 'Last Name'; }" onfocus="if(this.value == 'Last Name') { this.value = ''; }" />
</div>
</div>

                    <div class="col-md-12">
            <label>Phone Number</label>
            <input type="text" name="phone" id="phone" value="{{ auth('doctor')->user()->phone }}" class="form-control" 
            placeholder="enter phone number"
            onblur="if(this.value == '') { this.value = 'Phone Number'; }" onfocus="if(this.value == 'Phone Number') { this.value = ''; }" />
        </div>

        <div class="col-md-12">
            <label>Email</label>
            <input type="text" name="email" id="email" value="{{ auth('doctor')->user()->email }}" class="form-control" placeholder="enter email"  onblur="if(this.value == '') { this.value = 'email'; }" onfocus="if(this.value == 'Email') { this.value = ''; }" />
</div>




        <div class="col-md-12">
            <label>Address line</label>
            <input type="text" name="address" id="address" value="{{ auth('doctor')->user()->address }}" class="form-control" placeholder="enter address"  onblur="if(this.value == '') { this.value = 'Address line'; }" onfocus="if(this.value == 'Address line') { this.value = ''; }" />
</div>

        <div class="col-md-12">
            <label>Post code</label>
            <input type="text" name="post_code" id="post" value="{{ auth('doctor')->user()->post_code }}" class="form-control" 
            placeholder="enter post code"
            onblur="if(this.value == '') { this.value = 'Post code'; }" onfocus="if(this.value == 'Post code') { this.value = ''; }" />
        </div>
                    
                


            <div class="mt-5 text-center">
                
                <button class="btn btn-primary profile-button" 
                type="submit">Save Profile</button>
            </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience">
                    <span>Edit Experience</span>
                    <span class="border px-3 p-1 add-experience">
                        <i class="fa fa-plus"></i>&nbsp;Experience
                    </span>
                </div><br>
                <div class="col-md-12">
                    <label class="labels">Experience in Medicine</label>
                    <input type="text" class="form-control" placeholder="experience" name="experience" value="{{ auth('doctor')->user()->experience }}">
                </div> <br>
                <div class="col-md-12">
                    <label class="labels">Additional Details</label>
                    <input type="text" class="form-control" placeholder="additional details" name="additional" value="{{ auth('doctor')->user()->additional }}">
                </div>
            </div>
        </div>

        </form>

              <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600|Nunito:600,700,800,900" rel="stylesheet"> 
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        <style>
            * {
                font-family: 'Poppins';
            }
        </style>
<!-- Bootstrap CSS File -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="vendor/animate/animate.min.css" rel="stylesheet">
<link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="Css/hover-HomeDokter.css" rel="stylesheet">
<link href="Css/HomeDokter.css" rel="stylesheet">
</head>

<body>

    {{-- <form action="/HomeDokter/logout" method="post">
        @csrf
        <button type="submit" name="logout" style="margin-left: 4px; outline: none; border: none; background: none;">Logout
        </button>
      </form> --}}

</body>
    
        </div>
    </div>
</div>
</div>
</div>

@include("sweetalert::alert")
