<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TwitterData extends Model
{
    private $CONSUMER_KEY = "zNhncws42bC9fvJ5igXLOwThl";
    private $CONSUMER_SECRET = "v5yGRn7h3axWrTRA10RHbCrxma1bFZiRNueKU2ZF5L1TnRq7wP";

    private $access_token = "82047592-ssw49Xoyj9JVR26Qai3W10oDqpQemIEuiwpUwRaow";
    private $access_token_secret = "h70vm8Jm5jEpJmI1rM9BIyGS1v9lTe705mumeIQ3G5f3E";

    public static function connectAPI(){
    	$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token, $access_token_secret);

    	return $connection;
    }
}
