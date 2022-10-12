
 <div class="form-row align-items-center">
            <label for="password-confirm">Confirm password</label>
            <div class="d-flex flex-wrap align-items-center">
            <input id="password_confirm" type="password" class="form-control" name="password_confirmation" autocomplete="password_confirm" >
            <i class="bi bi-eye-slash " style="margin-left:-30px;" id="togglePassword1"></i>

            
         

            <script>
        const togglePassword1 = document.querySelector("#togglePassword1");
        const password1= document.querySelector("#password_confirm");

        togglePassword1.addEventListener("click", function () {
            // toggle the type attribute
            const type = password1.getAttribute("type") === "password" ? "text" : "password";
            password1.setAttribute("type", type);
            
            // toggle the icon
            this.classList.toggle("bi-eye");
        });
        </script>
</div>
</div>
