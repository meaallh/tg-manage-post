<?php
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$text = $message->text;
$name = $message->from->first_name;
$id = $message->from->id;
$message_id = $update->message->message_id;
$admin = 348759045;
$data = $update->callback_query->data;
$message_id2 = $update->callback_query->message->message_id;
$chat_id2 = $update->callback_query->message->chat->id;
$id2 = $update->callback_query->from->id;
$fid2 = $update->callback_query->message->from->id;
$name2 = $update->callback_query->message->chat->first_name;
$forwardFromChannel = $update->message->forward_from_chat;
$channelUsername = $update->channel_post->chat->username;
$nameTag = "[$name](t.me/user?id=$id)";
$nameTag2 = "[$name2](t.me/user?id=$fid2)";
$botSettings = json_decode(file_get_contents("botSetting.json"), true);
if(isset($update->message)){ $languageCode = $update->message->from->language_code; }elseif( isset($update->callback_query) ){ $languageCode = $update->callback_query->from->language_code; }
$type = $update->message->chat->type;
$type2 = $update->callback_query->message->chat->type;
$query = $update->inline_query->query;
$query_id = $update->inline_query->id;
$document = $update->message->document;
