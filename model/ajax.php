<?php 
    header('Content-Type: text/html; charset=utf-8'); 
    $data = json_decode(file_get_contents("php://input"), true);
    $msgemail = $data['msgemail'];
    $msgphone = $data['msgphone'];
    $msgcontent = $data['msgcontent'];
    
    $con = mysqli_connect('localhost', 'jooninim', 'jjhpassw0rd', 'jooninim');
    
    $sql = "INSERT INTO pf_message SET
            pf_id = '".time()."', 
            pf_email = '".$msgemail."', 
            pf_phone = '".$msgphone."', 
            pf_content = '".$msgcontent."' ";
    $result = mysqli_query($con, $sql);
    if($result === false){
        echo $sql;
    }
    echo $msgcontent;
?>