
<?php

get_header()

?>

<!--    文章主循环-->
<?php

while(have_posts()) {
    the_post();
    echo "<div class='list'>";
    the_title("<h1><a href='". get_permalink() ."'>", "</a></h1>");
    the_excerpt();
    echo "<div class='date-line'><span>" .
        get_the_date('Y-m-d') . " " .
        get_the_author() .
        "</span>
        <span>查看详情</span>
    </div>";
    echo "</div>";
}

?>

<!--首页分页-->
<?php

the_posts_pagination(array(
    'mid_size' => 2,
    'prev_text' => '上一页',
    'next_text' => '下一页'
));

?>

<?php

get_footer()

?>
