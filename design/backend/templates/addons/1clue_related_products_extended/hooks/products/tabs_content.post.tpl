<div class="hidden" id="content_related_products">

{if $addons.1clue_related_products_extended.related_filling == 'manual'}
	{include file="pickers/products/picker.tpl" positions="" input_name="related" data_id="added_products" item_ids=$related type="links"}

{else}
	{assign var=tags value=","|implode:$product_data.1c_tags}

	{include file="common/subheader.tpl" title=__('product_tags')}
	<input type="text" name="product_data[1c_tags]" value="{$tags}" class="input-text-long" />

	{include file="common/subheader.tpl" title=__('tag_related')}
	{if $related}
	<table cellpadding="0" cellspacing="0" border="0" width="100%" class="table">
	<tr>
		<th width="70%">{__('name')}</th>
		<th>{__('1c_tags')}</th>
	</tr>
	<tbody id="{$data_id}">
	{foreach from=$related item="product" name="items"}
	<tr>
		<td><a href="{"products.update?product_id=`$product.product_id`"|fn_url}" class="strong">{$product.product_id|fn_get_product_name|unescape}</td>
		<td>{$product.tags|truncate:80}</td>
	</tr>
	{/foreach}
	</tbody>
	</table>
	{else}
	{__('no_related_found')}
	{/if}
{/if}
</div>
