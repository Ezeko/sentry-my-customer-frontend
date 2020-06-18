<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link rel="stylesheet" href="{{asset('/css/sign-up.css')}}" />
    <title>MyCustomer - Register</title>
</head>
<body>
<header>
    <nav>
        <h1 class="logo">MyCustomer</h1>
    </nav>
</header>
<main>
    <div class="container">
        <h1>Register</h1>
        <hr />
        <form class="form">
            <div class="form-control">
                <input type="text" name="name" id="name" placeholder="Full name" />
                <i class="fa fa-user-o"></i>
            </div>
            <div class="form-control">
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="Email address"
                />
                <i class="fa fa-envelope-o"></i>
            </div>
            <div class="form-control">
                <input type="tel" name="tel" id="tel" placeholder="Phone number" />
                <i class="fa fa-mobile"></i>
            </div>
            <div class="form-control">
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Password"
                />
                <i class="fa fa-lock"></i>
                <i class="fa fa-eye" id="shown"></i>
                <i class="fa fa-eye-slash" id="hidden"></i>
            </div>
            <div class="form-control">
                <input
                    type="password"
                    name="password-repeat"
                    id="password-repeat"
                    placeholder="Enter password again"
                />
                <i class="fa fa-lock"></i>
                <i class="fa fa-eye" id="shown2"></i>
                <i class="fa fa-eye-slash" id="hidden2"></i>
            </div>
            <div class="terms">
                <input type="checkbox" name="checkbox" id="checkbox" />
                <p>I agree to MyCustomer's <a href="/terms">Terms of service</a></p>
            </div>
            <button class="btn" type="submit">Register</button>
        </form>
    </div>
</main>
<footer>
    <ul>
        <li><a href="/contact">Contact</a></li>
        <li><a href="/contact">Privacy policy</a></li>
        <li><a href="/contact">Terms of use</a></li>
        <li><a href="/contact">Cookie policy</a></li>
    </ul>
</footer>
<script>
    const password = document.getElementById("password");
    const passwordRepeat = document.getElementById("password-repeat");
    const show = document.getElementById("shown");
    const hide = document.getElementById("hidden");
    const show2 = document.getElementById("shown2");
    const hide2 = document.getElementById("hidden2");
    function showPassword() {
        if (password.type === "password") {
            password.type = "text";
            hide.style.display = "none";
            show.style.display = "block";
        } else {
            password.type = "password";
            show.style.display = "none";
            hide.style.display = "block";
        }
    }
    function showPassword2() {
        if (passwordRepeat.type === "password") {
            passwordRepeat.type = "text";
            hide2.style.display = "none";
            show2.style.display = "block";
        } else {
            passwordRepeat.type = "password";
            show2.style.display = "none";
            hide2.style.display = "block";
        }
    }

    hide.addEventListener("click", () => showPassword());
    show.addEventListener("click", () => showPassword());
    hide2.addEventListener("click", () => showPassword2());
    show2.addEventListener("click", () => showPassword2());
</script>
</body>
</html>
