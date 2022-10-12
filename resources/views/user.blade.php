
         @extends('layouts.app')
         <head>
         <title>user</title>
         </head>
         @section('content')


    
    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

            <header class="card-header  bg-info ">
            <h4 class=" mt-2 text-center"> {{ ucwords("$user->name")}}  &nbsp {{ucwords( $user->lname)}}</h4>
        </header>

    <div class="card-body">
    <form method="Post" action="/allusers/{{$user->id}}/update">
    @csrf

    @method('PATCH')



    <!-- drop down title //required -->

                      <x-form.title current="{{$user->title}}"/>
    
    <!-- end of drop down  -->
    




    <!-- first name //require -->

                         <x-form.input name="name" label="First name" type="text" value="{{ $user->name }}"/>

    <!-- form-group end.//first name -->




    <!-- last name//required -->
      
                      <x-form.input name="lname" label="Last name" type="text" value="{{ $user->lname }}"/>
              
    <!-- form-group end.//last name  -->







    <!-- email address//required -->

                  <x-form.input name="email" label="Email address" type="email" value="{{ $user->email }}"/>
                 
    <!--  end of email address -->
      





    <!-- Password //required -->

                  <x-form.password  />
      
    <!-- form-group end.//Password with 8 character min -->



    <!-- confirm Password //required -->

                          <x-form.passconf  />
      
    <!-- form-group end.// Confirm password -->
                   



    <!--  Phone number -->

                 <x-form.input name="phone" label="Phone number" type="text" value="{{ $user->phone }}"/>
      
    <!--  End of phone number -->



    <!-- Drop down gender //required -->

                          <x-form.gender current="{{$user->gender}}"/>

    <!-- End of drop down gender -->



    <!--  Address// textarea -->

                           <x-form.text-area name="address" label="Address" content="{{ $user->address }}"/>

    <!--  End of address -->



    <!-- drop down all countries //we can use selectpicker countrypicker (github) but didn't run -->

                              <x-form.country current="{{$user->country}}"/>

    <!-- end of drop down all countries -->



      

    <!-- Date of birth// required -->

                                    <x-form.birth value="{{ $user->birthday }}" name="birthday" label="Date of birth"/>

    <!--  End of Date of birth -->





      
    <!--  Subscribe to newsletter // -->
    
                                    <x-form.checkbox value="{{ $user->subscribe }}" name="subscribe" label=" Subscribe to newsletter"/>
                
    <!--  End of  Subscribe to newsletter -->
      

   
      

    <!--  Create button -->        
      
                               <x-form.button label="Edit"  />          

    <!-- End of create button -->


                    </form>
</div>
</div>
</div>
</div>
</div>
@endsection
       

   
   