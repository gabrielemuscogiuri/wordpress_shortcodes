function Section($options=array(), $content = null) {

    $defaults=shortcode_atts(array(
        'name' => '',
        'id' => '',
        'class' => '',
        'container' => 'FALSE',
    ), $options);
    ob_start(); ?>
        <section
            <?php echo $options['id']!='' ? 'id='.$options['id'] : ''; ?>
            <?php echo $options['class']!='' ? 'class='.$options['class'] : ''; ?>
            <?php echo $options['name']!='' ? 'meta-id='.$options['name'] : ''; ?>
            >
            <div class=<?php echo $options['container']!='FALSE' ? 'container' : 'container-fluid';?>>
                <?php echo do_shortcode($content);?>
            </div>
        </section>
    <?php
    $text=ob_get_contents();
    ob_clean();
    return $text;
}
add_shortcode('section','Section');
