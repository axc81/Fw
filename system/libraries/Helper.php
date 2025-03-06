<?php 

class Helper{

	public function br2() 
	{
	    $br = "</br></br>";
	    return $br;
	}
	 
	 
	// garis lurus
	 
	public function hr() 
	{
	    $hr = "<hr/>";
	    return $hr;
	}
	 
	 
	// heading h1 - h6
	 
	public function heading($title, $size, $param) 
	{
	    $heading = "<h$size $param>$title</h$size>";
	    return $heading;
	}
	 
	 
	// link tag stylesheet
	 
	public function getCss($url) 
	{
	    $getCss = "<link rel='stylesheet' href=$url type='text/css'/>";
	    return $getCss;
	}
	 
	 
	// tag favicon
	 
	public function getFavicon($imageUrl) 
	{
	    $getFavicon = "<link rel='shorcut iocn' href=$imageUrl/>";
	    return $getCss;
	}
	 
	 
	// get javascript external link
	 
	public function getJs($url) 
	{
	    $getJs = "<script type='text/javascript' src=$url></script>";
	    return $getJs;
	}
	 
	 
	// tag image
	 
	public function img($img, $param) 
	{
	    $img = "<img src='$img' $param/>";
	    return $img;
	}
	 
	 
	// spasi
	 
	public function nbsp($count) 
	{
	    for ($i = 1; $i <= $count; $i++) {
	        echo '&nbsp;';
	    }
	}
	 
	 
	// tag meta, untuk SEO (description, keyword, dsb)
	 
	public function meta($name, $content) 
	{
	    $meta = "<meta name='$name' content='$content'>";
	    return $meta;
	}
	 
	 
	// doctype dokumen
	 
	public function doctype()
	{
	  /*$doctype="<!DOCTYPE html PUBLIC >"-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">";
	  return $doctype;*/
	}

	public function string_limit_words($string, $word_limit) 
	{
	    $words = explode(' ', $string);
	 
	    return implode(' ', array_slice($words, 0, $word_limit));
	}
	 
	 
	// membatasi jumlah karakter pada string
	 
	public function character_limiter($text,$limiter)
	{
	  $character=substr($text,0,$limiter);
	  return $character;
	}

	public function form_open($action, $method, $param) 
{
    $form_open = "<form action='$action' method='$method' $param>";
    return $form_open;
}
 
 
// buka tag form multipart/ jika melakukan upload file
 
function form_open_multipart($action, $method, $param) 
{
    $form_upload_open = "<form action='$action' method='$method' enctype='multipart/form-data' $param>";
    return $form_upload_open;
}
 
 
// tutup form
 
function form_close() 
{
    $form_close = "</form>";
    return $form_close;
}
 
 
// label form
 
function label($label, $for, $param) 
{
    $label = "<label for='$for' $param>$label</label>";
    return $label;
}
 
 
// buka filedset
 
function fieldset_open($title, $param) 
{
    $fieldset_open = "<fieldset $param><legend>$title</legend>";
    return $fieldset_open;
}
 
 
// tutup fieldset
function fieldset_close() 
{
    $fieldset_close = "</fieldset>";
    return $fieldset_close;
}
 
 
/* -------Input-------- */
 
 
// input text
 
function input_text($param) 
{
    $input_text = "<input type='text' $param/>";
    return $input_text;
}
 
 
// input password
 
function input_password($param) 
{
    $input_password = "<input type='password' $param/>";
    return $input_password;
}
 
 
// input hidden
 
function input_hidden($param) 
{
    $input_hidden = "<input type='hidden' $param/>";
    return $input_hidden;
}
 
 
// input textarea
 
function input_textarea($cols, $rows, $param, $val) 
{
    $input_textarea = "<textarea cols=$cols rows=$rows $param>$val</textarea>";
    return $input_textarea;
}
 
 
// buka dropdown menu
 
function dropdown_open($name,$param) 
{
    $dropdown_open = "<select name='$name' $param>";
    return $dropdown_open;
}
 
 
// tutup dropdown menu 
 
function dropdown_close() 
{
    $dropdown_close = "</select>";
    return $dropdown_close;
}
 
 
// option menu item
 
function input_option($value, $label, $param) 
{
    $input_option = "<option value='$value' $param>$label</option>";
    return $input_option;
}
 
 
// checbox item
 
function input_checkbox($name, $value, $param) 
{
    $input_checkbox = "<input type='checkbox' name='$name' value='$value' $param/>";
    return $input_checkbox;
}
 
 
// input radio item
 
function input_radio($name, $value, $param) 
{
    $input_radio = "<input type='radio' name='$name' value='$value' $param/>";
    return $input_radio;
}
 
 
// input file
 
function input_file($param) 
{
    $input_file = "<input type='file' $param/>";
    return $input_file;
}
 
 
/* ---------Button--------- */
 
// input submit
 
function input_submit($val, $param) 
{
    $input_submit = "<input type='submit' value='$val' $param/>";
    return $input_submit;
}
 
 
// input button
 
function input_button($val, $param) 
{
    $input_button = "<input type='button' value='$val' $param/>";
    return $input_button;
}
 
 
// input reset
 
function input_reset($val, $param) 
{
    $input_reset = "<input type='reset' value='$val' $param/>";
    return $input_reset;
}
function redirect_delay($delay, $url) 
{
    echo "<meta http-equiv='refresh' content=$delay;url=$url>";
}
 
 
// redirect halaman tanpa delay
 
function redirect($url)
{
   echo header('Location:$url');
}
 
 
// redirect halaman dengan javascript
 
function refresh($location) 
{
    echo"<script>window.location='$location';</script>";
}
 
// membuat link
 
function anchor($url, $title, $param) 
{
    $anchor = "<a href='$url' $param>$title</a>";
    return $anchor;
}
 
 
// membuat friendly url/ SEO url
 
function url_title($s) 
{
    $c = array (' ');
    $d = array ('-','/','\\',',','.','#',':',';','\'','"','[',']','{','}',')','(','|','`','~','!','@','%','$','^','&','*','=','?','+');
 
    $s = str_replace($d, ' ', $s); // mengganti karakter array $d menjadi spasi
     
    $s = strtolower(str_replace($c, '-', $s)); // membuat seo url
    return $s;
}
 
 
// Auto generate link
 
function auto_link($text)
{
  $auto_link = preg_replace("/((?:https?|ftp):\/\/\S+[[:alnum:]]\/?)/si", "<a href=\"$0\" target=_blank>$0</a>", $text);
  return $auto_link;
}
}
?>