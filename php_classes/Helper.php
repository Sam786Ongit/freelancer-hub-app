<?php 
include_once($_SERVER['DOCUMENT_ROOT'].'/freelancer/'."common_includes/autoload.php");
class Helper{
    static function redirect($url){
        header("Location: $url");
    }
    static function redirectBack(){
        //echo $_SERVER['HTTP_REFERER'];
        header("Location:  javascript:history.go(-1)");
        //header("Location:  {$_SERVER['HTTP_REFERER']}");
    }
   
    static function manipulateArray(array $keys_array,array $values_array,array $keys_to_be_changed, array $new_values){
        foreach($keys_to_be_changed as $index=>$key){
            if(in_array($key,$keys_array))
            $position = array_search($key,$keys_array); //returns the position of the key whose value should be changed
            $values_array[$position] = $new_values[$index];
        }
        return $manipulated_values_array = $values_array;
    }

    static function rewriteArray(array $array, array $values_to_be_changed){
       foreach($values_to_be_changed as $key => $value)
       {
           foreach($array as $index => $element){
               if($element == $key){
                   $array[$index] = $value;
               }
           }
           return $array;
       }
    }

    static function removeValuesFromArray(array $array,array $values_to_remove){
        $array = array_diff($array,$values_to_remove);
        foreach($array as $ar){
            $new_array[] = $ar;
        }
        return $new_array;
    }
    static function sendNotification($note_array,$path){
        NotificationEngine::setPageNotifications("page_notification",$note_array);
        self::redirect($path);
        return;
    }
    
    static function printErrorBlock(){
          echo "<div style='background:black;height:30px'></div><br><br><br></div>";
    }
    static function display($array,$heading){
        echo "<h3>$heading</h3>";
        foreach($array as $ar){
            if(is_array($ar))
            print_r($ar);
            else
            echo $ar;
            echo "<div style='background:black;height:30px'></div><br><br><br></div>";
        }
  }
}

?>