<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Payment</title>

    <style>
        body {
    font-family: var(--default-font);
    background-color: var(--background-color);
    color: var(--default-color);
    margin: 0;
    padding: 0;
    line-height: 1.6;
}

h1, h2, h3 {
    font-family: var(--heading-font);
    color: var(--heading-color);
    margin-bottom: 20px;
}

a {
    color: var(--accent-color);
    text-decoration: none;
}

a:hover {
    color: var(--nav-hover-color);
}

/* Main Content */
main {
    max-width: 800px;
    margin: 40px auto;
    padding: 20px;
    background-color: var(--surface-color);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
}

/* Payment Header */
.payment-header h1 {
    text-align: center;
    font-size: 2rem;
    border-bottom: 2px solid var(--accent-color);
    padding-bottom: 10px;
}

/* Payment Method Section */
.payment-method {
    margin-bottom: 30px;
}

.payment-method h2 {
    font-size: 1.5rem;
    color: var(--heading-color);
    margin-bottom: 15px;
}

.payment-options {
    display: flex;
    gap: 20px;
    justify-content: space-between;
}

.payment-option {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 15px;
    background-color: var(--light-background);
    border: 2px solid transparent;
    border-radius: 10px;
    transition: all 0.3s ease;
    cursor: pointer;
}

.payment-option:hover {
    border-color: var(--accent-color);
    background-color: var(--surface-color);
}

.payment-option img {
    width: 50px;
    height: 50px;
    margin-bottom: 10px;
}

.payment-option span {
    font-size: 1rem;
    color: var(--default-color);
}

/* Order Summary Section */
.order-summary {
    margin-bottom: 30px;
}

.order-summary h3 {
    font-size: 1.3rem;
    margin-bottom: 10px;
    color: var(--heading-color);
}

.order-summary ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
}

.order-summary li {
    display: flex;
    justify-content: space-between;
    padding: 10px 0;
    border-bottom: 1px solid var(--contrast-color);
}

.order-summary .checkmark {
    color: var(--accent-color);
}

.subtotal {
    text-align: right;
    margin-top: 15px;
    font-size: 1.2rem;
    color: var(--accent-color);
}

/* Payment Buttons */
.payment-buttons {
    display: flex;
    justify-content: space-between;
    gap: 20px;
}

button {
    padding: 10px 20px;
    font-size: 1rem;
    font-family: var(--nav-font);
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.edit-order {
    background-color: var(--surface-color);
    color: var(--default-color);
    border: 2px solid var(--accent-color);
}

.edit-order:hover {
    background-color: var(--accent-color);
    color: var(--contrast-color);
}

.confirm-pay {
    background-color: var(--accent-color);
    color: var(--contrast-color);
}

.confirm-pay:hover {
    background-color: var(--surface-color);
    color: var(--default-color);
}


        /*Style asal*/
        /*body {
            font-family: Arial, sans-serif;
            background-color: #f5e9d7;
            margin: 0;
            padding: 0;
            color: #4a4a4a;
            } */

        .payment-title {
            max-width: "device-width";
            background-color:black;
            padding: 5px;
        }

        .payment-header-main h1 { /*Ali Arabesque*/
            color: #f5e9d7;
            text-align: center;
            font-size: 45px;
        }

        /*.payment-id {
            margin: 10px;
        }

        .payment-container {
            max-width: "device-width";
            margin: 15px;
            margin-left: 30px;
            margin-right: 30px;
            padding: 20px;
            background-color: #fff;
            border: 5px solid #6a3e1b;
            border-radius: 10px;
            }

        .payment-header h1 { /*Payment Order #id
            font-size: 30px;
            font-weight: bold;
            /*text-align: center;
            margin-left: 30px;
            color: #6a3e1b;
        }

        .payment-method {
            margin-top: 20px;
        }

        .payment-method h2 {
            text-align: center;
            font-size: 1.5rem;
            color: #6a3e1b;
        }

        .payment-options {
            display: flex;
            justify-content: space-around;
            margin-top: 15px;
        }

        .payment-option {
            text-align: center;
            cursor: pointer;
        }

        .payment-option input {
            display: none;
        }

        .payment-option img {
            width: auto;
            height: 60px;
            display: block;
            margin: 0 auto;
        }

        .payment-option span {
            display: block;
            margin-top: 5px;
            font-weight: bold;
            color: #6a3e1b;
        }

        .payment-option input:checked + img {
            border: 2px solid #6a3e1b;
            border-radius: 8px;
            padding: 5px;
        }

        .order-summary {
            margin-top: 20px;
            padding: 10px;
            border-top: 2px solid #6a3e1b;
        }

        .order-summary h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }

        .order-summary ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .order-summary li {
            margin-bottom: 5px;
            display: flex;
            justify-content: space-between;
        }

        .checkmark {
            color: green;
            font-weight: bold;
        }

        .subtotal {
            text-align: right;
            font-size: 1.2rem;
            margin-top: 10px;
            color: #6a3e1b;
        }

        .payment-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .payment-buttons button {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .edit-order {
            background-color: #fff;
            color: #6a3e1b;
            border: 2px solid #6a3e1b;
        }

        .edit-order:hover {
            background-color: #6a3e1b;
            color: #fff;
        }

        .confirm-pay {
            background-color: #6a3e1b;
            color: #fff;
            border: 2px solid #6a3e1b;
        }

        .confirm-pay:hover {
            background-color: #fff;
            color: #6a3e1b;
        } */
/*cash.blade*/
        /* General Container Styling */
.order-details-container {
    background-color: #f7e8d0; /* Beige background */
    border: 2px solid #8b5e34; /* Brown border */
    border-radius: 10px;
    padding: 20px;
    max-width: 600px;
    margin: 50px auto;
    text-align: center;
    font-family: 'Arial', sans-serif;
    color: #8b5e34; /* Text in brown */
}

/* Title Styling */
    .order-title h2 {
        font-size: 24px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    /* Thank You Message */
    .order-details-container h2:nth-of-type(2) {
        font-size: 18px;
        margin-bottom: 20px;
    }

    /* Order Details Section */
    .order-details {
        text-align: left;
        margin: 20px 0;
    }

    .order-details h3 {
        font-size: 18px;
        margin-bottom: 10px;
        color: #8b5e34;
    }

    .order-details ul {
        list-style-type: none;
        padding: 0;
        margin: 0 0 10px 0;
    }

    .order-details ul li {
        font-size: 16px;
        padding: 5px 0;
        display: flex;
        align-items: center;
    }

    .order-details ul li:before {
        content: "✔"; /* Checkmark icon */
        color: green;
        margin-right: 10px;
    }

    /* Subtotal Styling */
    .subtotal {
        font-size: 16px;
        font-weight: bold;
        text-align: right;
        margin-top: 10px;
        color: #8b5e34;
    }

    /* Button Container */
    .button-container {
        margin-top: 20px;
    }

    .home-button {
        text-decoration: none;
        background-color: #8b5e34; /* Brown button */
        color: #fff; /* White text */
        padding: 10px 20px;
        border-radius: 5px;
        font-size: 16px;
        font-weight: bold;
        transition: background-color 0.3s ease;
    }

    .home-button:hover {
        background-color: #704825; /* Darker brown on hover */
    }

    /*table*/
    .table {
    width: 100%;
    margin: 20px 0;
    border-collapse: collapse;
}

.table th, .table td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

.thead-dark th {
    background-color: #343a40;
    color: #fff;
}

.table tr:nth-child(even) {
    background-color: #f2f2f2;
}

.table tr:hover {
    background-color: #ddd;
}


    </style>
</head>
<body>
    <div class="payment-title">
        <header class="payment-header-main">
            <h1>Ali Arabesque</h1>
        </header>
    </div>
    @yield('content')

</body>
