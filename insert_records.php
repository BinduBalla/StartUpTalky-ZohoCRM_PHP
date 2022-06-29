<?php
function insert_leads(){
    $access_token = "1000.b511aa33472a1470085f51b3324bbdde.6103a1442135db2b4c79e8ccc53cce0d";

    $post_data = [
        'data' =>[
            [
                "company"     => 'StartUp company',
                "Last_Name"   => 'Balla',
                "First_Name"  => 'Renuka',
                "Email"       => 'renukaballa322@gmail.com',
                "State"       => 'xyz',
                "Phone"       => '0123456789',
                "Description" => 'Inserting records into leads'
            ]
        ],
        'trigger' => [
            "approval",
            "workflow",
            "blueprint"
        ]
    ];


    $ch = curl_init();
    curl_setopt( $ch, CURLOPT_URL, "https://www.zohoapis.com/crm/v2/Leads" );
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode( $post_data ));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
        'Authorization: Zoho-oauthtoken ' . $access_token,
        'Content-Type: application/x-www-form-urlencoded' 
    ));

    $responce = curl_exec( $ch );
    $responce = json_decode( $responce );
    var_dump( $responce );
}
insert_leads();
?>