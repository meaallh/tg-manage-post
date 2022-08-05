<?php

include_once "class/var.php";
include_once "class/class.php";
$forwardUpdate = $update->message->forward_from_chat;
function forwardSender ($message, $to)
{
     $message = json_decode(json_encode($message), true);
     $showTextor = Manage::channelsShow()[$to]['settings'];
     $textup = $showTextor['up'].$showTextor['space_up'];
     $textdown = $showTextor['down'].$showTextor['space_down']; 
     if(isset($message['text']))
     {
          bot("sendMessage", [
               'chat_id'=>$to,
               'text'=>$textup.$message['text'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['photo']))
     {
          bot("sendPhoto", [
               'chat_id'=>$to,
               'photo'=>$message['photo'][array_key_last($message['photo'])]['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['video']))
     {
          bot("sendVideo", [
               'chat_id'=>$to,
               'video'=>$message['photo']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['document']))
     {
          bot("sendDocument", [
               'chat_id'=>$to,
               'document'=>$message['document']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['audio']))
     {
          bot("sendAudio", [
               'chat_id'=>$to,
               'audio'=>$message['audio']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
}
$showing = Manage::show();
$chshows = Manage::channelsShow();
$checkask = $showing['forwards'];
$editedChannels = $update->edited_channel_post;
function edit ($message, $to)
{
     $message = json_decode(json_encode($message), true);
     $showTextor = Manage::channelsShow()[$to]['settings'];
     $textup = $showTextor['up'].$showTextor['space_up'];
     $textdown = $showTextor['down'].$showTextor['space_down']; 
     if(isset($message['text']))
     {
          bot("editMessageText", [
               'chat_id'=>$to,
               'text'=>$textup.$message['text'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['photo']))
     {
          bot("sendMessageCaption", [
               'chat_id'=>$to,
               'photo'=>$message['photo'][array_key_last($message['photo'])]['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['video']))
     {
          bot("sendMessageCaption", [
               'chat_id'=>$to,
               'video'=>$message['photo']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['document']))
     {
          bot("sendMessageCaption", [
               'chat_id'=>$to,
               'document'=>$message['document']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
     elseif(isset($message['audio']))
     {
          bot("sendMessageCaption", [
               'chat_id'=>$to,
               'audio'=>$message['audio']['file_id'],
               'caption'=>$textup.$message['caption'].$textdown."\n\n".$showTextor['copyriht'],
          ]);
     }
}


if($forwardUpdate)
{
     if($checkask['private_forward'] === true)
     {
          if($checkask['type_forward'] === "all")
          {
               foreach($chshows as $key => $value)
               {
                    forwardSender($update->message, $key);
               }
          }
          else
          {
               forwardSender($update->message, intval($checkask['type_forward']));
          }
     }
}
