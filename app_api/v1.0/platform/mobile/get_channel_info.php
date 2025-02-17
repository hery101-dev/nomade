<?php
// +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+  
// +------------------------------------------------------------------------+
// | The Ultimate Video Sharing Platform
// | Copyright (c) 2021 Rubi Dev. All rights reserved.
// +------------------------------------------------------------------------+


  

if (empty($_GET['channel_id']) || !is_numeric($_GET['channel_id'])) {
	$response_data       = array(
        'api_status'     => '400',
        'api_version'    => $api_version,
        'errors'         => array(
            'error_id'   => '1',
            'error_text' => 'Bad Request, Invalid or missing parameter'
        )
    );
}

else{

	$channel_id   = PT_Secure($_GET['channel_id']);
	$channel_info = PT_UserData($channel_id);

	if (empty($channel_info)) {
		$response_data       = array(
	        'api_status'     => '404',
	        'api_version'    => $api_version,
	        'errors'         => array(
	            'error_id'   => '2',
	            'error_text' => 'Channel does not exist'
	        )
	    );
	}

	else{
		//$channel_info      = array_intersect_key(ToArray($channel_info), array_flip($user_public_data));
		$channel_info      = ToArray($channel_info);
		unset($channel_info['password']);

		if (empty($channel_info['about'])) {
			$channel_info['about'] = "";
		}

		$channel_info['is_subscribed_to_channel'] = $db->where('user_id', $channel_id)->where('subscriber_id', $user->id)->getValue(T_SUBSCRIPTIONS, "count(*)");
		
		$response_data     = array(
	        'api_status'   => '200',
	        'api_version'  => $api_version,
	        'data'         => $channel_info
	    );
	}
}