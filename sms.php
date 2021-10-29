<?php


if (isset($_POST['victimMsg'])) {
	require_once __DIR__ . "/vendor/autoload.php";

	if($_POST["victimMsg"] != "")
	{
		$victimMsg = " --> Location : ".$_POST['victimMsg'];
	}
	else
	{
		$victimMsg = "";
	}

	$messagebird = new MessageBird\Client('S9YfFqSj619BiWPp4yndHvm6B');
	$message = new MessageBird\Objects\Message;
	$message->originator = 'CHAYA';
	$message->recipients = ['+8801521255793'];
	$message->body = 'Save me. I am in trouble.'.$victimMsg;
	$response = $messagebird->messages->create($message);

	echo json_encode(array(
		"status" => "ok",
		"msg" => "Messeage was sent"
	));

	
}





// ["recipients"]["items"][0]["status"]
?>