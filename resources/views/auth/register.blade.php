@extends('layouts.app')
<head>
         <title>Create user</title>
         </head>


@section('content')




<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <header class="card-header  bg-info ">
            
            <h4 class=" mt-2 text-center">Create user</h4>
        </header>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

             <!-- drop down title //required -->

             <x-form.title current="{{old('title')}}"/>

             <!-- end of drop down title // -->
 



             <!-- First name //required -->

             <x-form.input name="name" label="First name" type="text" value="{{ old('name') }}"/>
                   
             <!-- form-group end.//first name -->





              <!-- last name//required -->
      
              <x-form.input name="lname" label="Last name" type="text" value="{{ old('lname') }}"/>
      
              <!-- form-group end.//last name -->




              <!-- email address//required -->

              <x-form.input name="email" label="Email address" type="email" value="{{ old('email') }}"/>
              
              <!--  end of email address -->
      





             <!-- Password //required -->

             <x-form.password  />
    
             <!-- form-group end.//Password with 8 character min-->







             <!--confirm Password //required -->

             <x-form.passconf  />
      
             <!-- form-group end.// Confirm password-->
                  

            
  
             <!--  Phone number -->

               <x-form.input name="phone" label="Phone number" type="text" value="{{  old('phone') }}"/>
      
             <!--  End of phone number -->
             
    




             <!-- Drop down gender //required -->

             <x-form.gender current="{{ old('gender') }}"/>

             <!-- End of drop down gender -->









             <!--  Address// textarea -->

             <x-form.text-area name="address" label="Address" content="{{ old('address')  }}"/>


             <!-- end of address -->







             <!-- drop down all countries //we can use selectpicker countrypicker (github) but didn't run -->

             <x-form.country current="{{ old('country') }}"/>


             <!-- end of drop down all countries -->
      









             <!-- Date of birth// required -->

             
             <x-form.birth value="{{ old('birthday') }}" name="birthday" label="Date of birth"/>
             

             <!--  End of Date of birth -->
      









             <!--  Subscribe to newsletter // -->

             <x-form.checkbox value="{{ old('subscribe') }}" name="subscribe" label=" Subscribe to newsletter"/>
      
             <!--  End of  Subscribe to newsletter -->
      





             <!--  Accept terms//required -->
             <x-form.checkbox value="{{ old('a-terms') }}" name="a-terms" label="Accept terms"/>

             <!--  End of Accept terms-->
      



             



             <!--  Create button -->        
      
             <x-form.button label=" Create " />  

             <!-- End of create button -->


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
