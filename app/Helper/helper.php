<?php 

use Pusher\Pusher;
use Twilio\Rest\Client;
use App\Models\User;
use App\Models\Plan;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

if (! function_exists('gs')) {
    function gs($data) {
        echo '<pre>'; print_r($data); die;
    }
}



if (! function_exists('getSettings')) {
    function getSettings($slug=null){
        $settings   =   null;
        if(!empty($slug)){
            $settingContent     =   \App\Models\GlobalSetting::where('slug',$slug)->first();
            if(!empty($settingContent)) $settings   =   $settingContent->value;
        } else {
           $settings   =    \App\Models\GlobalSetting::get();
        }
        return $settings;
    }

}

/** Custom Pagination Functions Start **/
if (!function_exists('getUrlParams')) {
    function getUrlParams(){
        $requestParams  =   request()->query();
        $queryParams    = "";
        // $requestParams  =   request()->except('page','order','orderBy');
        // $queryParams    =   "?order=";
        // $queryParams    .=  (request()->order && request()->order == 'asc')? 'desc' : 'asc';
        if(!empty($requestParams)){ 
            $queryParams .= "?".http_build_query($requestParams,'','&'); 
            $queryParams = urldecode($queryParams);
            return $queryParams;
        }else{
            return "";
        }
    }
}

if (!function_exists('sortableColumn')) {
    function sortableColumn($base_url,$column_key,$column_name,$sorting=true){
        if($sorting){
            $requestParams  =   request()->except('page','order','orderBy');
            $queryParams    =   "?order=";
            $queryParams    .=  (request()->order)? ((request()->order && request()->order == 'asc')? 'desc' : 'asc') : 'asc';
            if(!empty($requestParams)){ $queryParams .= "&".http_build_query($requestParams,'','&'); }
            $queryParams    .=  (request()->page)? '&page='.request()->page : '';
            if(!request()->orderBy){
                $orderFa        =   ($column_key == "id")? 'fa-sort-desc' : 'fa-sort';
            }else{
                $orderFa        =   (request()->orderBy && request()->orderBy == $column_key)? ( (request()->order && request()->order == 'asc')? 'fa-sort-asc' : 'fa-sort-desc' ) : 'fa-sort';
            }
            $orderFa        =   ' <i class="fa '.$orderFa.'"></i>';
            $url            =   url($base_url.$queryParams.'&orderBy='.$column_key);
        }else{
            $url            =   'javascript:void(0);';
            $orderFa        =   '';
        }
        $anchor         =   '<a href="'.$url.'" class="sortable_anchor">'.$column_name.$orderFa.'</a>';
        return $anchor;
    }
}
/** Custom Pagination Functions End **/


if (!function_exists('title_case')) {
   
    function title_case($title)
    {
        return \Illuminate\Support\Str::title($title);
 
    }
}



/* International Mobile Number Script Start */
if (!function_exists('mobileIntlNumberScript')) {
    function mobileIntlNumberScript($field_id = "phone_number"){ ?>
        <link rel="stylesheet" type="text/css" href="<?php echo url('public/common/intl_input_new/build/css/intlTelInput.css') ?>">
        <script type="text/javascript" src="<?php echo url('public/common/intl_input_new/build/js/intlTelInput-jquery.js') ?>"></script>
        <script type="text/javascript" src="<?php echo url('public/common/intl_input_new/build/js/intlTelInput.js') ?>"></script>
        <script type="text/javascript">
            $(document).ready(function(){
                var field_id    =   "<?php echo $field_id; ?>"
                setTimeout(() => {
                    $(".intl_mobile_number").intlTelInput({
                        autoHideDialCode: true,
                        // numberType: "MOBILE",
                        allowDropdown: true,
                        // autoPlaceholder: "off",
                        separateDialCode: true,
                        responsiveDropdown: true,
                        nationalMode: true,
                        formatOnDisplay: false,
                        hiddenInput: field_id,
                        // defaultCountry: "ca",
                        initialCountry: "ph",
                        geoIpLookup: function(success, failure) {
                            $.get("//ipinfo.io", function() {}, "jsonp").always(function(resp) {
                                var countryCode = (resp && resp.country) ? resp.country : "";
                                // success(countryCode);
                                console.log(countryCode);
                            });
                        },
                        utilsScript: "<?php echo url('public/common/intl_input_new/build/js/utils.js') ?>",
                    });
                }, 1000);
                $(".intl_mobile_number").on("countrychange",function(e){
                    var fullnumber = $(this).val();
                    var dialCode = $(".intl_mobile_number").intlTelInput("getSelectedCountryData").dialCode;
                    var number = $(".intl_mobile_number").intlTelInput("getNumber");
                    $("input[type='hidden'][name='phone']").val(number);
                    $("input[type='hidden'][name='mobile_number']").val(fullnumber);
                    $("input[type='hidden'][name='country_code']").val(dialCode);
                });
                $("#"+field_id).on("blur, keyup, change",function(e){
                    var fullnumber = $(this).val();
                    console.log(fullnumber);
                    var dialCode = $(".intl_mobile_number").intlTelInput("getSelectedCountryData").dialCode;
                    var number = $(".intl_mobile_number").intlTelInput("getNumber");
                    console.log(number);
                    $("input[type='hidden'][name='phone']").val(number);
                    $("input[type='hidden'][name='mobile_number']").val(fullnumber);
                    $("input[type='hidden'][name='country_code']").val(dialCode);
                });
            });

        </script> <?php
    }
}
/* International Mobile Number Script End */



/** Emoji Check in string start **/
if (!function_exists('has_emojis_old')) {

    function has_emojis_old( $string ) {
        preg_match( '/[\x{1F600}-\x{1F64F}]/u', $string, $matches_emo );
        return !empty( $matches_emo[0] ) ? true : false;
    }
}
/** Emoji Check in string end **/

/** Add 3 dots Check in string start **/
function add3dots($string, $repl, $limit) 
{
  if(strlen($string) > $limit) 
  {
    return substr($string, 0, $limit) . $repl; 
  }
  else 
  {
    return $string;
  }
}



function twilioSms( $to='',$msg=''){

    $sid    =  env('TWILIO_ACCOUNT_SID'); // live
    $token  =   env('TWILIO_ACCOUNT_TOKEN'); //live
    $from   =   '+13392175602';
    $to     =   $to;
    $body   =   $msg;
    $uri    =   'https://api.twilio.com/2010-04-01/Accounts/' . $sid . '/SMS/Messages';
    $auth   =   $sid . ':' . $token;
    // post string (phone number format= +15554443333 ), case matters
    $fields = 
    '&To=' .  urlencode( $to ) . 
    '&From=' . urlencode( $from ) . 
    '&Body=' . urlencode( $body );
    // start cURL
    $res    =   curl_init();
    // set cURL options
    curl_setopt( $res, CURLOPT_URL, $uri );
    curl_setopt( $res, CURLOPT_POST, 3 ); // number of fields
    curl_setopt( $res, CURLOPT_POSTFIELDS, $fields );
    curl_setopt( $res, CURLOPT_USERPWD, $auth ); // authenticate
    curl_setopt( $res, CURLOPT_RETURNTRANSFER, true ); // don't echo
    // send cURL
    $result =   curl_exec( $res );
    $result =   json_encode($result);

    return $result;
}



function getCategoryName($user_id){
    $data = Category::where('id', $user_id)->first();
    if($data){
        return $data->name;
    }
    return null;
}

function fullName($user_id){
    $data = User::where('id', $user_id)->first();
    if($data){
        return ucwords("{$data->first_name} {$data->last_name}");
    }
    return null;
}

function userInfo($user_id){
    $data = User::where('id', $user_id)->first();
     if($data){
        return $data;
    }else{
        return null;
    }  
}

function userImage($user_id){
    $data = User::where('id', $user_id)->first();
     if($data->image){
        return 'users/thumbnail_image/'.$data->image;
    }else{
        return 'dummy_user.png';
    }  
}


function diffHumanTime($created){
    $now = Carbon::now();
   // echo '<pre>'; print_r($created);
    $difference = \Carbon\Carbon::parse($created)->diff($now)->days;

    //echo '<pre>'; print_r($difference); die;

    switch ($difference) {
      case $difference < 1 :
        $date = Carbon::parse($created)->diffForhumans();
        break;
      case $difference < 7:
        $date  = Carbon::parse($created)->timezone(Auth::user()->timezone)->format('D, \\a\\t g:i A');     
        break;
      default:
        $date  = Carbon::parse($created)->timezone(Auth::user()->timezone)->format('d M \\a\\t g:i A');   
    }

    return $date; 
}


if (! function_exists('calculateAge')) {
    function calculateAge($data) {
        
        $dbDate = \Carbon\Carbon::parse($data);
        $diffYears = \Carbon\Carbon::now()->diffInYears($dbDate);

        return $diffYears; 
    }
}


