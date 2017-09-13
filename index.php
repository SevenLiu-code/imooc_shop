<?php
    header('Content-type:text/html;charset=utf-8');
    echo "PHP";
//     var_dump( is_file('./index.php') );
//     var_dump( filesize('./index.php') );
//     var_dump( setcookie( 'userName', 'liubin', time()+360 ) );
//     var_dump( setcookie( 'member[name]', '刘彬', time()+360 ) );
//     var_dump( setcookie( 'member[email]', '752791962@qq.com', time()+360) );
//     var_dump($id = uniqid( rand( 1000, 9999 ).'_' ));  
//     var_dump(setcookie( $id, 'liubin_php', time() + 360 ));
        session_start();
        $_SESSION['name'] = 'Liubin';
        $_SESSION['email'] = '752791962@qq.com';
        