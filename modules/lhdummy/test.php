<?php

$tpl = erLhcoreClassTemplate::getInstance('lhdummy/test.tpl.php');
$tpl->set('value',\LiveHelperChatExtension\clientoverride\providers\ClientOverrideLiveHelperChat::getValue('dummy'));
$Result['content'] = $tpl->fetch();