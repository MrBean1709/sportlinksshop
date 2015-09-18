{if $products_related}
    <p class="title-related-product">Also Available</p>
    {assign var="available_clue_products" value=array()}
    {foreach from=$products_related item="product" key="key"}
        {if $product}
            {foreach from=$product item="image_pair"}
                {if $image_pair.type == "M"}
                    {$available_clue_products[] = $image_pair}
                {/if}
            {/foreach}
        {/if}
    {/foreach}

    <div id="available_clue_products" class="{if !empty($available_clue_products) && count($available_clue_products) > 4}ty-thumbs-wrapper owl-carousel cm-image-gallery{/if} clue_related_product_wrapper">
    {foreach from=$available_clue_products item="image_pair"}
        <div class="cm-gallery-item cm-item-gallery">
            <a href="{"products.view?product_id=`$image_pair.object_id`"|fn_url}">
            {include file="common/image.tpl" no_ids=true images=$image_pair image_width=$settings.Thumbnails.product_lists_thumbnail_width image_height=$settings.Thumbnails.product_lists_thumbnail_height}
            </a>
        </div>
    {/foreach}
    </div>

<style type="text/css">
.title-related-product {
    clear: both;
    font-size: 14px;
    font-weight: bold;
    padding-top: 20px;
    text-align: left;
}
.clue_related_product_wrapper {
    clear: both;
}
.clue_related_product:hover .ty-icon-left-circle, .clue_related_product:hover .ty-icon-right-circle {
    visibility: visible
}
#available_clue_products{
    opacity: 0;
}
</style>

{script src="js/lib/owlcarousel/owl.carousel.min.js"}
<script type="text/javascript">
(function(_, $) {
    $(document).ready(function() {
        var width_clue_wrapper = $('a[id^=det_img_link_]').width();
        $('.clue_related_product_wrapper').width(width_clue_wrapper);
        $('#available_clue_products').css("opacity", 1);

        {if !empty($available_clue_products) && count($available_clue_products) > 4}
            $('#available_clue_products}').owlCarousel({
                items: 4,
                autoPlay : false,
                theme : 'clue_related_product',
                itemsDesktop : [1199,4],
                itemsDesktopSmall : [979,4],
                itemsTablet : [768,4],
                itemsMobile : [479,4],
                navigation : true,
                pagination : false,
                navigationText : ['<i class="icon-left-circle ty-icon-left-circle"></i>', '<i class="icon-right-circle ty-icon-right-circle"></i>']
            });
        {else}
            $('#available_clue_products > div').css( { width : parseInt(width_clue_wrapper / 4), float : 'left'} );
        {/if}
    });
}(Tygh, Tygh.$));
</script>
{/if}
