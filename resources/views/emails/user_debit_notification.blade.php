<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Withdrawal Notification</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #007bff;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: bold;
            border-radius: 8px 8px 0 0;
        }
        .content {
            padding: 20px;
            color: #333;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            font-size: 14px;
            color: #777;
            margin-top: 20px;
        }
        .btn {
            display: inline-block;
            background: #007bff;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .details {
            background: #f9f9f9;
            padding: 15px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        Withdrawal Confirmation - {{ env('APP_NAME') }}
    </div>

    <div class="content">
        <p>Dear <strong>{{ $name }}</strong>,</p>
        <p>Your withdrawal request has been successfully initiated. Below are the details:</p>

        <div class="details">
            <p><strong>Amount Withdrawn:</strong> ${{ $amount }}</p>
            <p><strong>Transaction ID:</strong> {{ $transactionId }}</p>
            <p><strong>Recipient Bank:</strong> {{ $recipient_bank }}</p>
            <p><strong>Account Holder:</strong> {{ $account_holder }}</p>
            <p><strong>Account Number:</strong> {{ $account_number }}</p>
            <p><strong>Status:</strong> {{ ucfirst($status) }}</p>
            <p><strong>Date:</strong> {{ $created_at }}</p>
        </div>

        <p>If you did not request this withdrawal, please contact our support team immediately.</p>

        <p style="text-align: center;">
            <a href="{{ route('login') }}" class="btn">Go to Dashboard</a>
        </p>
    </div>

    <div class="footer">
        &copy; {{ date('Y') }} {{ env('APP_NAME') }}. All rights reserved.
    </div>
</div>

</body>
</html>
