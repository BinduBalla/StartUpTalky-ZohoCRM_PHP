<?php
function generate_refresh_token(){
    $post = [
        'code'          =>'1000.f161d92d7d9a37daac01c7a238f60dc6.ad5ed249acd20f4240b64b8fe070b528',
        'redirect_url'  =>'http://example.com/callbackurl',
        'client_id'     =>'1000.44NJPZN6L82FEPGY4WIILO985V6Y4V',
        'client_secret' =>'9c1c9de7994a0b54cd965a1f251992dda126475218',
        'grant_type'    =>'authorization_code'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://accounts.zoho.com/oauth/v2/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $post ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ));

    $responce = curl_exec( $ch );
    $responce = json_encode( $responce );
    var_dump($responce);

}
generate_refresh_token();
?>