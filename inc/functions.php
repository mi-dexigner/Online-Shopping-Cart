<?php
/* 
 Get a random code
 $random_length variable is the code length, it it null or blank the code length will be 10
*/
function random_cod($random_length = null){
    $r_num = $random_length != null ? $random_length : 10;
    return substr(md5(rand(0, 1000000)), 0, $r_num);
   }



   /* GET IP ADDRESS */
function getIpAddress() {
    return (empty($_SERVER['HTTP_CLIENT_IP'])?(empty($_SERVER['HTTP_X_FORWARDED_FOR'])?
    $_SERVER['REMOTE_ADDR']:$_SERVER['HTTP_X_FORWARDED_FOR']):$_SERVER['HTTP_CLIENT_IP']);
    }


    /*  	
  Break off a string to a certain number of characters
*/
function cutOff($str,$charsnum){
    $str_length = mb_strlen($str);
    $str = mb_substr($str,0,$charsnum);
    return $str.($str_length > $charsnum ? '...' : '');
  }


 /*
 GET IF IS A VALID EMAIL ADDRESS
*/
function email_exist($email) {
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) return false;
    elseif (!checkdnsrr(array_pop(explode('@',$email)),'MX')) return false;
    else return true;
  } 


  /*
  UPLOAD IMAGE WITH RATIO AND THUMBS
  $tempname  = temp name from php upload
  $filename  = name of picture to save
  $newwidth = various width size comma separated (the script will calc the ratio). eg '600,100,50'
  $uploaddir = destination directory
  $defaultimg = if true the script will save a original image too into destination directory
  $compression = image compression (for jpg and jpeg recommend 60, for png 9), if null will be 60 or 9
  p.s. the script will create the destination forlder if it not exists
*/
function upload_resize_img($tempname,$filename,$newwidth,$uploaddir,$defaultimg = false,$compression = false){		
    if(!file_exists($uploaddir)) Mkdir($uploaddir, 0755, true);	  
          $ext = explode('.',$filename);			
  /******* resize images **********/      
          $extension = mb_strtolower(end($ext));
        if($extension=="jpg" || $extension=="jpeg")
        {
        $uploadedfile = $tempname;
        $src = imagecreatefromjpeg($tempname);
        }
        else if($extension=="png")
        {
        $uploadedfile = $tempname;
        $src = imagecreatefrompng($tempname);
        }
        else 
        {
        $src = imagecreatefromgif($tempname);
        }	  
        
        list($width,$height)=getimagesize($tempname);
        $arr_width = explode(',',$newwidth);
        foreach($arr_width as $newwidth){
          ${'newwidth'.$newwidth} = $newwidth;
          if(!file_exists($uploaddir.'/'.${'newwidth'.$newwidth}.'x'.${'newwidth'.$newwidth})) Mkdir($uploaddir.'/'.${'newwidth'.$newwidth}.'x'.${'newwidth'.$newwidth}, 0755, true);
          ${'newheight'.$newwidth}=($height/$width)*${'newwidth'.$newwidth};
          ${'tmp'.$newwidth}=imagecreatetruecolor(${'newwidth'.$newwidth},${'newheight'.$newwidth});
            //imageantialias(${'tmp'.$newwidth},true);
            imagealphablending(${'tmp'.$newwidth}, false);
            imagesavealpha(${'tmp'.$newwidth},true);	
            imagecopyresampled(${'tmp'.$newwidth},$src,0,0,0,0,${'newwidth'.$newwidth},${'newheight'.$newwidth},$width,$height);	
            if($extension=="jpg" || $extension=="jpeg" )
            {	
              if(!$compression) $compression = 60;  
              imagejpeg(${'tmp'.$newwidth},$uploaddir.'/'.${'newwidth'.$newwidth}.'x'.${'newwidth'.$newwidth}.'/'.$filename,$compression);
            }else if($extension=="png")
            {
            if(!$compression) $compression = 9;
              imagepng(${'tmp'.$newwidth},$uploaddir.'/'.${'newwidth'.$newwidth}.'x'.${'newwidth'.$newwidth}.'/'.$filename,$compression);
            }	
            imagedestroy(${'tmp'.$newwidth});				  
        }				
        if($defaultimg){
          $newwidth=$width;
          $tmp=imagecreatetruecolor($newwidth,$height);
            //imageantialias($tmp,true);
            imagealphablending($tmp, false);
            imagesavealpha($tmp,true);	
            imagecopyresampled($tmp,$src,0,0,0,0,$newwidth,$height,$width,$height);	
            if($extension=="jpg" || $extension=="jpeg" )
            {	
              if(!$compression) $compression = 60;   
              imagejpeg($tmp,$uploaddir.'/'.$filename,$compression);				  
            }else if($extension=="png")
            {
              if(!$compression) $compression = 9; 
              imagepng($tmp,$uploaddir.'/'.$filename,$compression);
            }	
            imagedestroy($tmp); 	
        }
        imagedestroy($src);		 
  } 



//  logout functions

function mi_logout(){
  if(isset($_GET['action']) && !empty($_GET['action'])){
    if($_GET['action'] === 'logout'){
      unset($_COOKIE['miadmin_login']);
      setcookie('miadmin_login', '', time() + (86400 * 1), "/");
      header("Location:".ADMIN_URL.'login/?loggedout=true');
    }
  }
}

function page_title (){
  echo (isset($_GET['post_type'])? ucfirst($_GET['post_type']):'Post');
}

function page_slug_tilte (){
  $title = (isset($_GET['post_type'])? $_GET['post_type']:'post');
  $string = trim(preg_replace('/s+/', ' ', $title));

  $result =  explode(" ", $title);

  $newstring = implode('-', $result);
  echo '&post_type='.$newstring;
}


function setting($params){
global $db;
$sql = 'SELECT option_value FROM options WHERE option_name=:params LIMIT 1';
$statement = $db->prepare($sql);
$statement->execute([':params'=>$params]);
return $statement->fetch()['option_value'];
}
function get_user_meta($id,$key){
global $db;
$sql = 'SELECT meta_value FROM usermeta WHERE user_id =:id AND meta_key =:key';
$statement = $db->prepare($sql);
$statement->execute([':id'=>$id,':key'=>$key]);
// $statement->debugDumpParams();
return $statement->fetch()['meta_value'];
}
function get_term_meta($id,$key){
global $db;
$sql = 'SELECT meta_value FROM termmeta WHERE term_id =:id AND meta_key =:key';
$statement = $db->prepare($sql);
$statement->execute([':id'=>$id,':key'=>$key]);
// $statement->debugDumpParams();
return $statement->fetch()['meta_value'];
}


function createSlug($slug){
 $lettersNumbersSpacesHypens = '/[^\-\s\pN\pL]+/u';
 $spacesDuplicateHypens = '/[\-\s]+/';
 $slug = preg_replace($lettersNumbersSpacesHypens,'',mb_strtolower($slug));
 $slug = preg_replace($spacesDuplicateHypens,'-',$slug);
 return $slug;
}

