{if $override_box}
        {assign var="elm_name" value="override_products_data[`$field`]"}
    {else}
        {assign var="elm_name" value="products_data[`$product.product_id`][`$field`]"}
    {/if}
    {if $product.product_id}
        {assign var="result_id" value="field_`$field`_`$product.product_id`_"}
    {else}
        {assign var="result_id" value="field_`$field`_0_"}
    {/if}
    <input type="hidden" name="{$elm_name}" id="{$result_id}" value="{$product.$field}" {if $override_box}disabled="disabled"{/if} />
    {include file="common/ajax_select_object.tpl" data_url="companies.get_companies_list" text=$product.$field|fn_get_company_name result_elm=$result_id id="prod_`$product.product_id`"}
