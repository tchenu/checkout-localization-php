<?php

// @see https://www.checkout.com/docs/resources/codes/response-codes#Hard_decline_(30X)

return [
    "30004" => "Pick up card (no fraud)",
    "30007" => "Pick up card, special conditions",
    "30015" => "No such issuer",
    "30016" => "Issuer does not allow online gambling payout",
    "30017" => "Issuer does not allow original credit transaction",
    "30018" => "Issuer does not allow money transfer payout",
    "30019" => "Issuer does not allow non-money transfer payout",
    "30020" => "Invalid amount",
    "30021" => "Total amount limit reached",
    "30022" => "Total transaction count limit reached",
    "30033" => "Expired card - pick up",
    "30034" => "Suspected fraud - pick up",
    "30035" => "Contact acquirer - pick up",
    "30036" => "Restricted card - pick up",
    "30037" => "Call acquirer security - pick up",
    "30038" => "Allowable PIN tries exceeded - pick up",
    "30041" => "Lost card - pick up",
    "30043" => "Stolen card - pick up",
    "30044" => "Transaction rejected - AMLD5",
    "30045" => "Invalid payout fund transfer type",
    "30046" => "Closed account",
];