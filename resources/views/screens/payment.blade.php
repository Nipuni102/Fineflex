<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Smarter, Drive Safer</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-image: url('img/background-image.jpeg');
  background-size: cover;
  background-position: center;
        }
        .logo {
            width: 160px;
            height: 160px;
            margin-top: 10px;
            margin-right: 20px;
        }
        .topic {
            text-align: center;
            margin-top: 150px;
            font-size: 24px;
            font-weight: bold;
            color: #337ab7;
        }
        .card {
            margin-top: 20px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #f7f7f7;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .card-body {
            padding: 20px;
        }
        .card-footer {
            background-color: #f7f7f7;
            padding: 10px;
            border-top: 1px solid #ddd;
        }
        .fine-details {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #B0EBEF;
        }
        .payment-methods {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            background-color: #B0EBEF;
        }
        .payment-method {
            margin-bottom: 20px;
        }
        .payment-method img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
        }
        .payment-method input[type="radio"] {
            margin-right: 10px;
        }
        .pay-button {
            background-color: #4CAF50;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .pay-button:hover {
            background-color: #3e8e41;
        }
        .overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(255, 255, 255, 0.5); /* adjust the opacity to your liking */
    z-index: -1;
}
    </style>
</head>
<body>
<div class="overlay"></div>
    <div class="container">
        
        <div class="row">
            <div class="col-md-12 text-center">
                
                <h2 class="topic">Pay Smarter, Drive Safer</h2>
            </div>
        </div>
       
        <div class="row">
            <div class="col-md-6">
                <div class="card fine-details">
                    <div class="card-header">
                        <h5>Fine Details</h5>
                    </div>
                    <div class="card-body">
                        <ul>
                            <li>Name: John Doe</li>
                            <li>Age: 23</li>
                            <li>Address: 123 Main St</li>
                            <li>Licence Number: ABC123</li>
                            <li>Vehicle Number: XYZ123</li>
                            <li>Date: 2022-01-01</li>
                            <li>Violation: Speeding</li>
                            <li>Total Fine Payment: $100</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card payment-methods">
                    <div class="card-header">
                        <h5>Payment Methods</h5>
                    </div>
                    <div class="card-body">
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="credit-card">
                            <i class="fa fa-credit-card" aria-hidden="true"></i>
                            <span>Credit/Debit Cards</span><br>
                            <small>Pay with your Credit / Debit Card</small>
                        </div>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="bank-transfer">
                            <i class="fa fa-university" aria-hidden="true"></i>
                            <span>Direct Bank Transfer</span><br>
                            <small>Make payment directly through bank account</small>
                        </div>
                       
                        <div class="payment-method">
                        <input type="radio" name="payment-method" id="other-payments">
                        <i class="fa fa-globe" aria-hidden="true"></i>
                            <span>Other Payment Methods</span><br>
                            <small>Make payment through Gpay, Paypal, Paytm etc.</small>
                        </div>
                       
                    </div>
                    
                </div> <br>
                <button class="pay-button">Pay Now</button>
            </div>
        </div>
    </div>
</body>
</html>