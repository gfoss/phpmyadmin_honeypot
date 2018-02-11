<?php
//Fake PHPinfo(Windows)

error_reporting(0);//Turn off all reporting

$VERSION=explode(" ",$_SERVER['SERVER_SOFTWARE']);
echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"DTD/xhtml1-transitional.dtd">
<html><head>
<style type="text/css">
body {background-color: #ffffff; color: #000000;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse;}
.center {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: left;}
.center th { text-align: center !important; }
td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccccff; font-weight: bold; color: #000000;}
.h {background-color: #9999cc; font-weight: bold; color: #000000;}
.v {background-color: #cccccc; color: #000000;}
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color:
#000000;}
</style>
<title>phpinfo()</title><meta name="ROBOTS" content="NOINDEX,FOLLOW,NOARCHIVE"
/></head>
<body><div class="center">
<table border="0" cellpadding="3" width="600">
<tr class="h"><td>
<a href="http://www.php.net/"><img border="0"
src="http://www.php.net/images/logos/php-med-trans.png" alt="PHP Logo"
/></a><h1 class="p">PHP Version 5.3.8</h1>
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr><td class="e">System </td><td class="v">Windows NT VPN 6.1 build 7601
(Windows Server 2008 R2 Standard Edition Service Pack 1) AMD64  </td></tr>
<tr><td class="e">Build Date </td><td class="v">Jan 15 2012 02:48:25
</td></tr>
<tr><td class="e">Compiler </td><td class="v">MSVC9 (Visual C++ 2008)
</td></tr>
<tr><td class="e">Architecture </td><td class="v">x64 </td></tr>
<tr><td class="e">Configure Command </td><td class="v">cscript /nologo
configure.js  &quot;--enable-snapshot-build&quot;
&quot;--with-pdo-oci=C:\php-sdk\php53dev\vc9\x64\deps\instantclient_10_2\sdk,shared&quot;
&quot;--with-oci8=C:\php-sdk\php53dev\vc9\x64\deps\instantclient_10_2\sdk,shared&quot;
&quot;--with-oci8-11g=C:\php-sdk\php53dev\vc9\x64\deps\instantclient_11_2\sdk,shared&quot;
&quot;--disable-debug-pack&quot; &quot;--disable-static-analyze&quot;
</td></tr>
<tr><td class="e">Server API </td><td class="v">Apache 2.0 Handler </td></tr>
<tr><td class="e">Virtual Directory Support </td><td class="v">Enabled
</td></tr>
<tr><td class="e">Configuration File (php.ini) Path </td><td
class="v">C:\Windows </td></tr>
<tr><td class="e">Loaded Configuration File </td><td
class="v">C:\wamp\bin\apache\Apache2\bin\php.ini </td></tr>
<tr><td class="e">Scan this dir for additional .ini files </td><td
class="v">(none) </td></tr>
<tr><td class="e">Additional .ini files parsed </td><td class="v">(none)
</td></tr>

<tr><td class="e">PHP API </td><td class="v">20090626 </td></tr>
<tr><td class="e">PHP Extension </td><td class="v">20090626 </td></tr>
<tr><td class="e">Zend Extension </td><td class="v">220090626 </td></tr>
<tr><td class="e">Zend Extension Build </td><td class="v">API220090626,TS,VC9
</td></tr>
<tr><td class="e">PHP Extension Build </td><td class="v">API20090626,TS,VC9
</td></tr>
<tr><td class="e">Debug Build </td><td class="v">no </td></tr>

<tr><td class="e">Thread Safety </td><td class="v">enabled </td></tr>
<tr><td class="e">Zend Memory Manager </td><td class="v">enabled </td></tr>
<tr><td class="e">Zend Multibyte Support </td><td class="v">disabled
</td></tr>
<tr><td class="e">IPv6 Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Registered PHP Streams </td><td class="v">php, file, glob,
data, http, ftp, zip, compress.zlib, phar  </td></tr>
<tr><td class="e">Registered Stream Socket Transports </td><td class="v">tcp,
udp </td></tr>

<tr><td class="e">Registered Stream Filters </td><td
class="v">convert.iconv.*, mcrypt.*, mdecrypt.*, string.rot13, string.toupper,
string.tolower, string.strip_tags, convert.*, consumed, dechunk, zlib.*
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
<a href="http://www.zend.com/"><img border="0"
src="http://db.tt/cTR4JQdr" alt="Zend logo"
/></a>
This program makes use of the Zend Scripting Language Engine:<br
/>Zend&nbsp;Engine&nbsp;v2.3.0,&nbsp;Copyright&nbsp;(c)&nbsp;1998-2012&nbsp;Zend&nbsp;Technologies<br
/>&nbsp;&nbsp;&nbsp;&nbsp;with&nbsp;Xdebug&nbsp;v2.1.2,&nbsp;Copyright&nbsp;(c)&nbsp;2002-2011,&nbsp;by&nbsp;Derick&nbsp;Rethans<br
/></td></tr>
</table><br />
<hr />
<h1><a href="/phpinfo.php?=PHPB8B5F2A0-3C92-11d3-A3A9-4C7B08C10000">PHP
Credits</a></h1>
<hr />
<h1>Configuration</h1>
<h2><a name="module_apache2handler">apache2handler</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Apache Version </td><td class="v">'.$VERSION[0].'(Win64)
PHP/5.3.8 </td></tr>
<tr><td class="e">Apache API Version </td><td class="v">20051115 </td></tr>
<tr><td class="e">Server Administrator </td><td class="v">admin@localhost
</td></tr>
<tr><td class="e">Hostname:Port </td><td
class="v">'.$_SERVER['HTTP_HOST'].':80 </td></tr>
<tr><td class="e">Max Requests </td><td class="v">Per Child: 0 - Keep Alive:
on - Max Per Connection: 100 </td></tr>
<tr><td class="e">Timeouts </td><td class="v">Connection: 300 - Keep-Alive: 5
</td></tr>
<tr><td class="e">Virtual Server </td><td class="v">No </td></tr>
<tr><td class="e">Server Root </td><td class="v">C:/wamp/bin/apache/Apache2
</td></tr>
<tr><td class="e">Loaded Modules </td><td class="v">core mod_win32 mpm_winnt
http_core mod_so mod_actions mod_alias mod_asis mod_auth_basic
mod_authn_default mod_authn_file mod_authz_default mod_authz_groupfile
mod_authz_host mod_authz_user mod_autoindex mod_cgi mod_dir mod_env
mod_include mod_isapi mod_log_config mod_mime mod_negotiation mod_setenvif
mod_php5 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">engine</td><td class="v">1</td><td class="v">1</td></tr>
<tr><td class="e">last_modified</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">xbithack</td><td class="v">0</td><td class="v">0</td></tr>
</table><br />
<h2>Apache Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">HTTP_HOST </td><td class="v">'.$_SERVER['HTTP_HOST'].'
</td></tr>
<tr><td class="e">HTTP_USER_AGENT </td><td
class="v">'.$_SERVER['HTTP_USER_AGENT'].' </td></tr>
<tr><td class="e">HTTP_ACCEPT </td><td
class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
</td></tr>
<tr><td class="e">HTTP_ACCEPT_LANGUAGE </td><td
class="v">en-GB,en-US;q=0.8,en;q=0.6 </td></tr>
<tr><td class="e">HTTP_ACCEPT_ENCODING </td><td class="v">gzip, deflate,sdch
</td></tr>
<tr><td class="e">HTTP_CONNECTION </td><td class="v">keep-alive </td></tr>
<tr><td class="e">PATH </td><td
class="v">C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;
</td></tr>
<tr><td class="e">SystemRoot </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">COMSPEC </td><td class="v">C:\Windows\system32\cmd.exe
</td></tr>
<tr><td class="e">PATHEXT </td><td
class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC </td></tr>
<tr><td class="e">WINDIR </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">SERVER_SIGNATURE </td><td class="v">no value </td></tr>
<tr><td class="e">SERVER_SOFTWARE </td><td class="v">'.$VERSION[0].' (Win64)
PHP/5.3.8 </td></tr>
<tr><td class="e">SERVER_NAME </td><td class="v">'.$_SERVER['SERVER_NAME'].'
</td></tr>
<tr><td class="e">SERVER_ADDR </td><td class="v">'.$_SERVER['SERVER_ADDR'].'
</td></tr>
<tr><td class="e">SERVER_PORT </td><td class="v">'.$_SERVER['SERVER_PORT'].'
</td></tr>

<tr><td class="e">REMOTE_ADDR </td><td class="v">'.$_SERVER['REMOTE_ADDR'].'
</td></tr>
<tr><td class="e">DOCUMENT_ROOT </td><td class="v">C:/wamp/www </td></tr>
<tr><td class="e">SERVER_ADMIN </td><td class="v">admin@localhost </td></tr>
<tr><td class="e">SCRIPT_FILENAME </td><td
class="v">C:/wamp/www/'.$_SERVER['SCRIPT_NAME'].' </td></tr>
<tr><td class="e">REMOTE_PORT </td><td class="v">'.$_SERVER['REMOTE_PORT'].'
</td></tr>
<tr><td class="e">GATEWAY_INTERFACE </td><td class="v">CGI/1.1 </td></tr>

<tr><td class="e">SERVER_PROTOCOL </td><td class="v">HTTP/1.1 </td></tr>
<tr><td class="e">REQUEST_METHOD </td><td class="v">GET </td></tr>
<tr><td class="e">QUERY_STRING </td><td
class="v"><i>'.$_SERVER['QUERY_STRING'].'</i> </td></tr>
<tr><td class="e">REQUEST_URI </td><td class="v">'.$_SERVER['REQUEST_URI'].'
</td></tr>
<tr><td class="e">SCRIPT_NAME </td><td class="v">'.$_SERVER['SCRIPT_NAME'].'
</td></tr>
</table><br />

<h2>HTTP Headers Information</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th colspan="2">HTTP Request Headers</th></tr>
<tr><td class="e">HTTP Request </td><td
class="v">'.$_SERVER['REQUEST_METHOD'].' '.$_SERVER['REQUEST_URI'].'
'.$_SERVER['SERVER_PROTOCOL'].' </td></tr>
<tr><td class="e">Host </td><td class="v">'.$_SERVER['HTTP_HOST'].' </td></tr>
<tr><td class="e">User-Agent </td><td
class="v">'.$_SERVER['HTTP_USER_AGENT'].' </td></tr>
<tr><td class="e">Accept </td><td
class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8
</td></tr>
<tr><td class="e">Referer </td><td class="v">'.$_SERVER['HTTP_REFERER'].'
</td></tr>
<tr><td class="e">Accept-Language </td><td
class="v">en-GB,en-US;q=0.8,en;q=0.6 </td></tr>
<tr><td class="e">Accept-Encoding </td><td class="v">gzip, deflate,sdch
</td></tr>
<tr><td class="e">Connection </td><td class="v">keep-alive </td></tr>
<tr class="h"><th colspan="2">HTTP Response Headers</th></tr>
<tr><td class="e">X-Powered-By </td><td class="v">PHP/5.3.8 </td></tr>

<tr><td class="e">Transfer-Encoding </td><td class="v">chunked </td></tr>
<tr><td class="e">Content-Type </td><td class="v">text/html </td></tr>
</table><br />
<h2><a name="module_bcmath">bcmath</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">BCMath support </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>

<tr><td class="e">bcmath.scale</td><td class="v">0</td><td
class="v">0</td></tr>
</table><br />
<h2><a name="module_calendar">calendar</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Calendar support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_com_dotnet">com_dotnet</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>COM support</th><th>enabled</th></tr>

<tr class="h"><th>DCOM support</th><th>disabled</th></tr>
<tr class="h"><th>.Net support</th><th>enabled</th></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">com.allow_dcom</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">com.autoregister_casesensitive</td><td class="v">1</td><td
class="v">1</td></tr>

<tr><td class="e">com.autoregister_typelib</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">com.autoregister_verbose</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">com.code_page</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">com.typelib_file</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
</table><br />

<h2><a name="module_Core">Core</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">PHP Version </td><td class="v">5.3.8 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">allow_call_time_pass_reference</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">allow_url_fopen</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">allow_url_include</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">always_populate_raw_post_data</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">arg_separator.input</td><td class="v">&amp;</td><td
class="v">&amp;</td></tr>
<tr><td class="e">arg_separator.output</td><td class="v">&amp;</td><td
class="v">&amp;</td></tr>
<tr><td class="e">asp_tags</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">auto_append_file</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>

<tr><td class="e">auto_globals_jit</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">auto_prepend_file</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">browscap</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">default_charset</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">default_mimetype</td><td class="v">text/html</td><td
class="v">text/html</td></tr>

<tr><td class="e">define_syslog_variables</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">disable_classes</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">disable_functions</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">display_errors</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">display_startup_errors</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">doc_root</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_ext</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">docref_root</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">enable_dl</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">error_append_string</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

<tr><td class="e">error_log</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">error_prepend_string</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">error_reporting</td><td class="v">30719</td><td
class="v">30719</td></tr>
<tr><td class="e">exit_on_timeout</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">expose_php</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">extension_dir</td><td
class="v">c:/wamp/bin/php/php5.3.8/ext/</td><td
class="v">c:/wamp/bin/php/php5.3.8/ext/</td></tr>
<tr><td class="e">file_uploads</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">highlight.bg</td><td class="v"><font style="color:
#FFFFFF">#FFFFFF</font></td><td class="v"><font style="color:
#FFFFFF">#FFFFFF</font></td></tr>
<tr><td class="e">highlight.comment</td><td class="v"><font style="color:
#FF8000">#FF8000</font></td><td class="v"><font style="color:
#FF8000">#FF8000</font></td></tr>
<tr><td class="e">highlight.default</td><td class="v"><font style="color:
#0000BB">#0000BB</font></td><td class="v"><font style="color:
#0000BB">#0000BB</font></td></tr>

<tr><td class="e">highlight.html</td><td class="v"><font style="color:
#000000">#000000</font></td><td class="v"><font style="color:
#000000">#000000</font></td></tr>
<tr><td class="e">highlight.keyword</td><td class="v"><font style="color:
#007700">#007700</font></td><td class="v"><font style="color:
#007700">#007700</font></td></tr>
<tr><td class="e">highlight.string</td><td class="v"><font style="color:
#DD0000">#DD0000</font></td><td class="v"><font style="color:
#DD0000">#DD0000</font></td></tr>
<tr><td class="e">html_errors</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">ignore_repeated_errors</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">ignore_repeated_source</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">ignore_user_abort</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">implicit_flush</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">include_path</td><td class="v">.;C:\php\pear</td><td
class="v">.;C:\php\pear</td></tr>
<tr><td class="e">log_errors</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">log_errors_max_len</td><td class="v">1024</td><td
class="v">1024</td></tr>
<tr><td class="e">magic_quotes_gpc</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">magic_quotes_runtime</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">magic_quotes_sybase</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">mail.add_x_header</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">mail.force_extra_parameters</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mail.log</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">max_execution_time</td><td class="v">30</td><td
class="v">30</td></tr>
<tr><td class="e">max_file_uploads</td><td class="v">20</td><td
class="v">20</td></tr>
<tr><td class="e">max_input_nesting_level</td><td class="v">64</td><td
class="v">64</td></tr>

<tr><td class="e">max_input_time</td><td class="v">60</td><td
class="v">60</td></tr>
<tr><td class="e">max_input_vars</td><td class="v">1000</td><td
class="v">1000</td></tr>
<tr><td class="e">memory_limit</td><td class="v">128M</td><td
class="v">128M</td></tr>
<tr><td class="e">open_basedir</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">output_buffering</td><td class="v">1</td><td
class="v">1</td></tr>

<tr><td class="e">output_handler</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">post_max_size</td><td class="v">8M</td><td
class="v">8M</td></tr>
<tr><td class="e">precision</td><td class="v">14</td><td
class="v">14</td></tr>
<tr><td class="e">realpath_cache_size</td><td class="v">16K</td><td
class="v">16K</td></tr>
<tr><td class="e">realpath_cache_ttl</td><td class="v">120</td><td
class="v">120</td></tr>

<tr><td class="e">register_argc_argv</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">register_globals</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">register_long_arrays</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">report_memleaks</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">report_zend_debug</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">request_order</td><td class="v">GP</td><td
class="v">GP</td></tr>
<tr><td class="e">safe_mode</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">safe_mode_exec_dir</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">safe_mode_gid</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">safe_mode_include_dir</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

<tr><td class="e">sendmail_from</td><td class="v">you@yourdomain</td><td
class="v">you@yourdomain</td></tr>
<tr><td class="e">sendmail_path</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">serialize_precision</td><td class="v">100</td><td
class="v">100</td></tr>
<tr><td class="e">short_open_tag</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">SMTP</td><td class="v">localhost</td><td
class="v">localhost</td></tr>

<tr><td class="e">smtp_port</td><td class="v">25</td><td
class="v">25</td></tr>
<tr><td class="e">sql.safe_mode</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">track_errors</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">unserialize_callback_func</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">upload_max_filesize</td><td class="v">2M</td><td
class="v">2M</td></tr>

<tr><td class="e">upload_tmp_dir</td><td class="v">c:/wamp/tmp</td><td
class="v">c:/wamp/tmp</td></tr>
<tr><td class="e">user_dir</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">user_ini.cache_ttl</td><td class="v">300</td><td
class="v">300</td></tr>
<tr><td class="e">user_ini.filename</td><td class="v">.user.ini</td><td
class="v">.user.ini</td></tr>
<tr><td class="e">variables_order</td><td class="v">GPCS</td><td
class="v">GPCS</td></tr>

<tr><td class="e">windows.show_crt_warning</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xmlrpc_error_number</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">xmlrpc_errors</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">y2k_compliance</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">zend.enable_gc</td><td class="v">On</td><td
class="v">On</td></tr>

</table><br />
<h2><a name="module_ctype">ctype</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">ctype functions </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_date">date</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">date/time support </td><td class="v">enabled </td></tr>
<tr><td class="e">&quot;Olson&quot; Timezone Database Version </td><td
class="v">2011.14 </td></tr>

<tr><td class="e">Timezone Database </td><td class="v">internal </td></tr>
<tr><td class="e">Default timezone </td><td class="v">UTC </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">date.default_latitude</td><td class="v">31.7667</td><td
class="v">31.7667</td></tr>
<tr><td class="e">date.default_longitude</td><td class="v">35.2333</td><td
class="v">35.2333</td></tr>

<tr><td class="e">date.sunrise_zenith</td><td class="v">90.583333</td><td
class="v">90.583333</td></tr>
<tr><td class="e">date.sunset_zenith</td><td class="v">90.583333</td><td
class="v">90.583333</td></tr>
<tr><td class="e">date.timezone</td><td class="v">UTC</td><td
class="v">UTC</td></tr>
</table><br />
<h2><a name="module_dom">dom</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">DOM/XML </td><td class="v">enabled </td></tr>

<tr><td class="e">DOM/XML API Version </td><td class="v">20031129 </td></tr>
<tr><td class="e">libxml Version </td><td class="v">2.7.8 </td></tr>
<tr><td class="e">HTML Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPath Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XPointer Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Schema Support </td><td class="v">enabled </td></tr>

<tr><td class="e">RelaxNG Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_ereg">ereg</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Regex Library </td><td class="v">Bundled library enabled
</td></tr>
</table><br />
<h2><a name="module_filter">filter</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Input Validation and Filtering </td><td class="v">enabled
</td></tr>

<tr><td class="e">Revision </td><td class="v">$Revision: 321634 $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">filter.default</td><td class="v">unsafe_raw</td><td
class="v">unsafe_raw</td></tr>
<tr><td class="e">filter.default_flags</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

</table><br />
<h2><a name="module_ftp">ftp</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">FTP support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_gd">gd</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">GD Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GD Version </td><td class="v">bundled (2.0.34 compatible)
</td></tr>

<tr><td class="e">FreeType Support </td><td class="v">enabled </td></tr>
<tr><td class="e">FreeType Linkage </td><td class="v">with freetype </td></tr>
<tr><td class="e">FreeType Version </td><td class="v">2.4.6 </td></tr>
<tr><td class="e">T1Lib Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GIF Read Support </td><td class="v">enabled </td></tr>
<tr><td class="e">GIF Create Support </td><td class="v">enabled </td></tr>

<tr><td class="e">JPEG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libJPEG Version </td><td class="v">6b </td></tr>
<tr><td class="e">PNG Support </td><td class="v">enabled </td></tr>
<tr><td class="e">libPNG Version </td><td class="v">1.2.46 </td></tr>
<tr><td class="e">WBMP Support </td><td class="v">enabled </td></tr>
<tr><td class="e">XBM Support </td><td class="v">enabled </td></tr>

</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">gd.jpeg_ignore_warning</td><td class="v">0</td><td
class="v">0</td></tr>
</table><br />
<h2><a name="module_hash">hash</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">hash support </td><td class="v">enabled </td></tr>

<tr><td class="e">Hashing Engines </td><td class="v">md2 md4 md5 sha1 sha224
sha256 sha384 sha512 ripemd128 ripemd160 ripemd256 ripemd320 whirlpool
tiger128,3 tiger160,3 tiger192,3 tiger128,4 tiger160,4 tiger192,4 snefru
snefru256 gost adler32 crc32 crc32b salsa10 salsa20 haval128,3 haval160,3
haval192,3 haval224,3 haval256,3 haval128,4 haval160,4 haval192,4 haval224,4
haval256,4 haval128,5 haval160,5 haval192,5 haval224,5 haval256,5  </td></tr>
</table><br />
<h2><a name="module_iconv">iconv</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">iconv support </td><td class="v">enabled </td></tr>
<tr><td class="e">iconv implementation </td><td class="v">&quot;libiconv&quot;
</td></tr>
<tr><td class="e">iconv library version </td><td class="v">1.11 </td></tr>

</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">iconv.input_encoding</td><td class="v">ISO-8859-1</td><td
class="v">ISO-8859-1</td></tr>
<tr><td class="e">iconv.internal_encoding</td><td class="v">ISO-8859-1</td><td
class="v">ISO-8859-1</td></tr>
<tr><td class="e">iconv.output_encoding</td><td class="v">ISO-8859-1</td><td
class="v">ISO-8859-1</td></tr>

</table><br />
<h2><a name="module_json">json</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">json support </td><td class="v">enabled </td></tr>
<tr><td class="e">json version </td><td class="v">1.2.1 </td></tr>
</table><br />
<h2><a name="module_libxml">libxml</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">libXML support </td><td class="v">active </td></tr>

<tr><td class="e">libXML Compiled Version </td><td class="v">2.7.8 </td></tr>
<tr><td class="e">libXML Loaded Version </td><td class="v">20708 </td></tr>
<tr><td class="e">libXML streams </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_mbstring">mbstring</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Multibyte Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Multibyte string engine </td><td class="v">libmbfl
</td></tr>

<tr><td class="e">HTTP input encoding translation </td><td class="v">disabled
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>mbstring extension makes use of "streamable kanji code
filter and converter", which is distributed under the GNU Lesser General
Public License version 2.1.</th></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Multibyte (japanese) regex support </td><td
class="v">enabled </td></tr>
<tr><td class="e">Multibyte regex (oniguruma) version </td><td class="v">4.7.1
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">

<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mbstring.detect_order</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.encoding_translation</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">mbstring.func_overload</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">mbstring.http_input</td><td class="v">pass</td><td
class="v">pass</td></tr>

<tr><td class="e">mbstring.http_output</td><td class="v">pass</td><td
class="v">pass</td></tr>
<tr><td class="e">mbstring.http_output_conv_mimetypes</td><td
class="v">^(text/|application/xhtml\+xml)</td><td
class="v">^(text/|application/xhtml\+xml)</td></tr>
<tr><td class="e">mbstring.internal_encoding</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mbstring.language</td><td class="v">neutral</td><td
class="v">neutral</td></tr>
<tr><td class="e">mbstring.strict_detection</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">mbstring.substitute_character</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_mcrypt">mcrypt</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>mcrypt support</th><th>enabled</th></tr>
<tr class="h"><th>mcrypt_filter support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">2.5.8 </td></tr>

<tr><td class="e">Api No </td><td class="v">20021217 </td></tr>
<tr><td class="e">Supported ciphers </td><td class="v">cast-128 gost
rijndael-128 twofish cast-256 loki97 rijndael-192 saferplus wake
blowfish-compat des rijndael-256 serpent xtea blowfish enigma rc2 tripledes
arcfour  </td></tr>
<tr><td class="e">Supported modes </td><td class="v">cbc cfb ctr ecb ncfb nofb
ofb stream  </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mcrypt.algorithms_dir</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

<tr><td class="e">mcrypt.modes_dir</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_mhash">mhash</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">MHASH support </td><td class="v">Enabled </td></tr>
<tr><td class="e">MHASH API Version </td><td class="v">Emulated Support
</td></tr>
</table><br />
<h2><a name="module_mysql">mysql</a></h2>

<table border="0" cellpadding="3" width="600">
<tr class="h"><th>MySQL Support</th><th>enabled</th></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
<tr><td class="e">Client API version </td><td class="v">mysqlnd 5.0.8-dev -
20102224 - $Revision: 321634 $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>

<tr><td class="e">mysql.allow_local_infile</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">mysql.allow_persistent</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">mysql.connect_timeout</td><td class="v">60</td><td
class="v">60</td></tr>
<tr><td class="e">mysql.default_host</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_password</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

<tr><td class="e">mysql.default_port</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_socket</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.default_user</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">mysql.max_links</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>
<tr><td class="e">mysql.max_persistent</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>

<tr><td class="e">mysql.trace_mode</td><td class="v">Off</td><td
class="v">Off</td></tr>
</table><br />
<h2><a name="module_mysqli">mysqli</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>MysqlI Support</th><th>enabled</th></tr>
<tr><td class="e">Client API library version </td><td class="v">mysqlnd
5.0.8-dev - 20102224 - $Revision: 321634 $ </td></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>

<tr><td class="e">Inactive Persistent Links </td><td class="v">0 </td></tr>
<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">mysqli.allow_local_infile</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">mysqli.allow_persistent</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">mysqli.default_host</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_port</td><td class="v">3306</td><td
class="v">3306</td></tr>
<tr><td class="e">mysqli.default_pw</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_socket</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">mysqli.default_user</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

<tr><td class="e">mysqli.max_links</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.max_persistent</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>
<tr><td class="e">mysqli.reconnect</td><td class="v">Off</td><td
class="v">Off</td></tr>
</table><br />
<h2><a name="module_mysqlnd">mysqlnd</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>mysqlnd</th><th>enabled</th></tr>

<tr><td class="e">Version </td><td class="v">mysqlnd 5.0.8-dev - 20102224 -
$Revision: 321634 $ </td></tr>
<tr><td class="e">Compression </td><td class="v">supported </td></tr>
<tr><td class="e">SSL </td><td class="v">supported </td></tr>
<tr><td class="e">Command buffer size </td><td class="v">4096 </td></tr>
<tr><td class="e">Read buffer size </td><td class="v">32768 </td></tr>
<tr><td class="e">Read timeout </td><td class="v">31536000 </td></tr>

<tr><td class="e">Collecting statistics </td><td class="v">Yes </td></tr>
<tr><td class="e">Collecting memory statistics </td><td class="v">Yes
</td></tr>
<tr><td class="e">Tracing </td><td class="v">n/a </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Client statistics</th><th> </th></tr>
<tr><td class="e">bytes_sent </td><td class="v">0 </td></tr>

<tr><td class="e">bytes_received </td><td class="v">0 </td></tr>
<tr><td class="e">packets_sent </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received </td><td class="v">0 </td></tr>
<tr><td class="e">protocol_overhead_in </td><td class="v">0 </td></tr>
<tr><td class="e">protocol_overhead_out </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_ok_packet </td><td class="v">0 </td></tr>

<tr><td class="e">bytes_received_eof_packet </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_rset_header_packet </td><td class="v">0
</td></tr>
<tr><td class="e">bytes_received_rset_field_meta_packet </td><td class="v">0
</td></tr>
<tr><td class="e">bytes_received_rset_row_packet </td><td class="v">0
</td></tr>
<tr><td class="e">bytes_received_prepare_response_packet </td><td class="v">0
</td></tr>
<tr><td class="e">bytes_received_change_user_packet </td><td class="v">0
</td></tr>

<tr><td class="e">packets_sent_command </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_ok </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_eof </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_rset_header </td><td class="v">0 </td></tr>
<tr><td class="e">packets_received_rset_field_meta </td><td class="v">0
</td></tr>
<tr><td class="e">packets_received_rset_row </td><td class="v">0 </td></tr>

<tr><td class="e">packets_received_prepare_response </td><td class="v">0
</td></tr>
<tr><td class="e">packets_received_change_user </td><td class="v">0 </td></tr>
<tr><td class="e">result_set_queries </td><td class="v">0 </td></tr>
<tr><td class="e">non_result_set_queries </td><td class="v">0 </td></tr>
<tr><td class="e">no_index_used </td><td class="v">0 </td></tr>
<tr><td class="e">bad_index_used </td><td class="v">0 </td></tr>

<tr><td class="e">slow_queries </td><td class="v">0 </td></tr>
<tr><td class="e">buffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">unbuffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_buffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_unbuffered_sets </td><td class="v">0 </td></tr>
<tr><td class="e">flushed_normal_sets </td><td class="v">0 </td></tr>

<tr><td class="e">flushed_ps_sets </td><td class="v">0 </td></tr>
<tr><td class="e">ps_prepared_never_executed </td><td class="v">0 </td></tr>
<tr><td class="e">ps_prepared_once_executed </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_server_normal </td><td class="v">0
</td></tr>
<tr><td class="e">rows_fetched_from_server_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_buffered_from_client_normal </td><td class="v">0
</td></tr>

<tr><td class="e">rows_buffered_from_client_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_normal_buffered </td><td
class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_normal_unbuffered </td><td
class="v">0 </td></tr>
<tr><td class="e">rows_fetched_from_client_ps_buffered </td><td class="v">0
</td></tr>
<tr><td class="e">rows_fetched_from_client_ps_unbuffered </td><td class="v">0
</td></tr>
<tr><td class="e">rows_fetched_from_client_ps_cursor </td><td class="v">0
</td></tr>

<tr><td class="e">rows_affected_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_affected_ps </td><td class="v">0 </td></tr>
<tr><td class="e">rows_skipped_normal </td><td class="v">0 </td></tr>
<tr><td class="e">rows_skipped_ps </td><td class="v">0 </td></tr>
<tr><td class="e">copy_on_write_saved </td><td class="v">0 </td></tr>
<tr><td class="e">copy_on_write_performed </td><td class="v">0 </td></tr>

<tr><td class="e">command_buffer_too_small </td><td class="v">0 </td></tr>
<tr><td class="e">connect_success </td><td class="v">0 </td></tr>
<tr><td class="e">connect_failure </td><td class="v">0 </td></tr>
<tr><td class="e">connection_reused </td><td class="v">0 </td></tr>
<tr><td class="e">reconnect </td><td class="v">0 </td></tr>
<tr><td class="e">pconnect_success </td><td class="v">0 </td></tr>

<tr><td class="e">active_connections </td><td class="v">0 </td></tr>
<tr><td class="e">active_persistent_connections </td><td class="v">0
</td></tr>
<tr><td class="e">explicit_close </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_close </td><td class="v">0 </td></tr>
<tr><td class="e">disconnect_close </td><td class="v">0 </td></tr>
<tr><td class="e">in_middle_of_command_close </td><td class="v">0 </td></tr>

<tr><td class="e">explicit_free_result </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_free_result </td><td class="v">0 </td></tr>
<tr><td class="e">explicit_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">implicit_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">mem_emalloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_emalloc_amount </td><td class="v">0 </td></tr>

<tr><td class="e">mem_ecalloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_ecalloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_erealloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_erealloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_efree_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_efree_amount </td><td class="v">0 </td></tr>

<tr><td class="e">mem_malloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_malloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_calloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_calloc_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_realloc_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_realloc_amount </td><td class="v">0 </td></tr>

<tr><td class="e">mem_free_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_free_amount </td><td class="v">0 </td></tr>
<tr><td class="e">mem_estrndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_strndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_estndup_count </td><td class="v">0 </td></tr>
<tr><td class="e">mem_strdup_count </td><td class="v">0 </td></tr>

<tr><td class="e">proto_text_fetched_null </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_bit </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_tinyint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_short </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_int24 </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_int </td><td class="v">0 </td></tr>

<tr><td class="e">proto_text_fetched_bigint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_decimal </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_float </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_double </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_date </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_year </td><td class="v">0 </td></tr>

<tr><td class="e">proto_text_fetched_time </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_datetime </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_timestamp </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_string </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_blob </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_enum </td><td class="v">0 </td></tr>

<tr><td class="e">proto_text_fetched_set </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_geometry </td><td class="v">0 </td></tr>
<tr><td class="e">proto_text_fetched_other </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_null </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_bit </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_tinyint </td><td class="v">0 </td></tr>

<tr><td class="e">proto_binary_fetched_short </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_int24 </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_int </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_bigint </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_decimal </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_float </td><td class="v">0 </td></tr>

<tr><td class="e">proto_binary_fetched_double </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_date </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_year </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_time </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_datetime </td><td class="v">0
</td></tr>
<tr><td class="e">proto_binary_fetched_timestamp </td><td class="v">0
</td></tr>

<tr><td class="e">proto_binary_fetched_string </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_blob </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_enum </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_set </td><td class="v">0 </td></tr>
<tr><td class="e">proto_binary_fetched_geometry </td><td class="v">0
</td></tr>
<tr><td class="e">proto_binary_fetched_other </td><td class="v">0 </td></tr>

<tr><td class="e">init_command_executed_count </td><td class="v">0 </td></tr>
<tr><td class="e">init_command_failed_count </td><td class="v">0 </td></tr>
<tr><td class="e">com_quit </td><td class="v">0 </td></tr>
<tr><td class="e">com_init_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_query </td><td class="v">0 </td></tr>
<tr><td class="e">com_field_list </td><td class="v">0 </td></tr>

<tr><td class="e">com_create_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_drop_db </td><td class="v">0 </td></tr>
<tr><td class="e">com_refresh </td><td class="v">0 </td></tr>
<tr><td class="e">com_shutdown </td><td class="v">0 </td></tr>
<tr><td class="e">com_statistics </td><td class="v">0 </td></tr>
<tr><td class="e">com_process_info </td><td class="v">0 </td></tr>

<tr><td class="e">com_connect </td><td class="v">0 </td></tr>
<tr><td class="e">com_process_kill </td><td class="v">0 </td></tr>
<tr><td class="e">com_debug </td><td class="v">0 </td></tr>
<tr><td class="e">com_ping </td><td class="v">0 </td></tr>
<tr><td class="e">com_time </td><td class="v">0 </td></tr>
<tr><td class="e">com_delayed_insert </td><td class="v">0 </td></tr>

<tr><td class="e">com_change_user </td><td class="v">0 </td></tr>
<tr><td class="e">com_binlog_dump </td><td class="v">0 </td></tr>
<tr><td class="e">com_table_dump </td><td class="v">0 </td></tr>
<tr><td class="e">com_connect_out </td><td class="v">0 </td></tr>
<tr><td class="e">com_register_slave </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_prepare </td><td class="v">0 </td></tr>

<tr><td class="e">com_stmt_execute </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_send_long_data </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_close </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_reset </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_set_option </td><td class="v">0 </td></tr>
<tr><td class="e">com_stmt_fetch </td><td class="v">0 </td></tr>

<tr><td class="e">com_deamon </td><td class="v">0 </td></tr>
<tr><td class="e">bytes_received_real_data_normal </td><td class="v">0
</td></tr>
<tr><td class="e">bytes_received_real_data_ps </td><td class="v">0 </td></tr>
</table><br />
<h2><a name="module_odbc">odbc</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>ODBC Support</th><th>enabled</th></tr>
<tr><td class="e">Active Persistent Links </td><td class="v">0 </td></tr>

<tr><td class="e">Active Links </td><td class="v">0 </td></tr>
<tr><td class="e">ODBC library </td><td class="v">Win32 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">odbc.allow_persistent</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">odbc.check_persistent</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">odbc.default_cursortype</td><td class="v">Static
cursor</td><td class="v">Static cursor</td></tr>
<tr><td class="e">odbc.default_db</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.default_pw</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.default_user</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">odbc.defaultbinmode</td><td class="v">return as is</td><td
class="v">return as is</td></tr>

<tr><td class="e">odbc.defaultlrl</td><td class="v">return up to 4096
bytes</td><td class="v">return up to 4096 bytes</td></tr>
<tr><td class="e">odbc.max_links</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>
<tr><td class="e">odbc.max_persistent</td><td class="v">Unlimited</td><td
class="v">Unlimited</td></tr>
</table><br />
<h2><a name="module_pcre">pcre</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">PCRE (Perl Compatible Regular Expressions) Support </td><td
class="v">enabled </td></tr>

<tr><td class="e">PCRE Library Version </td><td class="v">8.12 2011-01-15
</td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">pcre.backtrack_limit</td><td class="v">1000000</td><td
class="v">1000000</td></tr>
<tr><td class="e">pcre.recursion_limit</td><td class="v">100000</td><td
class="v">100000</td></tr>

</table><br />
<h2><a name="module_PDO">PDO</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO support</th><th>enabled</th></tr>
<tr><td class="e">PDO drivers </td><td class="v">mysql, sqlite </td></tr>
</table><br />
<h2><a name="module_pdo_mysql">pdo_mysql</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO Driver for MySQL</th><th>enabled</th></tr>

<tr><td class="e">Client API version </td><td class="v">mysqlnd 5.0.8-dev -
20102224 - $Revision: 321634 $ </td></tr>
</table><br />
<h2><a name="module_pdo_sqlite">pdo_sqlite</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>PDO Driver for SQLite 3.x</th><th>enabled</th></tr>
<tr><td class="e">SQLite Library </td><td class="v">3.7.7.1 </td></tr>
</table><br />
<h2><a name="module_Phar">Phar</a></h2>
<table border="0" cellpadding="3" width="600">

<tr class="h"><th>Phar: PHP Archive support</th><th>enabled</th></tr>
<tr><td class="e">Phar EXT version </td><td class="v">2.0.1 </td></tr>
<tr><td class="e">Phar API version </td><td class="v">1.1.1 </td></tr>
<tr><td class="e">SVN revision </td><td class="v">$Revision: 321634 $
</td></tr>
<tr><td class="e">Phar-based phar archives </td><td class="v">enabled
</td></tr>
<tr><td class="e">Tar-based phar archives </td><td class="v">enabled
</td></tr>

<tr><td class="e">ZIP-based phar archives </td><td class="v">enabled
</td></tr>
<tr><td class="e">gzip compression </td><td class="v">enabled </td></tr>
<tr><td class="e">bzip2 compression </td><td class="v">disabled (install
pecl/bz2) </td></tr>
<tr><td class="e">Native OpenSSL support </td><td class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
Phar based on pear/PHP_Archive, original concept by Davey Shafik.<br />Phar
fully realized by Gregory Beaver and Marcus Boerger.<br />Portions of tar
implementation Copyright (c) 2003-2009 Tim Kientzle.</td></tr>

</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">phar.cache_list</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">phar.readonly</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">phar.require_hash</td><td class="v">On</td><td
class="v">On</td></tr>

</table><br />
<h2><a name="module_Reflection">Reflection</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Reflection</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">$Revision: 321634 $ </td></tr>
</table><br />
<h2><a name="module_session">session</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Session Support </td><td class="v">enabled </td></tr>

<tr><td class="e">Registered save handlers </td><td class="v">files user
</td></tr>
<tr><td class="e">Registered serializer handlers </td><td class="v">php
php_binary wddx  </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">session.auto_start</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">session.bug_compat_42</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">session.bug_compat_warn</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">session.cache_expire</td><td class="v">180</td><td
class="v">180</td></tr>
<tr><td class="e">session.cache_limiter</td><td class="v">nocache</td><td
class="v">nocache</td></tr>
<tr><td class="e">session.cookie_domain</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.cookie_httponly</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">session.cookie_lifetime</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">session.cookie_path</td><td class="v">/</td><td
class="v">/</td></tr>
<tr><td class="e">session.cookie_secure</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">session.entropy_file</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.entropy_length</td><td class="v">0</td><td
class="v">0</td></tr>

<tr><td class="e">session.gc_divisor</td><td class="v">1000</td><td
class="v">1000</td></tr>
<tr><td class="e">session.gc_maxlifetime</td><td class="v">1440</td><td
class="v">1440</td></tr>
<tr><td class="e">session.gc_probability</td><td class="v">1</td><td
class="v">1</td></tr>
<tr><td class="e">session.hash_bits_per_character</td><td class="v">5</td><td
class="v">5</td></tr>
<tr><td class="e">session.hash_function</td><td class="v">0</td><td
class="v">0</td></tr>

<tr><td class="e">session.name</td><td class="v">PHPSESSID</td><td
class="v">PHPSESSID</td></tr>
<tr><td class="e">session.referer_check</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">session.save_handler</td><td class="v">files</td><td
class="v">files</td></tr>
<tr><td class="e">session.save_path</td><td class="v">c:/wamp/tmp</td><td
class="v">c:/wamp/tmp</td></tr>
<tr><td class="e">session.serialize_handler</td><td class="v">php</td><td
class="v">php</td></tr>

<tr><td class="e">session.use_cookies</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">session.use_only_cookies</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">session.use_trans_sid</td><td class="v">0</td><td
class="v">0</td></tr>
</table><br />
<h2><a name="module_SimpleXML">SimpleXML</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Simplexml support</th><th>enabled</th></tr>

<tr><td class="e">Revision </td><td class="v">$Revision: 321634 $ </td></tr>
<tr><td class="e">Schema support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_SPL">SPL</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>SPL support</th><th>enabled</th></tr>
<tr><td class="e">Interfaces </td><td class="v">Countable, OuterIterator,
RecursiveIterator, SeekableIterator, SplObserver, SplSubject </td></tr>
<tr><td class="e">Classes </td><td class="v">AppendIterator, ArrayIterator,
ArrayObject, BadFunctionCallException, BadMethodCallException,
CachingIterator, DirectoryIterator, DomainException, EmptyIterator,
FilesystemIterator, FilterIterator, GlobIterator, InfiniteIterator,
InvalidArgumentException, IteratorIterator, LengthException, LimitIterator,
LogicException, MultipleIterator, NoRewindIterator, OutOfBoundsException,
OutOfRangeException, OverflowException, ParentIterator, RangeException,
RecursiveArrayIterator, RecursiveCachingIterator, RecursiveDirectoryIterator,
RecursiveFilterIterator, RecursiveIteratorIterator, RecursiveRegexIterator,
RecursiveTreeIterator, RegexIterator, RuntimeException, SplDoublyLinkedList,
SplFileInfo, SplFileObject, SplFixedArray, SplHeap, SplMinHeap, SplMaxHeap,
SplObjectStorage, SplPriorityQueue, SplQueue, SplStack, SplTempFileObject,
UnderflowException, UnexpectedValueException </td></tr>

</table><br />
<h2><a name="module_standard">standard</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Dynamic Library Support </td><td class="v">enabled
</td></tr>
<tr><td class="e">Internal Sendmail Support for Windows </td><td
class="v">enabled </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">assert.active</td><td class="v">1</td><td
class="v">1</td></tr>

<tr><td class="e">assert.bail</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">assert.callback</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">assert.quiet_eval</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">assert.warning</td><td class="v">1</td><td
class="v">1</td></tr>
<tr><td class="e">auto_detect_line_endings</td><td class="v">0</td><td
class="v">0</td></tr>

<tr><td class="e">default_socket_timeout</td><td class="v">60</td><td
class="v">60</td></tr>
<tr><td class="e">from</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">safe_mode_allowed_env_vars</td><td class="v">PHP_</td><td
class="v">PHP_</td></tr>
<tr><td class="e">safe_mode_protected_env_vars</td><td
class="v">LD_LIBRARY_PATH</td><td class="v">LD_LIBRARY_PATH</td></tr>
<tr><td class="e">url_rewriter.tags</td><td
class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td><td
class="v">a=href,area=href,frame=src,input=src,form=fakeentry</td></tr>

<tr><td class="e">user_agent</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
</table><br />
<h2><a name="module_tokenizer">tokenizer</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Tokenizer Support </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_wddx">wddx</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>WDDX Support</th><th>enabled</th></tr>

<tr><td class="e">WDDX Session Serializer </td><td class="v">enabled
</td></tr>
</table><br />
<h2><a name="module_xdebug">xdebug</a></h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>xdebug support</th><th>enabled</th></tr>
<tr><td class="e">Version </td><td class="v">2.1.2 </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Supported protocols</th><th>Revision</th></tr>

<tr><td class="e">DBGp - Common DeBuGger Protocol </td><td
class="v">$Revision: 1.145 $ </td></tr>
</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">xdebug.auto_trace</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.collect_assignments</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">xdebug.collect_includes</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">xdebug.collect_params</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">xdebug.collect_return</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.collect_vars</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.default_enable</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">xdebug.dump.COOKIE</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.ENV</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.FILES</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.GET</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.POST</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>

<tr><td class="e">xdebug.dump.REQUEST</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.SERVER</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump.SESSION</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.dump_globals</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">xdebug.dump_once</td><td class="v">On</td><td
class="v">On</td></tr>

<tr><td class="e">xdebug.dump_undefined</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.extended_info</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">xdebug.file_link_format</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>
<tr><td class="e">xdebug.idekey</td><td class="v">VPN$</td><td class="v"><i>no
value</i></td></tr>
<tr><td class="e">xdebug.manual_url</td><td
class="v">http://www.php.net</td><td class="v">http://www.php.net</td></tr>

<tr><td class="e">xdebug.max_nesting_level</td><td class="v">100</td><td
class="v">100</td></tr>
<tr><td class="e">xdebug.overload_var_dump</td><td class="v">On</td><td
class="v">On</td></tr>
<tr><td class="e">xdebug.profiler_aggregate</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.profiler_append</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.profiler_enable</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">xdebug.profiler_enable_trigger</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.profiler_output_dir</td><td
class="v">c:/wamp/tmp</td><td class="v">c:/wamp/tmp</td></tr>
<tr><td class="e">xdebug.profiler_output_name</td><td
class="v">cachegrind.out.%t.%p</td><td
class="v">cachegrind.out.%t.%p</td></tr>
<tr><td class="e">xdebug.remote_autostart</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.remote_connect_back</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">xdebug.remote_cookie_expire_time</td><td
class="v">3600</td><td class="v">3600</td></tr>
<tr><td class="e">xdebug.remote_enable</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.remote_handler</td><td class="v">dbgp</td><td
class="v">dbgp</td></tr>
<tr><td class="e">xdebug.remote_host</td><td class="v">localhost</td><td
class="v">localhost</td></tr>
<tr><td class="e">xdebug.remote_log</td><td class="v"><i>no value</i></td><td
class="v"><i>no value</i></td></tr>

<tr><td class="e">xdebug.remote_mode</td><td class="v">req</td><td
class="v">req</td></tr>
<tr><td class="e">xdebug.remote_port</td><td class="v">9000</td><td
class="v">9000</td></tr>
<tr><td class="e">xdebug.scream</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.show_exception_trace</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.show_local_vars</td><td class="v">Off</td><td
class="v">Off</td></tr>

<tr><td class="e">xdebug.show_mem_delta</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">xdebug.trace_format</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">xdebug.trace_options</td><td class="v">0</td><td
class="v">0</td></tr>
<tr><td class="e">xdebug.trace_output_dir</td><td class="v">\</td><td
class="v">\</td></tr>
<tr><td class="e">xdebug.trace_output_name</td><td class="v">trace.%c</td><td
class="v">trace.%c</td></tr>

<tr><td class="e">xdebug.var_display_max_children</td><td
class="v">128</td><td class="v">128</td></tr>
<tr><td class="e">xdebug.var_display_max_data</td><td class="v">512</td><td
class="v">512</td></tr>
<tr><td class="e">xdebug.var_display_max_depth</td><td class="v">3</td><td
class="v">3</td></tr>
</table><br />
<h2><a name="module_xml">xml</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XML Support </td><td class="v">active </td></tr>

<tr><td class="e">XML Namespace Support </td><td class="v">active </td></tr>
<tr><td class="e">libxml2 Version </td><td class="v">2.7.8 </td></tr>
</table><br />
<h2><a name="module_xmlreader">xmlreader</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">XMLReader </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_xmlwriter">xmlwriter</a></h2>
<table border="0" cellpadding="3" width="600">

<tr><td class="e">XMLWriter </td><td class="v">enabled </td></tr>
</table><br />
<h2><a name="module_zip">zip</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Zip </td><td class="v">enabled </td></tr>
<tr><td class="e">Extension Version </td><td class="v">$Id: php_zip.c 321634
2012-01-01 13:15:04Z felipe $ </td></tr>
<tr><td class="e">Zip version </td><td class="v">1.9.1 </td></tr>
<tr><td class="e">Libzip version </td><td class="v">0.9.0 </td></tr>

</table><br />
<h2><a name="module_zlib">zlib</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">ZLib Support </td><td class="v">enabled </td></tr>
<tr><td class="e">Stream Wrapper support </td><td class="v">compress.zlib://
</td></tr>
<tr><td class="e">Stream Filter support </td><td class="v">zlib.inflate,
zlib.deflate </td></tr>
<tr><td class="e">Compiled Version </td><td class="v">1.2.5 </td></tr>
<tr><td class="e">Linked Version </td><td class="v">1.2.5 </td></tr>

</table><br />
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<tr><td class="e">zlib.output_compression</td><td class="v">Off</td><td
class="v">Off</td></tr>
<tr><td class="e">zlib.output_compression_level</td><td class="v">-1</td><td
class="v">-1</td></tr>
<tr><td class="e">zlib.output_handler</td><td class="v"><i>no
value</i></td><td class="v"><i>no value</i></td></tr>

</table><br />
<h2>Additional Modules</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Module Name</th></tr>
</table><br />
<h2>Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">ALLUSERSPROFILE </td><td class="v">C:\ProgramData </td></tr>
<tr><td class="e">APPDATA </td><td
class="v">C:\Windows\system32\config\systemprofile\AppData\Roaming </td></tr>
<tr><td class="e">CommonProgramFiles </td><td class="v">C:\Program
Files\Common Files </td></tr>
<tr><td class="e">CommonProgramFiles(x86) </td><td class="v">C:\Program Files
(x86)\Common Files </td></tr>
<tr><td class="e">CommonProgramW6432 </td><td class="v">C:\Program
Files\Common Files </td></tr>
<tr><td class="e">COMPUTERNAME </td><td class="v">VPN </td></tr>
<tr><td class="e">ComSpec </td><td class="v">C:\Windows\system32\cmd.exe
</td></tr>
<tr><td class="e">CYGWIN </td><td class="v">tty </td></tr>
<tr><td class="e">FP_NO_HOST_CHECK </td><td class="v">NO </td></tr>
<tr><td class="e">LOCALAPPDATA </td><td
class="v">C:\Windows\system32\config\systemprofile\AppData\Local </td></tr>
<tr><td class="e">NUMBER_OF_PROCESSORS </td><td class="v">4 </td></tr>
<tr><td class="e">OS </td><td class="v">Windows_NT </td></tr>
<tr><td class="e">Path </td><td
class="v">C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;
</td></tr>
<tr><td class="e">PATHEXT </td><td
class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC </td></tr>
<tr><td class="e">PROCESSOR_ARCHITECTURE </td><td class="v">AMD64 </td></tr>
<tr><td class="e">PROCESSOR_IDENTIFIER </td><td class="v">Intel64 Family 6
Model 42 Stepping 7, GenuineIntel </td></tr>
<tr><td class="e">PROCESSOR_LEVEL </td><td class="v">6 </td></tr>
<tr><td class="e">PROCESSOR_REVISION </td><td class="v">2a07 </td></tr>
<tr><td class="e">ProgramData </td><td class="v">C:\ProgramData </td></tr>
<tr><td class="e">ProgramFiles </td><td class="v">C:\Program Files </td></tr>
<tr><td class="e">ProgramFiles(x86) </td><td class="v">C:\Program Files (x86)
</td></tr>
<tr><td class="e">ProgramW6432 </td><td class="v">C:\Program Files </td></tr>
<tr><td class="e">PSModulePath </td><td
class="v">C:\Windows\system32\WindowsPowerShell\v1.0\Modules\ </td></tr>
<tr><td class="e">PUBLIC </td><td class="v">C:\Users\Public </td></tr>
<tr><td class="e">SystemDrive </td><td class="v">C: </td></tr>
<tr><td class="e">SystemRoot </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">TEMP </td><td class="v">C:\Windows\TEMP </td></tr>
<tr><td class="e">TMP </td><td class="v">C:\Windows\TEMP </td></tr>
<tr><td class="e">USERDOMAIN </td><td class="v">WORKGROUP </td></tr>
<tr><td class="e">USERNAME </td><td class="v">WEBSERVER$ </td></tr>
<tr><td class="e">USERPROFILE </td><td
class="v">C:\Windows\system32\config\systemprofile </td></tr>
<tr><td class="e">windir </td><td class="v">C:\Windows </td></tr>
<tr><td class="e">windows_tracing_flags </td><td class="v">3 </td></tr>
<tr><td class="e">windows_tracing_logfile </td><td
class="v">C:\BVTBin\Tests\installpackage\csilogfile.log </td></tr>
<tr><td class="e">AP_PARENT_PID </td><td class="v">1204 </td></tr>
</table><br />
<h2>PHP Variables</h2>

<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">_SERVER["HTTP_HOST"]</td><td
class="v">'.$_SERVER['HTTP_HOST'].'</td></tr>
<tr><td class="e">_SERVER["HTTP_USER_AGENT"]</td><td
class="v">'.$_SERVER['HTTP_USER_AGENT'].'</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT"]</td><td
class="v">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT_LANGUAGE"]</td><td
class="v">en-GB,en-US;q=0.8,en;q=0.6</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT_ENCODING"]</td><td
class="v">gzip,deflate,sdch</td></tr>
<tr><td class="e">_SERVER["HTTP_CONNECTION"]</td><td
class="v">keep-alive</td></tr>
<tr><td class="e">_SERVER["HTTP_ACCEPT_CHARSET"]</td><td
class="v">ISO-8859-1,utf-8;q=0.7,*;q=0.3</td></tr>
<tr><td class="e">_SERVER["PATH"]</td><td
class="v">C:\Windows\system32;C:\Windows;C:\Windows\System32\Wbem;C:\Windows\System32\WindowsPowerShell\v1.0\;</td></tr>
<tr><td class="e">_SERVER["SystemRoot"]</td><td class="v">C:\Windows</td></tr>
<tr><td class="e">_SERVER["COMSPEC"]</td><td
class="v">C:\Windows\system32\cmd.exe</td></tr>
<tr><td class="e">_SERVER["PATHEXT"]</td><td
class="v">.COM;.EXE;.BAT;.CMD;.VBS;.VBE;.JS;.JSE;.WSF;.WSH;.MSC</td></tr>
<tr><td class="e">_SERVER["WINDIR"]</td><td class="v">C:\Windows</td></tr>
<tr><td class="e">_SERVER["SERVER_SIGNATURE"]</td><td class="v">no value
</td></tr>
<tr><td class="e">_SERVER["SERVER_SOFTWARE"]</td><td class="v">'.$VERSION[0].'
(Win64) PHP/5.3.8</td></tr>

<tr><td class="e">_SERVER["SERVER_NAME"]</td><td
class="v">'.$_SERVER['SERVER_NAME'].'</td></tr>
<tr><td class="e">_SERVER["SERVER_ADDR"]</td><td
class="v">'.$_SERVER['SERVER_ADDR'].'</td></tr>
<tr><td class="e">_SERVER["SERVER_PORT"]</td><td
class="v">'.$_SERVER['SERVER_PORT'].'</td></tr>
<tr><td class="e">_SERVER["REMOTE_ADDR"]</td><td
class="v">'.$_SERVER['REMOTE_ADDR'].'</td></tr>
<tr><td class="e">_SERVER["DOCUMENT_ROOT"]</td><td
class="v">C:/wamp/www/</td></tr>
<tr><td class="e">_SERVER["SERVER_ADMIN"]</td><td
class="v">admin@localhost</td></tr>

<tr><td class="e">_SERVER["SCRIPT_FILENAME"]</td><td
class="v">C:/wamp/www/'.$_SERVER['SCRIPT_NAME'].'</td></tr>
<tr><td class="e">_SERVER["REMOTE_PORT"]</td><td
class="v">'.$_SERVER['REMOTE_PORT'].'</td></tr>
<tr><td class="e">_SERVER["GATEWAY_INTERFACE"]</td><td
class="v">CGI/1.1</td></tr>
<tr><td class="e">_SERVER["SERVER_PROTOCOL"]</td><td
class="v">HTTP/1.1</td></tr>
<tr><td class="e">_SERVER["REQUEST_METHOD"]</td><td class="v">GET</td></tr>
<tr><td class="e">_SERVER["QUERY_STRING"]</td><td
class="v"><i>'.$_SERVER['QUERY_STRING'].'</i></td></tr>

<tr><td class="e">_SERVER["REQUEST_URI"]</td><td
class="v">'.$_SERVER['REQUEST_URI'].'</td></tr>
<tr><td class="e">_SERVER["SCRIPT_NAME"]</td><td
class="v">'.$_SERVER['SCRIPT_NAME'].'</td></tr>
<tr><td class="e">_SERVER["PHP_SELF"]</td><td
class="v">'.$_SERVER['PHP_SELF'].'</td></tr>
<tr><td class="e">_SERVER["REQUEST_TIME"]</td><td
class="v">'.$_SERVER['REQUEST_TIME'].'</td></tr>
</pre></td></tr>
</table><br />
<h2>PHP License</h2>
<table border="0" cellpadding="3" width="600">
<tr class="v"><td>
<p>
This program is free software; you can redistribute it and/or modify it under
the terms of the PHP License as published by the PHP Group and included in the
distribution in the file:  LICENSE
</p>
<p>This program is distributed in the hope that it will be useful, but WITHOUT
ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
FOR A PARTICULAR PURPOSE.
</p>
<p>If you did not receive a copy of the PHP license, or have any questions
about PHP licensing, please contact license@php.net.
</p>
</td></tr>
</table><br />

</div></body></html>';
?>