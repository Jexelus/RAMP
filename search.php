<?php 
// define(/*по смыслу подставляем херню из sql*/'DB_HOST', 'localhost');
// define(/*по смыслу подставляем херню из sql*/'DB_USER', 'имя пользователя бд');
// define(/*по смыслу подставляем херню из sql*/'DB_PASS', 'пароль');
// define(/*по смыслу подставляем херню из sql*/'DB_NAME', 'имя базы данных');

// if (!mysql_connect(/*по смыслу подставляем херню из sql*/DB_HOST, DB_USER, DB_PASS)) {
//     exit('Cannot connect to server');
// }
// if (!mysql_select_db(/*по смыслу подставляем херню из sql*/DB_NAME)) {
//     exit('Cannot select database');
// }
require_once "config.php";

mysql_query('SET NAMES utf8');

function search ($query) 
{ 
    $query = trim($query); 
    $query = mysql_real_escape_string($query);
    $query = htmlspecialchars($query);

    if (!empty($query)) 
    { 
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else { 
            $q = "SELECT `name`, `id` FROM `users` WHERE `name` LIKE '%$query%'
                  OR `title` LIKE '%$query%' OR `meta_k` LIKE '%$query%'
                  OR `meta_d` LIKE '%$query%'";

            $result = mysql_query($q);

            if (mysql_affected_rows() > 0) { 
                $row = mysql_fetch_assoc($result); 
                $num = mysql_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do {
                    
                    $q1 = "SELECT `link` FROM `users` WHERE `id` = '$row[page_id]'";
                    $result1 = mysql_query($q1);

                    if (mysql_affected_rows() > 0) {
                        $row1 = mysql_fetch_assoc($result1);
                    }

                    $text .=`users` '<p><a> href="'.$row1['link'].'/'.$row['category'].'/'.$row['uniq_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';

                } while ($row = mysql_fetch_assoc($result)); 
            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        } 
    } else {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text; 
} 
?>
<?php 
if (!empty($_POST['query'])) { 
    $search_result = search ($_POST['query']); 
    echo $search_result; 
}
?>