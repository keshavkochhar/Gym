<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dark Gothic Payment Page</title>
  <!-- Include Stripe.js -->
  <script src="https://js.stripe.com/v3/"></script>
  <style>
    body {
      background-color: #1b1b1b;
      color: #dcdcdc;
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
    }

    h2, h3 {
      color: #ff7f50;
    }

    #user-details-form, #payment-form, #thank-you-popup, .payment-mode-content {
      max-width: 600px;
      margin: 50px auto;
      padding: 20px;
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
    }

    label, input, select, button {
      margin: 10px 0;
      display: block;
      width: 100%;
    }

    input, select, button {
      padding: 10px;
      border: none;
      border-radius: 5px;
      background-color: #555;
      color: #dcdcdc;
    }

    button {
      cursor: pointer;
      transition: background-color 0.3s;
    }

    button:hover {
      background-color: #ff7f50;
    }

    #card-element {
      margin-top: 20px;
    }

    #thank-you-popup {
      text-align: center;
    }

    #payment-method {
      margin-bottom: 20px;
    }

    .payment-mode-content {
      display: none;
    }

    .payment-mode-content.active {
      display: block;
    }

    .card-details {
      display: none;
    }

    .loading-container {
      text-align: center;
      display: none;
    }

    .loading-bar {
      margin: 20px 0;
      height: 20px;
      width: 100%;
      background-color: #555;
      position: relative;
    }

    .loading-progress {
      height: 100%;
      width: 0;
      background-color: #ff7f50;
      position: absolute;
    }

    #loading-text {
      margin-top: 10px;
    }

    #payment-success-message {
      display: none;
      text-align: center;
    }
  </style>
</head>
<body>
  <!-- Include the user details form -->
 <form method="post" action="process2.php">
    <label for="name">Name:</label>
    <input type="text" name="name" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <label for="address">Address:</label>
    <input type="text" name="address" required><br>

    <label for="phone">Phone:</label>
    <input type="tel" name="phone" required><br>

    <label for="payment_method">Payment Method:</label>
    <select name="payment_method" id="payment-method">
        <option value="upi">UPI</option>
        <option value="paytm">Paytm</option>
        <option value="debit-card">Debit Card</option>
        <option value="credit-card">Credit Card</option>
        <option value="paypal">PayPal</option>
    </select><br>

    <!-- Payment content -->
    <div id="payment-form" style="display: none;">
        <div id="upi-content" class="payment-mode-content">
            <h3>UPI Payment Details</h3>
            <p>Please make the payment to the following UPI ID:</p>
            <p>example@upi</p>
        </div>

        <div id="paytm-content" class="payment-mode-content">
            <h3>Paytm Payment Details</h3>
            <p>Scan the QR code with your Paytm app to make the payment:</p>
            <img src="paytm-qr-code.png" alt="Paytm QR Code">
        </div>

        <div id="debit-card-content" class="payment-mode-content">
            <!-- Debit Card details go here -->
        </div>

        <div id="credit-card-content" class="payment-mode-content">
            <!-- Credit Card details go here -->
        </div>

        <div id="paypal-content" class="payment-mode-content">
            <!-- PayPal details go here -->
        </div>

        <!-- Loading and success messages -->
        <div class="loading-container">
            <div class="loading-bar">
                <div class="loading-progress" id="loading-progress"></div>
            </div>
            <p id="loading-text">Processing...</p>
        </div>

        <div id="payment-success-message">
            <h2>Payment Successful</h2>
            <p>Thank you for choosing this plan!</p>
        </div>
    </div>

    <input type="submit" value="Submit">
</form>

  <script>
    var selectedPaymentMethod;
    var userDetails = {};

    // Function to display the payment form
    function showPaymentForm() {
      document.getElementById('user-details-form').style.display = 'none';
      document.getElementById('payment-form').style.display = 'block';
    }

    // Function to display the thank you message
    function showThankYouMessage() {
      document.getElementById('thank-you-popup').style.display = 'block';
    }

    // Function to show payment mode content based on the selected method
    function showPaymentModeContent() {
      var selectedMode = document.getElementById('payment-method').value;
      var paymentModeContent = document.querySelectorAll('.payment-mode-content');
      
      for (var i = 0; i < paymentModeContent.length; i++) {
        paymentModeContent[i].classList.remove('active');
      }

      document.getElementById(selectedMode + '-content').classList.add('active');

      // Display card details input for card payments
      if (selectedMode === 'debit-card' || selectedMode === 'credit-card') {
        document.querySelector('.card-details').style.display = 'block';
      } else {
        document.querySelector('.card-details').style.display = 'none';
      }
    }

    // Proceed to payment method selection when user details are entered
    document.getElementById('proceed-to-payment').addEventListener('click', function() {
      userDetails.name = document.getElementById('name').value;
      userDetails.email = document.getElementById('email').value;
      userDetails.address = document.getElementById('address').value;
      userDetails.phone = document.getElementById('phone').value;

      showPaymentForm();
      showPaymentModeContent();
    });

    // Create a PaymentIntent on the server when the submit button is clicked
    document.getElementById('debit-card-button').addEventListener('click', function() {
      // Call the server to create a PaymentIntent with user details and selected plan
      fetch('/create-payment-intent', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          paymentMethod: 'debit-card',
          userDetails: userDetails,
        }),
      })
      .then(function(response) {
        return response.json();
      })
      .then(function(result) {
        if (result.success) {
          showThankYouMessage();
        } else {
          alert('Payment failed');
        }
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
    });
    function simulateLoading() {
      var loadingProgress = document.getElementById('loading-progress');
      var loadingText = document.getElementById('loading-text');
      var successMessage = document.getElementById('payment-success-message');

      // Show loading bar
      document.querySelector('.loading-container').style.display = 'block';

      // Simulate loading progress
      var progress = 0;
      var interval = setInterval(function() {
        progress += 10;
        loadingProgress.style.width = progress + '%';

        if (progress >= 100) {
          clearInterval(interval);
          // Hide loading bar and show success message
          setTimeout(function() {
            document.querySelector('.loading-container').style.display = 'none';
            successMessage.style.display = 'block';
          }, 1000); // Show success message after 1 second
        }
      }, 200); // Update every 200 milliseconds
    }

    document.getElementById('debit-card-button').addEventListener('click', function() {
      // Simulate loading and show success message
      simulateLoading();
    });

    document.getElementById('credit-card-button').addEventListener('click', function() {
      // Simulate loading and show success message
      simulateLoading();
    });

    // Create a PaymentIntent on the server when the submit button is clicked
    document.getElementById('credit-card-button').addEventListener('click', function() {
      // Call the server to create a PaymentIntent with user details and selected plan
      fetch('/create-payment-intent', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
        },
        body: JSON.stringify({
          paymentMethod: 'credit-card',
          userDetails: userDetails,
        }),
      })
      .then(function(response) {
        return response.json();
      })
      .then(function(result) {
        if (result.success) {
          showThankYouMessage();
        } else {
          alert('Payment failed');
        }
      })
      .catch(function(error) {
        console.error('Error:', error);
      });
    });
  </script>
</body>
</html>