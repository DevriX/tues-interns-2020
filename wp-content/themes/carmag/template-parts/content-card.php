<?php
/**
 * Template part for displaying vehicle card.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package CarMag
 */

?>

<?php
$name = get_query_var('name');
$price = get_query_var('price');
$url = get_query_var('url');
$image = get_query_var('image');
?>
<div class="card" style="background-image: url('<?php echo $image ?>')">
    <div class="card-info">
        <p class="info-title"><?php echo $name ?></p>
        <p class="info-price">$<?php echo $price ?></p>
        <a href="<?php echo $url ?>" class="button info-readmore">
            <span>Read more</span>
            <i class="fas fa-long-arrow-alt-right"></i>
        </a>
    </div>
</div>
