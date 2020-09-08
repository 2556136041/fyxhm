<?PHP

//send_mail
import('Com.Email.PHPMailer');
import('Com.Email.SMTP');
function send_mail($title, $content, $to ,$attachment = '') {
    $mail = new PHPMailer ();
    $mail->CharSet = 'utf-8'; // 设置采用gb2312中文编码
    $mail->IsSMTP ( 'smtp' ); // 设置采用SMTP方式发送邮件
    $mail->Host = "smtp.qq.com"; // 设置邮件服务器的地址
    $mail->Port = 25; // 设置邮件服务器的端口，默认为25
    // 设置发件人的邮箱地址 2556136041@qq.com  wsndwr@126.com
    $mail->From = '2556136041@qq.com'; 
    $mail->FromName = "福逸轩红木网站"; // 设置发件人的姓名
    $mail->SMTPAuth = true; // 设置SMTP是否需要密码验证，true表示需要
    // 设置发送邮件的邮箱  2556136041@qq.com  wsndwr@126.com
    $mail->Username = "2556136041@qq.com"; 
    // 设置邮箱的密码 2556136041@qq.com =>vifffoquubqgdjgd;wsndwr@126.com => wxl999999
    $mail->Password = "zxomxhypgjxyecdb"; // 设置邮箱的密码
    $mail->Subject = $title; // 设置邮件的标题
    $mail->AltBody = "text/html"; // optional, comment out and test
    $mail->Body = $content; // 设置邮件内容
    $mail->IsHTML ( true ); // 设置内容是否为html类型
    $mail->WordWrap = 50; // 设置每行的字符数
    $mail->AddReplyTo ( "地址", "名字" ); // 设置回复的收件人的地址
    $mail->AddAddress ( $to, "" ); // 设置收件的地址
    
    if ($attachment != '') {
        $mail->AddAttachment ( $attachment, $attachment );
    }
    if ($mail->Send ()) {
        //$status1 = "$to" . '  已投送成功<br />';
        $status = 1;
 
    } else {
        //$status2 = "$to" . '  发送邮件失败<br />';
        $status = 0;
    }
    return $status;
    
}

function getpage($count, $pagesize = 10) {
    $page = new Think\Page($count, $pagesize);
    $page->setConfig('header', '<li class="rows">共<b>%TOTAL_ROW%</b>条记录 第<b>%NOW_PAGE%</b>页/共<b>%TOTAL_PAGE%</b>页</li>');
    $page->setConfig('prev', '上一页');
    $page->setConfig('next', '下一页');
    $page->setConfig('last', '末页');
    $page->setConfig('first', '首页');
    //$page->setConfig('theme', '%HEADER%%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
	$page->setConfig('theme', '%FIRST%%UP_PAGE%%LINK_PAGE%%DOWN_PAGE%%END%');
    //$page->lastSuffix = false;//最后一页不显示为总页数
    return $page;
}


function test_input($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}






?>