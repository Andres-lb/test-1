@props(['current'])

<div class="form-row  "  >
                  
              
        <label  for="gender">Gender</label> 
      <select class="form-select " name="gender" id="gender" required>
        
      @php
$genders = array('Prefer not to say','Male', 'Female', 'Other');
$current_gender = "$current";

foreach($genders as $gender) {
    if($gender == $current_gender) {
        echo '<option selected>'.$gender.'</option>';
    } else {
        echo '<option>'.$gender.'</option>';
    }
}
@endphp
      </select>
</div>
      