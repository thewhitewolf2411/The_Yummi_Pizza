<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

        <title>Checkout</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Favicon -->
        <link rel = "icon" href = "/images/Logo.png" type = "image/x-icon"> 

        <!-- Compiled Stylesheet -->
        <link rel="stylesheet" href="/css/app.css">

    </head>
    <body>

        <header class="header" id="header"></header>

        <div class="checkout-container">

            @if($cart->items)
            
            <div class="all-items-container">
                <p>Your items in cart:</p>
                <div class="items-container">
                    @foreach($cart->items as $item)
                        <div class="item-container">
                            <p>Item name: {{ $item['item'] }}</p>
                            <p>Item price: {{ $item['price'] }} €</p>
                        </div>
                    @endforeach
                </div>

                <div class="total-cart-container">
                    <div class="total-container">
                        <p>Total price = {{ $cart->totalPrice }} €</p>
                    </div>
                    <div class="clear-cart-container">
                        <form action="{{ action('CartController@removeCart') }}" method="post">
                        @csrf
                        <button type="submit">Clear cart</button>
                        </form>
                    </div>
                </div>

            </div>


            <div class="submit-container">
                <form action="">
                @csrf
                <label>Pleaase enter your address:
                    <input type="text" name="address">
                </label>
                <label>Pleaase enter your phone number:
                    <input type="tel" name="phone">
                </label>
                <input type="submit" value="Accept your order">
                </form>
            </div>
        

            @else


            <div class="checkout-text-container">
                <p>Your shopping card is empty</p>
                <p>Click <a href="/">here</a> to continue shopping</p>
            </div>

            @endif

        </div>   
        
    </body>
    <script type="text/javascript" src="/js/app.js"></script>
</html>
