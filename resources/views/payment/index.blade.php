<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Razorpay</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <style>
        .container {
            width: 70vw;
            margin-inline: auto;
            margin-top: 50px;
        }
    </style>
</head>

<body>

    <div class="container ">
        <form action="/payment/pay" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" id="name" aria-describedby="emailHelp"
                    placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="amount" class="form-label">Amount</label>
                <input type="number" class="form-control" id="amount" name="Amount" placeholder="Enter Amount">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" name="Email"
                    aria-describedby="emailHelp" placeholder="Enter Mail">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>







    @if (Session::has('data'))
        <div class="container tex-center mx-auto">
            <form action="/payment/paycheck" method="POST" class="text-center mx-auto mt-5">
                <script src="https://checkout.razorpay.com/v1/checkout.js" data-key="rzp_test_CcRYorXwUKnx5y"
                    data-amount="{{ Session::get('data.amount') }}" data-currency="INR"
                    data-order_id="{{ Session::get('data.order_id') }}" data-buttontext="Pay with Razorpay" data-name="Coffee"
                    data-description="Test transaction" data-theme.color="#F37254"></script>
                <input type="hidden" custom="Hidden Element" name="hidden">
            </form>

        </div>
    @endif












    {{-- 
<form action="https://www.example.com/payment/success/" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="YOUR_KEY_ID"  // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="29935" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="order_CgmcjRh9ti2lP7"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay with Razorpay"
    data-name="Acme Corp"
    data-description="A Wild Sheep Chase is the third novel by Japanese author Haruki Murakami"
    data-image="https://example.com/your_logo.jpg"
    data-prefill.name="Gaurav Kumar"
    data-prefill.email="gaurav.kumar@example.com"
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden"/>
</form> --}}




</body>

</html>