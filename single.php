<?php

get_header()

?>

<?php
    the_post();
    the_title("<h1>", "</h1>");
    echo get_the_date('Y-m-d');
    echo  "<a href='". get_author_posts_url(get_the_author_meta('ID')) ."'>".get_the_author()."</a>";
    the_content();
    echo '分页开始<br />';
    wp_link_pages();
    echo '分页结束<br />';
?>

<?php

get_footer()

?>
