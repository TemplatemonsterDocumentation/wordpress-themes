<?php
  /* Currently available $chatLocale: en, de, es, fr, it, ru */
  $chatLocale = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2)=='en' ? '' : substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
  $SECRET_KEY = 'lak_asdg345';
  /* Chat connection parameters: */
  $chatParams['room'] = 'support-zemez';
  $chatParams['email'] = $_POST['umail'];
  $chatParams['nick'] = $_POST['uname'];
  $chatParams['project'] = 'zemez';
  $chatParams['question'] = '';
  $chatParams['referer'] = isSet($_GET['referer'])? $_SERVER['SERVER_NAME'].$_GET['referer'] : $_SERVER['HTTP_REFERER'];
  ksort($chatParams);
  $chatParams['key'] = md5(implode("", $chatParams).$SECRET_KEY);
  $chatUrl = str_replace('{$chatParams}', http_build_query($chatParams), 'http://chat.template-help.com/'.$chatLocale.'/?{$chatParams}');

  echo $chatUrl;
  
?>