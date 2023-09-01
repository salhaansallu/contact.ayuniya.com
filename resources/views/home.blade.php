<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send us a message</title>
    @vite(['resources/scss/app.scss','resources/js/app.js'])
</head>
<body>
    <div class="site-wrap">
        <div class="inner-wrap">
            <form action="/messages" method="post">
                @csrf
                <h1 class="text-center">Contact Form</h1>
                <p class="text-center">Use this form to message us. Let us know your questions, suggesstion, and concerns by filling out the fields below.</p>
                <hr>
                <div class="row mt-5">
                    <div class="col-lg-6">
                        <div class="fname">Name <span>*</span></div>
                        <input type="text" placeholder="Full name" name="name" required>
                    </div>
                    <div class="col-lg-6">
                        <div class="fname">Phone number <span>*</span></div>
                        <input type="text" placeholder="Phone number" name="number" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="fname">Email <span>*</span></div>
                        <input type="text" placeholder="Email address" name="email" required>
                    </div>
                    <div class="col-lg-6">
                        <div class="fname">Company name <span>*</span></div>
                        <input type="text" placeholder="Company name" name="company" required>
                    </div>
                    <div class="col-lg-12">
                        <div class="fname">Service <span>*</span></div>
                        <select name="service" id="" required>
                            <option value="Develop a Software">Develop a Software</option>
                            <option value="Sell on Ayuniya store">Sell on Ayuniya store</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="fname">Message (Optional)</div>
                        <textarea name="message" id="" cols="30" rows="5"></textarea>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <button type="submit">Send Message</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
