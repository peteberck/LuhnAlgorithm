<?php
include_once"class.LuhnAlgorithm.php";

$la = new LuhnAlgorithm();
$la->set_card_number("6011111111111117");


#First Use Case
#use the _use_case() function
$la->_use_case();



#Second Use Case
#use the validate function directly
$is_valid = $la->validate();

if($is_valid)
{
    echo "<p>Valid Credit Card</p>";
}else{
    echo "<p>Invalid Credit Card</p>";
}

?>