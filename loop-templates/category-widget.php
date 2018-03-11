<?php
    $potentialImgHostPaths = array("https://www.roaminglove.com/wp-content/uploads/", "http://127.0.0.1:7000/wp-content/uploads/","http://roaminglove.wpengine.com/wp-content/uploads/","https://roaminglove.wpengine.com/wp-content/uploads/");
    $ogImgSrc = $child->description;
    $imgsrc = str_replace($potentialImgHostPaths,'https://roaminglove.imgix.net/', $ogImgSrc);
?>

<a class="locationWidget" href="<?php echo esc_url( $category_link ); ?>">
    <img class="lazy" data-original="<?php echo $imgsrc ?>?w=249&h=249&fit=crop&crop=entropy&auto=compress,format"  width="249" height="249">
    <h6><div><span><?php echo $child->name; ?></span></div></h6>
    <!-- <div>Post Count:<?php echo $child->count; ?></div> -->
</a>

