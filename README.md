__باللغة العربية :__ 
# بوت إدارة القنوات على منصة التيليجرام .


## [ماذا يعمل البوت](#عمل-البوت)
## [طريقة التثبيت](#التثبيت)
## [المميزات التقنية](#المميزات-التقنية)
## [مميزات البوت](#مميزات-البوت)
## [الميزات المدفوعة](#النسخة-المدفوعة)

# عمل البوت
<p>هذا البوت يقوم بتنظيم المنشورات على القناة إضافة خواص عليها مثل الروابط والنصوص الثابتة وتذييل المنشورات ، يمكن الإعتماد عليه في إدارة منشورات القناة ويستخدم التوجيه إلى البوت لحذف الإقتباسات من القنوات الأخرى</p>

# التثبيت
### 1- قم بتحميل المشروع
### 2- قم بفتح الملف [id.txt](id.txt)
### 3- إمسح الإيدي الموجود وضع إيدي المشرف الرئيسي
### 5- قم بفتح ملف [index.php](index.php) بتعديل التوكن "Token" كما التالي
```php
<?php
ob_start();
$API_KEY = "12345678:ABEC11d9cKWGXgW-tS5TpSfNIu6NXV7mVng"; //Token 
define('API_KEY', $API_KEY);
if(!is_file("webhook.txt")){
     echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] . "" . $_SERVER['SCRIPT_NAME']); 
     file_put_contents("webhook.txt","yes");
}
?>
``` 
### 6- قم بوضع توكنك الجديد بدلا عن 

```php
$API_KEY = "12345678678:ABEC11d9cKWGXgW-tS5TpSfNIu6NXV7mVng"; //Token 
```
### بين "" ليصبح هكذا 
```php
$API_KEY = "5407040118:AAEC11d9cLPZBgW-GvggfvioiiHgfNzyzV7mUs"; //Token 
```
### 7- قم برفعة على إستضافة ويب وقم بتشغيل ملف index.php

# المميزات التقنية
> <h3>مكتوب بلغة php</h3>
> <h3>مكتوب بطريقة دقيقة لتحصل على أقل سطور ممكنه وسرعة عالية وحماية أكثر</h3>
> <h3>تخزين البيانات بواسطة json ولكن بدون تشفير</h3>
> <h3>إستدعاء سريع للبيانات</h3>
# مميزات البوت
> ### وجهة "للمشرف" سلسة وسريعة التحكم 
> ### لوحة مفاتيح "inline_keyboard" خاصة بالمشرف
> ### إمكانية رفع مشرفين آخرين وحذفهم بسلاسة
> ### إمكانية حذف وإضافة "5" قنوات - [يمكن ترقيتها لتحصل على عدد غير محدود من القنوات في النسخة المدفوعة](#النسخة-المدفوعة)
> ### إضافة خصائص للمنشور على القناة ، رأس المنشور ، أسفل المشور ، الحقوق ورابط القناة ، بين المنشور والنص السفلي ، بين المنشور والنص السفلي
> ### يمكنك تحديد رسالة "start" أو إبدأ للمشرفين والمستخدمين وحذفها
> ### يمكنك التحكم بنوع التوجيه إلى البوت بشكل جماعي أو فردي للقنوات المحددة .
> ### يمكنك إستعراض القنوات الموجودة لديك وإحصاء عددها والتحكم بها بشكل كامل
# النسخة المدفوعة 
**من خلال شرائك للنسخة المدفوعة سوف تتيح لك المميزات التالية بجانب المميزات العادية وهي :**
> ## حماية أكثر
> ## تشفير بيانات التخزين json عبر تشفير خاص
> ## إمكانية رفع لا محدود من المشرفين
> ## الوصول إلى كافة البيانات والمعلومات مع العلم أن الوصول في النسخة العادية غير متوفر
> ## إمكانية ترجمة المنشورات داخل القناة
> ## إمكانية ترجمة البوت لأي لغة أخرى عبر تحديد اللغة بواسطة المشرف أو تلقائيا حسب لغة المستخدم
> ## عدد غير محدود من القنوات
> ## إستقبال الرسائل الموجهه من الحسابات الخاصة أو بوتات أخرى
> ## إمكانية طباعة الخصائص مثل ، عدد المشتركين ، المسافات ، الأسماء
> ## زر أسفل كل منشور
# [لشراء النسخة المدفوعة تواصل مع المبرمج عبر تيليجرام](https://t.me/zyzzzyz) بسعر ~~$20~~ خصم حتى [$15](https://t.me/zyzzzyz)

<br>
<br>
<br>
<br>
<br>
<br>
<br>

---
# [جميع الحقوق محفوظة للمطور الجهادي ](https://t.me/zyzzzyz) © 2022 - 2023 عبر تيليجرام [@zyzzzyz](https://t.me/zyzzzyz)
---

__In English :__
# Channel management bot on the Telegram platform.


## [what does the bot do](#work-bot)
## [Install Method](#install)
## [Technical Features](#Technical-Features)
## [Bot Features](#Features-of-the-bot)
## [Paid Features](#Paid-version)

# work bot
<p>This bot organizes the posts on the channel, adding features to it, such as links, static texts, and footer posts.

# install
### 1- Download the project
### 2- Open the file [id.txt](id.txt)
### 3- Erase the existing hands and put the hands of the main supervisor
### 5- Open the file [index.php](index.php) by modifying the token as follows
```php
<?php
ob_start();
$API_KEY = "12345678:ABEC11d9cKWGXgW-tS5TpSfNIu6NXV7mVng"; //Token
define('API_KEY', $API_KEY);
if(!is_file("webhook.txt")){
     echo file_get_contents("https://api.telegram.org/bot" . API_KEY . "/setwebhook?url=" . $_SERVER['SERVER_NAME'] ."" . $_SERVER['SCRIPT_NAME']);
     file_put_contents("webhook.txt","yes");
}
?>
```
### 6- Put your new token instead of

```php
$API_KEY = "12345678678:ABEC11d9cKWGXgW-tS5TpSfNIu6NXV7mVng"; //Token
```
### between "" to become like this
```php
$API_KEY = "5407040118:AAEC11d9cLPZBgW-GvggfvioiiHgfNzyzV7mUs"; //Token
```
### 7- Upload it to a web host and run the index.php . file

# Technical Features
> <h3>php</h3>
> <h3>Written in a precise way to get the fewest possible lines, high speed and more protection</h3>
> <h3>Data stored with json but no encryption</h3>
> <h3>Quick Data Recall</h3>
# Features of the bot
> ### Supervisor's destination for smooth and fast control
> ### admin "inline_keyboard"
> ### Possibility to upload and delete other admins smoothly
> ### The ability to delete and add "5" channels - [can be upgraded to get an unlimited number of channels in the paid version](#paid-version)
> ### Add properties for the post on the channel, post header, post bottom, rights and channel link, between the post and the bottom text, between the post and the bottom text
> ### You can set the 'start' message to admins and users and delete it
> ### You can control the type of routing to the bot collectively or individually for the selected channels.
> ### You can browse the channels you have, count their number and control them completely
# Paid version
**By purchasing the paid version, it will give you the following features besides the regular features:**
> ## more protection
> ## Encrypt json storage data via special encryption
> ## Unlimited uploading from moderators
> ## Access to all data and information knowing that access in the regular version is not available
> ## The ability to translate posts within the channel
> ## The ability to translate the bot to any other language by selecting the language by the admin or automatically according to the user's language
> ## Unlimited number of channels
> ## Receiving messages from private accounts or other bots
> ## The ability to print properties such as, number of subscribers, spaces, names
> ## button at the bottom of each post
# [To buy the paid version, contact the programmer via Telegram](https://t.me/zyzzzyz) at a price of ~~$20~~ discount until [$15$$](https://t.me/zyzzzyz)

<br>
<br>
<br>
<br>
<br>
<br>
<br>

---
# [All rights reserved to Jihadi Developer](https://t.me/zyzzzyz) © 2022 - 2023 via Telegram [@zyzzzyz](https://t.me/zyzzzyz)
---
