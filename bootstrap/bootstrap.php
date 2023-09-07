<?php
#[\AllowDynamicProperties]
class erLhcoreClassExtensionClientoverride {

	public function __construct() {
		
	}
	
	public function run(){		
		
		$dispatcher = erLhcoreClassChatEventDispatcher::getInstance();
		
		// Attach event listeners
		// $dispatcher->listen('chat.close',array($this,'chatClosed'));
	}
	
	public function chatClosed($params) {
		// 
		// 'chat' => & $chat, 		// Chat which was closed
		// 'user_data' => $operator // Operator who has closed a chat
		// 
		// 
		//
	}

}


