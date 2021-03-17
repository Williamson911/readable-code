<?php

function order_pizza($pizzatype, $client) {
    $price = calc_price($pizzatype);
    $address = 'unknown';

    echo 'Creating new order... <br>';

    if($client == 'koen')
    {
        $address = 'a peniche in Liège';
    }
    elseif ($client == 'nico')
    {
        $address = 'somewhere in Belgium';
    }
    elseif ($client == 'students')
    {
        $address = 'BeCode office';
    }

    print_order($pizzatype, $client, $address, $price);

}

function print_order($pizzatype, $client, $address, $price){
    echo 'A ' . $pizzatype . ' pizza should be sent to ' . $client . '. <br>';
    echo 'The address: ' . $address .'.<br>';
    echo 'The bill is €'. $price .'.<br>';
    echo 'Order finished.<br><br>';
}


function calc_price($pizzatype) {
    $price = 0;

    if ($pizzatype == 'marguerita') {
        $price += 5;
    }
    elseif ($pizzatype == 'golden')
    {
        $price += 100;
    }
    elseif ($pizzatype == 'calzone')
    {
        $price += 10;
    }
    elseif ($pizzatype == 'hawai') {
        throw new Exception('Computer says no');
    }

    return $price;
}

order_pizza('calzone', 'nico');
order_pizza('marguerita', 'nick');
order_pizza('golden', 'students');