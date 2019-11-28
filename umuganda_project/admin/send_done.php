<?php 
if(isset($_POST['submit'])){
@$phone=$_POST['phone'];
@$message=$_POST['message'];

    require_once('AfricasTalkingGateway.php');
    $username   = "umugandad";
    $apikey     = "563ee6522e2b81ff56af399ec9910c43cb3d2e31faf61f4a890cbc2585d96821";
    $recipients = $phone;
    $message    = $message;
    $gateway    = new AfricasTalkingGateway($username, $apikey);
    try 
    { 
      $results = $gateway->sendMessage($recipients, $message);
                
     
      if($results)
      {

      }
    }
    catch ( AfricasTalkingGatewayException $e )
    {
      echo "Checking Your users datails ".$e->getMessage();
    }

                

  }              
                
  
$ID_NUMBER=$_POST['ID_NUMBER'];

if($ID_NUMBER)
{
	header("Location: message_successfully.php");
}


?>
  