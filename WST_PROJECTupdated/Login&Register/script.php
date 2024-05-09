<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script type="text/javascript">
    function submitData() {
        $(document).ready(function () {
            var username = $('#username').val();
            var email = $('#email').val();
            var password = $('#password').val();
            var confirmPassword = $('#confirmpassword').val();
            var action = $('#action').val();

            if (action === "register") {
                if (password !== confirmPassword) {
                    alert("Password and Confirm Password do not match");
                    return;
                }
            }

            var data = {
                username: username,
                email: email,
                password: password,
                action: action
            };

            $.ajax({
                url: "database.php",
                type: "post",
                data: data,
                success: function (response) {
                    alert(response);
                    if (response == "Login Successful") {
                        window.location.reload();
                    }
                }
            });
        });
    }
</script>
