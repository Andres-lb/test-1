@props(['value','name','label'])



 <div class="form-row">
 <div class="d-flex flex-wrap align-items-center">
        <label for="{{$name}}">{{ $label }}</label>
        <input type="text" id="{{$name}}" name="{{$name}}" class="form-control" value="{{ $value }}"  placeholder = "dd/mm/yy"  required>
        <i for ="{{$name}}" class="glyphicon glyphicon-calendar" style="margin-left:-30px" id="calendar"></i>
</input>
        <script>
            $( function() {
                $( "#{{$name}}" ).datepicker({
            dateFormat: "dd/mm/yy",
            yearRange: "1925:2023",
            changeMonth: true,
            changeYear: true,
            });
            });
           
                
            
           
  

        </script>
        </div>
          </div>

         
        