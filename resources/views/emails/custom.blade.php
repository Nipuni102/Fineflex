<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pay Your Fine Fee</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background-color: #08C1CD;
            color: #ffffff;
            text-align: center;
            padding: 20px 0;
        }
        .email-header img {
            width: 120px;
            margin-bottom: 10px;
        }
        .email-content {
            padding: 20px;
            line-height: 1.6;
            color: #333333;
        }
        .email-footer {
            background-color: #f4f4f9;
            color: #888888;
            text-align: center;
            font-size: 14px;
            padding: 10px;
        }
        .email-footer a {
            color: #08C1CD;
            text-decoration: none;
        }
        .cta-button {
            display: inline-block;
            background-color: #08C1CD;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 25px;
            border-radius: 4px;
            font-weight: bold;
            margin-top: 20px;
            text-align: center;
        }
        .cta-button:hover {
            background-color: #08C1CD;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
          <!--  <img src="https://via.placeholder.com/120" alt="Logo" />
             <h1>{{ $details['title'] }}</h1> -->
        </div>

        <!-- Content -->
        <div class="email-content">
            <p>Dear {{ $details['recipient_name'] ?? 'Valued Customer' }},</p>
            <p>We hope this message finds you well. This is a reminder to pay your outstanding fine fee.</p>
            <p><strong>Details of your payment:</strong></p>
            <!-- <ul>
                <li><strong>Amount:</strong> {{ $details['amount'] ?? '$0.00' }}</li>
                <li><strong>Due Date:</strong> {{ $details['due_date'] ?? 'N/A' }}</li>
            </ul> -->
            <p>To make the payment, please click the button below:</p>
            <!-- Call-to-action -->
            <a href="{{ route('pay') }}" class="cta-button">Pay Your Fine Fee</a>
            <p>If you have any questions or require assistance, feel free to contact us.</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Your Company. All rights reserved.</p>
            <p>
                <a href="#">Unsubscribe</a> | 
                <a href="#">Privacy Policy</a>
            </p>
        </div>
    </div>
</body>
</html>
