<div class="control-group">
    <input type="hidden" name="supplier_id" id="supplier_id" value="{$search.supplier_id|default:''}" />
    {include file="common/ajax_select_object.tpl" label=__("search_by_supplier") data_url="suppliers.get_suppliers_list?show_all=Y&search=Y" text=$search.supplier_id|fn_get_supplier_name result_elm="supplier_id" id="company_id_selector"}
</div>
