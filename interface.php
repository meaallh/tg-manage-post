<?php
//

include_once "class/var.php";
include_once "class/class.php";
$shows = Manage::show();
$admins = Manage::admins();
if($text == "/start")
{
     if($shows['admins']['main'] == $id)
     {
          Manage::removeCommend();
          bot("sendMessage", [
               'chat_id'=>$chat_id,
               'text'=>Manage::translator($shows['properties']['start']['admin']),
              'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- إضافة قناة -"),"callback_data"=>"addChannel"]],
                         [["text"=>Manage::translator("- حذف قناة -"),"callback_data"=>"deleteChannel"]],
                         [["text"=>Manage::translator("- عرض القنوات -"),"callback_data"=>"showChannel"]],
                         [["text"=>Manage::translator("- خصائص القنوات -"),"callback_data"=>"proper"]],
                         [["text"=>Manage::translator("- النشر بالتوجيه -"),"callback_data"=>"sendByForward"]],
                         [["text"=>Manage::translator("- تخصيص التوجيه -"),"callback_data"=>"propoerForward"]],
                         [["text"=>Manage::translator("- إضافة مشرف للبوت -"),"callback_data"=>"addNewAdmin"]],
                         [["text"=>Manage::translator("- حذف مشرف -"),"callback_data"=>"deleteAdmin"]],
                         [["text"=>Manage::translator("- رسالة /start | للمشرفين -"),"callback_data"=>"start||admin"]],
                         [["text"=>Manage::translator("- رسالة /start | للمستخدمين -"),"callback_data"=>"start||users"]],
                         [["text"=>Manage::translator("- إغلاق -"),"callback_data"=>"close"]],
                    ],
               ])
          ]);
     }
     elseif(in_array($id, $admins))
     {
          Manage::removeCommend();
          bot("sendMessage", [
               'chat_id'=>$chat_id,
               'message_id'=>$message_id,
               'text'=>Manage::translator($shows['properties']['start']['admin']),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- إضافة قناة -"),"callback_data"=>"addChannel"]],
                         [["text"=>Manage::translator("- حذف قناة -"),"callback_data"=>"deleteChannel"]],
                         [["text"=>Manage::translator("- عرض القنوات -"),"callback_data"=>"showChannel"]],
                         [["text"=>Manage::translator("- خصائص القنوات -"),"callback_data"=>"proper"]],
                         [["text"=>Manage::translator("- النشر بالتوجيه -"),"callback_data"=>"sendByForward"]],
                         [["text"=>Manage::translator("- تخصيص التوجيه -"),"callback_data"=>"propoerForward"]],
                         [["text"=>Manage::translator("- إغلاق -"),"callback_data"=>"close"]],
                    ],
               ])
          ]);
     }
     else
     {
          bot("sendMessage", [
               'chat_id'=>$chat_id,
               'message_id'=>$message_id,
               'text'=>Manage::translator($shows['properties']['start']['user']),
               'parse_mode'=>"MARKDOWN",
          ]);
     }
}
if($data == "home")
{
     Manage::removeCommend();
     if($shows['admins']['main'] == $id2)
     {
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator($shows['properties']['start']['admin']),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- إضافة قناة -"),"callback_data"=>"addChannel"]],
                         [["text"=>Manage::translator("- حذف قناة -"),"callback_data"=>"deleteChannel"]],
                         [["text"=>Manage::translator("- عرض القنوات -"),"callback_data"=>"showChannel"]],
                         [["text"=>Manage::translator("- خصائص القنوات -"),"callback_data"=>"proper"]],
                         [["text"=>Manage::translator("- النشر بالتوجيه -"),"callback_data"=>"sendByForward"]],
                         [["text"=>Manage::translator("- تخصيص التوجيه -"),"callback_data"=>"propoerForward"]],
                         [["text"=>Manage::translator("- إضافة مشرف للبوت -"),"callback_data"=>"addNewAdmin"]],
                         [["text"=>Manage::translator("- حذف مشرف -"),"callback_data"=>"deleteAdmin"]],
                         [["text"=>Manage::translator("- رسالة /start | للمشرفين -"),"callback_data"=>"start||admin"]],
                         [["text"=>Manage::translator("- رسالة /start | للمستخدمين -"),"callback_data"=>"start||users"]],
                         [["text"=>Manage::translator("- إغلاق -"),"callback_data"=>"close"]],
                    ],
               ])
          ]);
     }
     elseif(in_array($id2, $admins))
     {
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator($shows['properties']['start']['admin']),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- إضافة قناة -"),"callback_data"=>"addChannel"]],
                         [["text"=>Manage::translator("- حذف قناة -"),"callback_data"=>"deleteChannel"]],
                         [["text"=>Manage::translator("- عرض القنوات -"),"callback_data"=>"showChannel"]],
                         [["text"=>Manage::translator("- خصائص القنوات -"),"callback_data"=>"proper"]],
                         [["text"=>Manage::translator("- النشر بالتوجيه -"),"callback_data"=>"sendByForward"]],
                         [["text"=>Manage::translator("- تخصيص التوجيه -"),"callback_data"=>"propoerForward"]],
                         [["text"=>Manage::translator("- إضافة مشرف للبوت -"),"callback_data"=>"addNewAdmin"]],
                         [["text"=>Manage::translator("- حذف مشرف -"),"callback_data"=>"deleteAdmin"]],
                         [["text"=>Manage::translator("- إغلاق -"),"callback_data"=>"close"]],
                    ],
               ])
          ]);
     }
}
if($data == "close")
{
     bot("deleteMessage", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
     ]);
}
if(explode("||", $data)[0] == "start")
{
     $expST = explode("||", $data)[1];
     Manage::addCommend("start||".$expST, $id2, $message_id2);
     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("+ || أرسل الأن النبذه ..."),
          'parse_mode'=>"MARKDOWN",
          'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                    [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
               ],
               ])
          ]);
}
if(explode("||", $data)[0] == "deleteAdmin")
{
     if(isset(explode("||", $data)[1]))
     {
          $idKill = explode("||", $data)[1];
          $showing = Manage::show();
          unset($showing['admins']['all'][array_search($idKill , $showing['admins']['all'])]);
          Manage::save($showing);
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("+ || تم حذف المشرف بنجاح  ... \n\n- إيدي الشخص : ").$idKill,
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
                    ])
               ]);
               return false;
     }
     $showing = Manage::show();
     $adminstritor = $showing['admins']['all'];
     if(count($adminstritor) === 0)
     {
          
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("+ || لا يوجد مشرفين حتى الآن .."),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
          return false;
     }
     else
     {
          $arrayAD = [];
          foreach($adminstritor as $value)
          {
               $getChats = bot("getChat", [
                    'chat_id'=>$value
               ]);
               $arrayAD[] = [["text"=>$getChats->result->id." - ".$getChats->result->first_name, "callback_data"=>"deleteAdmin||".strval($getChats->result->id)]];

          }
          $arrayAD[] = [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]];
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("+ || إختر أحد المشرفين لحذفهم : "),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>$arrayAD,
               ])
          ]);
     }
}
if(explode("||", $data)[0] == "addNewAdmin")
{
     Manage::addCommend("newAdmin", $id2, $message_id2);

     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("+ || قم بإرسال إيدي المشرف ..."),
          'parse_mode'=>"MARKDOWN",
          'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                    [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
               ],
          ])
     ]);
}
if($text)
{
     $commend = Manage::printCommend();

     if($commend['commend'] === "newAdmin")
     {
          $botChat = bot("getChat", [
               'chat_id'=>intval($text)
          ]);
          if(boolval($botChat->ok) === true)
          {
               bot("deleteMessage", [
                    'chat_id'=>$chat_id,
                    'message_id'=>$commend['mid'],
               ]);
               $showing = Manage::show();
               $showing['admins']['all'][] = intval($botChat->result->id);
               Manage::save($showing);
               bot("sendMessage", [
                    'chat_id'=>$chat_id,
                    'text'=>Manage::translator("+ || تم رفع الآدمن التالي بنجاح :- \n\n- الإسم :").($botChat->result->first_name).Manage::translator("\n- الإيدي : ").$botChat->result->id,
                    'parse_mode'=>"MARKDOWN",
                    'reply_markup'=>json_encode([
                         'inline_keyboard'=>[
                              [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                         ],
                    ])
               ]);
               Manage::removeCommend();
          }
          else
          {
               bot("sendMessage", [
                    'chat_id'=>$chat_id,
                    'text'=>Manage::translator("+ || هذا المستخدم غير موجود : ").$text.Manage::translator("\n\n- قد تكون المشكله أحد الأسباب التالية ؛ الإيدي خاطئ ، هذا المستخدم لم يدخل للبوت بعد"),
                    'parse_mode'=>"MARKDOWN",
                    'reply_markup'=>json_encode([
                         'inline_keyboard'=>[
                              [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                         ],
                    ])
               ]);
          }
     }
}
if(explode("||", $data)[0] == "propoerForward")
{
     if(isset(explode("||", $data)[1]))
     {
          $expFT = explode("||", $data)[1];
          $showing = Manage::show();
          
          if($expFT == "all")
          {
               $showing['forwards']['type_forward'] = "all";
               Manage::save($showing);
          }
          elseif($expFT == "once")
          {
               $showing = Manage::channelsShow();
               if(isset(explode("||", $data)[2]))
               {
                    $show = Manage::show();
                    $show['forwards']['type_forward'] = strval(explode("||", $data)[2]);
                    Manage::save($show);
                    bot("editMessageText", [
                         'chat_id'=>$chat_id2,
                         'message_id'=>$message_id2,
                         'text'=>Manage::translator("+ || تم حفظ قناة \"*".$showing[explode("||", $data)[2]]['name']."*\""),
                         'parse_mode'=>"MARKDOWN",
                         'reply_markup'=>json_encode([
                              'inline_keyboard'=>[
                                   [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                              ],
                         ])
                    ]);
                    return false;
               }
               $arrays = [];
               foreach($showing as $key => $val)
               {
                    $arrays[] = [["text"=>$val['name'], "callback_data"=>"propoerForward||once||".$key]];
               }
               if(empty($arrays))
               {
                    $noChannelsFT = "\n- لا يوجد قنوات للعرض .";
               }
               $arrays[] = [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"propoerForward"]];
               bot("editMessageText", [
                    'chat_id'=>$chat_id2,
                    'message_id'=>$message_id2,
                    'text'=>Manage::translator("+ || إختر قناة لتحديدها كتوجيهات : ".$noChannelsFT),
                    'parse_mode'=>"MARKDOWN",
                    'reply_markup'=>json_encode([
                         'inline_keyboard'=>$arrays,
                    ])
               ]);
               return false;

          }

     }
     
     $showing = Manage::show();
     if($showing['forwards']['type_forward'] === "all")
     {
          $statusFT = "الكل";
          $trakFT  = [["text"=>Manage::translator(" تحديد قناة "),"callback_data"=>"propoerForward||once"]];
     }
     else
     {
          $statusFT = "قناه واحدة";
          $trakFT  = [["text"=>Manage::translator(" وضع الكل "),"callback_data"=>"propoerForward||all"]];
     }
     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("+ || تخصيص التوجيه للقنوات : ".$statusFT),
          'parse_mode'=>"MARKDOWN",
          'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                    $trakFT,
                    [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
               ],
          ])
     ]);
}
if(explode("||", $data)[0] == "sendByForward")
{
     if(isset(explode("||", $data)[1])&&explode("||", $data)[1] == "change")
     {
          $showing = Manage::show();
          if($showing['forwards']['private_forward'] === true)
          {
               $changeFP = false;
          }
          elseif($showing['forwards']['private_forward'] === false)
          {
               $changeFP = true;
          }
          $showing['forwards']['private_forward'] = $changeFP;
          Manage::save($showing);
     }
     $showing = Manage::show();
     if($showing['forwards']['private_forward'] === true)
     {
          $statusFP = "مفعل";
          $emojiFP = "✅";
     }
     elseif($showing['forwards']['private_forward'] === false)
     {
          $statusFP = "معطل";
          $emojiFP = "☑️";

     }
     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("+ || التوجيهات من البوت إلى القنوات : ".$statusFP),
          'parse_mode'=>"MARKDOWN",
          'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                    [["text"=>Manage::translator("- $emojiFP -"),"callback_data"=>"sendByForward||change"]],
                    [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
               ],
          ])
     ]);
}
if($data == "addChannel")
{
     $manage = Manage::channelsShow();
     $countM = count($manage);
     if($countM >= 5)
     {
          
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- أرسل الآن معرف القناة أو رابطها "),
              'parse_mode'=>"MARKDOWN",
          ]);
          return false;
     }
     else
     {
          Manage::addCommend("addChannel", $id2, $message_id2);
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- أرسل الآن معرف القناة أو رابطها "),
              'parse_mode'=>"MARKDOWN",
          ]);
     }

}
if($data == "deleteChannel")
{
     Manage::addCommend("deleteChannel", $id2, $message_id2);
     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("- أرسل الآن معرف القناة أو رابطها "),
         'parse_mode'=>"MARKDOWN",
     ]);

}
if($text)
{
     $commend = Manage::printCommend();
     if(explode("||", $commend['commend'])[0] == "proper")
     {
          $idi = explode("||", $commend['commend'])[1];
          $textable = explode("||", $commend['commend'])[2];
          $showing = Manage::channelsShow();
          $showing[$idi]['settings'][$textable] = $text;
          Manage::channelSave($showing);
          bot("deleteMessage", [
               'chat_id'=>$chat_id,
               'message_id'=>$commend['mid'],
          ]);
          bot("sendMessage", [
               'chat_id'=>$chat_id,
               'text'=>Manage::translator("- || القناة \"*".$showing[$idi]['name']."*\" تم حفظ خاصية ".Manage::toTextable($textable)." الخاصية هي :- \n\n").$text,
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
          Manage::removeCommend();
     }
     elseif(explode("||", $commend['commend'])[0] == "start")
     {
          $typeAlign = explode("||", $commend['commend'])[1];
          $showing = Manage::show();
          $showing['properties']['start'][$typeAlign] = $text;
          Manage::save($showing);
          bot("deleteMessage", [
               'chat_id'=>$chat_id,
               'message_id'=>$commend['mid'],
          ]);
          bot("sendMessage", [
               'chat_id'=>$chat_id,
               'text'=>Manage::translator("- || تم حفظ رسالة /start الرسالة هي : \n").$text,
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
          Manage::removeCommend();
     }
}
if(explode("||", $data)[0] == "proper")
{

     if(isset(explode("||", $data)[2]))
     {
          $idi = explode("||", $data)[1];
          $textable = explode("||", $data)[2];
          $showing = Manage::channelsShow();
          Manage::addCommend("proper||".$idi."||".$textable, $id2, $message_id2);
          
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- || القناة \"*".$showing[$idi]['name']."*\" أرسل الآن ".Manage::toTextable($textable)),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
          return false;
     }
     if(isset(explode("||", $data)[1]))
     {
          $idi = explode("||", $data)[1];
          $showing = Manage::channelsShow();
          $chInfo = $showing[$idi]['settings'];
          $arraysnd = [];
          foreach($chInfo as $key => $val)
          {
               $arraysnd[] = Manage::toTextable($key)." : " . $val;
          }
          
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- || القناة \"*".$showing[$idi]['name']."*\" خصائصها : \n\n-").join("\n-", $arraysnd),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("النص العلوي"), "callback_data"=>"proper||".$idi."||up"], ["text"=>Manage::translator("النص السفلي"), "callback_data"=>"proper||".$idi."||down"]],
                         [["text"=>Manage::translator("الحقوق"), "callback_data"=>"proper||".$idi."||copyriht"]],
                         [["text"=>Manage::translator("بين المنشور والنص العلوي"), "callback_data"=>"proper||".$idi."||space_up"], ["text"=>Manage::translator("بين المنشور والنص السفلي"), "callback_data"=>"proper||".$idi."||space_down"]],
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
          return false;
     }
     $showing = Manage::channelsShow();
     $arrays = [];
     foreach($showing as $key => $val)
     {
          $arrays[] = [["text"=>$val['name'], "callback_data"=>"proper||".$key]];
     }
     $arrays[] = [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]];

     if(!empty($arrays))
     {
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- || لا يوجد قنوات عليك إضافة قنوات أولا"),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>$arrays,
               ])
          ]);
     }
     else
     {
          bot("editMessageText", [
               'chat_id'=>$chat_id2,
               'message_id'=>$message_id2,
               'text'=>Manage::translator("- || لا يوجد قنوات عليك إضافة قنوات أولا"),
               'parse_mode'=>"MARKDOWN",
               'reply_markup'=>json_encode([
                    'inline_keyboard'=>[
                         [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                    ],
               ])
          ]);
     }
}
if($data == "showChannel")
{
     $printer = Manage::channelsPrint();
     bot("editMessageText", [
          'chat_id'=>$chat_id2,
          'message_id'=>$message_id2,
          'text'=>Manage::translator("+ || عدد القنوات هي : ".$printer['count']."\n\n-").join("\n-", $printer['print']),
          'parse_mode'=>"MARKDOWN",
          'reply_markup'=>json_encode([
               'inline_keyboard'=>[
                    [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
               ],
          ])
     ]);
}
if($text)
{
     $commend = Manage::printCommend();
     if($commend['commend'] == "addChannel")
     {
          if (
               preg_match("/http/", $text)  or  
               preg_match("/https/", $text) or 
               preg_match("/t.me/", $text)  or 
               preg_match("/T.me/", $text)  or 
               preg_match("/@/", $text)    
             )
          {
               $urlTelegramChat = str_replace(array('https', 'http', 't.me', 'T.me', '@', '/', ':'), '', $text);
               $getChat = bot("getChat", [
                    'chat_id'=>"@".$urlTelegramChat,
               ]);         
               if(boolval($getChat->ok) === true)
               {
                    $idChannel = $getChat->result->id;
                    $getMyId = bot("getMe")->result->id;
                    $getChatMembers = bot("getChatMember", [
                         'chat_id'=>$idChannel,
                         'user_id'=>$getMyId,
                    ]);
                    $getChatMembers = json_decode(json_encode($getChatMembers), true);
                    if($getChatMembers['result']['status'] === "administrator")
                    {
                         $getPermissions = [];
                         $permissionsRequiremente = [
                              "can_manage_chat",
                              "can_post_messages",
                              "can_edit_messages",
                              "can_delete_messages",
                         ];
                         $resultForeatch = "";
                         foreach($getChatMembers['result'] as $key => $value)
                         {
                              if(in_array($key, $permissionsRequiremente))
                              {
                                   $getPermissions[] = Manage::toTextablePermission($key)." : ".Manage::toTextablePermissionBool($value);

                                   if($value == false)
                                   {
                                        $resultForeatch .= $key.':';
                                   }
                              }
                         }
                         if($resultForeatch === "")
                         {
                              for($i = $commend['mid']; $i <= $message_id; $i++)
                              {
                                   bot("deleteMessage", [
                                        'chat_id'=>$chat_id,
                                        'message_id'=>$i,
                                   ]);
                              }
                              Manage::removeCommend();
                              Manage::channelsNew($getChat->result->id, $getChat->result->title);

                              bot("sendMessage", [
                                   'chat_id'=>$chat_id,
                                   'message_id'=>$message_id,
                                   'text'=>Manage::translator("• تم إضافة القناة بنجاح :- \n\n الإسم : ").$getChat->result->title."\n".Manage::translator("المعرف : @").$getChat->result->username."\n".Manage::translator("الإي دي : ").$getChat->result->id,
                                   'parse_mode'=>"MARKDOWN",
                                   'reply_markup'=>json_encode([
                                        'inline_keyboard'=>[
                                             [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                                        ],
                                   ])
                              ]);
                         }
                         else
                         {
                              bot("sendMessage", [
                                   'chat_id'=>$chat_id,
                                   'message_id'=>$message_id,
                                   'text'=>Manage::translator("+ || هنالك بعض الصلاحيات المقيده يحتاج البوت للصلاحيات التاليه في القناه لكي يعمل : \n-".join("\n-", $getPermissions)),
                                   'parse_mode'=>"MARKDOWN",
                              ]);
                         }
                    }
                    else
                    {
                         bot("sendMessage", [
                              'chat_id'=>$chat_id,
                              'message_id'=>$message_id,
                              'text'=>Manage::translator("- البوت ليس مشرفا في القناه التاليه : t.me/".$urlTelegramChat),
                              'parse_mode'=>"MARKDOWN",
                         ]);
                    }
               }
               else
               {
                    bot("sendMessage", [
                         'chat_id'=>$chat_id,
                         'message_id'=>$message_id,
                         'text'=>Manage::translator("- الرابط خطأ يرجى إعادة المحاولة"." : "."t.me/".$urlTelegramChat),
                         'parse_mode'=>"MARKDOWN",
                    ]);
               }
          }
     }
     elseif($commend['commend'] == "deleteChannel")
     {
          if (
               preg_match("/http/", $text)  or  
               preg_match("/https/", $text) or 
               preg_match("/t.me/", $text)  or 
               preg_match("/T.me/", $text)  or 
               preg_match("/@/", $text)    
             )
          {
               $urlTelegramChat = str_replace(array('https', 'http', 't.me', 'T.me', '@', '/', ':'), '', $text);
               $getChat = bot("getChat", [
                    'chat_id'=>"@".$urlTelegramChat,
               ]);         
               if(boolval($getChat->ok) === true)
               {
                    $idChannel = $getChat->result->id;
                    $showing = Manage::channelsShow();
                    if(isset($showing[$idChannel]))
                    {
                         unset($showing[$idChannel]);
                         Manage::channelSave($showing);
                         bot("sendMessage", [
                              'chat_id'=>$chat_id,
                              'message_id'=>$message_id,
                              'text'=>Manage::translator("• تم حذف القناة بنجاح :- \n\n الإسم : ").$getChat->result->title."\n".Manage::translator("المعرف : @").$getChat->result->username."\n".Manage::translator("الإي دي : ").$getChat->result->id,
                              'parse_mode'=>"MARKDOWN",
                              'reply_markup'=>json_encode([
                                   'inline_keyboard'=>[
                                        [["text"=>Manage::translator("- رجوع -"),"callback_data"=>"home"]],
                                   ],
                              ])
                         ]);
                    }
                    else
                    {
                         bot("sendMessage", [
                              'chat_id'=>$chat_id,
                              'message_id'=>$message_id,
                              'text'=>Manage::translator("- القناة غير موجودة"." : "."t.me/".$urlTelegramChat),
                              'parse_mode'=>"MARKDOWN",
                         ]);
                    }
               }
               else
               {
                    bot("sendMessage", [
                         'chat_id'=>$chat_id,
                         'message_id'=>$message_id,
                         'text'=>Manage::translator("- الرابط خطأ يرجى إعادة المحاولة"." : "."t.me/".$urlTelegramChat),
                         'parse_mode'=>"MARKDOWN",
                    ]);
               }
          }
     }
}

// if($text == "/panel")
// {
//      bot("sendMessage", [
//           'chat_id'=>$chat_id,
//           'message_id'=>$message_id,
//           'text'=>Manage::translator("مرحبا بك سيدي"),
//           'parse_mode'=>"MARKDOWN",
//      ]);
// } 