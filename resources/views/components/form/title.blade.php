 @props(['current'])
 
 <div class="form-row "  >
                
            
                <label  for="title">Title </label> 
            <select class="form-select "  name="title" id="title" required>
            @php
$titles = array('Ms', 'Mr', 'Mrs');
$current_title = "$current";

foreach($titles as $title) {
    if($title == $current_title) {
        echo '<option value='.$title.' selected>'.$title.'</option>';
    } else {
        echo '<option value='.$title.'>'.$title.'</option>';
    }
}
@endphp
        </select>
        
       
          </div>