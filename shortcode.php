<?php
////////////////////////////
// 1. SECTION
// usage: [section container="" name="" calss="" id=""][/section]
////////////////////////////

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


////////////////////////////
// 2. INFO BOX
// usage: [infobox container="" name="" calss="" id=""][/infobox]
////////////////////////////

function infoBox($options=array(), $content = null) {

    $defaults=shortcode_atts(array(
        'name' => '',
        'id' => '',
        'class' => ''
    ), $options);
    ob_start(); ?>
    <div
        <?php echo $options['id']!='' ? 'id='.$options['id'] : ''; ?>
        <?php echo $options['class']!='' ? 'class='.$options['class'] : ''; ?>
        <?php echo $options['name']!='' ? 'meta-id='.$options['name'] : ''; ?>
    >
        <?php echo $content;?>
    </div>
    <?php
    $text=ob_get_contents();
    ob_clean();
    return $text;
}
add_shortcode('infobox','infoBox');
?>
