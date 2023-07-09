<?php

namespace App\PaymentServices;

use App\Models\Home;

class PaypelAPI{

    public function pay(){
        return "Your bill payment is done";
    }

    public function set_route_data(){
        return Home::get();
    }
}
?>