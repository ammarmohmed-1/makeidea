<?php
if (isset($_POST["send"])) {
    $first_name = filter_var($_POST["first_name"], FILTER_SANITIZE_STRING);
    $last_name = filter_var($_POST["last_name"], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $massage = filter_var($_POST["massage"], FILTER_SANITIZE_STRING);
    $errors = [];


        # the condition in data base
        if(empty($first_name) || empty($last_name) || empty($email) || empty($massage)){
            $errors[] = "<div class=\"massage massage_filed\"> <h3>يجب ملء البيانات</h3></div>";
            
        }
        elseif(strlen($massage) < 50){
            $errors[] = "<div class=\"massage massage_filed\"><h3>هذه الرساله قصيرة للغاية</h3></div>";;
        }

            # if user make everything right
            if(empty($errors)){
                $errors[] = "<div class=\"massage massage_sucss\"> <h3>لقد تم ارسال رسالتك بنجاح</h3></div>";
                # if every thing is very right send the telegram massage
                $the_text = "Name: $first_name $last_name \n Email: $email \n Message: $massage";
                $chatBot_id = "chat_id=6032778299";
                $token = "bot6614379420:AAHIq9CNPbqHXuprjd6udGP18fZ1pcqXXGc";
                $url = "https://api.telegram.org/$token/sendMessage?parse_mode=HTML&text=" . urlencode($the_text) . "&$chatBot_id";
                $go_url = curl_init($url);
                curl_setopt($go_url, CURLOPT_POST, true);
                curl_setopt($go_url, CURLOPT_POSTFIELDS, $url);
                curl_setopt($go_url, CURLOPT_RETURNTRANSFER, true);
                $result = curl_exec($go_url);
                curl_close($go_url);
                
            
        }
}
?>