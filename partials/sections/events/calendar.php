<?php
/**
 * Calendar section
 * Displays full calendar
 * @package the_parenting_place
 */
?>
<?php
$calendar_type = $contents[$contents['acf_fc_layout']] ?? "monthly";
?>
<section class="card shadow">
    <div class="card-body">
        <?php
            $shortcode = "[ai1ec view='{$calendar_type}']";
            echo do_shortcode($shortcode);
        ?>
    </div>
</section>