<?php
function generate_access_token(){
    $post = [
        'refresh_token' =>'1000.b229728152688683f5594c9bacb9081a.f9176f5067c73113da07fc4f576fdb11',
        'client_id'     =>'1000.44NJPZN6L82FEPGY4WIILO985V6Y4V',
        'client_secret' =>'9c1c9de7994a0b54cd965a1f251992dda126475218',
        'grant_type'    =>'refresh_token'
    ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,"https://accounts.zoho.com/oauth/v2/token");
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query( $post ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 'Content-Type: application/x-www-form-urlencoded' ));

    $responce = curl_exec( $ch );
    $responce = json_decode( $responce );
    echo '<pre>';print_r( $responce );

}
generate_access_token();
?>