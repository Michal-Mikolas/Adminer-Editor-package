<?php
/** Adminer Editor - Compact database editor
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2009 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.4
*/error_reporting(6135);$zb=!ereg('^(unsafe_raw)?$',ini_get("filter.default"));if($zb||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$W){$ae=filter_input_array(constant("INPUT$W"),FILTER_UNSAFE_RAW);if($ae){$$W=$ae;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tbody tr:hover td,tbody tr:hover th{background:#eee;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.loading{cursor:progress;}.loading #loader{display:inline;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.js .checked td,.js .checked th{background:#ddf;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{display:none;position:fixed;top:2px;right:2px;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;-moz-user-select:none;-webkit-user-select:none;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function trCheck(el){var tr=el.parentNode.parentNode;tr.className=tr.className.replace(/(^|\s)checked(\s|$)/,'$2')+(el.checked?' checked':'');}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;trCheck(elems[i]);}}}
function tableCheck(){var tables=document.getElementsByTagName('table');for(var i=0;i<tables.length;i++){if(/(^|\s)checkable(\s|$)/.test(tables[i].className)){var trs=tables[i].getElementsByTagName('tr');for(var j=0;j<trs.length;j++){trCheck(trs[j].firstChild.firstChild);}}}}
function formUncheck(id){var el=document.getElementById(id);el.checked=false;trCheck(el);}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var click=(!window.getSelection||getSelection().isCollapsed);var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^table$/i.test(el.tagName)){return;}
if(/^(a|input|textarea)$/i.test(el.tagName)){click=false;}
el=el.parentNode;}
el=el.firstChild.firstChild;if(click){el.click&&el.click();el.onclick&&el.onclick();}
trCheck(el);}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function ajaxAbort(){ajaxRequest.onreadystatechange=null;if(ajaxRequest.abort){ajaxRequest.abort();}}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.keyCode==27&&!event.shiftKey&&!event.ctrlKey&&!event.altKey&&!event.metaKey){ajaxAbort();document.body.className=document.body.className.replace(/ loading/g,'');onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}}
if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var request=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(request){request.open((data?'POST':'GET'),url);if(data){request.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
request.setRequestHeader('X-Requested-With','XMLHttpRequest');request.onreadystatechange=function(){if(request.readyState==4){callback(request);}};request.send(data);}
return request;}
function ajaxSetHtml(url){return ajax(url,function(request){if(request.status){var data=eval('('+request.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxRequest={};function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
ajaxAbort();onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(document.getElementById('loader').firstChild.src);};document.body.className+=' loading';ajaxRequest=ajax(url,function(request){var title=request.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=request.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};if(originalFavicon){replaceFavicon(originalFavicon);}
if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll&&!/&order/.test(url)){scrollTo(0,0);}
setHtml('content',(request.status?request.responseText:'<p class="error">'+noResponse));document.body.className=document.body.className.replace(/ loading/g,'');var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}},data);return ajaxRequest;}
onpopstate=function(event){if((ajaxRequest.send||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxRequest.send=true;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),false,noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),'',false,noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(request){if(request.status){input.value=request.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)&&!event.ctrlKey){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?decodeURIComponent(match[1]):'')&&ns==(match2?decodeURIComponent(match2[1]):'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){if(event.ctrlKey){el.form.target='_blank';}else{return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}}
function whisperClick(event,field){var el=event.target||event.srcElement;if(/^a$/i.test(el.tagName)&&!(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){field.value=el.firstChild.data;field.previousSibling.value=decodeURIComponent(el.href.replace(/.*=/,''));field.nextSibling.style.display='none';eventStop(event);return false;}}
function whisper(url,field){if(field.orig!=field.value){field.orig=field.value;field.previousSibling.value=field.value;return ajax(url+encodeURIComponent(field.value),function(xmlhttp){if(xmlhttp.status&&field.orig==field.value){field.nextSibling.innerHTML=xmlhttp.responseText;field.nextSibling.style.display='';var a=field.nextSibling.firstChild;if(a&&a.firstChild.data==field.value){field.previousSibling.value=decodeURIComponent(a.href.replace(/.*=/,''));a.className='active';}}});}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$h;return$h;}function
adminer(){global$c;return$c;}function
idf_unescape($t){$kc=substr($t,-1);return
str_replace($kc.$kc,$kc,substr($t,1,-1));}function
escape_string($W){return
substr(q($W),1,-1);}function
remove_slashes($bd,$zb=false){if(get_magic_quotes_gpc()){while(list($u,$W)=each($bd)){foreach($W
as$gc=>$V){unset($bd[$u][$gc]);if(is_array($V)){$bd[$u][stripslashes($gc)]=$V;$bd[]=&$bd[$u][stripslashes($gc)];}else{$bd[$u][stripslashes($gc)]=($zb?$V:stripslashes($V));}}}}}function
bracket_escape($t,$ua=false){static$Sd=array(':'=>':1',']'=>':2','['=>':3');return
strtr($t,($ua?array_flip($Sd):$Sd));}function
h($M){return
htmlspecialchars(str_replace("\0","",$M),ENT_QUOTES);}function
nbsp($M){return(trim($M)!=""?h($M):"&nbsp;");}function
nl_br($M){return
str_replace("\n","<br>",$M);}function
checkbox($z,$X,$Ca,$ic="",$Hc="",$ec=false){static$s=0;$s++;$G="<input type='checkbox' name='$z' value='".h($X)."'".($Ca?" checked":"").($Hc?' onclick="'.h($Hc).'"':'').($ec?" class='jsonly'":"")." id='checkbox-$s'>";return($ic!=""?"<label for='checkbox-$s'>$G".h($ic)."</label>":$G);}function
optionlist($Mc,$rd=null,$ee=false){$G="";foreach($Mc
as$gc=>$V){$Nc=array($gc=>$V);if(is_array($V)){$G.='<optgroup label="'.h($gc).'">';$Nc=$V;}foreach($Nc
as$u=>$W){$G.='<option'.($ee||is_string($u)?' value="'.h($u).'"':'').(($ee||is_string($u)?(string)$u:$W)===$rd?' selected':'').'>'.h($W);}if(is_array($V)){$G.='</optgroup>';}}return$G;}function
html_select($z,$Mc,$X="",$Gc=true){if($Gc){return"<select name='".h($z)."'".(is_string($Gc)?' onchange="'.h($Gc).'"':"").">".optionlist($Mc,$X)."</select>";}$G="";foreach($Mc
as$u=>$W){$G.="<label><input type='radio' name='".h($z)."' value='".h($u)."'".($u==$X?" checked":"").">".h($W)."</label>";}return$G;}function
confirm($La="",$_d=false){return" onclick=\"".($_d?"eventStop(event); ":"")."return confirm('".lang(0).($La?" (' + $La + ')":"")."');\"";}function
print_fieldset($s,$mc,$ie=false,$Hc=""){echo"<fieldset><legend><a href='#fieldset-$s' onclick=\"".h($Hc)."return !toggle('fieldset-$s');\">$mc</a></legend><div id='fieldset-$s'".($ie?"":" class='hidden'").">\n";}function
bold($za){return($za?" class='active'":"");}function
odd($G=' class="odd"'){static$r=0;if(!$G){$r=-1;}return($r++%
2?$G:'');}function
js_escape($M){return
addcslashes($M,"\r\n'\\/");}function
json_row($u,$W=null){static$_b=true;if($_b){echo"{";}if($u!=""){echo($_b?"":",")."\n\t\"".addcslashes($u,"\r\n\"\\").'": '.(isset($W)?'"'.addcslashes($W,"\r\n\"\\").'"':'undefined');$_b=false;}else{echo"\n}\n";$_b=true;}}function
ini_bool($bc){$W=ini_get($bc);return(eregi('^(on|true|yes)$',$W)||(int)$W);}function
sid(){static$G;if(!isset($G)){$G=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$G;}function
q($M){global$h;return$h->quote($M);}function
get_vals($E,$f=0){global$h;$G=array();$F=$h->query($E);if(is_object($F)){while($H=$F->fetch_row()){$G[]=$H[$f];}}return$G;}function
get_key_vals($E,$i=null){global$h;if(!is_object($i)){$i=$h;}$G=array();$F=$i->query($E);if(is_object($F)){while($H=$F->fetch_row()){$G[$H[0]]=$H[1];}}return$G;}function
get_rows($E,$i=null,$m="<p class='error'>"){global$h;$Ka=(is_object($i)?$i:$h);$G=array();$F=$Ka->query($E);if(is_object($F)){while($H=$F->fetch_assoc()){$G[]=$H;}}elseif(!$F&&!is_object($i)&&$m&&defined("PAGE_HEADER")){echo$m.error()."\n";}return$G;}function
unique_array($H,$Yb){foreach($Yb
as$Wb){if(ereg("PRIMARY|UNIQUE",$Wb["type"])){$G=array();foreach($Wb["columns"]as$u){if(!isset($H[$u])){continue
2;}$G[$u]=$H[$u];}return$G;}}$G=array();foreach($H
as$u=>$W){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$u)){$G[$u]=$W;}}return$G;}function
where($Z){global$fc;$G=array();foreach((array)$Z["where"]as$u=>$W){$G[]=idf_escape(bracket_escape($u,1)).(($fc=="sql"&&ereg('\\.',$W))||$fc=="mssql"?" LIKE ".exact_value(addcslashes($W,"%_\\")):" = ".exact_value($W));}foreach((array)$Z["null"]as$u){$G[]=idf_escape($u)." IS NULL";}return
implode(" AND ",$G);}function
where_check($W){parse_str($W,$Ba);remove_slashes(array(&$Ba));return
where($Ba);}function
where_link($r,$f,$X,$Jc="="){return"&where%5B$r%5D%5Bcol%5D=".urlencode($f)."&where%5B$r%5D%5Bop%5D=".urlencode((isset($X)?$Jc:"IS NULL"))."&where%5B$r%5D%5Bval%5D=".urlencode($X);}function
cookie($z,$X){global$aa;$Tc=array($z,(ereg("\n",$X)?"":$X),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Tc[]=true;}return
call_user_func_array('setcookie',$Tc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($u){return$_SESSION[$u][DRIVER][SERVER][$_GET["username"]];}function
set_session($u,$W){$_SESSION[$u][DRIVER][SERVER][$_GET["username"]]=$W;}function
auth_url($Wa,$K,$U){global$Xa;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($Xa))."|username|".session_name()),$x);return"$x[1]?".(sid()?SID."&":"").($Wa!="server"||$K!=""?urlencode($Wa)."=".urlencode($K)."&":"")."username=".urlencode($U).($x[2]?"&$x[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($pc,$yc=null){if(isset($yc)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($pc)?$pc:$_SERVER["REQUEST_URI"]))][]=$yc;}if(isset($pc)){if($pc==""){$pc=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $pc");exit;}}function
query_redirect($E,$pc,$yc,$gd=true,$qb=true,$ub=false){global$h,$m,$c;if($qb){$ub=!$h->query($E);}$xd="";if($E){$xd=$c->messageQuery("$E;");}if($ub){$m=error().$xd;return
false;}if($gd){redirect($pc,$yc.$xd);}return
true;}function
queries($E=null){global$h;static$ed=array();if(!isset($E)){return
implode(";\n",$ed);}$ed[]=(ereg(';$',$E)?"DELIMITER ;;\n$E;\nDELIMITER ":$E);return$h->query($E);}function
apply_queries($E,$P,$mb='table'){foreach($P
as$N){if(!queries("$E ".$mb($N))){return
false;}}return
true;}function
queries_redirect($pc,$yc,$gd){return
query_redirect(queries(),$pc,$yc,$gd,false,!$gd);}function
remove_from_uri($Sc=""){return
substr(preg_replace("~(?<=[?&])($Sc".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($B,$Pa){return" ".($B==$Pa?$B+1:'<a href="'.h(remove_from_uri("page").($B?"&page=$B":"")).'">'.($B+1)."</a>");}function
get_file($u,$Qa=false){$wb=$_FILES[$u];if(!$wb||$wb["error"]){return$wb["error"];}$G=file_get_contents($Qa&&ereg('\\.gz$',$wb["name"])?"compress.zlib://$wb[tmp_name]":($Qa&&ereg('\\.bz2$',$wb["name"])?"compress.bzip2://$wb[tmp_name]":$wb["tmp_name"]));if($Qa){$yd=substr($G,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$yd,$hd)){$G=iconv("utf-16","utf-8",$G);}elseif($yd=="\xEF\xBB\xBF"){$G=substr($G,3);}}return$G;}function
upload_error($m){$wc=($m==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):0);return($m?lang(1).($wc?" ".lang(2,$wc):""):lang(3));}function
repeat_pattern($D,$nc){return
str_repeat("$D{0,65535}",$nc/65535)."$D{0,".($nc
%
65535)."}";}function
is_utf8($W){return(preg_match('~~u',$W)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$W));}function
shorten_utf8($M,$nc=80,$Ed=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$nc).")($)?)u",$M,$x)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$nc).")($)?)",$M,$x);}return
h($x[1]).$Ed.(isset($x[2])?"":"<i>...</i>");}function
friendly_url($W){return
preg_replace('~[^a-z0-9_]~i','-',$W);}function
hidden_fields($bd,$Vb=array()){while(list($u,$W)=each($bd)){if(is_array($W)){foreach($W
as$gc=>$V){$bd[$u."[$gc]"]=$V;}}elseif(!in_array($u,$Vb)){echo'<input type="hidden" name="'.h($u).'" value="'.h($W).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($N){global$c;$G=array();foreach($c->foreignKeys($N)as$p){foreach($p["source"]as$W){$G[$W][]=$p;}}return$G;}function
enum_input($S,$ra,$n,$X,$gb=null){global$c;preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$tc);$G=(isset($gb)?"<label><input type='$S'$ra value='$gb'".((is_array($X)?in_array($gb,$X):$X===0)?" checked":"")."><i>".lang(4)."</i></label>":"");foreach($tc[1]as$r=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ca=(is_int($X)?$X==$r+1:(is_array($X)?in_array($r+1,$X):$X===$W));$G.=" <label><input type='$S'$ra value='".($r+1)."'".($Ca?' checked':'').'>'.h($c->editVal($W,$n)).'</label>';}return$G;}function
input($n,$X,$q){global$Vd,$c,$fc;$z=h(bracket_escape($n["field"]));echo"<td class='function'>";$kd=($fc=="mssql"&&$n["auto_increment"]);if($kd&&!$_POST["save"]){$q=null;}$Kb=(isset($_GET["select"])||$kd?array("orig"=>lang(5)):array())+$c->editFunctions($n);$ra=" name='fields[$z]'";if($n["type"]=="enum"){echo
nbsp($Kb[""])."<td>".$c->editInput($_GET["edit"],$n,$ra,$X);}else{$_b=0;foreach($Kb
as$u=>$W){if($u===""||!$W){break;}$_b++;}$Gc=($_b?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($n["field"])))."]']; if ($_b > f.selectedIndex) f.selectedIndex = $_b;\"":"");$ra.=$Gc;echo(count($Kb)>1?html_select("function[$z]",$Kb,!isset($q)||in_array($q,$Kb)||isset($Kb[$q])?$q:"","functionChange(this);"):nbsp(reset($Kb))).'<td>';$dc=$c->editInput($_GET["edit"],$n,$ra,$X);if($dc!=""){echo$dc;}elseif($n["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$n["length"],$tc);foreach($tc[1]as$r=>$W){$W=stripcslashes(str_replace("''","'",$W));$Ca=(is_int($X)?($X>>$r)&1:in_array($W,explode(",",$X),true));echo" <label><input type='checkbox' name='fields[$z][$r]' value='".(1<<$r)."'".($Ca?' checked':'')."$Gc>".h($c->editVal($W,$n)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$n["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$z'$Gc>";}elseif(ereg('text|lob',$n["type"])){echo"<textarea ".($fc!="sqlite"||ereg("\n",$X)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$ra>".h($X).'</textarea>';}else{$xc=(!ereg('int',$n["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$n["length"],$x)?((ereg("binary",$n["type"])?2:1)*$x[1]+($x[3]?1:0)+($x[2]&&!$n["unsigned"]?1:0)):($Vd[$n["type"]]?$Vd[$n["type"]]+($n["unsigned"]?0:1):0));echo"<input value='".h($X)."'".($xc?" maxlength='$xc'":"").(ereg('char|binary',$n["type"])&&$xc>20?" size='40'":"")."$ra>";}}}function
process_input($n){global$c;$t=bracket_escape($n["field"]);$q=$_POST["function"][$t];$X=$_POST["fields"][$t];if($n["type"]=="enum"){if($X==-1){return
false;}if($X==""){return"NULL";}return+$X;}if($n["auto_increment"]&&$X==""){return
null;}if($q=="orig"){return($n["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($n["field"]):false);}if($q=="NULL"){return"NULL";}if($n["type"]=="set"){return
array_sum((array)$X);}if(ereg('blob|bytea|raw|file',$n["type"])&&ini_bool("file_uploads")){$wb=get_file("fields-$t");if(!is_string($wb)){return
false;}return
q($wb);}return$c->processInput($n,$X,$q);}function
search_tables(){global$c,$h;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$Gb=false;foreach(table_status()as$N=>$O){$z=$c->tableName($O);if(isset($O["Engine"])&&$z!=""&&(!$_POST["tables"]||in_array($N,$_POST["tables"]))){$F=$h->query("SELECT".limit("1 FROM ".table($N)," WHERE ".implode(" AND ",$c->selectSearchProcess(fields($N),array())),1));if($F->fetch_row()){if(!$Gb){echo"<ul>\n";$Gb=true;}echo"<li><a href='".h(ME."select=".urlencode($N)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$z</a>\n";}}}echo($Gb?"</ul>":"<p class='message'>".lang(6))."\n";}function
dump_headers($Tb,$Bc=false){global$c;$G=$c->dumpHeaders($Tb,$Bc);$Qc=$_POST["output"];if($Qc!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Tb!=""?$Tb:(SERVER!=""?SERVER:"localhost")).".$G".($Qc!="file"&&!ereg('[^0-9a-z]',$Qc)?".$Qc":""));}session_write_close();return$G;}function
dump_csv($H){foreach($H
as$u=>$W){if(preg_match("~[\"\n,;\t]~",$W)||$W===""){$H[$u]='"'.str_replace('"','""',$W).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$H)."\r\n";}function
apply_sql_function($q,$f){return($q?($q=="unixepoch"?"DATETIME($f, '$q')":($q=="count distinct"?"COUNT(DISTINCT ":strtoupper("$q("))."$f)"):$f);}function
password_file(){$Ua=ini_get("upload_tmp_dir");if(!$Ua){if(function_exists('sys_get_temp_dir')){$Ua=sys_get_temp_dir();}else{$xb=@tempnam("","");if(!$xb){return
false;}$Ua=dirname($xb);unlink($xb);}}$xb="$Ua/adminer.key";$G=@file_get_contents($xb);if($G){return$G;}$Ib=@fopen($xb,"w");if($Ib){$G=md5(uniqid(mt_rand(),true));fwrite($Ib,$G);fclose($Ib);}return$G;}function
is_mail($db){$pa='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$D="$pa+(\\.$pa+)*@($Va?\\.)+$Va";return
preg_match("(^$D(,\\s*$D)*\$)i",$db);}function
is_url($M){$Va='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($Va?\\.)+$Va(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$M,$x)?strtolower($x[1]):"");}global$c,$h,$Xa,$bb,$ib,$m,$Kb,$Nb,$aa,$cc,$fc,$a,$jc,$Fc,$Bd,$Rd,$R,$Vd,$ce,$ba;if(!$_SERVER["REQUEST_URI"]){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"];}if(!strpos($_SERVER["REQUEST_URI"],'?')&&$_SERVER["QUERY_STRING"]!=""){$_SERVER["REQUEST_URI"].="?$_SERVER[QUERY_STRING]";}$aa=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$Tc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$aa);if(version_compare(PHP_VERSION,'5.2.0')>=0){$Tc[]=true;}call_user_func_array('session_set_cookie_params',$Tc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$zb);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);$jc=array('en'=>'English','cs'=>'Čeština','sk'=>'Slovenčina','nl'=>'Nederlands','es'=>'Español','de'=>'Deutsch','fr'=>'Français','it'=>'Italiano','et'=>'Eesti','hu'=>'Magyar','pl'=>'Polski','ca'=>'Català','pt'=>'Português','sl'=>'Slovenski','lt'=>'Lietuvių','tr'=>'Türkçe','ro'=>'Limba Română','ru'=>'Русский язык','zh'=>'简体中文','zh-tw'=>'繁體中文','ja'=>'日本語','ta'=>'த‌மிழ்','ar'=>'العربية','fa'=>'فارسی',);function
get_lang(){global$a;return$a;}function
lang($t,$_=null){global$a,$R;$Td=$R[$t];if(is_array($Td)){$Xc=($_==1?0:($a=='cs'||$a=='sk'?($_&&$_<5?1:2):($a=='fr'?(!$_?0:1):($a=='pl'?($_
%
10>1&&$_
%
10<5&&$_/10
%
10!=1?1:2):($a=='sl'?($_
%
100==1?0:($_
%
100==2?1:($_
%
100==3||$_
%
100==4?2:3))):($a=='lt'?($_
%
10==1&&$_
%
100!=11?0:($_
%
10>1&&$_/10
%
10!=1?1:2)):($a=='ru'?($_
%
10==1&&$_
%
100!=11?0:($_
%
10>1&&$_
%
10<5&&$_/10
%
10!=1?1:2)):1)))))));$Td=$Td[$Xc];}$oa=func_get_args();array_shift($oa);return
vsprintf((isset($Td)?$Td:$t),$oa);}function
switch_lang(){global$a,$jc;echo"<form action=''>\n<div id='lang'>";hidden_fields($_GET,array('lang'));echo
lang(7).": ".html_select("lang",$jc,$a,"var loc = location.search.replace(/[?&]lang=[^&]*/, ''); location.search = loc + (loc ? '&' : '') + 'lang=' + this.value;")," <input type='submit' value='".lang(8)."' class='hidden'>\n","</div>\n</form>\n";}if(isset($_GET["lang"])){$_COOKIE["adminer_lang"]=$_GET["lang"];$_SESSION["lang"]=$_GET["lang"];}$a="en";if(isset($jc[$_COOKIE["adminer_lang"]])){cookie("adminer_lang",$_COOKIE["adminer_lang"]);$a=$_COOKIE["adminer_lang"];}elseif(isset($jc[$_SESSION["lang"]])){$a=$_SESSION["lang"];}else{$ja=array();preg_match_all('~([-a-z]+)(;q=([0-9.]+))?~',str_replace("_","-",strtolower($_SERVER["HTTP_ACCEPT_LANGUAGE"])),$tc,PREG_SET_ORDER);foreach($tc
as$x){$ja[$x[1]]=(isset($x[3])?$x[3]:1);}arsort($ja);foreach($ja
as$u=>$dd){if(isset($jc[$u])){$a=$u;break;}$u=preg_replace('~-.*~','',$u);if(!isset($ja[$u])&&isset($jc[$u])){$a=$u;break;}}}switch($a){case"en":$R=array('Are you sure?','Unable to upload a file.','Maximum allowed file size is %sB.','File does not exist.','empty','original','No tables.','Language','Use','Please use one of the extensions %s.','File exists.','User types','Numbers','Date and time','Strings','Binary','Network','Geometry','Lists','Editor','Username','Password','Login','Permanent login','New item','Last page',array('%d byte','%d bytes'),'yes','no','$1-$3-$5','Search','anywhere','Sort','Limit','Action','Select','E-mail','From','Subject','Insert','Attachments','Send',array('%d e-mail has been sent.','%d e-mails have been sent.'),'now','HH:MM:SS','[yyyy]-mm-dd','Logout','Select data','ltr','Resend POST data?','No response from server.','Server','Invalid CSRF token. Send the form again.','Logout successful.','Session support must be enabled.','Session expired, please login again.','Invalid credentials.','No extension','None of the supported PHP extensions (%s) are available.','Too big POST data. Reduce the data or increase the %s configuration directive.','Item has been deleted.','Item has been updated.','Item%s has been inserted.','Edit','No rows.','Save','Save and continue edit','Save and insert next','Delete',array('%d item has been affected.','%d items have been affected.'),'Double click on a value to modify it.',array('%d row has been imported.','%d rows have been imported.'),'Unable to select the table','edit','Relations','Use edit link to modify this value.','Page','last',array('%d row','%d rows'),'whole result','Clone','Export','Import','Search data in tables','Table','Rows',',',array('%d query executed OK.','%d queries executed OK.'));break;case"cs":$R=array('Opravdu?','Nepodařilo se nahrát soubor.','Maximální povolená velikost souboru je %sB.','Soubor neexistuje.','prázdné','původní','Žádné tabulky.','Jazyk','Vybrat','Prosím použijte jednu z koncovek %s.','Soubor existuje.','Uživatelské typy','Čísla','Datum a čas','Řetězce','Binární','Síť','Geometrie','Seznamy','Editor','Uživatel','Heslo','Přihlásit se','Trvalé přihlášení','Nová položka','Poslední stránka',array('%d bajt','%d bajty','%d bajtů'),'ano','ne','$6.$4.$1','Vyhledat','kdekoliv','Seřadit','Limit','Akce','Vypsat','E-mail','Odesílatel','Předmět','Vložit','Přílohy','Odeslat',array('Byl odeslán %d e-mail.','Byly odeslány %d e-maily.','Bylo odesláno %d e-mailů.'),'teď','HH:MM:SS','d.m.[rrrr]','Odhlásit','Vypsat data','ltr','Znovu odeslat POST data?','Server neodpověděl.','Server','Neplatný token CSRF. Odešlete formulář znovu.','Odhlášení proběhlo v pořádku.','Session proměnné musí být povolené.','Session vypršela, přihlašte se prosím znovu.','Neplatné přihlašovací údaje.','Žádná extenze','Není dostupná žádná z podporovaných PHP extenzí (%s).','Příliš velká POST data. Zmenšete data nebo zvyšte hodnotu konfigurační direktivy %s.','Položka byla smazána.','Položka byla aktualizována.','Položka%s byla vložena.','Upravit','Žádné řádky.','Uložit','Uložit a pokračovat v editaci','Uložit a vložit další','Smazat',array('Byl ovlivněn %d záznam.','Byly ovlivněny %d záznamy.','Bylo ovlivněno %d záznamů.'),'Dvojklikněte na políčko, které chcete změnit.',array('Byl importován %d záznam.','Byly importovány %d záznamy.','Bylo importováno %d záznamů.'),'Nepodařilo se vypsat tabulku','upravit','Vztahy','Ke změně této hodnoty použijte odkaz upravit.','Stránka','poslední',array('%d řádek','%d řádky','%d řádků'),'celý výsledek','Klonovat','Export','Import','Vyhledat data v tabulkách','Tabulka','Řádků',' ','Pozměnit typ');break;case"sk":$R=array('Naozaj?','Súbor sa nepodarilo nahrať.','Maximálna povolená veľkosť súboru je %sB.','Súbor neexistuje.','prázdne','originál','Žiadne tabuľky.','Jazyk','Vybrať','Prosím vyberte jednu z koncoviek %s.','Súbor existuje.','Užívateľské typy','Čísla','Dátum a čas','Reťazce','Binárne','Sieť','Geometria','Zoznamy','Editor','Používateľ','Heslo','Prihlásiť sa','Trvalé prihlásenie','Nová položka','Posledná stránka',array('%d bajt','%d bajty','%d bajtov'),'yes','no','$6.$4.$1','Vyhľadať','kdekoľvek','Zotriediť','Limit','Akcia','Vypísať','E-mail','Odosielateľ','Predmet','Vložiť','Prílohy','Odoslať',array('Bol odoslaný %d e-mail.','Boli odoslané %d e-maily.','Bolo odoslaných %d e-mailov.'),'teraz','HH:MM:SS','d.m.[rrrr]','Odhlásiť','Vypísať dáta','ltr','Znovu poslať POST data?','No response from server.','Server','Neplatný token CSRF. Odošlite formulár znova.','Odhlásenie prebehlo v poriadku.','Session premenné musia byť povolené.','Session vypršala, prihláste sa prosím znova.','Neplatné prihlasovacie údaje.','Žiadne rozšírenie','Nie je dostupné žiadne z podporovaných rozšírení (%s).','Príliš veľké POST dáta. Zmenšite dáta alebo zvýšte hodnotu konfiguračej direktívy %s.','Položka bola vymazaná.','Položka bola aktualizovaná.','Položka%s bola vložená.','Upraviť','Žiadne riadky.','Uložiť','Uložiť a pokračovať v úpravách','Uložiť a vložiť ďalší','Zmazať','%d položiek bolo ovplyvnených.','Dvojkliknite na políčko, ktoré chcete zmeniť.',array('Bol importovaný %d záznam.','Boli importované %d záznamy.','Bolo importovaných %d záznamov.'),'Tabuľku sa nepodarilo vypísať','upraviť','Vzťahy','Pre zmenu tejto hodnoty použite odkaz upraviť.','Stránka','posledný',array('%d riadok','%d riadky','%d riadkov'),'celý výsledok','Klonovať','Export','Import','Vyhľadať dáta v tabuľkách','Tabuľka','Riadky',' ','Upraviť všetko');break;case"nl":$R=array('Weet u het zeker?','Onmogelijk bestand te uploaden.','Maximum toegelaten bestandsgrootte is %sB.','Bestand niet gevonden.','leeg','origineel','Geen tabellen.','Taal','Gebruik','Gebruik 1 van volgende extensies: %s.','Bestand bestaat reeds.','Gebruikersgedefiniëerde types','Getallen','Datum en tijd','Tekst','Binaire gegevens','Netwerk','Geometrie','Lijsten','Editor','Gebruikersnaam','Wachtwoord','Inloggen','Blijf aangemeld','Nieuw item','Laatste pagina',array('%d byte','%d bytes'),'yes','no','$5-$3-$1','Zoeken','overal','Sorteren','Beperk','Acties','Kies','E-mail','Van','Onderwerp','Toevoegen','Bijlagen','Verzenden',array('%d e-mail verzonden.','%d e-mails verzonden.'),'nu','HH:MM:SS','dd-mm-[jjjj]','Uitloggen','Gegevens selecteren','ltr','POST data opnieuw verzenden','No response from server.','Server','Ongeldig CSRF token. Verstuur het formulier opnieuw.','Uitloggen geslaagd.','Sessies moeten geactiveerd zijn.','Uw sessie is verlopen. Gelieve opnieuw in te loggen.','Ongeldige logingegevens.','Geen extensie','Geen geldige PHP extensies beschikbaar (%s).','POST-data is te groot. Verklein de hoeveelheid data of verhoog de %s configuratie.','Item verwijderd.','Item aangepast.','Item%s toegevoegd.','Bewerk','Geen rijen.','Opslaan','Opslaan en verder bewerken','Opslaan, daarna toevoegen','Verwijderen',array('%d item aangepast.','%d items aangepast.'),'Dubbelklik op een waarde om deze te bewerken.',array('%d rij werd geïmporteerd.','%d rijen werden geïmporteerd.'),'Onmogelijk tabel te selecteren','bewerk','Relaties','Gebruik de link "bewerk" om deze waarde te wijzigen.','Pagina','laatste',array('%d rij','%d rijen'),'volledig resultaat','Dupliceer','Exporteren','Importeren','Zoeken in database','Tabel','Rijen','.','Alles bewerken');break;case"es":$R=array('Está seguro?','No es posible importar archivo.','Tamaño máximo de archivo es %sB.','Archivo no existe.','ningúno','original','No existen tablas.','Idioma','Usar','Por favor use una de las extensiones %s.','Archivo ya existe.','Tipos definido por el usuario','Números','Fecha y hora','Cadena','Binario','Red','Geometría','Listas','Editor','Usuario','Contraseña','Login','Guardar contraseña','Nuevo Registro','Ultima página',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Condición','donde sea','Ordenar','Limit','Acción','Mostrar','Email','De','Asunto','Agregar','Adjuntos','Enviar',array('%d email enviado.','%d emails enviados.'),'ahora','HH:MM:SS','dd/mm/[aaaa]','Logout','Visualizar contenido','ltr','Volver a enviar POST data?','No response from server.','Servidor','Token CSRF inválido. Vuelva a enviar los datos del formulario.','Salida exitosa.','Deben estar habilitadas las sesiones.','Sesión expirada, por favor ingrese su clave de nuevo.','Identificacion inválida.','No hay extension','Ninguna de las extensiones PHP soportadas (%s) está disponible.','POST data demasiado grande. Reduzca el tamaño o aumente la directiva de configuración %s.','Registro eliminado.','Registro modificado.','Registro%s insertado.','Modificar','No existen registros.','Guardar','Guardar y continuar editando','Guardar e insertar otro','Eliminar',array('%d ítem afectado.','%d itemes afectados.'),'Doble-clic sobre el valor para editarlo.',array('%d registro importado.','%d registros importados.'),'No es posible seleccionar la tabla','modificar','Relaciones','Utilice el enlace de modificar para realizar los cambios.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar datos en tablas','Tabla','Registros',' ','Editar todos');break;case"de":$R=array('Sind Sie sicher ?','Hochladen von Datei fehlgeschlagen.','Maximal erlaubte Dateigrösse ist %sB.','Datei existiert nicht.','leer','Original','Keine Tabellen.','Sprache','Benutzung','Bitte einen der Dateitypen %s benutzen.','Datei existiert schon.','Benutzer-definierte Typen','Zahlen','Datum oder Zeit','Zeichenketten','Binär','Netzwerk','Geometrie','Listen','Editor','Benutzer','Passwort','Login','Passwort speichern','Neuer Datensatz','Letzte Seite',array('%d Byte','%d Bytes'),'yes','no','$6.$4.$1','Suchen','beliebig','Ordnen','Begrenzung','Aktion','Daten zeigen von','E-mail','Von','Betreff','Hinzufügen','Anhänge','Abschicken',array('%d e-mail abgeschickt.','%d e-mails abgeschickt.'),'jetzt','HH:MM:SS','t.m.[jjjj]','Abmelden','Daten auswählen','ltr','POST data noch einmal senden ?','No response from server.','Server','CSRF Token ungültig. Bitte die Formulardaten erneut abschicken.','Abmeldung erfolgreich.','Sitzungen müssen aktiviert sein.','Sitzungsdauer abgelaufen, bitte erneut anmelden.','Ungültige Anmelde-Informationen.','Keine Erweiterungen installiert','Keine der unterstützten PHP-Erweiterungen (%s) ist vorhanden.','POST data zu gross. Reduzieren Sie die Grösse oder vergrössern Sie den Wert %s in der Konfiguration.','Datensatz gelöscht.','Datensatz geändert.','Datensatz%s hinzugefügt.','Ändern','Keine Daten.','Speichern','Speichern und weiter bearbeiten','Speichern und nächsten hinzufügen','Entfernen','%d Artikel betroffen.','Doppelklick zum Bearbeiten des Wertes.',array('%d Datensatz importiert.','%d Datensätze wurden importiert.'),'Auswahl der Tabelle fehlgeschlagen','ändern','Relationen','Benutzen Sie den Link zum editieren dieses Wertes.','Seite','letzte',array('%d Datensatz','%d Datensätze'),'Gesamtergebnis','Klonen','Exportieren','Importieren','Suche in Tabellen','Tabelle','Datensätze',' ','Alle ändern');break;case"fr":$R=array('Êtes-vous certain ?','Impossible d\'importer le fichier.','La taille maximale des fichiers est de %sB.','Le fichier est introuvable.','vide','original','Aucune table.','Langue','Utiliser','Veuillez utiliser l\'une des extensions %s.','Le fichier existe.','Types utilisateur','Nombres','Date et heure','Chaînes','Binaires','Réseau','Géométrie','Listes','Éditeur','Utilisateur','Mot de passe','Authentification','Authentification permanente','Nouvel élément','Dernière page',array('%d octet','%d octets'),'yes','no','$5/$3/$1','Rechercher','n\'importe où','Trier','Limite','Action','Select','Courriel','De','Sujet','Insérer','Pièces jointes','Envoyer',array('%d message a été envoyé.','%d messages ont été envoyés.'),'maintenant','HH:MM:SS','jj/mm/[aaaa]','Déconnexion','Afficher les données','ltr','Renvoyer les données POST ?','No response from server.','Serveur','Token CSRF invalide. Veuillez réenvoyer le formulaire.','Au revoir !','Veuillez activer les sessions.','Session expirée, veuillez vous authentifier à nouveau.','Authentification échouée.','Extension introuvable','Aucune des extensions PHP supportées (%s) n\'est disponible.','Données POST trop grandes. Réduisez la taille des données ou augmentez la valeur de %s dans la configuration de PHP.','L\'élément a été supprimé.','L\'élément a été modifié.','L\'élément%s a été inséré.','Modifier','Aucun résultat.','Sauvegarder','Sauvegarder et continuer l\'édition','Sauvegarder et insérer le prochain','Effacer',array('%d élément a été modifié.','%d éléments ont été modifiés.'),'Double-cliquez sur une valeur pour la modifier.',array('%d ligne a été importée.','%d lignes ont été importées.'),'Impossible de sélectionner la table','modifier','Relations','Utilisez le lien "modifier" pour modifier cette valeur.','Page','dernière',array('%d ligne','%d lignes'),'résultat entier','Cloner','Exporter','Importer','Rechercher dans les tables','Table','Lignes',',','Tout modifier');break;case"it":$R=array('Sicuro?','Caricamento del file non riuscito.','La dimensione massima del file è %sB.','Il file non esiste.','vuoto','originale','No tabelle.','Lingua','Usa','Usa una delle estensioni %s.','Il file esiste già.','Tipi definiti dall\'utente','Numeri','Data e ora','Stringhe','Binari','Rete','Geometria','Liste','Editor','Utente','Password','Autenticazione','Login permanente','Nuovo elemento','Ultima pagina',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Cerca','ovunque','Ordina','Limite','Azione','Seleziona','E-mail','Da','Oggetto','Inserisci','Allegati','Invia',array('%d e-mail inviata.','%d e-mail inviate.'),'adesso','HH:MM:SS','dd/mm/[yyyy]','Esci','Visualizza dati','ltr','Reinvio i dati POST?','No response from server.','Server','Token CSRF non valido. Reinvia la richiesta.','Uscita effettuata con successo.','Le sessioni devono essere abilitate.','Sessione scaduta, autenticarsi di nuovo.','Credenziali non valide.','Estensioni non presenti','Nessuna delle estensioni PHP supportate (%s) disponibile.','Troppi dati via POST. Ridurre i dati o aumentare la direttiva di configurazione %s.','Elemento eliminato.','Elemento aggiornato.','Elemento%s inserito.','Modifica','Nessuna riga.','Salva','Salva e continua','Salva e inserisci un altro','Elimina',array('Il risultato consiste in %d elemento.','Il risultato consiste in %d elementi.'),'Fai doppio click su un valore per modificarlo.',array('%d riga importata.','%d righe importate.'),'Selezione della tabella non riuscita','modifica','Relazioni','Usa il link modifica per modificare questo valore.','Pagina','ultima',array('%d riga','%d righe'),'intero risultato','Clona','Esporta','Importa','Cerca nelle tabelle','Tabella','Righe','.','Modifica tutto');break;case"et":$R=array('Kas oled kindel?','Faili üleslaadimine pole võimalik.','Maksimaalne failisuurus %sB.','Faili ei leitud.','tühi','originaal','Tabeleid ei leitud.','Keel','Kasuta','Palun kasuta üht laiendustest %s.','Fail juba eksisteerib.','Kasutajatüübid','Numbrilised','Kuupäev ja kellaaeg','Tekstid','Binaar','Võrk (network)','Geomeetria','Listid','Redaktor','Kasutajanimi','Parool','Logi sisse','Jäta mind meelde','Lisa kirje','Viimane lehekülg',array('%d bait','%d baiti'),'yes','no','$6.$4.$1','Otsi','vahet pole','Sorteeri','Piira','Tegevus','Kuva','E-post','Kellelt','Pealkiri','Sisesta','Manused','Saada','Saadetud kirju: %d.','nüüd','HH:MM:SS','d.m.[yyyy]','Logi välja','Vaata andmeid','ltr','Saada POST andmed uuesti?','No response from server.','Server','Sobimatu CSRF, palun postitage vorm uuesti.','Väljalogimine õnnestus.','Sessioonid peavad olema lubatud.','Sessioon on aegunud, palun logige uuesti sisse.','Ebakorrektsed andmed.','Ei leitud laiendust','Serveris pole ühtegi toetatud PHP laiendustest (%s).','POST-andmete maht on liialt suur. Palun vähendage andmeid või suurendage %s php-seadet.','Kustutamine õnnestus.','Uuendamine õnnestus.','Kirje%s on edukalt lisatud.','Muuda','Sissekanded puuduvad.','Salvesta','Salvesta ja jätka muutmist','Salvesta ja lisa järgmine','Kustuta','Mõjutatud kirjeid: %d.','Väärtuse muutmiseks topelt-kliki sellel.','Imporditi %d rida.','Tabeli valimine ebaõnnestus','muuda','Seosed','Väärtuse muutmiseks kasuta muutmislinki.','Lehekülg','viimane','%d rida','Täielikud tulemused','Kloon','Ekspordi','Impordi','Otsi kogu andmebaasist','Tabel','Ridu',',','Muuda kõiki');break;case"hu":$R=array('Biztos benne?','Nem tudom feltölteni a fájlt.','A maximális fájlméret %s B.','A fájl nem létezik.','üres','eredeti','Nincs tábla.','Nyelv','Használ','Használja a(z) %s kiterjesztést.','A fájl létezik.','Felhasználói típus','Szám','Dátum és idő','Szöveg','Bináris','Hálózat','Geometria','Lista','Szerkesztő','Felhasználó','Jelszó','Belépés','Emlékezz rám','Új tétel','Utolsó oldal',array('%d bájt','%d bájt','%d bájt'),'yes','no','$6.$4.$1','Keresés','bárhol','Sorba rendezés','korlát','Művelet','Kiválasztás','E-mail','Feladó','Tárgy','Beszúr','Csatolmány','Küldés',array('%d e-mail elküldve.','%d e-mail elküldve.','%d e-mail elküldve.'),'most','óó:pp:mm','[yyyy].m.d','Kilépés','Tartalom','ltr','Újraküldi a POST adatokat?','No response from server.','Szerver','Érvénytelen CSRF azonosító. Küldd újra az űrlapot.','Sikeres kilépés.','A munkameneteknek (session) engedélyezve kell lennie.','Munkamenet lejárt, jelentkezz be újra.','Érvénytelen adatok.','Nincs kiterjesztés','Nincs egy elérhető támogatott PHP kiterjesztés (%s) sem.','Túl sok a POST adat! Csökkentsd az adat méretét, vagy növeld a %s beállítást.','A tétel törölve.','A tétel frissítve.','%s tétel beszúrva.','Szerkeszt','Nincs megjeleníthető eredmény.','Mentés','Mentés és szerkesztés folytatása','Mentés és újat beszúr','Törlés',array('%d tétel érintett.','%d tétel érintett.','%d tétel érintett.'),'Kattints kétszer az értékre a szerkesztéshez.',array('%d sor importálva.','%d sor importálva.','%d sor importálva.'),'Nem tudom kiválasztani a táblát','szerkeszt','Reláció','Használd a szerkesztés hivatkozást ezen érték módosításához.','oldal','utolsó',array('%d sor','%d sor','%d sor'),'összes eredményt mutatása','Klónoz','Export','Importálás','Keresés a táblákban','Tábla','Oszlop',' ','Összes szerkesztése');break;case"pl":$R=array('Czy jesteś pewien?','Wgranie pliku było niemożliwe.','Maksymalna wielkość pliku to %sB.','Plik nie istnieje.','puste','bez zmian','Brak tabel.','Język','Wybierz','Proszę użyć jednego z rozszerzeń: %s.','Plik już istnieje.','Typy użytkownika','Numeryczne','Data i czas','Tekstowe','Binarne','Sieć','Geometria','Listy','Edytor','Użytkownik','Hasło','Zaloguj się','Zapamiętaj sesję','Nowy rekord','Ostatnia strona',array('%d bajt','%d bajty','%d bajtów'),'yes','no','$6.$4.$1','Szukaj','gdziekolwiek','Sortuj','Limit','Czynność','pokaż','E-mail','Nadawca','Temat','Dodaj','Załączniki','Wyślij',array('Wysłano %d e-mail.','Wysłano %d e-maile.','Wysłano %d e-maili.'),'teraz','HH:MM:SS','d.m.[rrrr]','Wyloguj','Pokaż dane','ltr','Wysłać dane ponownie?','No response from server.','Serwer','Nieprawidłowy token CSRF. Spróbuj wysłać formularz ponownie.','Wylogowano pomyślnie.','Wymagana jest obsługa sesji w PHP.','Sesja wygasła, zaloguj się ponownie.','Nieprawidłowe dane logowania.','Brak rozszerzenia','Żadne z rozszerzeń PHP umożliwiających połączenie się z bazą danych (%s) nie jest dostępne.','Przesłano zbyt dużo danych. Zmniejsz objętość danych lub zwiększ zmienną konfiguracyjną %s.','Rekord został usunięty.','Rekord został zaktualizowany.','Rekord%s został dodany.','Edytuj','Brak rekordów.','Zapisz zmiany','Zapisz i kontynuuj edycję','Zapisz i dodaj następny','Usuń',array('Zmieniono %d rekord.','Zmieniono %d rekordy.','Zmieniono %d rekordów.'),'Kliknij podwójnie wartość, aby ją edytować.',array('%d rekord został zaimportowany.','%d rekordy zostały zaimportowane.','%d rekordów zostało zaimportowanych.'),'Nie udało się pobrać danych z tabeli','edytuj','Relacje','Użyj linku edycji aby zmienić tę wartość.','Strona','ostatni',array('%d rekord','%d rekordy','%d rekordów'),'wybierz wszystkie','Duplikuj','Eksport','Import','Wyszukaj we wszystkich tabelach','Tabela','Liczba rekordów',' ','Zmień typ');break;case"ca":$R=array('Estàs segur?','Impossible adjuntar el fitxer.','La mida màxima permesa del fitxer és de %sB.','El fitxer no existeix.','buit','original','No hi ha cap taula.','Idioma','Utilitza','Si us plau, utilitza una de les extensions %s.','El fitxer ja existeix.','Tipus de l\'usuari','Nombres','Data i hora','Cadenes','Binari','Xarxa','Geometria','Llistes','Editor','Nom d\'usuari','Contrasenya','Inicia la sessió','Sessió permanent','Nou element','Darrera plana',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Cerca','a qualsevol lloc','Ordena','Límit','Acció','Selecciona','Correu electrònic','De','Assumpte','Insereix','Adjuncions','Envia',array('S\'ha enviat %d correu electrònic.','S\'han enviat %d correus electrònics.'),'ara','HH:MM:SS','dd/mm/[aaaa]','Desconnecta','Selecciona dades','ltr','Torna a enviar les dades POST?','No response from server.','Servidor','Token CSRF invàlid. Torna a enviar el formulari.','Desconnexió correcta.','Cal que estigui permès l\'us de sessions.','La sessió ha expirat, torna a iniciar-ne una.','Credencials invàlids.','Cap extensió','No hi ha cap de les extensions PHP soporatades (%s) disponible.','Les dades POST són massa grans. Redueix les dades o incrementa la directiva de configuració %s.','S\'ha suprmit l\'element.','S\'ha actualitzat l\'element.','S\'ha insertat l\'element%s.','Edita','No hi ha cap registre.','Desa','Desa i segueix editant','Desa i insereix el següent','Suprimeix',array('S\'ha modificat %d element.','S\'han modificat %d elements.'),'Fes un doble clic a un valor per modificar-lo.',array('S\'ha importat %d registre.','S\'han importat %d registres.'),'Impossible seleccionar la taula','edita','Relacions','Utilitza l\'enllaç d\'edició per modificar aquest valor.','Plana','darrera',array('%d registre','%d registres'),'tots els resultats','Clona','Exporta','Importa','Cerca dades en les taules','Taula','Files',',','Edita-ho tot');break;case"pt":$R=array('Está seguro?','Não é possivel enviar o arquivo.','Tamanho máximo do arquivo é %sB.','Arquivo não existe.','vazio','original','Não existem tabelas.','Idioma','Usar','Por favor use uma das extensões %s.','Arquivo ja existe.','Tipos definido pelo usuario','Números','Data e hora','Cadena','Binario','Rede','Geometría','Listas','Editor','Usuario','Senha','Entrar','Salvar Senha','Novo Registro','Ultima página',array('%d byte','%d bytes'),'yes','no','$5/$3/$1','Procurar','qualquer local','Ordenar','Limite','Ação','Selecionar','E-mail','De','Assunto','Inserir','Anexos','Enviar',array('%d email enviado.','%d emails enviados.'),'agora','HH:MM:SS','dd/mm/[aaaa]','Sair','Selecionar dados','ltr','Resend POST data?','No response from server.','Servidor','Token CSRF inválido. Enviar o formulario novamente.','Saida bem sucedida.','Devem estar habilitadas as sessões.','Sessão expirada, por favor entre sua Chave de novo.','Identificação inválida.','Não ha extension','Nenhuma das extensões PHP soportadas (%s) está disponivel.','POST data demasiado grande. Reduza o tamanho ou aumente a diretiva de configuração %s.','Registro eliminado.','Registro modificado.','Registro%s inserido.','Modificar','Não existem registros.','Salvar','Salvar e continuar editando','Salvar e inserir outro','Apagar',array('%d ítem afetado.','%d itens afetados.'),'Doble-clic sobre o valor para edita-lo.',array('%d registro importado.','%d registros importados.'),'Não é possivel selecionar a Tabela','modificar','Relações','Utilize o link modificar para alterar.','Página','último',array('%d registro','%d registros'),'resultado completo','Clonar','Exportar','Importar','Buscar dados nas Tabelas','Tabela','Registros',' ','Esquema inválido.');break;case"sl":$R=array('Ste prepričani?','Ne morem naložiti datoteke.','Največja velikost datoteke je %sB.','Datoteka ne obstaja.','prazno','original','Ni tabel.','Jezik','Uporabi','Prosim, uporabite enega od dodatkov %s.','Datoteka obstaja.','Uporabniški tipi','Števila','Datum in čas','Nizi','Binarni','Mrežni','Geometrčni','Seznami','Urejevalnik','Uporabniško ime','Geslo','Prijavi se','Trajna prijava','Nov predmet','Zadnja stran',array('%d bajt','%d bajta','%d bajti','%d bajtov'),'yes','no','$6.$4.$1','Išči','kjerkoli','Sortiraj','Limita','Dejanje','Izberi','E-mail','Od','Zadeva','Vstavi','Priponke','Pošlji',array('Poslan je %d e-mail.','Poslana sta %d e-maila.','Poslani so %d e-maili.','Poslanih je %d e-mailov.'),'zdaj','HH:MM:SS','d.m.[rrrr]','Odjavi se','Izberi podatke','ltr','Resend POST data?','No response from server.','Strežnik','Neveljaven token CSRF. Pošljite formular še enkrat.','Prijava uspešna.','Podpora za seje mora biti omogočena.','Seja je potekla. Prosimo, ponovno se prijavite.','Neveljavne pravice.','Brez dodatkov','Noben od podprtih dodatkov za PHP (%s) ni na voljo.','Preveliko podatkov za POST. Zmanjšajte število podatkov ali povečajte nastavitev za %s.','Predmet je izbrisan.','Predmet je posodobljen.','Predmet%s je vstavljen.','Uredi','Ni vrstic.','Shrani','Shrani in nadaljuj z urejanjem','Shrani in vstavi tekst','Izbriši',array('Spremenjen je %d predmet.','Spremenjena sta %d predmeta.','Spremenjeni so %d predmeti.','Spremenjenih je %d predmetov.'),'Dvojni klik na vrednost za urejanje.',array('Uvožena je %d vrstica.','Uvoženi sta %d vrstici.','Uvožene so %d vrstice.','Uvoženih je %d vrstic.'),'Ne morem izbrati tabele','uredi','Relacijski','Uporabite urejanje povezave za spreminjanje te vrednosti.','Stran','Zadnja',array('%d vrstica','%d vrstici','%d vrstice','%d vrstic'),'cel razultat','Kloniraj','Izvozi','Uvozi','Išče podatke po tabelah','Tabela','Vrstic',' ','Spremeni tip');break;case"lt":$R=array('Tikrai?','Nepavyko įkelti failo.','Maksimalus failo dydis - %sB.','Failas neegzistuoja.','tuščia','originalas','Nėra lentelių.','Kalba','Naudoti','Naudokite vieną iš plėtinių %s.','Failas egzistuoja.','Vartotojų tipai','Skaičiai','Data ir laikas','Tekstas','Dvejetainis','Tinklas','Geometrija','Sąrašai','Redaktorius','Vartotojas','Slaptažodis','Prisijungti','Pastovus prisijungimas','Naujas įrašas','Paskutinis puslapis',array('%d baitas','%d baigai','%d baitų'),'yes','no','$1-$3-$5','Ieškoti','visur','Rikiuoti','Limitas','Veiksmas','Atrinkti','El. paštas','Nuo','Antraštė','Įrašyti','Priedai','Siųsti',array('Išsiųstas %d laiškas.','Išsiųsti %d laiškai.','Išsiųsta %d laiškų.'),'dabar','HH:MM:SS','[yyyy]-mm-dd','Atsijungti','Atrinkti duomenis','ltr','Persiųsti POST duomenis?','No response from server.','Serveris','Neteisingas CSRF tokenas. Bandykite siųsti formos duomenis dar kartą.','Jūs atsijungėte nuo sistemos.','Sesijų palaikymas turi būti įjungtas.','Sesijos galiojimas baigėsi. Prisijunkite iš naujo.','Neteisingi prisijungimo duomenys.','Nėra plėtiio','Nėra nei vieno iš palaikomų PHP plėtinių (%s).','Per daug POST duomenų. Sumažinkite duomenų kiekį arba padidinkite konfigūracijos nustatymą %s.','Įrašas ištrintas.','Įrašas pakeistas.','Įrašas%s sukurtas.','Redaguoti','Nėra įrašų.','Išsaugoti','Išsaugoti ir tęsti redagavimą','Išsaugoti ir įrašyti kitą','Trinti',array('Pakeistas %d įrašas.','Pakeisti %d įrašai.','Pakeistas %d įrašų.'),'Du kartus spragtelėkite pelyte norėdami redaguoti.',array('%d įrašas įkelta.','%d įrašai įkelti.','%d įrašų įkelta.'),'Neįmanoma atrinkti lentelės','redaguoti','Ryšiai','Norėdami redaguoti reikšmę naudokite redagavimo nuorodą.','Puslapis','paskutinis',array('%d įrašas','%d įrašai','%d įrašų'),'visas rezultatas','Klonuoti','Eksportas','Importas','Ieškoti duomenų lentelėse','Lentelė','Įrašai',' ','Keisti tipą');break;case"tr":$R=array('Emin misin?','Dosya gönderilemiyor.','Bir dosya için izin verilen dosya sınırı %sB.','Dosya mevcut değil.','boş','orijinal','Tablo yok.','Dil','Kullan','%s uzantılarından birini kullanın.','Dosya mevcut.','Kullanıcı türleri','Sayılar','Tarih ve zaman','Sözcükler','İkili','Ağ','Geometri','Listeler','Düzenleyici','Kullanıcı','Parola','Giriş','Kalıcı giriş','Yeni öğe','Son sayfa',array('%d bayt','%d kadar bayt'),'yes','no','$6.$4.$1','Arama','herhangi bir yer','Sırala','sınır','Eylem','Seç','E-posta','Gönderen','Konu','Ekle','Ekler','Gönder',array('%d e-posta dönderildi.','%d kadar e-posta gönderildi.'),'şimdi','HH:MM:SS','d.m.[rrrr]','Çıkış','Veri seç','ltr','Resend POST data?','No response from server.','Sunucu','Geçersiz Cross-site request forgery (CSRF) jetonu. Forumu tekrar yolla.','Başarıyla çıkıldı.','Oturum desteği etkin olmalıdır.','Oturum süresi doldu, lütfen tekrar giriş yapın.','Geçersiz kimlik.','Uzantı yok','Desteklenen PHP uzantılarından (%s) hiçbiri mevcut değil.','Çok büyük POST verisi, veriyi azaltın ya da ayar yönergesini uygun olarak yapılandırın.','Öğe silindi.','Öğe güncellendi.','Öğeler eklendi.','Düzen','Sıra yok.','Kaydet','Kaydet ve düzenlemeye devam et','Kaydet ve sonrakin ekle','Sil',array('%d öğe etkilendi.','%d kadar öğe etkilendi.'),'Değerin üzerine çift tıklayın ve değiştirin.',array('%d sıra ithal edildi.','%d kadar sıra ithal edildi.'),'Tablo seçilemedi','düzen','İlişkiler','Değeri değiştirmek için düzenleme bağlantısını kullanın.','Sayfa','son',array('%d sıra)','%d kadar sıra'),'tüm sonuç','Klonla','İhraç','İthal','Tablolarda veri ara.','Tablo','Sıralar (Rows)',' ','Tür değiştir');break;case"ro":$R=array('Ești precis?','Nu am putut încărca fișierul pe server.','Fișierul maxim admis - %sO.','Așa fișier nu există.','gol','original','În baza de date nu sunt tabele.','Limba','Alege','Folosiți una din următoarele extensii %s.','Fișierul deja există.','Tipuri de utilizatori','Număr','Data și timpul','Șire de caractere','Tip binar','Rețea','Geometrie','Liste','Editor','Nume de utilizator','Parola','Intră','Logare permanentă','Înscriere nouă','Ultima pagină',array('%d octet','%d octeți'),'yes','no','$5.$3.$1','Căutare','oriunde','Sortare','Limit','Acțiune','Selectează','Poșta electronică','De la','Pentru','Inserează','Fișiere atașate','Trimite',array('A fost trimisă %d scrisoare.','Au fost trimise %d scrisori.'),'acum','HH:MM:SS','dd.mm.[yyyy]','Eșire','Selectează','ltr','Retrimite datele POST?','No response from server.','Server','CSRF token imposibil. Retrimite forma.','Ați eșit cu succes.','Sesiunile trebuie să fie pornite.','Timpul sesiunii a expirat, rog să te loghezi din nou.','Numele de utilizator sau parola este greșită.','Nu este extensie','Nu este aviabilă nici o extensie suportată (%s).','Mesajul POST este prea mare. Trimiteți mai puține date sau măriți parametrul configurației directivei %s.','Înregistrare a fost ștearsă.','Înregistrare a fost înnoită.','Înregistrarea%s a fost inserată.','Editează','Nu sunt înscrieri.','Salvează','Salvează și continuă editarea','Salvează și mai inserează','Șterge',array('A fost modificată %d înscriere.','Au fost modificate %d înscrieri.'),'Dublu click pe o valoare pentru a o modifica.',array('%d rînd importat.','%d rînduri importate.'),'Nu am putut selecta date din tabel','editare','Relații','Valoare poate fi modificată cu ajutorul butonului «modifică».','Pagina','ultima',array('%d înscriere','%d înscrieri'),'tot rezultatul','Clonează','Export','Importă','Caută în tabele','Tabel','Înscrieri',',','Editează tot');break;case"ru":$R=array('Вы уверены?','Не удалось загрузить файл на сервер.','Максимальный разрешенный размер файла - %sB.','Такого файла не существует.','пусто','исходный','В базе данных нет таблиц.','Язык','Выбрать','Используйте одно из этих расширений %s.','Файл уже существует.','Типы пользователей','Число','Дата и время','Строки','Двоичный тип','Сеть','Геометрия','Списки','Редактор','Имя пользователя','Пароль','Войти','Оставаться в системе','Новая запись','Последняя страница',array('%d байт','%d байта','%d байтов'),'yes','no','$5.$3.$1','Поиск','в любом месте','Сортировать','Лимит','Действие','Выбрать','Электропочта','От','Кому','Вставить','Прикрепленные файлы','Послать',array('Было отправлено %d письмо.','Было отправлено %d письма.','Было отправлено %d писем.'),'сейчас','ЧЧ:ММ:СС','дд.мм.[гггг]','Выйти','Выбрать','ltr','Еще раз послать данные POST запроса?','No response from server.','Сервер','Недействительный CSRF токен. Отправите форму ещё раз.','Вы успешно покинули систему.','Сессии должны быть включены.','Срок действия сесси истек, нужно снова войти в систему.','Неправильное имя пользователя или пароль.','Нет расширений','Не доступно ни одного расширения из поддерживаемых (%s).','Слишком большой объем POST-данных. Пошлите меньший объем данных или увеличьте параметр конфигурационной директивы %s.','Запись удалена.','Запись обновлена.','Запись%s была вставлена.','Редактировать','Нет записей.','Сохранить','Сохранить и продолжить редактирование','Сохранить и вставить еще','Стереть',array('Была изменена %d запись.','Были изменены %d записи.','Было изменено %d записей.'),'Кликни два раза по значению, чтобы его изменить.',array('Импортирована %d строка.','Импортировано %d строки.','Импортировано %d строк.'),'Не удалось получить данные из таблицы','редактировать','Реляции','Изменить это значение можно с помощью ссылки «изменить».','Страница','последняя',array('%d строка','%d строки','%d строк'),'весь результат','Клонировать','Экспорт','Импорт','Поиск в таблицах','Таблица','Строк',' ','Редактировать всё');break;case"zh":$R=array('你确定吗？','不能上传文件。','最多允许的文件大小为 %sB','文件不存在。','空','原始','没有表。','语言','使用','请使用这些扩展中的一个：%s。','文件已存在。','用户类型','数字','日期时间','字符串','二进制','网络','几何图形','列表','编辑器','用户名','密码','登录','保持登录','新建项','末页','%d 字节','yes','no','$1.$3.$5','搜索','任意位置','排序','限定','动作','选择','电子邮件','来自','主题','插入','附件','发送','%d 封邮件已发送。','现在','HH:MM:SS','[yyyy].mm.dd','注销','选择数据','ltr','重新发送 POST 数据？','No response from server.','服务器','无效 CSRF 令牌。重新发送表单。','注销成功。','会话必须被启用。','会话已过期，请重新登录。','无效凭据。','没有扩展','没有支持的 PHP 扩展可用（%s）。','太大的 POST 数据。减少数据或者增加 %s 配置命令。','已删除项目。','已更新项目。','已插入项目%s。','编辑','没有行。','保存','保存并继续编辑','保存并插入下一个','删除','%d 个项目受到影响。','在值上双击类修改它。','%d 行已导入。','不能选择该表','编辑','关联信息','使用编辑链接来修改该值。','页面','最后','%d 行','所有结果','克隆','导出','导入','在表中搜索数据','表','行数',',','编辑全部');break;case"zh-tw":$R=array('你確定嗎？','無法上傳檔案。','允許的檔案上限大小為%sB','檔案不存在','空值','原始','沒有資料表。','語言','使用','請使用下列其中一個 extension %s。','檔案已存在。','使用者類型','數字','日期時間','字符串','二進制','網路','幾何','列表','編輯器','帳號','密碼','登入','永久登入','新建項','最後一頁','%d byte(s)','yes','no','$1.$3.$5','搜尋','任意位置','排序','限定','動作','選擇','電子郵件','來自','主題','插入','附件','發送','已發送 %d 封郵件。','現在','HH:MM:SS','[yyyy].mm.dd','登出','選擇資料','ltr','重新發送表單資料?','No response from server.','伺服器','無效的 CSRF token。請重新發送表單。','登出成功。','Session 必須被啟用。','Session 已過期，請重新登入。','無效的憑證。','沒有 擴充模組','沒有任何支援的PHP擴充模組（%s）。','POST 資料太大。減少資料或者增加 %s 的設定值。','該項目已被刪除','已更新項目。','已插入項目%s。','編輯','沒有行。','儲存','保存並繼續編輯','儲存並插入下一個','刪除','%d個項目受到影響。','雙擊以進行修改。','%d行已導入。','無法選擇該資料表','編輯','關聯','使用編輯連結來修改。','頁','最後一頁','%d行','所有結果','複製','匯出','匯入','在資料庫搜尋','資料表','行數',',','編輯全部');break;case"ja":$R=array('実行しますか？','ファイルをアップロードできません','最大ファイルサイズ %sB','ファイルは存在しません','空','元','テーブルがありません。','言語','使用','いずれかの拡張機能を使ってください %s','ファイルが既に存在します','ユーザー定義型','数字','日時','文字列','バイナリ','ネットワーク型','ジオメトリ型','リスト','エディタ','ユーザ名','パスワード','ログイン','永続的にログイン','項目の作成','最後のページ','%d バイト','yes','no','$1.$3.$5','検索','任意','ソート','制約','動作','選択','メール','差出人','題名','挿入','添付ファイル','送信','%d メールを送信しました','現在の日時','時:分:秒','[yyyy].mm.dd','ログアウト','データ','ltr','再送信しますか？','No response from server.','サーバ','不正なCSRFトークン。再送信してください','ログアウト','セッションを有効にしてください','セッションの期限切れ。ログインし直してください','不正なログイン','拡張機能がありません','PHPの拡張機能（%s）がセットアップされていません','POSTデータが大きすぎます。データサイズを小さくするか %s 設定を大きくしてください','項目を削除しました','項目を更新しました','%s項目を挿入しました','編集','行がありません','保存','保存して継続','保存／追加','削除','%d を更新しました','ダブルクリックして編集','%d 行をインポートしました','テーブルを選択できません','編集','関係','リンクを編集する','ページ','最終','%d 行','全結果','クローン','エクスポート','インポート','データを検索する','テーブル','行数',',','すべて編集');break;case"ta":$R=array('நிச்ச‌ய‌மாக‌ ?','கோப்பை மேலேற்ற‌ம் (upload) செய்ய‌ இயல‌வில்லை.','கோப்பின் அதிக‌ப‌ட்ச‌ அள‌வு %sB.','கோப்பு இல்லை.','வெறுமை (empty)','அச‌ல்','அட்ட‌வ‌ணை இல்லை.','மொழி','உப‌யோகி','த‌ய‌வு செய்து ஒரு விரிவினை %s (extension) உப‌யோகிக்க‌வும்.','கோப்பு உள்ள‌து.','ப‌ய‌னாள‌ர் வ‌கைக‌ள்','எண்க‌ள்','தேதி ம‌ற்றும் நேர‌ம்','ச‌ர‌ம் (String)','பைன‌ரி','நெட்வொர்க்','வ‌டிவ‌விய‌ல் (Geometry)','ப‌ட்டிய‌ல்','தொகுப்பாளர்','ப‌ய‌னாள‌ர் (User)','க‌ட‌வுச்சொல்','நுழை','நிர‌ந்த‌ர‌மாக‌ நுழைய‌வும்','புதிய‌ உருப்ப‌டி','க‌டைசி ப‌க்க‌ம்',array('%d பைட்','%d பைட்டுக‌ள்'),'yes','no','$5/$3/$1','தேடு','எங்காயினும்','த‌ர‌ம் பிரி','வ‌ர‌ம்பு','செய‌ல்','தேர்வு செய்','மின்ன‌ஞ்ச‌ல்','அனுப்புனர்','பொருள்','புகுத்து','இணைப்புக‌ள்','அனுப்பு',array('%d மின்ன‌ஞ்ச‌ல் அனுப்ப‌ப‌ட்ட‌து.','%d மின்ன‌ஞ்ச‌ல்க‌ள் அனுப்ப‌ப்ப‌ட்ட‌ன‌.'),'இப்பொழுது','HH:MM:SS','dd/mm/[yyyy]','வெளியேறு','த‌க‌வ‌லை தேர்வு செய்','ltr','POST data வை மீண்டும் அனுப்பவா?','No response from server.','வ‌ழ‌ங்கி (Server)','CSRF டோக்க‌ன் செல்லாது. ப‌டிவ‌த்தை மீண்டும் அனுப்ப‌வும்.','வெற்றிக‌ர‌மாய் வெளியேறியாயிற்று.','செஷ‌ன் ஆத‌ர‌வு இய‌க்க‌ப்ப‌ட‌ வேண்டும்.','செஷ‌ன் காலாவ‌தியாகி விட்ட‌து. மீண்டும் நுழைய‌வும்.','ச‌ரியான‌ விப‌ர‌ங்க‌ள் இல்லை.','விரிவு (extensஇஒன்) இல்லை ','PHP ஆத‌ர‌வு விரிவுக‌ள் (%s) இல்லை.','மிக‌ அதிக‌மான‌ POST த‌க‌வ‌ல். த‌க‌வ‌லை குறைக்க‌வும் அல்ல‌து %s வ‌டிவ‌மைப்பை (configuration directive) மாற்ற‌வும்.','உருப்படி நீக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி புதுப்பிக்க‌ப்ப‌ட்ட‌து.','உருப்ப‌டி (Item) சேர்க்க‌ப்ப‌ட்ட‌து.','தொகு','வ‌ரிசை இல்லை.','சேமி','சேமித்த‌ பிற‌கு தொகுப்ப‌தை தொட‌ர‌வும்','சேமித்த‌ப் பின் அடுத்த‌தை புகுத்து','நீக்கு',array('%d உருப்ப‌டி மாற்ற‌ம‌டைந்தது.','%d உருப்ப‌டிக‌ள் மாற்ற‌ம‌டைந்த‌ன‌.'),'ம‌திப்பினை மாற்ற அத‌ன் மீது இருமுறை சொடுக்க‌வும் (Double click).',array('%d வ‌ரிசை இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்ட‌து.','%d வ‌ரிசைக‌ள் இற‌க்கும‌தி (Import) செய்ய‌ப்ப‌ட்டன‌.'),'அட்ட‌வ‌ணையை தேர்வு செய்ய‌ முடிய‌வில்லை','தொகு','உற‌வுக‌ள் (Relations)','இந்த‌ ம‌திப்பினை மாற்ற‌, தொகுப்பு இணைப்பினை உப‌யோகிக்க‌வும்.','ப‌க்க‌ம்','க‌டைசி',array('%d வ‌ரிசை','%d வ‌ரிசைக‌ள்'),'முழுமையான‌ முடிவு','ந‌க‌லி (Clone)','ஏற்றும‌தி','இற‌க்கும‌தி (Import)','த‌க‌வ‌லை அட்ட‌வ‌ணையில் தேடு','அட்ட‌வ‌ணை','வ‌ரிசைக‌ள்',',','அனைத்தையும் தொகு');break;case"ar":$R=array('هل أنت متأكد؟','من غير الممكن رفع الملف.','حجم الملف الأقصى هو %sB.','الملف غير موجود.','فارغ','الأصلي','لا توجد جداول.','اللغة','المستعمل','من فضلك إستعمل إحدى الإمتدادات: %s.','الملف موجود.','نوع المستخدم','أعداد','التاريخ و الوقت','سلاسل','ثنائية','شبكة','هندسة','قوائم','المحرر','المستعمل','كلمة المرور','تسجيل الدخول','تسجيل دخول دائم','عنصر جديد','الصفحة السابقة','%d بايت','yes','no','$5/$3/$1','بحث','في اي مكان','ترتيب','حد','حركة','إختيار','البريد الإلكتروني','من','الموضوع','إنشاء','ملفات مرفقة.','إرسال','تم إرسال %d رسالة.','الآن','HH:MM:SS','jj/mm/[aaaa]','تسجيل الخروج','عرض البيانات','rtl','هل تود إعادة إرسال بيانات POST ؟','No response from server.','الخادم','CSRF Token خاطئ. من فضلك أعد إرسال الإستمارة.','مع السلامة.','عليك تفعيل نظام الجلسات.','إنتهت الجلسة، من فضلك أعد تسجيل الدخول.','فشل في تسجيل الدخول.','إمتداد غير موجود','إمتدادات php المدعومة غير موجودة.','معلومات POST كبيرة جدا. قم بتقليص حجم المعلومات أو قم بزيادة قيمة %s في خيارات ال PHP.','تم حذف العنصر.','تم تعديل العنصر.','تم إدراج العنصر.','تعديل','لا توجد نتائج.','حفظ','إحفظ و واصل التعديل','جفظ و إنشاء التالي','مسح','عدد العناصر المعدلة هو %d.','أنقر نقرا مزدوجا على قيمة لتعديلها.','عدد الأسطر المستوردة هو %d.','من غير الممكن إختيار الجدول','تعديل','علاقات','إستعمل الرابط "تعديل" لتعديل هذه القيمة.','صفحة','الأخيرة','%d أسطر','نتيجة كاملة','نسخ','تصدير','إستيراد','بحث في الجداول','جدول','الأسطر',',','تعديل الكل');break;case"fa":$R=array('مطمئن هستید؟','قادر به بارگذاري فايل نيستيد',' %sB حداكثر اندازه فايل','فايل وجود ندارد','خالی','اصلی','جدولی وجود ندارد','زبان','استفاده','لطفا یکی از پسوندهای زیر را انتخاب نمائید %s ','فایل موجود است','انواع کاربر','اعداد','تاریخ و زمان','رشته ها','دودویی','شبکه','هندسه','لیستها','ویرایشگر','نام كاربري','كلمه عبور','ورود','','آیتم جدید','صفحه آخر',array('%d بایت','%d بایت'),'yes','no','$1-$3-$5','جستجو','هرکجا','مرتب کردن','محدودیت','عملیات','انتخاب','پست الکترونیک','فرستنده','موضوع','درج','پیوست ها','ارسال',array('%d ایمیل ارسال شد','%d ایمیل ارسال شد'),'اکنون','HH:MM:SS','[yyyy]-mm-dd','خروج','انتخاب داده','rtl','ارسال مجدد داده ها؟','No response from server.','سرور','نامعتبر است. دوباره سعی کنید Token CSRF','با موفقيت خارج شديد','پشتيباني از نشست بايستي فعال گردد','نشست پايان يافته، لطفا دوباره وارد شويد','اعتبار سنجي نامعتبر','پسوند نامعتبر',' پسوند پی اچ پی در دسترس نیست (%s) تعداد','حجم داده ارسالي برزگ است. حجم داده كاهش دهيد و يا مقدار %s را در پيكربندي افزايش دهيد.','آیتم حذف شد','آیتم بروز رسانی شد','%s آیتم درج شد','ویرایش','سطری وجود ندارد','ذخیره','ذخیره و ادامه ویرایش','ذخیره و درج بعدی','حذف',array('%d آیتم متاثر شد','%d آیتم متاثر شد'),'روی مقدار دوبار کلیک کنید تا آنرا ویرایش کنید',array('%d سطر وارد شد','%d سطر وارد شد'),'قادر به انتخاب جدول نیستید','ویرایش','رابطه ها','از لینک ویرایش برای ویرایش این مقدار استفاده کنید','صفحه','آخری',array('%d سطر','%d سطر'),'همه نتایج','تکثیر','استخراج','وارد کردن','جستجوی داده در جدول','جدول','سطرها',' ','ویرایش نوع');break;}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){global$c;$Xc=array_search("",$c->operators);if($Xc!==false){unset($c->operators[$Xc]);}}function
dsn($Za,$U,$C,$pb='auth_error'){set_exception_handler($pb);parent::__construct($Za,$U,$C);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($E,$Wd=false){$F=parent::query($E);if(!$F){$lb=$this->errorInfo();$this->error=$lb[2];return
false;}$this->store_result($F);return$F;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result($F=null){if(!$F){$F=$this->_result;}if($F->columnCount()){$F->num_rows=$F->rowCount();return$F;}$this->affected_rows=$F->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($E,$n=0){$F=$this->query($E);if(!$F){return
false;}$H=$F->fetch();return$H[$n];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$H=(object)$this->getColumnMeta($this->_offset++);$H->orgtable=$H->table;$H->orgname=$H->name;$H->charsetnr=(in_array("blob",$H->flags)?63:0);return$H;}}}$Xa=array();$Xa["sqlite"]="SQLite 3";$Xa["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$Yc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($xb){$this->_link=new
SQLite3($xb);$ge=$this->_link->version();$this->server_info=$ge["versionString"];}function
query($E){$F=@$this->_link->query($E);if(!$F){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($F->numColumns()){return
new
Min_Result($F);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($M){return"'".$this->_link->escapeString($M)."'";}function
store_result(){return$this->_result;}function
result($E,$n=0){$F=$this->query($E);if(!is_object($F)){return
false;}$H=$F->_result->fetchArray();return$H[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$f=$this->_offset++;$S=$this->_result->columnType($f);return(object)array("name"=>$this->_result->columnName($f),"type"=>$S,"charsetnr"=>($S==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($xb){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($xb);}function
query($E,$Wd=false){$_c=($Wd?"unbufferedQuery":"query");$F=@$this->_link->$_c($E,SQLITE_BOTH,$m);if(!$F){$this->error=$m;return
false;}elseif($F===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($F);}function
quote($M){return"'".sqlite_escape_string($M)."'";}function
store_result(){return$this->_result;}function
result($E,$n=0){$F=$this->query($E);if(!is_object($F)){return
false;}$H=$F->_result->fetch();return$H[$n];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;if(method_exists($F,'numRows')){$this->num_rows=$F->numRows();}}function
fetch_assoc(){$H=$this->_result->fetch(SQLITE_ASSOC);if(!$H){return
false;}$G=array();foreach($H
as$u=>$W){$G[($u[0]=='"'?idf_unescape($u):$u)]=$W;}return$G;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$z=$this->_result->fieldName($this->_offset++);$D='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($D\\.)?$D\$~",$z,$x)){$N=($x[3]!=""?$x[3]:idf_unescape($x[2]));$z=($x[5]!=""?$x[5]:idf_unescape($x[4]));}return(object)array("name"=>$z,"orgname"=>$z,"orgtable"=>$N,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($xb){$this->dsn(DRIVER.":$xb","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($xb){if(is_readable($xb)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\\\]|:)",$xb)?$xb:dirname($_SERVER["SCRIPT_FILENAME"])."/$xb")." AS a")){$this->Min_SQLite($xb);return
true;}return
false;}function
multi_query($E){return$this->_result=$this->query($E);}function
next_result(){return
false;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($E,$Z,$v,$A=0,$td=" "){return" $E$Z".(isset($v)?$td."LIMIT $v".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){global$h;return($h->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($E,$Z,1):" $E$Z");}function
db_collation($l,$Fa){global$h;return$h->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($k){return
array();}function
table_status($z=""){$G=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($z!=""?" AND name = ".q($z):""))as$H){$H["Auto_increment"]="";$G[$H["Name"]]=$H;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$H){$G[$H["name"]]["Auto_increment"]=$H["seq"];}return($z!=""?$G[$z]:$G);}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){global$h;return$_GET["create"]==""&&!$h->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($N){$G=array();foreach(get_rows("PRAGMA table_info(".table($N).")")as$H){$S=strtolower($H["type"]);$Ra=$H["dflt_value"];$G[$H["name"]]=array("field"=>$H["name"],"type"=>(eregi("int",$S)?"integer":(eregi("char|clob|text",$S)?"text":(eregi("blob",$S)?"blob":(eregi("real|floa|doub",$S)?"real":"numeric")))),"full_type"=>$S,"default"=>(ereg("'(.*)'",$Ra,$x)?str_replace("''","'",$x[1]):($Ra=="NULL"?null:$Ra)),"null"=>!$H["notnull"],"auto_increment"=>eregi('^integer$',$S)&&$H["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$H["pk"],);}return$G;}function
indexes($N,$i=null){$G=array();$Zc=array();foreach(fields($N)as$n){if($n["primary"]){$Zc[]=$n["field"];}}if($Zc){$G[""]=array("type"=>"PRIMARY","columns"=>$Zc,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($N).")")as$H){$G[$H["name"]]["type"]=($H["unique"]?"UNIQUE":"INDEX");$G[$H["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($H["name"]).")")as$md){$G[$H["name"]]["columns"][]=$md["name"];}}return$G;}function
foreign_keys($N){$G=array();foreach(get_rows("PRAGMA foreign_key_list(".table($N).")")as$H){$p=&$G[$H["id"]];if(!$p){$p=$H;}$p["source"][]=$H["from"];$p["target"][]=$H["to"];}return$G;}function
view($z){global$h;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($z))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
check_sqlite_name($z){global$h;$tb="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($tb)\$~",$z)){$h->error=lang(9,str_replace("|",", ",$tb));return
false;}return
true;}function
create_database($l,$e){global$h;if(file_exists($l)){$h->error=lang(10);return
false;}if(!check_sqlite_name($l)){return
false;}$w=new
Min_SQLite($l);$w->query('PRAGMA encoding = "UTF-8"');$w->query('CREATE TABLE adminer (i)');$w->query('DROP TABLE adminer');return
true;}function
drop_databases($k){global$h;$h->Min_SQLite(":memory:");foreach($k
as$l){if(!@unlink($l)){$h->error=lang(10);return
false;}}return
true;}function
rename_database($z,$e){global$h;if(!check_sqlite_name($z)){return
false;}$h->Min_SQLite(":memory:");$h->error=lang(10);return@rename(DB,$z);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($N,$z,$o,$Bb,$Ia,$hb,$e,$sa,$Uc){$d=array();foreach($o
as$n){if($n[1]){$d[]=($N!=""&&$n[0]==""?"ADD ":"  ").implode($n[1]);}}$d=array_merge($d,$Bb);if($N!=""){foreach($d
as$W){if(!queries("ALTER TABLE ".table($N)." $W")){return
false;}}if($N!=$z&&!queries("ALTER TABLE ".table($N)." RENAME TO ".table($z))){return
false;}}elseif(!queries("CREATE TABLE ".table($z)." (\n".implode(",\n",$d)."\n)")){return
false;}if($sa){queries("UPDATE sqlite_sequence SET seq = $sa WHERE name = ".q($z));}return
true;}function
alter_indexes($N,$d){foreach($d
as$W){if(!queries($W[2]=="DROP"?"DROP INDEX ".idf_escape($W[1]):"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N)." $W[2]")){return
false;}}return
true;}function
truncate_tables($P){return
apply_queries("DELETE FROM",$P);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($P){return
apply_queries("DROP TABLE",$P);}function
move_tables($P,$Y,$Q){return
false;}function
trigger($z){global$h;if($z==""){return
array("Statement"=>"BEGIN\n\t;\nEND");}preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$h->result("SELECT sql FROM sqlite_master WHERE name = ".q($z)),$x);return
array("Timing"=>strtoupper($x[1]),"Event"=>strtoupper($x[2]),"Trigger"=>$z,"Statement"=>$x[3]);}function
triggers($N){$G=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($N))as$H){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$H["sql"],$x);$G[$H["name"]]=array($x[1],$x[2]);}return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($z,$S){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($N,$L){return
queries("INSERT INTO ".table($N).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($N,$L,$Zc){return
queries("REPLACE INTO ".table($N)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ROWID()");}function
explain($h,$E){return$h->query("EXPLAIN $E");}function
found_rows($O,$Z){}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($pd){return
true;}function
create_sql($N,$sa){global$h;return$h->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($N));}function
truncate_sql($N){return"DELETE FROM ".table($N);}function
use_sql($j){}function
trigger_sql($N,$Cd){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($N)));}function
show_variables(){global$h;$G=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$u){$G[$u]=$h->result("PRAGMA $u");}return$G;}function
show_status(){$G=array();foreach(get_vals("PRAGMA compile_options")as$Lc){list($u,$W)=explode("=",$Lc,2);$G[$u]=$W;}return$G;}function
support($vb){return
ereg('^(view|trigger|variables|status|dump)$',$vb);}$fc="sqlite";$Vd=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Bd=array_keys($Vd);$ce=array();$Kc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$Kb=array("hex","length","lower","round","unixepoch","upper");$Nb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$Xa["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$Yc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($kb,$m){if(ini_bool("html_errors")){$m=html_entity_decode(strip_tags($m));}$m=ereg_replace('^[^:]*: ','',$m);$this->error=$m;}function
connect($K,$U,$C){global$c;$l=$c->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' user='".addcslashes($U,"'\\")."' password='".addcslashes($C,"'\\")."'";$this->_link=@pg_connect("$this->_string dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$l!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='postgres'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$ge=pg_version($this->_link);$this->server_info=$ge["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($M){return"'".pg_escape_string($this->_link,$M)."'";}function
select_db($j){global$c;if($j==$c->database()){return$this->_database;}$G=@pg_connect("$this->_string dbname='".addcslashes($j,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($G){$this->_link=$G;}return$G;}function
close(){$this->_link=@pg_connect("$this->_string dbname='postgres'");}function
query($E,$Wd=false){$F=@pg_query($this->_link,$E);if(!$F){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($F)){$this->affected_rows=pg_affected_rows($F);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$n=0){$F=$this->query($E);if(!$F||!$F->num_rows){return
false;}return
pg_fetch_result($F->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=pg_num_rows($F);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$f=$this->_offset++;$G=new
stdClass;if(function_exists('pg_field_table')){$G->orgtable=pg_field_table($this->_result,$f);}$G->name=pg_field_name($this->_result,$f);$G->orgname=$G->name;$G->type=pg_field_type($this->_result,$f);$G->charsetnr=($G->type=="bytea"?63:0);return$G;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($K,$U,$C){global$c;$l=$c->database();$M="pgsql:host='".str_replace(":","' port='",addcslashes($K,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn("$M dbname='".($l!=""?addcslashes($l,"'\\"):"postgres")."'",$U,$C);return
true;}function
select_db($j){global$c;return($c->database()==$j);}function
close(){}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Oa=$c->credentials();if($h->connect($Oa[0],$Oa[1],$Oa[2])){if($h->server_info>=9){$h->query("SET application_name = 'Adminer'");}return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database ORDER BY datname");}function
limit($E,$Z,$v,$A=0,$td=" "){return" $E$Z".(isset($v)?$td."LIMIT $v".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){return" $E$Z";}function
db_collation($l,$Fa){global$h;return$h->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($k){return
array();}function
table_status($z=""){$G=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($z!=""?" AND relname = ".q($z):""))as$H){$G[$H["Name"]]=$H;}return($z!=""?$G[$z]:$G);}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){return
true;}function
fields($N){$G=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($N)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$H){ereg('(.*)(\\((.*)\\))?',$H["full_type"],$x);list(,$H["type"],,$H["length"])=$x;$H["full_type"]=$H["type"].($H["length"]?"($H[length])":"");$H["null"]=($H["attnotnull"]=="f");$H["auto_increment"]=eregi("^nextval\\(",$H["default"]);$H["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$H["default"],$x)){$H["default"]=($x[1][0]=="'"?idf_unescape($x[1]):$x[1]);}$G[$H["field"]]=$H;}return$G;}function
indexes($N,$i=null){global$h;if(!is_object($i)){$i=$h;}$G=array();$Jd=$i->result("SELECT oid FROM pg_class WHERE relname = ".q($N));$g=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Jd AND attnum > 0",$i);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Jd AND ci.oid = i.indexrelid",$i)as$H){$G[$H["relname"]]["type"]=($H["indisprimary"]=="t"?"PRIMARY":($H["indisunique"]=="t"?"UNIQUE":"INDEX"));$G[$H["relname"]]["columns"]=array();foreach(explode(" ",$H["indkey"])as$Zb){$G[$H["relname"]]["columns"][]=$g[$Zb];}$G[$H["relname"]]["lengths"]=array();}return$G;}function
foreign_keys($N){global$Fc;$G=array();foreach(get_rows("SELECT conname, pg_get_constraintdef(oid) AS definition
FROM pg_constraint
WHERE conrelid = (SELECT pc.oid FROM pg_class AS pc INNER JOIN pg_namespace AS pn ON (pn.oid = pc.relnamespace) WHERE pc.relname = ".q($N)." AND pn.nspname = current_schema())
AND contype = 'f'::char
ORDER BY conkey, conname")as$H){if(preg_match('~FOREIGN KEY\s*\((.+)\)\s*REFERENCES (.+)\((.+)\)(.*)$~iA',$H['definition'],$x)){$H['source']=array_map('trim',explode(',',$x[1]));$H['table']=$x[2];if(preg_match('~(.+)\.(.+)~',$x[2],$sc)){$H['ns']=$sc[1];$H['table']=$sc[2];}$H['target']=array_map('trim',explode(',',$x[3]));$H['on_delete']=(preg_match("~ON DELETE ($Fc)~",$x[4],$sc)?$sc[1]:'NO ACTION');$H['on_update']=(preg_match("~ON UPDATE ($Fc)~",$x[4],$sc)?$sc[1]:'NO ACTION');$G[$H['conname']]=$H;}}return$G;}function
view($z){global$h;return
array("select"=>$h->result("SELECT pg_get_viewdef(".q($z).")"));}function
collations(){return
array();}function
information_schema($l){return($l=="information_schema");}function
error(){global$h;$G=h($h->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$G,$x)){$G=$x[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($x[3]).'})(.*)~','\\1<b>\\2</b>',$x[2]).$x[4];}return
nl_br($G);}function
exact_value($W){return
q($W);}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).($e?" ENCODING ".idf_escape($e):""));}function
drop_databases($k){global$h;$h->close();return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($z,$e){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($z));}function
auto_increment(){return"";}function
alter_table($N,$z,$o,$Bb,$Ia,$hb,$e,$sa,$Uc){$d=array();$ed=array();foreach($o
as$n){$f=idf_escape($n[0]);$W=$n[1];if(!$W){$d[]="DROP $f";}else{$fe=$W[5];unset($W[5]);if(isset($W[6])&&$n[0]==""){$W[1]=($W[1]=="bigint"?" big":" ")."serial";}if($n[0]==""){$d[]=($N!=""?"ADD ":"  ").implode($W);}else{if($f!=$W[0]){$ed[]="ALTER TABLE ".table($N)." RENAME $f TO $W[0]";}$d[]="ALTER $f TYPE$W[1]";if(!$W[6]){$d[]="ALTER $f ".($W[3]?"SET$W[3]":"DROP DEFAULT");$d[]="ALTER $f ".($W[2]==" NULL"?"DROP NOT":"SET").$W[2];}}if($n[0]!=""||$fe!=""){$ed[]="COMMENT ON COLUMN ".table($N).".$W[0] IS ".($fe!=""?substr($fe,9):"''");}}}$d=array_merge($d,$Bb);if($N==""){array_unshift($ed,"CREATE TABLE ".table($z)." (\n".implode(",\n",$d)."\n)");}elseif($d){array_unshift($ed,"ALTER TABLE ".table($N)."\n".implode(",\n",$d));}if($N!=""&&$N!=$z){$ed[]="ALTER TABLE ".table($N)." RENAME TO ".table($z);}if($N!=""||$Ia!=""){$ed[]="COMMENT ON TABLE ".table($z)." IS ".q($Ia);}if($sa!=""){}foreach($ed
as$E){if(!queries($E)){return
false;}}return
true;}function
alter_indexes($N,$d){$Ma=array();$Ya=array();foreach($d
as$W){if($W[0]!="INDEX"){$Ma[]=($W[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").$W[2]);}elseif($W[2]=="DROP"){$Ya[]=idf_escape($W[1]);}elseif(!queries("CREATE INDEX ".idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N)." $W[2]")){return
false;}}return((!$Ma||queries("ALTER TABLE ".table($N).implode(",",$Ma)))&&(!$Ya||queries("DROP INDEX ".implode(", ",$Ya))));}function
truncate_tables($P){return
queries("TRUNCATE ".implode(", ",array_map('table',$P)));return
true;}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Q){foreach($P
as$N){if(!queries("ALTER TABLE ".table($N)." SET SCHEMA ".idf_escape($Q))){return
false;}}foreach($Y
as$N){if(!queries("ALTER VIEW ".table($N)." SET SCHEMA ".idf_escape($Q))){return
false;}}return
true;}function
trigger($z){if($z==""){return
array("Statement"=>"EXECUTE PROCEDURE ()");}$I=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($z));return
reset($I);}function
triggers($N){$G=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($N))as$H){$G[$H["trigger_name"]]=array($H["condition_timing"],$H["event_manipulation"]);}return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($N,$L){return
queries("INSERT INTO ".table($N).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($N,$L,$Zc){global$h;$T=array();$Z=array();foreach($L
as$u=>$W){$T[]="$u = $W";if(isset($Zc[idf_unescape($u)])){$Z[]="$u = $W";}}return($Z&&queries("UPDATE ".table($N)." SET ".implode(", ",$T)." WHERE ".implode(" AND ",$Z))&&$h->affected_rows)||queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
explain($h,$E){return$h->query("EXPLAIN $E");}function
found_rows($O,$Z){global$h;if(ereg(" rows=([0-9]+)",$h->result("EXPLAIN SELECT * FROM ".idf_escape($O["Name"]).($Z?" WHERE ".implode(" AND ",$Z):"")),$hd)){return$hd[1];}return
false;}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace ORDER BY nspname");}function
get_schema(){global$h;return$h->result("SELECT current_schema()");}function
set_schema($od){global$h,$Vd,$Bd;$G=$h->query("SET search_path TO ".idf_escape($od));foreach(types()as$S){if(!isset($Vd[$S])){$Vd[$S]=0;$Bd[lang(11)][]=$S;}}return$G;}function
use_sql($j){return"\connect ".idf_escape($j);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($vb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$vb);}$fc="pgsql";$Vd=array();$Bd=array();foreach(array(lang(12)=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),lang(13)=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),lang(14)=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),lang(15)=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),lang(16)=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),lang(17)=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$u=>$W){$Vd+=$W;$Bd[$u]=array_keys($W);}$ce=array();$Kc=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Kb=array("char_length","lower","round","to_hex","to_timestamp","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$Xa["oracle"]="Oracle";if(isset($_GET["oracle"])){$Yc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($kb,$m){if(ini_bool("html_errors")){$m=html_entity_decode(strip_tags($m));}$m=ereg_replace('^[^:]*: ','',$m);$this->error=$m;}function
connect($K,$U,$C){$this->_link=@oci_new_connect($U,$C,$K,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$m=oci_error();$this->error=$m["message"];return
false;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($j){return
true;}function
query($E,$Wd=false){$F=oci_parse($this->_link,$E);if(!$F){$m=oci_error($this->_link);$this->error=$m["message"];return
false;}set_error_handler(array($this,'_error'));$G=@oci_execute($F);restore_error_handler();if($G){if(oci_num_fields($F)){return
new
Min_Result($F);}$this->affected_rows=oci_num_rows($F);}return$G;}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$n=1){$F=$this->query($E);if(!is_object($F)||!oci_fetch($F->_result)){return
false;}return
oci_result($F->_result,$n);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$u=>$W){if(is_a($W,'OCI-Lob')){$H[$u]=$W->load();}}return$H;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$f=$this->_offset++;$G=new
stdClass;$G->name=oci_field_name($this->_result,$f);$G->orgname=$G->name;$G->type=oci_field_type($this->_result,$f);$G->charsetnr=(ereg("raw|blob|bfile",$G->type)?63:0);return$G;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($K,$U,$C){$this->dsn("oci:dbname=//$K;charset=AL32UTF8",$U,$C);return
true;}function
select_db($j){return
true;}}}function
idf_escape($t){return'"'.str_replace('"','""',$t).'"';}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Oa=$c->credentials();if($h->connect($Oa[0],$Oa[1],$Oa[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($E,$Z,$v,$A=0,$td=" "){return($A?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $E$Z) t WHERE rownum <= ".($v+$A).") WHERE rnum > $A":(isset($v)?" * FROM (SELECT $E$Z) WHERE rownum <= ".($v+$A):" $E$Z"));}function
limit1($E,$Z){return" $E$Z";}function
db_collation($l,$Fa){global$h;return$h->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($k){return
array();}function
table_status($z=""){$G=array();$qd=q($z);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($z!=""?" AND table_name = $qd":"")."
UNION SELECT view_name, 'view' FROM user_views".($z!=""?" WHERE view_name = $qd":""))as$H){if($z!=""){return$H;}$G[$H["Name"]]=$H;}return$G;}function
is_view($O){return$O["Engine"]=="view";}function
fk_support($O){return
true;}function
fields($N){$G=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($N)." ORDER BY column_id")as$H){$S=$H["DATA_TYPE"];$nc="$H[DATA_PRECISION],$H[DATA_SCALE]";if($nc==","){$nc=$H["DATA_LENGTH"];}$G[$H["COLUMN_NAME"]]=array("field"=>$H["COLUMN_NAME"],"full_type"=>$S.($nc?"($nc)":""),"type"=>strtolower($S),"length"=>$nc,"default"=>$H["DATA_DEFAULT"],"null"=>($H["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$G;}function
indexes($N,$i=null){$G=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($N)."
ORDER BY uc.constraint_type, uic.column_position",$i)as$H){$G[$H["INDEX_NAME"]]["type"]=($H["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($H["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$G[$H["INDEX_NAME"]]["columns"][]=$H["COLUMN_NAME"];$G[$H["INDEX_NAME"]]["lengths"][]=($H["CHAR_LENGTH"]&&$H["CHAR_LENGTH"]!=$H["COLUMN_LENGTH"]?$H["CHAR_LENGTH"]:null);}return$G;}function
view($z){$I=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($z));return
reset($I);}function
collations(){return
array();}function
information_schema($l){return
false;}function
error(){global$h;return
h($h->error);}function
exact_value($W){return
q($W);}function
explain($h,$E){$h->query("EXPLAIN PLAN FOR $E");return$h->query("SELECT * FROM plan_table");}function
found_rows($O,$Z){}function
alter_table($N,$z,$o,$Bb,$Ia,$hb,$e,$sa,$Uc){$d=$Ya=array();foreach($o
as$n){$W=$n[1];if($W&&$n[0]!=""&&idf_escape($n[0])!=$W[0]){queries("ALTER TABLE ".table($N)." RENAME COLUMN ".idf_escape($n[0])." TO $W[0]");}if($W){$d[]=($N!=""?($n[0]!=""?"MODIFY (":"ADD ("):"  ").implode($W).($N!=""?")":"");}else{$Ya[]=idf_escape($n[0]);}}if($N==""){return
queries("CREATE TABLE ".table($z)." (\n".implode(",\n",$d)."\n)");}return(!$d||queries("ALTER TABLE ".table($N)."\n".implode("\n",$d)))&&(!$Ya||queries("ALTER TABLE ".table($N)." DROP (".implode(", ",$Ya).")"))&&($N==$z||queries("ALTER TABLE ".table($N)." RENAME TO ".table($z)));}function
foreign_keys($N){return
array();}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
apply_queries("DROP VIEW",$Y);}function
drop_tables($P){return
apply_queries("DROP TABLE",$P);}function
begin(){return
true;}function
insert_into($N,$L){return
queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($pd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$I=get_rows('SELECT * FROM v$instance');return
reset($I);}function
support($vb){return
ereg("view|drop_col|variables|status",$vb);}$fc="oracle";$Vd=array();$Bd=array();foreach(array(lang(12)=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),lang(13)=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),lang(14)=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),lang(15)=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$u=>$W){$Vd+=$W;$Bd[$u]=array_keys($W);}$ce=array();$Kc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Kb=array("length","lower","round","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$Xa["mssql"]="MS SQL";if(isset($_GET["mssql"])){$Yc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$m){$this->error.="$m[message]\n";}$this->error=rtrim($this->error);}function
connect($K,$U,$C){$this->_link=@sqlsrv_connect($K,array("UID"=>$U,"PWD"=>$C));if($this->_link){$ac=sqlsrv_server_info($this->_link);$this->server_info=$ac['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($j){return$this->query("USE $j");}function
query($E,$Wd=false){$F=sqlsrv_query($this->_link,$E);if(!$F){$this->_get_error();return
false;}return$this->store_result($F);}function
multi_query($E){$this->_result=sqlsrv_query($this->_link,$E);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($F=null){if(!$F){$F=$this->_result;}if(sqlsrv_field_metadata($F)){return
new
Min_Result($F);}$this->affected_rows=sqlsrv_rows_affected($F);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($E,$n=0){$F=$this->query($E);if(!is_object($F)){return
false;}$H=$F->fetch_row();return$H[$n];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;}function
_convert($H){foreach((array)$H
as$u=>$W){if(is_a($W,'DateTime')){$H[$u]=$W->format("Y-m-d H:i:s");}}return$H;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$n=$this->_fields[$this->_offset++];$G=new
stdClass;$G->name=$n["Name"];$G->orgname=$n["Name"];$G->type=($n["Type"]==1?254:0);return$G;}function
seek($A){for($r=0;$r<$A;$r++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($K,$U,$C){$this->_link=@mssql_connect($K,$U,$C);if($this->_link){$F=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$H=$F->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$H[0]] $H[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($M){return"'".str_replace("'","''",$M)."'";}function
select_db($j){return
mssql_select_db($j);}function
query($E,$Wd=false){$F=mssql_query($E,$this->_link);if(!$F){$this->error=mssql_get_last_message();return
false;}if($F===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($E,$n=0){$F=$this->query($E);if(!is_object($F)){return
false;}return
mssql_result($F->_result,0,$n);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($F){$this->_result=$F;$this->num_rows=mssql_num_rows($F);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$G=mssql_fetch_field($this->_result);$G->orgtable=$G->table;$G->orgname=$G->name;return$G;}function
seek($A){mssql_data_seek($this->_result,$A);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($t){return"[".str_replace("]","]]",$t)."]";}function
table($t){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Oa=$c->credentials();if($h->connect($Oa[0],$Oa[1],$Oa[2])){return$h;}return$h->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($E,$Z,$v,$A=0,$td=" "){return(isset($v)?" TOP (".($v+$A).")":"")." $E$Z";}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($l,$Fa){global$h;return$h->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($l));}function
engines(){return
array();}function
logged_user(){global$h;return$h->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($k){global$h;$G=array();foreach($k
as$l){$h->select_db($l);$G[$l]=$h->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$G;}function
table_status($z=""){$G=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($z!=""?" AND name = ".q($z):""))as$H){if($z!=""){return$H;}$G[$H["Name"]]=$H;}return$G;}function
is_view($O){return$O["Engine"]=="VIEW";}function
fk_support($O){return
true;}function
fields($N){$G=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($N))as$H){$S=$H["type"];$nc=(ereg("char|binary",$S)?$H["max_length"]:($S=="decimal"?"$H[precision],$H[scale]":""));$G[$H["name"]]=array("field"=>$H["name"],"full_type"=>$S.($nc?"($nc)":""),"type"=>$S,"length"=>$nc,"default"=>$H["default"],"null"=>$H["is_nullable"],"auto_increment"=>$H["is_identity"],"collation"=>$H["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$H["is_identity"],);}return$G;}function
indexes($N,$i=null){$G=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($N),$i)as$H){$G[$H["name"]]["type"]=($H["is_primary_key"]?"PRIMARY":($H["is_unique"]?"UNIQUE":"INDEX"));$G[$H["name"]]["lengths"]=array();$G[$H["name"]]["columns"][$H["key_ordinal"]]=$H["column_name"];}return$G;}function
view($z){global$h;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$h->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($z))));}function
collations(){$G=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$e){$G[ereg_replace("_.*","",$e)][]=$e;}return$G;}function
information_schema($l){return
false;}function
error(){global$h;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$h->error)));}function
exact_value($W){return
q($W);}function
create_database($l,$e){return
queries("CREATE DATABASE ".idf_escape($l).(eregi('^[a-z0-9_]+$',$e)?" COLLATE $e":""));}function
drop_databases($k){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$k)));}function
rename_database($z,$e){if(eregi('^[a-z0-9_]+$',$e)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $e");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($z));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($N,$z,$o,$Bb,$Ia,$hb,$e,$sa,$Uc){$d=array();foreach($o
as$n){$f=idf_escape($n[0]);$W=$n[1];if(!$W){$d["DROP"][]=" COLUMN $f";}else{$W[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$W[1]);if($n[0]==""){$d["ADD"][]="\n  ".implode("",$W).($N==""?substr($Bb[$W[0]],16+strlen($W[0])):"");}else{unset($W[6]);if($f!=$W[0]){queries("EXEC sp_rename ".q(table($N).".$f").", ".q(idf_unescape($W[0])).", 'COLUMN'");}$d["ALTER COLUMN ".implode("",$W)][]="";}}}if($N==""){return
queries("CREATE TABLE ".table($z)." (".implode(",",(array)$d["ADD"])."\n)");}if($N!=$z){queries("EXEC sp_rename ".q(table($N)).", ".q($z));}if($Bb){$d[""]=$Bb;}foreach($d
as$u=>$W){if(!queries("ALTER TABLE ".idf_escape($z)." $u".implode(",",$W))){return
false;}}return
true;}function
alter_indexes($N,$d){$Wb=array();$Ya=array();foreach($d
as$W){if($W[2]=="DROP"){if($W[0]=="PRIMARY"){$Ya[]=idf_escape($W[1]);}else{$Wb[]=idf_escape($W[1])." ON ".table($N);}}elseif(!queries(($W[0]!="PRIMARY"?"CREATE $W[0] ".($W[0]!="INDEX"?"INDEX ":"").idf_escape($W[1]!=""?$W[1]:uniqid($N."_"))." ON ".table($N):"ALTER TABLE ".table($N)." ADD PRIMARY KEY")." $W[2]")){return
false;}}return(!$Wb||queries("DROP INDEX ".implode(", ",$Wb)))&&(!$Ya||queries("ALTER TABLE ".table($N)." DROP ".implode(", ",$Ya)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($N,$L){return
queries("INSERT INTO ".table($N).($L?" (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")":"DEFAULT VALUES"));}function
insert_update($N,$L,$Zc){$T=array();$Z=array();foreach($L
as$u=>$W){$T[]="$u = $W";if(isset($Zc[idf_unescape($u)])){$Z[]="$u = $W";}}return
queries("MERGE ".table($N)." USING (VALUES(".implode(", ",$L).")) AS source (c".implode(", c",range(1,count($L))).") ON ".implode(" AND ",$Z)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$T)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($L)).") VALUES (".implode(", ",$L).");");}function
last_id(){global$h;return$h->result("SELECT SCOPE_IDENTITY()");}function
explain($h,$E){$h->query("SET SHOWPLAN_ALL ON");$G=$h->query($E);$h->query("SET SHOWPLAN_ALL OFF");return$G;}function
found_rows($O,$Z){}function
foreign_keys($N){$G=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($N))as$H){$p=&$G[$H["FK_NAME"]];$p["table"]=$H["PKTABLE_NAME"];$p["source"][]=$H["FKCOLUMN_NAME"];$p["target"][]=$H["PKCOLUMN_NAME"];}return$G;}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Q){return
apply_queries("ALTER SCHEMA ".idf_escape($Q)." TRANSFER",array_merge($P,$Y));}function
trigger($z){if($z==""){return
array();}$I=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($z));$G=reset($I);if($G){$G["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$G["text"]);}return$G;}function
triggers($N){$G=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($N))as$H){$G[$H["name"]]=array($H["Timing"],$H["Event"]);}return$G;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$h;if($_GET["ns"]!=""){return$_GET["ns"];}return$h->result("SELECT SCHEMA_NAME()");}function
set_schema($od){return
true;}function
use_sql($j){return"USE ".idf_escape($j);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($vb){return
ereg('^(scheme|trigger|view|drop_col)$',$vb);}$fc="mssql";$Vd=array();$Bd=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),lang(13)=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),lang(14)=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),lang(15)=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$u=>$W){$Vd+=$W;$Bd[$u]=array_keys($W);}$ce=array();$Kc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL");$Kb=array("len","lower","round","upper");$Nb=array("avg","count","count distinct","max","min","sum");$bb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$Xa=array("server"=>"MySQL")+$Xa;if(!defined("DRIVER")){$Yc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($K,$U,$C){mysqli_report(MYSQLI_REPORT_OFF);list($Sb,$Wc)=explode(":",$K,2);$G=@$this->real_connect(($K!=""?$Sb:ini_get("mysqli.default_host")),($K.$U!=""?$U:ini_get("mysqli.default_user")),($K.$U.$C!=""?$C:ini_get("mysqli.default_pw")),null,(is_numeric($Wc)?$Wc:ini_get("mysqli.default_port")),(!is_numeric($Wc)?$Wc:null));if($G){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$G;}function
result($E,$n=0){$F=$this->query($E);if(!$F){return
false;}$H=$F->fetch_array();return$H[$n];}function
quote($M){return"'".$this->escape_string($M)."'";}}}elseif(extension_loaded("mysql")&&!(ini_get("sql.safe_mode")&&extension_loaded("pdo_mysql"))){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($K,$U,$C){$this->_link=@mysql_connect(($K!=""?$K:ini_get("mysql.default_host")),("$K$U"!=""?$U:ini_get("mysql.default_user")),("$K$U$C"!=""?$C:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($M){return"'".mysql_real_escape_string($M,$this->_link)."'";}function
select_db($j){return
mysql_select_db($j,$this->_link);}function
query($E,$Wd=false){$F=@($Wd?mysql_unbuffered_query($E,$this->_link):mysql_query($E,$this->_link));if(!$F){$this->error=mysql_error($this->_link);return
false;}if($F===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($F);}function
multi_query($E){return$this->_result=$this->query($E);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($E,$n=0){$F=$this->query($E);if(!$F||!$F->num_rows){return
false;}return
mysql_result($F->_result,0,$n);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($F){$this->_result=$F;$this->num_rows=mysql_num_rows($F);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$G=mysql_fetch_field($this->_result,$this->_offset++);$G->orgtable=$G->table;$G->orgname=$G->name;$G->charsetnr=($G->blob?63:0);return$G;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($K,$U,$C){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$K)),$U,$C);$this->query("SET NAMES utf8");return
true;}function
select_db($j){return$this->query("USE ".idf_escape($j));}function
query($E,$Wd=false){$this->setAttribute(1000,!$Wd);return
parent::query($E,$Wd);}}}function
idf_escape($t){return"`".str_replace("`","``",$t)."`";}function
table($t){return
idf_escape($t);}function
connect(){global$c;$h=new
Min_DB;$Oa=$c->credentials();if($h->connect($Oa[0],$Oa[1],$Oa[2])){$h->query("SET sql_quote_show_create = 1, autocommit = 1");return$h;}$G=$h->error;if(function_exists('iconv')&&!is_utf8($G)&&strlen($nd=iconv("windows-1250","utf-8",$G))>strlen($G)){$G=$nd;}return$G;}function
get_databases($Ab=true){global$h;$G=&get_session("dbs");if(!isset($G)){if($Ab){restart_session();ob_flush();flush();}$G=get_vals($h->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$G;}function
limit($E,$Z,$v,$A=0,$td=" "){return" $E$Z".(isset($v)?$td."LIMIT $v".($A?" OFFSET $A":""):"");}function
limit1($E,$Z){return
limit($E,$Z,1);}function
db_collation($l,$Fa){global$h;$G=null;$Ma=$h->result("SHOW CREATE DATABASE ".idf_escape($l),1);if(preg_match('~ COLLATE ([^ ]+)~',$Ma,$x)){$G=$x[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$Ma,$x)){$G=$Fa[$x[1]][-1];}return$G;}function
engines(){$G=array();foreach(get_rows("SHOW ENGINES")as$H){if(ereg("YES|DEFAULT",$H["Support"])){$G[]=$H["Engine"];}}return$G;}function
logged_user(){global$h;return$h->result("SELECT USER()");}function
tables_list(){global$h;return
get_key_vals("SHOW".($h->server_info>=5?" FULL":"")." TABLES");}function
count_tables($k){$G=array();foreach($k
as$l){$G[$l]=count(get_vals("SHOW TABLES IN ".idf_escape($l)));}return$G;}function
table_status($z=""){$G=array();foreach(get_rows("SHOW TABLE STATUS".($z!=""?" LIKE ".q(addcslashes($z,"%_")):""))as$H){if($H["Engine"]=="InnoDB"){$H["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$H["Comment"]);}if(!isset($H["Rows"])){$H["Comment"]="";}if($z!=""){return$H;}$G[$H["Name"]]=$H;}return$G;}function
is_view($O){return!isset($O["Rows"]);}function
fk_support($O){return
eregi("InnoDB|IBMDB2I",$O["Engine"]);}function
fields($N){$G=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($N))as$H){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$H["Type"],$x);$G[$H["Field"]]=array("field"=>$H["Field"],"full_type"=>$H["Type"],"type"=>$x[1],"length"=>$x[2],"unsigned"=>ltrim($x[3].$x[4]),"default"=>($H["Default"]!=""||ereg("char",$x[1])?$H["Default"]:null),"null"=>($H["Null"]=="YES"),"auto_increment"=>($H["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$H["Extra"],$x)?$x[1]:""),"collation"=>$H["Collation"],"privileges"=>array_flip(explode(",",$H["Privileges"])),"comment"=>$H["Comment"],"primary"=>($H["Key"]=="PRI"),);}return$G;}function
indexes($N,$i=null){$G=array();foreach(get_rows("SHOW INDEX FROM ".table($N),$i)as$H){$G[$H["Key_name"]]["type"]=($H["Key_name"]=="PRIMARY"?"PRIMARY":($H["Index_type"]=="FULLTEXT"?"FULLTEXT":($H["Non_unique"]?"INDEX":"UNIQUE")));$G[$H["Key_name"]]["columns"][]=$H["Column_name"];$G[$H["Key_name"]]["lengths"][]=$H["Sub_part"];}return$G;}function
foreign_keys($N){global$h,$Fc;static$D='`(?:[^`]|``)+`';$G=array();$Na=$h->result("SHOW CREATE TABLE ".table($N),1);if($Na){preg_match_all("~CONSTRAINT ($D) FOREIGN KEY \\(((?:$D,? ?)+)\\) REFERENCES ($D)(?:\\.($D))? \\(((?:$D,? ?)+)\\)(?: ON DELETE ($Fc))?(?: ON UPDATE ($Fc))?~",$Na,$tc,PREG_SET_ORDER);foreach($tc
as$x){preg_match_all("~$D~",$x[2],$wd);preg_match_all("~$D~",$x[5],$Q);$G[idf_unescape($x[1])]=array("db"=>idf_unescape($x[4]!=""?$x[3]:$x[4]),"table"=>idf_unescape($x[4]!=""?$x[4]:$x[3]),"source"=>array_map('idf_unescape',$wd[0]),"target"=>array_map('idf_unescape',$Q[0]),"on_delete"=>($x[6]?$x[6]:"RESTRICT"),"on_update"=>($x[7]?$x[7]:"RESTRICT"),);}}return$G;}function
view($z){global$h;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$h->result("SHOW CREATE VIEW ".table($z),1)));}function
collations(){$G=array();foreach(get_rows("SHOW COLLATION")as$H){if($H["Default"]){$G[$H["Charset"]][-1]=$H["Collation"];}else{$G[$H["Charset"]][]=$H["Collation"];}}ksort($G);foreach($G
as$u=>$W){asort($G[$u]);}return$G;}function
information_schema($l){global$h;return($h->server_info>=5&&$l=="information_schema");}function
error(){global$h;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$h->error));}function
exact_value($W){return
q($W)." COLLATE utf8_bin";}function
create_database($l,$e){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($l).($e?" COLLATE ".q($e):""));}function
drop_databases($k){set_session("dbs",null);return
apply_queries("DROP DATABASE",$k,'idf_escape');}function
rename_database($z,$e){if(create_database($z,$e)){$id=array();foreach(tables_list()as$N=>$S){$id[]=table($N)." TO ".idf_escape($z).".".table($N);}if(!$id||queries("RENAME TABLE ".implode(", ",$id))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$ta=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$Wb){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$Wb["columns"],true)){$ta="";break;}if($Wb["type"]=="PRIMARY"){$ta=" UNIQUE";}}}return" AUTO_INCREMENT$ta";}function
alter_table($N,$z,$o,$Bb,$Ia,$hb,$e,$sa,$Uc){$d=array();foreach($o
as$n){$d[]=($n[1]?($N!=""?($n[0]!=""?"CHANGE ".idf_escape($n[0]):"ADD"):" ")." ".implode($n[1]).($N!=""?" $n[2]":""):"DROP ".idf_escape($n[0]));}$d=array_merge($d,$Bb);$zd="COMMENT=".q($Ia).($hb?" ENGINE=".q($hb):"").($e?" COLLATE ".q($e):"").($sa!=""?" AUTO_INCREMENT=$sa":"").$Uc;if($N==""){return
queries("CREATE TABLE ".table($z)." (\n".implode(",\n",$d)."\n) $zd");}if($N!=$z){$d[]="RENAME TO ".table($z);}$d[]=$zd;return
queries("ALTER TABLE ".table($N)."\n".implode(",\n",$d));}function
alter_indexes($N,$d){foreach($d
as$u=>$W){$d[$u]=($W[2]=="DROP"?"\nDROP INDEX ".idf_escape($W[1]):"\nADD $W[0] ".($W[0]=="PRIMARY"?"KEY ":"").($W[1]!=""?idf_escape($W[1])." ":"").$W[2]);}return
queries("ALTER TABLE ".table($N).implode(",",$d));}function
truncate_tables($P){return
apply_queries("TRUNCATE TABLE",$P);}function
drop_views($Y){return
queries("DROP VIEW ".implode(", ",array_map('table',$Y)));}function
drop_tables($P){return
queries("DROP TABLE ".implode(", ",array_map('table',$P)));}function
move_tables($P,$Y,$Q){$id=array();foreach(array_merge($P,$Y)as$N){$id[]=table($N)." TO ".idf_escape($Q).".".table($N);}return
queries("RENAME TABLE ".implode(", ",$id));}function
copy_tables($P,$Y,$Q){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($P
as$N){$z=($Q==DB?table("copy_$N"):idf_escape($Q).".".table($N));if(!queries("DROP TABLE IF EXISTS $z")||!queries("CREATE TABLE $z LIKE ".table($N))||!queries("INSERT INTO $z SELECT * FROM ".table($N))){return
false;}}foreach($Y
as$N){$z=($Q==DB?table("copy_$N"):idf_escape($Q).".".table($N));$he=view($N);if(!queries("DROP VIEW IF EXISTS $z")||!queries("CREATE VIEW $z AS $he[select]")){return
false;}}return
true;}function
trigger($z){if($z==""){return
array();}$I=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($z));return
reset($I);}function
triggers($N){$G=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($N,"%_")))as$H){$G[$H["Trigger"]]=array($H["Timing"],$H["Event"]);}return$G;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($z,$S){global$h,$ib,$cc,$Vd;$na=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ud="((".implode("|",array_merge(array_keys($Vd),$na)).")(?:\\s*\\(((?:[^'\")]*|$ib)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$D="\\s*(".($S=="FUNCTION"?"":$cc).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ud";$Ma=$h->result("SHOW CREATE $S ".idf_escape($z),2);preg_match("~\\(((?:$D\\s*,?)*)\\)".($S=="FUNCTION"?"\\s*RETURNS\\s+$Ud":"")."\\s*(.*)~is",$Ma,$x);$o=array();preg_match_all("~$D\\s*,?~is",$x[1],$tc,PREG_SET_ORDER);foreach($tc
as$Sc){$z=str_replace("``","`",$Sc[2]).$Sc[3];$o[]=array("field"=>$z,"type"=>strtolower($Sc[5]),"length"=>preg_replace_callback("~$ib~s",'normalize_enum',$Sc[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$Sc[8] $Sc[7]"))),"full_type"=>$Sc[4],"inout"=>strtoupper($Sc[1]),"collation"=>strtolower($Sc[9]),);}if($S!="FUNCTION"){return
array("fields"=>$o,"definition"=>$x[11]);}return
array("fields"=>$o,"returns"=>array("type"=>$x[12],"length"=>$x[13],"unsigned"=>$x[15],"collation"=>$x[16]),"definition"=>$x[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($N,$L){return
queries("INSERT INTO ".table($N)." (".implode(", ",array_keys($L)).")\nVALUES (".implode(", ",$L).")");}function
insert_update($N,$L,$Zc){foreach($L
as$u=>$W){$L[$u]="$u = $W";}$T=implode(", ",$L);return
queries("INSERT INTO ".table($N)." SET $T ON DUPLICATE KEY UPDATE $T");}function
last_id(){global$h;return$h->result("SELECT LAST_INSERT_ID()");}function
explain($h,$E){return$h->query("EXPLAIN $E");}function
found_rows($O,$Z){return($Z||$O["Engine"]!="InnoDB"?null:$O["Rows"]);}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($od){return
true;}function
create_sql($N,$sa){global$h;$G=$h->result("SHOW CREATE TABLE ".table($N),1);if(!$sa){$G=preg_replace('~ AUTO_INCREMENT=\\d+~','',$G);}return$G;}function
truncate_sql($N){return"TRUNCATE ".table($N);}function
use_sql($j){return"USE ".idf_escape($j);}function
trigger_sql($N,$Cd){$G="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($N,"%_")),null,"-- ")as$H){$G.="\n".($Cd=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($H["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($H["Trigger"])." $H[Timing] $H[Event] ON ".table($H["Table"])." FOR EACH ROW\n$H[Statement];;\n";}return$G;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($vb){global$h;return!ereg("scheme|sequence|type".($h->server_info<5.1?"|event|partitioning".($h->server_info<5?"|view|routine|trigger":""):""),$vb);}$fc="sql";$Vd=array();$Bd=array();foreach(array(lang(12)=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),lang(13)=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),lang(14)=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),lang(15)=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),lang(18)=>array("enum"=>65535,"set"=>64),)as$u=>$W){$Vd+=$W;$Bd[$u]=array_keys($W);}$ce=array("unsigned","zerofill","unsigned zerofill");$Kc=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$Kb=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$Nb=array("avg","count","count distinct","group_concat","max","min","sum");$bb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$ba="3.3.4";class
Adminer{var$operators=array("<=",">=");var$_values=array();function
name(){return"<a href='http://www.adminer.org/editor/' id='h1'>".lang(19)."</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){global$h;$k=$this->databases(false);return(!$k?$h->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1)"):$k[(information_schema($k[0])?1:0)]);}function
databases($Ab=true){return
get_databases($Ab);}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){echo'<table cellspacing="0">
<tr><th>',lang(20),'<td><input type="hidden" name="driver" value="server"><input type="hidden" name="server" value=""><input id="username" name="username" value="',h($_GET["username"]),'">
<tr><th>',lang(21),'<td><input type="password" name="password">
</table>
<script type="text/javascript">
document.getElementById(\'username\').focus();
</script>
',"<p><input type='submit' value='".lang(22)."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],lang(23))."\n";}function
login($qc,$C){global$h;$h->query("SET time_zone = ".q(substr_replace(@date("O"),":",-2,0)));return
true;}function
tableName($Hd){return
h($Hd["Comment"]!=""?$Hd["Comment"]:$Hd["Name"]);}function
fieldName($n,$Oc=0){return
h($n["comment"]!=""?$n["comment"]:$n["field"]);}function
selectLinks($Hd,$L=""){$b=$Hd["Name"];if(isset($L)){echo'<p class="tabs"><a href="'.h(ME.'edit='.urlencode($b).$L).'">'.lang(24)."</a>\n";}echo"<a href='".h(remove_from_uri("page"))."&amp;page=last' title='".lang(25)."'>&gt;&gt;</a>\n";}function
foreignKeys($N){return
foreign_keys($N);}function
backwardKeys($N,$Gd){$G=array();foreach(get_rows("SELECT TABLE_NAME, CONSTRAINT_NAME, COLUMN_NAME, REFERENCED_COLUMN_NAME
FROM information_schema.KEY_COLUMN_USAGE
WHERE TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_SCHEMA = ".q($this->database())."
AND REFERENCED_TABLE_NAME = ".q($N)."
ORDER BY ORDINAL_POSITION",null,"")as$H){$G[$H["TABLE_NAME"]]["keys"][$H["CONSTRAINT_NAME"]][$H["COLUMN_NAME"]]=$H["REFERENCED_COLUMN_NAME"];}foreach($G
as$u=>$W){$z=$this->tableName(table_status($u));if($z!=""){$qd=preg_quote($Gd);$td="(:|\\s*-)?\\s+";$G[$u]["name"]=(preg_match("(^$qd$td(.+)|^(.+?)$td$qd\$)iu",$z,$x)?$x[2].$x[3]:$z);}else{unset($G[$u]);}}return$G;}function
backwardKeysPrint($wa,$H){foreach($wa
as$N=>$va){foreach($va["keys"]as$Ga){$w=ME.'select='.urlencode($N);$r=0;foreach($Ga
as$f=>$W){$w.=where_link($r++,$f,$H[$W]);}echo"<a href='".h($w)."'>".h($va["name"])."</a>";$w=ME.'edit='.urlencode($N);foreach($Ga
as$f=>$W){$w.="&set".urlencode("[".bracket_escape($f)."]")."=".urlencode($H[$W]);}echo"<a href='".h($w)."' title='".lang(24)."'>+</a> ";}}}function
selectQuery($E){return"<!--\n".str_replace("--","--><!-- ",$E)."\n-->\n";}function
rowDescription($N){foreach(fields($N)as$n){if(ereg("varchar|character varying",$n["type"])){return
idf_escape($n["field"]);}}return"";}function
rowDescriptions($I,$Db){$G=$I;foreach($I[0]as$u=>$W){if(list($N,$s,$z)=$this->_foreignColumn($Db,$u)){$Ub=array();foreach($I
as$H){$Ub[$H[$u]]=exact_value($H[$u]);}$Ta=$this->_values[$N];if(!$Ta){$Ta=get_key_vals("SELECT $s, $z FROM ".table($N)." WHERE $s IN (".implode(", ",$Ub).")");}foreach($I
as$y=>$H){if(isset($H[$u])){$G[$y][$u]=(string)$Ta[$H[$u]];}}}}return$G;}function
selectVal($W,$w,$n){$G=($W=="<i>NULL</i>"?"&nbsp;":$W);if(ereg('blob|bytea',$n["type"])&&!is_utf8($W)){$G=lang(26,strlen($W));if(ereg("^(GIF|\xFF\xD8\xFF|\x89PNG\x0D\x0A\x1A\x0A)",$W)){$G="<img src='$w' alt='$G'>";}}if(like_bool($n)&&$G!="&nbsp;"){$G=($W?lang(27):lang(28));}if($w){$G="<a href='$w'>$G</a>";}if(!$w&&!like_bool($n)&&ereg('int|float|double|decimal',$n["type"])){$G="<div class='number'>$G</div>";}elseif(ereg('date',$n["type"])){$G="<div class='datetime'>$G</div>";}return$G;}function
editVal($W,$n){if(ereg('date|timestamp',$n["type"])&&isset($W)){return
preg_replace('~^(\\d{2}(\\d+))-(0?(\\d+))-(0?(\\d+))~',lang(29),$W);}return(ereg("binary",$n["type"])?reset(unpack("H*",$W)):$W);}function
selectColumnsPrint($J,$g){}function
selectSearchPrint($Z,$g,$Yb){$Z=(array)$_GET["where"];echo'<fieldset><legend>'.lang(30)."</legend><div>\n";$hc=array();foreach($Z
as$u=>$W){$hc[$W["col"]]=$u;}$r=0;$o=fields($_GET["select"]);foreach($g
as$z=>$Sa){$n=$o[$z];if(ereg("enum",$n["type"])||like_bool($n)){$u=$hc[$z];$r--;echo"<div>".h($Sa)."<input type='hidden' name='where[$r][col]' value='".h($z)."'>:",(like_bool($n)?" <select name='where[$r][val]'>".optionlist(array(""=>"",lang(28),lang(27)),$Z[$u]["val"],true)."</select>":enum_input("checkbox"," name='where[$r][val][]'",$n,(array)$Z[$u]["val"],($n["null"]?0:null))),"</div>\n";unset($g[$z]);}elseif(is_array($Mc=$this->_foreignKeyOptions($_GET["select"],$z))){if($o[$z]["null"]){$Mc[0]='('.lang(4).')';}$u=$hc[$z];$r--;echo"<div>".h($Sa)."<input type='hidden' name='where[$r][col]' value='".h($z)."'><input type='hidden' name='where[$r][op]' value='='>: <select name='where[$r][val]'>".optionlist($Mc,$Z[$u]["val"],true)."</select></div>\n";unset($g[$z]);}}$r=0;foreach($Z
as$W){if(($W["col"]==""||$g[$W["col"]])&&"$W[col]$W[val]"!=""){echo"<div><select name='where[$r][col]'><option value=''>(".lang(31).")".optionlist($g,$W["col"],true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators,$W["op"]),"<input name='where[$r][val]' value='".h($W["val"])."'></div>\n";$r++;}}echo"<div><select name='where[$r][col]' onchange='this.nextSibling.nextSibling.onchange();'><option value=''>(".lang(31).")".optionlist($g,null,true)."</select>",html_select("where[$r][op]",array(-1=>"")+$this->operators),"<input name='where[$r][val]' onchange='selectAddRow(this);'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($Oc,$g,$Yb){$Pc=array();foreach($Yb
as$u=>$Wb){$Oc=array();foreach($Wb["columns"]as$W){$Oc[]=$g[$W];}if(count(array_filter($Oc,'strlen'))>1&&$u!="PRIMARY"){$Pc[$u]=implode(", ",$Oc);}}if($Pc){echo'<fieldset><legend>'.lang(32)."</legend><div>","<select name='index_order'>".optionlist(array(""=>"")+$Pc,($_GET["order"][0]!=""?"":$_GET["index_order"]),true)."</select>","</div></fieldset>\n";}if($_GET["order"]){echo"<div style='display: none;'>".hidden_fields(array("order"=>array(1=>reset($_GET["order"])),"desc"=>($_GET["desc"]?array(1=>1):array()),))."</div>\n";}}function
selectLimitPrint($v){echo"<fieldset><legend>".lang(33)."</legend><div>";echo
html_select("limit",array("","30","100"),$v),"</div></fieldset>\n";}function
selectLengthPrint($Ld){}function
selectActionPrint(){echo"<fieldset><legend>".lang(34)."</legend><div>","<input type='submit' value='".lang(35)."'>","</div></fieldset>\n";}function
selectCommandPrint(){return
true;}function
selectImportPrint(){return
true;}function
selectEmailPrint($eb,$g){if($eb){print_fieldset("email",lang(36),$_POST["email_append"]);echo"<div onkeydown=\"eventStop(event); return bodyKeydown(event, 'email');\">\n","<p>".lang(37).": <input name='email_from' value='".h($_POST?$_POST["email_from"]:$_COOKIE["adminer_email"])."'>\n",lang(38).": <input name='email_subject' value='".h($_POST["email_subject"])."'>\n","<p><textarea name='email_message' rows='15' cols='75'>".h($_POST["email_message"].($_POST["email_append"]?'{$'."$_POST[email_addition]}":""))."</textarea>\n";echo"<p onkeydown=\"eventStop(event); return bodyKeydown(event, 'email_append');\">".html_select("email_addition",$g,$_POST["email_addition"])."<input type='submit' name='email_append' value='".lang(39)."'>\n";echo"<p>".lang(40).": <input type='file' name='email_files[]' onchange=\"this.onchange = function () { }; var el = this.cloneNode(true); el.value = ''; this.parentNode.appendChild(el);\">","<p>".(count($eb)==1?'<input type="hidden" name="email_field" value="'.h(key($eb)).'">':html_select("email_field",$eb)),"<input type='submit' name='email' value='".lang(41)."' onclick=\"return this.form['delete'].onclick();\">\n","</div>\n","</div></fieldset>\n";}}function
selectColumnsProcess($g,$Yb){return
array(array(),array());}function
selectSearchProcess($o,$Yb){$G=array();foreach((array)$_GET["where"]as$u=>$Z){$Ea=$Z["col"];$Ic=$Z["op"];$W=$Z["val"];if(($u<0?"":$Ea).$W!=""){$Ja=array();foreach(($Ea!=""?array($Ea=>$o[$Ea]):$o)as$z=>$n){if($Ea!=""||is_numeric($W)||!ereg('int|float|double|decimal',$n["type"])){$z=idf_escape($z);if($Ea!=""&&$n["type"]=="enum"){$Ja[]=(in_array(0,$W)?"$z IS NULL OR ":"")."$z IN (".implode(", ",array_map('intval',$W)).")";}else{$Md=ereg('char|text|enum|set',$n["type"]);$X=$this->processInput($n,(!$Ic&&$Md&&ereg('^[^%]+$',$W)?"%$W%":$W));$Ja[]=$z.($X=="NULL"?" IS".($Ic==">="?" NOT":"")." $X":(in_array($Ic,$this->operators)||$Ic=="="?" $Ic $X":($Md?" LIKE $X":" IN (".str_replace(",","', '",$X).")")));if($u<0&&$W=="0"){$Ja[]="$z IS NULL";}}}}$G[]=($Ja?"(".implode(" OR ",$Ja).")":"0");}}return$G;}function
selectOrderProcess($o,$Yb){$Xb=$_GET["index_order"];if($Xb!=""){unset($_GET["order"][1]);}if($_GET["order"]){return
array(idf_escape(reset($_GET["order"])).($_GET["desc"]?" DESC":""));}foreach(($Xb!=""?array($Yb[$Xb]):$Yb)as$Wb){if($Xb!=""||$Wb["type"]=="INDEX"){$Sa=false;foreach($Wb["columns"]as$W){if(ereg('date|timestamp',$o[$W]["type"])){$Sa=true;break;}}$G=array();foreach($Wb["columns"]as$W){$G[]=idf_escape($W).($Sa?" DESC":"");}return$G;}}return
array();}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return"100";}function
selectEmailProcess($Z,$Db){if($_POST["email_append"]){return
true;}if($_POST["email"]){$sd=0;if($_POST["all"]||$_POST["check"]){$n=idf_escape($_POST["email_field"]);$Dd=$_POST["email_subject"];$yc=$_POST["email_message"];preg_match_all('~\\{\\$([a-z0-9_]+)\\}~i',"$Dd.$yc",$tc);$I=get_rows("SELECT DISTINCT $n".($tc[1]?", ".implode(", ",array_map('idf_escape',array_unique($tc[1]))):"")." FROM ".table($_GET["select"])." WHERE $n IS NOT NULL AND $n != ''".($Z?" AND ".implode(" AND ",$Z):"").($_POST["all"]?"":" AND ((".implode(") OR (",array_map('where_check',(array)$_POST["check"]))."))"));$o=fields($_GET["select"]);foreach($this->rowDescriptions($I,$Db)as$H){$jd=array('{\\'=>'{');foreach($tc[1]as$W){$jd['{$'."$W}"]=$this->editVal($H[$W],$o[$W]);}$db=$H[$_POST["email_field"]];if(is_mail($db)&&send_mail($db,strtr($Dd,$jd),strtr($yc,$jd),$_POST["email_from"],$_FILES["email_files"])){$sd++;}}}cookie("adminer_email",$_POST["email_from"]);redirect(remove_from_uri(),lang(42,$sd));}return
false;}function
messageQuery($E){return"<!--\n".str_replace("--","--><!-- ",$E)."\n-->";}function
editFunctions($n){$G=array();if($n["null"]&&ereg('blob',$n["type"])){$G["NULL"]=lang(4);}$G[""]=($n["null"]||$n["auto_increment"]||like_bool($n)?"":"*");if(ereg('date|time',$n["type"])){$G["now"]=lang(43);}if(eregi('_(md5|sha1)$',$n["field"],$x)){$G[]=strtolower($x[1]);}return$G;}function
editInput($N,$n,$ra,$X){if($n["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$ra value='-1' checked><i>".lang(5)."</i></label> ":"").enum_input("radio",$ra,$n,($X||isset($_GET["select"])?$X:0),($n["null"]?"":null));}$Mc=$this->_foreignKeyOptions($N,$n["field"],$X);if(isset($Mc)){return(is_array($Mc)?"<select$ra>".optionlist($Mc,$X,true)."</select>":"<input value='".h($X)."'$ra class='hidden'><input value='".h($Mc)."' class='jsonly' onkeyup=\"whisper('".h(ME."script=complete&source=".urlencode($N)."&field=".urlencode($n["field"]))."&value=', this);\"><div onclick='return whisperClick(event, this.previousSibling);'></div>");}if(like_bool($n)){return'<input type="checkbox" value="'.h($X?$X:1).'"'.($X?' checked':'')."$ra>";}$Rb="";if(ereg('time',$n["type"])){$Rb=lang(44);}if(ereg('date|timestamp',$n["type"])){$Rb=lang(45).($Rb?" [$Rb]":"");}if($Rb){return"<input value='".h($X)."'$ra> ($Rb)";}if(eregi('_(md5|sha1)$',$n["field"])){return"<input type='password' value='".h($X)."'$ra>";}return'';}function
processInput($n,$X,$q=""){if($q=="now"){return"$q()";}$G=$X;if(ereg('date|timestamp',$n["type"])&&preg_match('(^'.str_replace('\\$1','(?P<p1>\\d*)',preg_replace('~(\\\\\\$([2-6]))~','(?P<p\\2>\\d{1,2})',preg_quote(lang(29)))).'(.*))',$X,$x)){$G=($x["p1"]!=""?$x["p1"]:($x["p2"]!=""?($x["p2"]<70?20:19).$x["p2"]:gmdate("Y")))."-$x[p3]$x[p4]-$x[p5]$x[p6]".end($x);}$G=($n["type"]=="bit"&&ereg('^[0-9]+$',$X)?$G:q($G));if($X==""&&($n["null"]||!ereg('char|text',$n["type"]))&&!like_bool($n)){$G="NULL";}elseif(ereg('^(md5|sha1)$',$q)){$G="$q($G)";}if(ereg("binary",$n["type"])){$G="unhex($G)";}return$G;}function
dumpOutput(){return
array();}function
dumpFormat(){return
array('csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable(){echo"\xef\xbb\xbf";}function
dumpData($N,$Cd,$E){global$h;$F=$h->query($E,1);if($F){while($H=$F->fetch_assoc()){if($Cd=="table"){dump_csv(array_keys($H));$Cd="INSERT";}dump_csv($H);}}}function
dumpHeaders($Tb,$Bc=false){$rb="csv";header("Content-Type: text/csv; charset=utf-8");return$rb;}function
homepage(){return
true;}function
navigation($Ac){global$ba,$Rd;echo'<h1>
',$this->name(),' <span class="version">',$ba,'</span>
<a href="http://www.adminer.org/editor/#download" id="version">',(version_compare($ba,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Ac=="auth"){$_b=true;foreach((array)$_SESSION["pwds"]["server"][""]as$U=>$C){if(isset($C)){if($_b){echo"<p onclick='eventStop(event);'>\n";$_b=false;}echo"<a href='".h(auth_url("server","",$U))."'>".($U!=""?h($U):"<i>".lang(4)."</i>")."</a><br>\n";}}}else{echo'<form action="" method="post">
<p class="logout">
<input type="submit" name="logout" value="',lang(46),'" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$Rd,'">
</p>
</form>
';if($Ac!="db"&&$Ac!="ns"){$O=table_status();if(!$O){echo"<p class='message'>".lang(6)."\n";}else{$this->tablesPrint($O);}}}}function
tablesPrint($P){echo"<p id='tables'>\n";foreach($P
as$H){$z=$this->tableName($H);if(isset($H["Engine"])&&$z!=""){echo"<a href='".h(ME).'select='.urlencode($H["Name"])."'".bold($_GET["select"]==$H["Name"])." title='".lang(47)."'>$z</a><br>\n";}}}function
_foreignColumn($Db,$f){foreach((array)$Db[$f]as$Cb){if(count($Cb["source"])==1){$z=$this->rowDescription($Cb["table"]);if($z!=""){$s=idf_escape($Cb["target"][0]);return
array($Cb["table"],$s,$z);}}}}function
_foreignKeyOptions($N,$f,$X=null){global$h;if(list($Q,$s,$z)=$this->_foreignColumn(column_foreign_keys($N),$f)){$G=&$this->_values[$Q];if(!isset($G)){$O=table_status($Q);$G=($O["Rows"]>1000?"":array(""=>"")+get_key_vals("SELECT $s, $z FROM ".table($Q)." ORDER BY 2"));}if(!$G&&isset($X)){return$h->result("SELECT $z FROM ".table($Q)." WHERE $s = ".q($X));}return$G;}}}$c=(function_exists('adminer_object')?adminer_object():new
Adminer);function
page_header($Nd,$m="",$Aa=array(),$Od=""){global$a,$c,$h,$Xa;header("Content-Type: text/html; charset=utf-8");if($c->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$Pd=$Nd.($Od!=""?": ".h($Od):"");$Qd=strip_tags($Pd.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$c->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($Qd));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="',$a,'" dir="',lang(48),'">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$Qd,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.4",'">
<script type="text/javascript">
var areYouSure = \'',lang(49),'\';
var noResponse = \'',lang(50),'\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.4",'"></script>
';if($c->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.4",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="',lang(48),' nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($h)?substr($h->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();"),'">
<script type="text/javascript">
document.body.className = document.body.className.replace(/ nojs/, \' js\');
</script>

<div id="loader"><img src="',h(preg_replace("~\\?.*~","",ME))."?file=loader.gif&amp;version=3.3.4",'" alt=""></div>
<div id="content">
';}if(isset($Aa)){$w=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($w?$w:".").'">'.$Xa[DRIVER].'</a> &raquo; ';$w=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$K=(SERVER!=""?h(SERVER):lang(51));if($Aa===false){echo"$K\n";}else{echo"<a href='".($w?h($w):".")."' accesskey='1' title='Alt+Shift+1'>$K</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($Aa))){echo'<a href="'.h($w."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($Aa)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($Aa
as$u=>$W){$Sa=(is_array($W)?$W[1]:$W);if($Sa!=""){echo'<a href="'.h(ME."$u=").urlencode(is_array($W)?$W[0]:$W).'">'.h($Sa).'</a> &raquo; ';}}}echo"$Nd\n";}}echo"<h2>$Pd</h2>\n";restart_session();$de=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$zc=$_SESSION["messages"][$de];if($zc){echo"<div class='message'>".implode("</div>\n<div class='message'>",$zc)."</div>\n";unset($_SESSION["messages"][$de]);}$k=&get_session("dbs");if(DB!=""&&$k&&!in_array(DB,$k,true)){$k=null;}if($m){echo"<div class='error'>$m</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Ac=""){global$c;if(!is_ajax()){echo'</div>

';switch_lang();echo'<div id="menu">
';$c->navigation($Ac);echo'</div>
';}}function
int32($y){while($y>=2147483648){$y-=4294967296;}while($y<=-2147483649){$y+=4294967296;}return(int)$y;}function
long2str($V,$je){$nd='';foreach($V
as$W){$nd.=pack('V',$W);}if($je){return
substr($nd,0,end($V));}return$nd;}function
str2long($nd,$je){$V=array_values(unpack('V*',str_pad($nd,4*ceil(strlen($nd)/4),"\0")));if($je){$V[]=strlen($nd);}return$V;}function
xxtea_mx($ne,$me,$Fd,$gc){return
int32((($ne>>5&0x7FFFFFF)^$me<<2)+(($me>>3&0x1FFFFFFF)^$ne<<4))^int32(($Fd^$me)+($gc^$ne));}function
encrypt_string($Ad,$u){if($Ad==""){return"";}$u=array_values(unpack("V*",pack("H*",md5($u))));$V=str2long($Ad,true);$y=count($V)-1;$ne=$V[$y];$me=$V[0];$dd=floor(6+52/($y+1));$Fd=0;while($dd-->0){$Fd=int32($Fd+0x9E3779B9);$ab=$Fd>>2&3;for($Rc=0;$Rc<$y;$Rc++){$me=$V[$Rc+1];$Cc=xxtea_mx($ne,$me,$Fd,$u[$Rc&3^$ab]);$ne=int32($V[$Rc]+$Cc);$V[$Rc]=$ne;}$me=$V[0];$Cc=xxtea_mx($ne,$me,$Fd,$u[$Rc&3^$ab]);$ne=int32($V[$y]+$Cc);$V[$y]=$ne;}return
long2str($V,false);}function
decrypt_string($Ad,$u){if($Ad==""){return"";}$u=array_values(unpack("V*",pack("H*",md5($u))));$V=str2long($Ad,false);$y=count($V)-1;$ne=$V[$y];$me=$V[0];$dd=floor(6+52/($y+1));$Fd=int32($dd*0x9E3779B9);while($Fd){$ab=$Fd>>2&3;for($Rc=$y;$Rc>0;$Rc--){$ne=$V[$Rc-1];$Cc=xxtea_mx($ne,$me,$Fd,$u[$Rc&3^$ab]);$me=int32($V[$Rc]-$Cc);$V[$Rc]=$me;}$ne=$V[$y];$Cc=xxtea_mx($ne,$me,$Fd,$u[$Rc&3^$ab]);$me=int32($V[0]-$Cc);$V[0]=$me;$Fd=int32($Fd-0x9E3779B9);}return
long2str($V,true);}$h='';$Rd=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Vc=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$W){list($u)=explode(":",$W);$Vc[$u]=$W;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$u=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$ad=$c->permanentLogin();$Vc[$u]="$u:".base64_encode($ad?encrypt_string($_POST["password"],$ad):"");cookie("adminer_permanent",implode(" ",$Vc));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($Rd&&$_POST["token"]!=$Rd){page_header(lang(46),lang(52));page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$u){set_session($u,null);}$u=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Vc[$u]){unset($Vc[$u]);cookie("adminer_permanent",implode(" ",$Vc));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),lang(53));}}elseif($Vc&&!$_SESSION["pwds"]){session_regenerate_id();$ad=$c->permanentLogin();foreach($Vc
as$u=>$W){list(,$Da)=explode(":",$W);list($Wa,$K,$U)=array_map('base64_decode',explode("-",$u));$_SESSION["pwds"][$Wa][$K][$U]=decrypt_string(base64_decode($Da),$ad);}}function
auth_error($ob=null){global$h,$c,$Rd;$vd=session_name();$m="";if(!$_COOKIE[$vd]&&$_GET[$vd]&&ini_bool("session.use_only_cookies")){$m=lang(54);}elseif(isset($_GET["username"])){if(($_COOKIE[$vd]||$_GET[$vd])&&!$Rd){$m=lang(55);}else{$C=&get_session("pwds");if(isset($C)){$m=h($ob?$ob->getMessage():(is_string($h)?$h:lang(56)));$C=null;}}}page_header(lang(22),$m,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$c->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header(lang(57),lang(58,implode(", ",$Yc)),false);page_footer("auth");exit;}$h=connect();}if(is_string($h)||!$c->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$Rd=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$Rd;}$m=($_POST?($_POST["token"]==$Rd?"":lang(52)):($_SERVER["REQUEST_METHOD"]!="POST"?"":lang(59,'"post_max_size"')));$h->select_db($c->database());function
email_header($Pb){return"=?UTF-8?B?".base64_encode($Pb)."?=";}function
send_mail($db,$Dd,$yc,$Jb="",$yb=array()){$jb=(strncasecmp(PHP_OS,"win",3)?"\n":"\r\n");$yc=str_replace("\n",$jb,wordwrap(str_replace("\r","","$yc\n")));$_a=uniqid("boundary");$qa="";foreach((array)$yb["error"]as$u=>$W){if(!$W){$qa.="--$_a$jb"."Content-Type: ".str_replace("\n","",$yb["type"][$u]).$jb."Content-Disposition: attachment; filename=\"".preg_replace('~["\\n]~','',$yb["name"][$u])."\"$jb"."Content-Transfer-Encoding: base64$jb$jb".chunk_split(base64_encode(file_get_contents($yb["tmp_name"][$u])),76,$jb).$jb;}}$ya="";$Qb="Content-Type: text/plain; charset=utf-8$jb"."Content-Transfer-Encoding: 8bit";if($qa){$qa.="--$_a--$jb";$ya="--$_a$jb$Qb$jb$jb";$Qb="Content-Type: multipart/mixed; boundary=\"$_a\"";}$Qb.=$jb."MIME-Version: 1.0$jb"."X-Mailer: Adminer Editor".($Jb?$jb."From: ".str_replace("\n","",$Jb):"");return
mail($db,email_header($Dd),$ya.$yc.$qa,$Qb);}function
like_bool($n){return
ereg("bool|(tinyint|bit)\\(1\\)",$n["full_type"]);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$Fc="RESTRICT|NO ACTION|CASCADE|SET NULL|SET DEFAULT";$Xa[DRIVER]=lang(22);if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["download"])){$b=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$b-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$h->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($b)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["edit"])){$b=$_GET["edit"];$Z=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$T=(isset($_GET["select"])?$_POST["edit"]:$Z);$o=fields($b);foreach($o
as$z=>$n){if(!isset($n["privileges"][$T?"update":"insert"])||$c->fieldName($n)==""){unset($o[$z]);}}if($_POST&&!$m&&!isset($_GET["select"])){$pc=$_POST["referer"];if($_POST["insert"]){$pc=($T?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$pc)){$pc=ME."select=".urlencode($b);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($b)," WHERE $Z"),$pc,lang(60));}else{$L=array();foreach($o
as$z=>$n){$W=process_input($n);if($W!==false&&$W!==null){$L[idf_escape($z)]=($T?"\n".idf_escape($z)." = $W":$W);}}if($T){if(!$L){redirect($pc);}query_redirect("UPDATE".limit1(table($b)." SET".implode(",",$L),"\nWHERE $Z"),$pc,lang(61));}else{$F=insert_into($b,$L);$lc=($F?last_id():0);queries_redirect($pc,lang(62,($lc?" $lc":"")),$F);}}}$Id=$c->tableName(table_status($b));page_header(($T?lang(63):lang(39)),$m,array("select"=>array($b,$Id)),$Id);$H=null;if($_POST["save"]){$H=(array)$_POST["fields"];}elseif($Z){$J=array();foreach($o
as$z=>$n){if(isset($n["privileges"]["select"])){$J[]=($_POST["clone"]&&$n["auto_increment"]?"'' AS ":(ereg("enum|set",$n["type"])?"1*".idf_escape($z)." AS ":"")).idf_escape($z);}}$H=array();if($J){$I=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($b)," WHERE $Z",(isset($_GET["select"])?2:1)));$H=(isset($_GET["select"])&&count($I)!=1?null:reset($I));}}if($H===false){echo"<p class='error'>".lang(64)."\n";}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($o){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($o
as$z=>$n){echo"<tr><th>".$c->fieldName($n);$Ra=$_GET["set"][bracket_escape($z)];$X=(isset($H)?($H[$z]!=""&&ereg("enum|set",$n["type"])?(is_array($H[$z])?array_sum($H[$z]):+$H[$z]):$H[$z]):(!$T&&$n["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ra)?$Ra:$n["default"]))));if(!$_POST["save"]&&is_string($X)){$X=$c->editVal($X,$n);}$q=($_POST["save"]?(string)$_POST["function"][$z]:($T&&$n["on_update"]=="CURRENT_TIMESTAMP"?"now":($X===false?null:(isset($X)?'':'NULL'))));if($n["type"]=="timestamp"&&$X=="CURRENT_TIMESTAMP"){$X="";$q="now";}input($n,$X,$q);echo"\n";}echo"</table>\n";}echo'<p>
';if($o){echo"<input type='submit' value='".lang(65)."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($T?lang(66):lang(67))."' title='Ctrl+Shift+Enter'>\n";}}echo($T?"<input type='submit' name='delete' value='".lang(68)."' onclick=\"return confirm('".lang(0)."');\">\n":($_POST||!$o?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$Rd,'">
</form>
';}elseif(isset($_GET["select"])){$b=$_GET["select"];$O=table_status($b);$Yb=indexes($b);$o=fields($b);$Eb=column_foreign_keys($b);if($O["Oid"]=="t"){$Yb[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$ka);$ld=array();$g=array();$Ld=null;foreach($o
as$u=>$n){$z=$c->fieldName($n);if(isset($n["privileges"]["select"])&&$z!=""){$g[$u]=html_entity_decode(strip_tags($z));if(ereg('text|lob',$n["type"])){$Ld=$c->selectLengthProcess();}}$ld+=$n["privileges"];}list($J,$Lb)=$c->selectColumnsProcess($g,$Yb);$Z=$c->selectSearchProcess($o,$Yb);$Oc=$c->selectOrderProcess($o,$Yb);$v=$c->selectLimitProcess();$Jb=($J?implode(", ",$J):($O["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($b);$Mb=($Lb&&count($Lb)<count($J)?"\nGROUP BY ".implode(", ",$Lb):"").($Oc?"\nORDER BY ".implode(", ",$Oc):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Zd=>$H){echo$h->result("SELECT".limit(idf_escape(key($H))." FROM ".table($b)," WHERE ".where_check($Zd).($Z?" AND ".implode(" AND ",$Z):"").($Oc?" ORDER BY ".implode(", ",$Oc):""),1));}exit;}if($_POST&&!$m){$le="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$Zc=$be=null;foreach($Yb
as$Wb){if($Wb["type"]=="PRIMARY"){$Zc=array_flip($Wb["columns"]);$be=($J?$Zc:array());break;}}foreach((array)$be
as$u=>$W){if(in_array(idf_escape($u),$J)){unset($be[$u]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($b);$c->dumpTable($b,"");if(!is_array($_POST["check"])||$be===array()){$ke=$Z;if(is_array($_POST["check"])){$ke[]="($le)";}$E="SELECT $Jb".($ke?"\nWHERE ".implode(" AND ",$ke):"").$Mb;}else{$Xd=array();foreach($_POST["check"]as$W){$Xd[]="(SELECT".limit($Jb,"\nWHERE ".($Z?implode(" AND ",$Z)." AND ":"").where_check($W).$Mb,1).")";}$E=implode(" UNION ALL ",$Xd);}$c->dumpData($b,"table",$E);exit;}if(!$c->selectEmailProcess($Z,$Eb)){if($_POST["save"]||$_POST["delete"]){$F=true;$la=0;$E=table($b);$L=array();if(!$_POST["delete"]){foreach($g
as$z=>$W){$W=process_input($o[$z]);if($W!==null){if($_POST["clone"]){$L[idf_escape($z)]=($W!==false?$W:idf_escape($z));}elseif($W!==false){$L[]=idf_escape($z)." = $W";}}}$E.=($_POST["clone"]?" (".implode(", ",array_keys($L)).")\nSELECT ".implode(", ",$L)."\nFROM ".table($b):" SET\n".implode(",\n",$L));}if($_POST["delete"]||$L){$Ha="UPDATE";if($_POST["delete"]){$Ha="DELETE";$E="FROM $E";}if($_POST["clone"]){$Ha="INSERT";$E="INTO $E";}if($_POST["all"]||($be===array()&&$_POST["check"])||count($Lb)<count($J)){$F=queries($Ha." $E".($_POST["all"]?($Z?"\nWHERE ".implode(" AND ",$Z):""):"\nWHERE $le"));$la=$h->affected_rows;}else{foreach((array)$_POST["check"]as$W){$F=queries($Ha.limit1($E,"\nWHERE ".where_check($W)));if(!$F){break;}$la+=$h->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(69,$la),$F);}elseif(!$_POST["import"]){if(!$_POST["val"]){$m=lang(70);}else{$F=true;$la=0;foreach($_POST["val"]as$Zd=>$H){$L=array();foreach($H
as$u=>$W){$u=bracket_escape($u,1);$L[]=idf_escape($u)." = ".(ereg('char|text',$o[$u]["type"])||$W!=""?$c->processInput($o[$u],$W):"NULL");}$E=table($b)." SET ".implode(", ",$L);$ke=" WHERE ".where_check($Zd).($Z?" AND ".implode(" AND ",$Z):"");$F=queries("UPDATE".(count($Lb)<count($J)?" $E$ke":limit1($E,$ke)));if(!$F){break;}$la+=$h->affected_rows;}queries_redirect(remove_from_uri(),lang(69,$la),$F);}}elseif(is_string($wb=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($ka["output"])."&format=".urlencode($_POST["separator"]));$F=true;$Ga=array_keys($o);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$wb,$tc);$la=count($tc[0]);begin();$td=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($tc[0]as$u=>$W){preg_match_all("~((\"[^\"]*\")+|[^$td]*)$td~",$W.$td,$uc);if(!$u&&!array_diff($uc[1],$Ga)){$Ga=$uc[1];$la--;}else{$L=array();foreach($uc[1]as$r=>$Ea){$L[idf_escape($Ga[$r])]=($Ea==""&&$o[$Ga[$r]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Ea))));}$F=insert_update($b,$L,$Zc);if(!$F){break;}}}if($F){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(71,$la),$F);queries("ROLLBACK");}else{$m=upload_error($wb);}}}$Id=$c->tableName($O);page_header(lang(35).": $Id",$m);session_write_close();$L=null;if(isset($ld["insert"])){$L="";foreach((array)$_GET["where"]as$W){if(count($Eb[$W["col"]])==1&&($W["op"]=="="||(!$W["op"]&&!ereg('[_%]',$W["val"])))){$L.="&set".urlencode("[".bracket_escape($W["col"])."]")."=".urlencode($W["val"]);}}}$c->selectLinks($O,$L);if(!$g){echo"<p class='error'>".lang(72).($o?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($b).'">',"</div>\n";$c->selectColumnsPrint($J,$g);$c->selectSearchPrint($Z,$g,$Yb);$c->selectOrderPrint($Oc,$g,$Yb);$c->selectLimitPrint($v);$c->selectLengthPrint($Ld);$c->selectActionPrint();echo"</form>\n";$B=$_GET["page"];if($B=="last"){$Hb=$h->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));$B=floor(max(0,$Hb-1)/$v);}$E="SELECT".limit((+$v&&$Lb&&count($Lb)<count($J)&&$fc=="sql"?"SQL_CALC_FOUND_ROWS ":"").$Jb,($Z?"\nWHERE ".implode(" AND ",$Z):"").$Mb,($v!=""?+$v:null),($B?$v*$B:0),"\n");echo$c->selectQuery($E);$F=$h->query($E);if(!$F){echo"<p class='error'>".error()."\n";}else{if($fc=="mssql"){$F->seek($v*$B);}$fb=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$I=array();while($H=$F->fetch_assoc()){if($B&&$fc=="oracle"){unset($H["RNUM"]);}$I[]=$H;}if($_GET["page"]!="last"){$Hb=(+$v&&$Lb&&count($Lb)<count($J)?($fc=="sql"?$h->result(" SELECT FOUND_ROWS()"):$h->result("SELECT COUNT(*) FROM ($E) x")):count($I));}if(!$I){echo"<p class='message'>".lang(64)."\n";}else{$xa=$c->backwardKeys($b,$Id);echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$Lb&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".lang(73)."</a>");$Dc=array();$Kb=array();reset($J);$fd=1;foreach($I[0]as$u=>$W){if($O["Oid"]!="t"||$u!="oid"){$W=$_GET["columns"][key($J)];$n=$o[$J?($W?$W["col"]:current($J)):$u];$z=($n?$c->fieldName($n,$fd):"*");if($z!=""){$fd++;$Dc[$u]=$z;$f=idf_escape($u);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($u).($Oc[0]==$f||$Oc[0]==$u||(!$Oc&&count($Lb)<count($J)&&$Lb[0]==$f)?'&desc%5B0%5D=1':'')).'">'.(!$J||$W?apply_sql_function($W["fun"],$z):h(current($J)))."</a>";}$Kb[$u]=$W["fun"];next($J);}}$oc=array();if($_GET["modify"]){foreach($I
as$H){foreach($H
as$u=>$W){$oc[$u]=max($oc[$u],min(40,strlen(utf8_decode($W))));}}}echo($xa?"<th>".lang(74):"")."</thead>\n";foreach($c->rowDescriptions($I,$Eb)as$y=>$H){$Yd=unique_array($I[$y],$Yb);$Zd="";foreach($Yd
as$u=>$W){$Zd.="&".(isset($W)?urlencode("where[".bracket_escape($u)."]")."=".urlencode($W):"null%5B%5D=".urlencode($u));}echo"<tr".odd().">".(!$Lb&&$J?"":"<td>".checkbox("check[]",substr($Zd,1),in_array(substr($Zd,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($Lb)<count($J)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($b).$Zd)."'>".lang(73)."</a>"));foreach($H
as$u=>$W){if(isset($Dc[$u])){$n=$o[$u];if($W!=""&&(!isset($fb[$u])||$fb[$u]!="")){$fb[$u]=(is_mail($W)?$Dc[$u]:"");}$w="";$W=$c->editVal($W,$n);if(!isset($W)){$W="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$n["type"])&&$W!=""){$w=h(ME.'download='.urlencode($b).'&field='.urlencode($u).$Zd);}if($W===""){$W="&nbsp;";}elseif($Ld!=""&&ereg('text|blob',$n["type"])&&is_utf8($W)){$W=shorten_utf8($W,max(0,+$Ld));}else{$W=h($W);}if(!$w){foreach((array)$Eb[$u]as$p){if(count($Eb[$u])==1||end($p["source"])==$u){$w="";foreach($p["source"]as$r=>$wd){$w.=where_link($r,$p["target"][$r],$I[$y][$wd]);}$w=h(($p["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($p["db"]),ME):ME).'select='.urlencode($p["table"]).$w);if(count($p["source"])==1){break;}}}}if($u=="COUNT(*)"){$w=h(ME."select=".urlencode($b));$r=0;foreach((array)$_GET["where"]as$V){if(!array_key_exists($V["col"],$Yd)){$w.=h(where_link($r++,$V["col"],$V["val"],$V["op"]));}}foreach($Yd
as$gc=>$V){$w.=h(where_link($r++,$gc,$V));}}}if(!$w){if(is_mail($W)){$w="mailto:$W";}if($cd=is_url($H[$u])){$w=($cd=="http"&&$aa?$H[$u]:"$cd://www.adminer.org/redirect/?url=".urlencode($H[$u]));}}$s=h("val[$Zd][".bracket_escape($u)."]");$X=$_POST["val"][$Zd][bracket_escape($u)];$Ob=h(isset($X)?$X:$H[$u]);$rc=strpos($W,"<i>...</i>");$cb=is_utf8($W)&&$I[$y][$u]==$H[$u]&&!$Kb[$u];$Kd=ereg('text|lob',$n["type"]);echo(($_GET["modify"]&&$cb)||isset($X)?"<td>".($Kd?"<textarea name='$s' cols='30' rows='".(substr_count($H[$u],"\n")+1)."'>$Ob</textarea>":"<input name='$s' value='$Ob' size='$oc[$u]'>"):"<td id='$s' ondblclick=\"".($cb?"selectDblClick(this, event".($rc?", 2":($Kd?", 1":"")).")":"alert('".h(lang(75))."')").";\">".$c->selectVal($W,$w,$n));}}if($xa){echo"<td>";}$c->backwardKeysPrint($xa,$I[$y]);echo"</tr>\n";}echo"</table>\n",(!$Lb&&$J?"":"<script type='text/javascript'>tableCheck();</script>\n");}if($I||$B){$nb=true;if($_GET["page"]!="last"&&+$v&&count($Lb)>=count($J)&&($Hb>=$v||$B)){$Hb=found_rows($O,$Z);if($Hb<max(1e4,2*($B+1)*$v)){ob_flush();flush();$Hb=$h->result("SELECT COUNT(*) FROM ".table($b).($Z?" WHERE ".implode(" AND ",$Z):""));}else{$nb=false;}}echo"<p class='pages'>";if(+$v&&$Hb>$v){$vc=floor(($Hb-1)/$v);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".lang(76)."', '".($B+1)."'), event); return false;\">".lang(76)."</a>:",pagination(0,$B).($B>5?" ...":"");for($r=max(1,$B-4);$r<min($vc,$B+5);$r++){echo
pagination($r,$B);}echo($B+5<$vc?" ...":"").($nb?pagination($vc,$B):' <a href="'.h(remove_from_uri()."&page=last").'">'.lang(77)."</a>");}echo" (".($nb?"":"~ ").lang(78,$Hb).") ".checkbox("all",1,0,lang(79))."\n";if($c->selectCommandPrint()){echo'<fieldset><legend>',lang(63),'</legend><div>
<input type="submit" value="',lang(65),'"',($_GET["modify"]?'':' title="'.lang(70).'" class="jsonly"'),'>
<input type="submit" name="edit" value="',lang(63),'">
<input type="submit" name="clone" value="',lang(80),'">
<input type="submit" name="delete" value="',lang(68),'" onclick="return confirm(\'',lang(0);?> (' + (this.form['all'].checked ? <?php echo$Hb,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}$Fb=$c->dumpFormat();if($Fb){print_fieldset("export",lang(81));$Qc=$c->dumpOutput();echo($Qc?html_select("output",$Qc,$ka["output"])." ":""),html_select("format",$Fb,$ka["format"])," <input type='submit' name='export' value='".lang(81)."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}}if($c->selectImportPrint()){print_fieldset("import",lang(82),!$I);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$ka["format"],1);echo" <input type='submit' name='import' value='".lang(82)."'>","<input type='hidden' name='token' value='$Rd'>\n","</div></fieldset>\n";}$c->selectEmailPrint(array_filter($fb,'strlen'),$g);echo"</form>\n";}}}elseif(isset($_GET["script"])){if(list($N,$s,$z)=$c->_foreignColumn(column_foreign_keys($_GET["source"]),$_GET["field"])){$F=$h->query("SELECT $s, $z FROM ".table($N)." WHERE ".(ereg('^[0-9]+$',$_GET["value"])?"$s = $_GET[value] OR ":"")."$z LIKE ".q("$_GET[value]%")." ORDER BY 2 LIMIT 11");for($r=0;$r<10&&($H=$F->fetch_row());$r++){echo"<a href='".h(ME."edit=".urlencode($N)."&where".urlencode("[".bracket_escape(idf_unescape($s))."]")."=".urlencode($H[0]))."'>".h($H[1])."</a><br>\n";}if($r==10){echo"...\n";}}exit;}else{page_header(lang(51),"",false);if($c->homepage()){echo"<form action='' method='post'>\n","<p>".lang(83).": <input name='query' value='".h($_POST["query"])."'> <input type='submit' value='".lang(30)."'>\n";if($_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap checkable' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^tables\[/);"><th>'.lang(84).'<td>'.lang(85)."</thead>\n";foreach(table_status()as$N=>$H){$z=$c->tableName($H);if(isset($H["Engine"])&&$z!=""){echo'<tr'.odd().'><td>'.checkbox("tables[]",$N,in_array($N,(array)$_POST["tables"],true),"","formUncheck('check-all');"),"<th><a href='".h(ME).'select='.urlencode($N)."'>$z</a>";$W=number_format($H["Rows"],0,'.',lang(86));echo"<td align='right'><a href='".h(ME."edit=").urlencode($N)."'>".($H["Engine"]=="InnoDB"&&$W?"~ $W":$W)."</a>";}}echo"</table>\n","<script type='text/javascript'>tableCheck();</script>\n","</form>\n";}}page_footer();