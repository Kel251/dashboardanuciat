
<?php
//use Facebook\FacebookSession;
//
//use Facebook\FacebookRequest;
//use Facebook\FacebookResponse;
//
//session_start();
//require_once ($app['path.base'].'/vendor/facebook/graph-sdk/src/Facebook/autoload.php');
////require_once URL::asset('vendor/autoload.php');
//
//$fb = new Facebook\Facebook([
//'app_id' => '822518807914050',
//'app_secret' => 'f0d7870db4dba76067b99f3bcb49a509',
//'default_graph_version' => 'v2.5',
//    
//]); 
//
//try {
//  // Get the \Facebook\GraphNodes\GraphUser object for the current user.
//  // If you provided a 'default_access_token', the '{access-token}' is optional.
//  $response = $fb->get('/me', 'EAACEdEose0cBALWt8DQmNDGMX6wiaVsvqyJAWKkDOXpqZAFzICxLa70ObPrx71QPKH0dXzpycyIKNjgA2lCSOPRFZBspTAKdSsFPcN6dcogTD1y7st9bFOTfxao27e9LGZCIBtZC7kNldXs5FkZAPfhouoSQ6877tZAenrHnmCO6dHJshndDZBzcQxj8yRp1TgZD');
//} catch(\Facebook\Exceptions\FacebookResponseException $e) {
//  // When Graph returns an error
//  echo 'Graph returned an error: ' . $e->getMessage();
//  exit;
//} catch(\Facebook\Exceptions\FacebookSDKException $e) {
//  // When validation fails or other local issues
//  echo 'Facebook SDK returned an error: ' . $e->getMessage();
//  exit;
//}
//
//$me = $response->getGraphUser();
//echo 'Logged in as ' . $me->getName();
echo "hola";?>
<html>
    <head>
        <title>Laravel ajax</title>
    </head>
    {{ $session }}
    <div>
        <h2>Register form</h2>
        <button type="button" id="getRequest">Get request</button>
    </div>
    {!!Html::script('assets/js/jquery-2.1.4.min.js')!!}
    <script type="text/javascript" >
        $(document).ready(function(){
            $("#getRequest").click(function(){
                //alert($(this).text());
                $.get('getRequest',function(data){
                    console.log(data);
                });
            });
        });
    </script>
</html>