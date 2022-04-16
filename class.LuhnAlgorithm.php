<?php

class LuhnAlgorithm{

    var $card_number;

    function validate()
    {
        $card_number = $this->card_number;
        $card_number = preg_replace('/\D/', '', $card_number);

        $card_number_length = strlen($card_number);
        $leverage = $card_number_length % 2;

        $total_digits = 0;

        for($i=0; $i<$card_number_length; $i++)
        {
            $number_digit = $card_number[$i];
            if(($i % 2) == $leverage)
            {
                    $number_digit *= 2;
                    if($number_digit > 9)
                    {
                        $number_digit -= 9;
                    }
            }
            $total_digits += $number_digit;
        }
        return ($total_digits % 10 == 0)? true : false;
    }

    function set_card_number($card_number){
        $this->card_number = $card_number;
    }
    function _use_case(){
        $card_number = $this->card_number;
        if($card_number != "")
        {
            $result = $this->validate($this->card_number);
            if($result){
                echo "Credit card is valid";
            }else{
                echo "Credit card is not valid";
            }
        }
        else
        {
            echo "Please use the set_card_number() method to enter a card";
        }
       
    }
}
?>