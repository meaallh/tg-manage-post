<?php

class Manage
{
     public static function exsits()
     {
          $path = __DIR__."/../data/settings.json";
          if(!file_exists($path))
          {
               file_put_contents($path, json_encode(self::defaults()));
          }
     }
     public static function show()
     {
          self::exsits();
          $path = __DIR__."/../data/settings.json";
          return json_decode(file_get_contents($path), true);
        }
        public static function admins()
        {
          $showing = self::show();
          return $showing['admins']['all'];
        }
        public static function save(array $array)
        {
            $path = __DIR__."/../data/settings.json";
            file_put_contents($path, json_encode($array));
        
     }
     public static function translator(string|int $text)
     {
        $showing = self::show();
        if($showing['properties']['language'] == "ar")
        {
            return $text;
        }
        else
        {
            $gettext = Translators::translate("ar", $showing['properties']['language'], $text, 5);
            return $gettext;
        }
    }
    public static function addCommend(string $text, string|int $id, string|int $message_id = "none")
    {
        $path = __DIR__."/../data/commend.json";
        file_put_contents($path, json_encode(["commend"=>$text, "self"=>$id, "mid"=>$message_id]));
        return true;
    }
    public static function toTextablePermissionBool(string $permissions)
    {
        if($permissions == true)
        {
            return "مفعلة";
        }
        elseif($permissions == false)
        {
            return "مغلقة";
        }
    }
    public static function toTextablePermission(string $permissions)
    {
        $array = [
            "can_be_edited"=>"إمكانية تعديل المنشورات",
            "can_manage_chat"=>"إدارة القنوات",
            "can_change_info"=>"تغيير معلومات القناة",
            "can_delete_messages"=>"حذف الرسائل",
            "can_post_messages"=>"نشر الرسائل",
            "can_edit_messages"=>"تعديل الرسائل",
            "can_invite_users"=>"دعوة المستخدمين",
            "can_restrict_members"=>"تقييد الأعضاء",
            "can_pin_messages"=>"تثبيت الرسائل",
            "can_promote_members"=>"الترويج للأعضاء",
            "can_manage_video_chats"=>"إدارة محادثات الفيديو",
            "can_manage_voice_chats"=>"إدارة المحادثات الصوتيه",
            "is_anonymous"=>"مجهول",
        ];
        return $array[$permissions];
    }
    public static function toTextable ($text)
    {
        $arraysn = [
            "up"=>"النص العلوي",
            "down"=>"النص السفلي",
            "copyriht"=>"الحقوق",
            "space_up"=>"بين النص العلوي والمنشور",
            "space_down"=>"بين النص السفلي والمنشور",
        ];
        return $arraysn[$text];
    }
    public static function printCommend()
    {
        $path = __DIR__."/../data/commend.json";
        return json_decode(file_get_contents($path), true);
    }
    public static function channelsExsists()
    {
        $path = __DIR__."/../data/channels.json";
        if(!file_exists($path))
        {
            file_put_contents($path, json_encode([]));
        }
    }
    public static function channelsShow()
    {
        self::channelsExsists();
        $path = __DIR__."/../data/channels.json";
        return json_decode(file_get_contents($path), true);
    }
    public static function channelsNew(string|int $id, string $title)
    {
        $showing = self::channelsShow();
        $showing[$id] = [
            'name'=>$title,
            'settings'=>[
                "up"=>"",
                "down"=>"",
                "copyriht"=>"",
                "space_up"=>"\n\n",
                "space_down"=>"\n\n",
            ],
        ];
        self::channelSave($showing);
    }
    public static function channelsPrint()
    {
        $showing = self::channelsShow();
        $array = ["print"=>[], "count"=>0];
        foreach($showing as $val)
        {
            $array['print'][] = $val['name'];

        }
        $array['count'] = count($array['print']);
        return $array;
    }
    
    
    public static function channelSave(array $array)
    {
        $path = __DIR__."/../data/channels.json";
        file_put_contents($path, json_encode($array));
    }
    public static function exsitsCommend()
    {
        $path = __DIR__."/../data/commend.json";
        if(file_exists($path))
        {
            return true;
        }
        else
        {
            return false;
        }

    }
    public static function removeCommend()
    {
        $path = __DIR__."/../data/commend.json";
        $ex = self::exsitsCommend();
        if($ex == true)
        {
            unlink($path);
        }
    }
     public static function defaults()
     {
            $array = [
                    "admins"=>[
                            "main"=>file_get_contents(__DIR__."/../id.txt"), /* 1 */
                            "all"=>[
                                
                            ],
                    ],
                    "properties"=>[
                            "start"=>[
                                "admin"=>"مرحبا بك في بوت إدارة القنوات", /* 1 */
                                "user"=>"مرحبا بك في بوت إدارة القنوات",    /* 1 */
                            ],
                            "language"=>"ar",
                    ],
                    "forwards"=>[
                            "private_forward"=>false,
                            "type_forward"=>"all", // all , onec
                    ],
          ];
          return $array;
     }
     public static function lassAuto(string $name, array $collec, int|string $collections = "Adport")
     {
        $arr = [];
        if($collections == "Adport")
        {
            foreach($collec as $key => $value)
            {
                $arr[] = $value;
                
            }
            return $arr;
        }
     }
}

class Translators
{
    public static function translate($source, $target, $text, $attempts = 5)
    {
        if (is_array($text)) {
            $translation = self::requestTranslationArray($source, $target, $text, $attempts = 5);
        } else {
            $translation = self::requestTranslation($source, $target, $text, $attempts = 5);
        }
        return $translation;
    }
    protected static function requestTranslationArray($source, $target, $text, $attempts)
    {
        $arr = array();
        foreach ($text as $value) {
            usleep(500000);
            $arr[] = self::requestTranslation($source, $target, $value, $attempts = 5);
        }
        return $arr;
    }
    protected static function requestTranslation($source, $target, $text, $attempts)
    {
        $url = 'https://translate.google.com/translate_a/single?client=at&dt=t&dt=ld&dt=qca&dt=rm&dt=bd&dj=1&hl=uk-RU&ie=UTF-8&oe=UTF-8&inputm=2&otf=2&iid=1dd3b944-fa62-4b55-b330-74909a99969e';
        $fields = array(
            'sl' => urlencode($source),
            'tl' => urlencode($target),
            'q' => urlencode($text),
        );
        if (strlen($fields['q']) >= 5000) {
            throw new \Exception('Maximum number of characters exceeded: 5000');
        }
        $fields_string = self::fieldsString($fields);
        $content = self::curlRequest($url, $fields, $fields_string, 0, $attempts);
        if (null === $content) {
            return '';
        } else {
            return self::getSentencesFromJSON($content);
        }
    }
    protected static function getSentencesFromJSON($json)
    {
        $arr = json_decode($json, true);
        $sentences = '';

        if (isset($arr['sentences'])) {
            foreach ($arr['sentences'] as $s) {
                $sentences .= isset($s['trans']) ? $s['trans'] : '';
            }
        }

        return $sentences;
    }
    protected static function curlRequest($url, $fields, $fields_string, $i, $attempts)
    {
        ++$i;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, count($fields));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_ENCODING, 'UTF-8');
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 15);
        curl_setopt($ch, CURLOPT_USERAGENT, 'AndroidTranslate/5.3.0.RC02.130475354-53000263 5.1 phone TRANSLATE_OPM5_TEST_1');
        $result = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        if (false === $result || 200 !== $httpcode) {
            if ($i >= $attempts) {
                return null;
            } else {
                usleep(1500000);
                return self::curlRequest($url, $fields, $fields_string, $i, $attempts);
            }
        } else {
            return $result;
        }
        curl_close($ch);
    }
    protected static function fieldsString($fields)
    {
        $fields_string = '';
        foreach ($fields as $key => $value) {
            $fields_string .= $key.'='.$value.'&';
        }

        return rtrim($fields_string, '&');
    }
}
