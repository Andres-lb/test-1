
<div class="form-row" style="">
        
        <label for="password">Password </label>   
        <div class="d-flex flex-wrap align-items-center">

          <input type="password" style="" class="form-control @error('password') is-invalid @enderror "  minlength="8" id="password" name="password" autocomplete="new-password" >
          <i class="bi bi-eye-slash " style="margin-left:-30px; " id="togglePassword"></i>
</input>
          <script>
        const togglePassword = document.querySelector("#togglePassword");
        const password = document.querySelector("#password");

        togglePassword.addEventListener("click", function () {
            // toggle the type attribute
            const type = password.getAttribute("type") === "password" ? "text" : "password";
            password.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
        </script>
          @error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror
      </div>
    </div> 