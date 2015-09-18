<fieldset>

<div class="control-group">
    <label class="control-label" for="outlet_name">Outlet Name:</label>
    <div class="controls">
    <input id="outlet_name" type="text" name="shipping_data[service_params][outlet_name]" size="30" value="{$shipping.service_params.outlet_name}" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="location">Location:</label>
    <div class="controls">
    <input id="location" type="text" name="shipping_data[service_params][location]" size="30" value="{$shipping.service_params.location}" class="input-text" />
    </div>
</div>

<div class="control-group">
    <label class="control-label" for="address">Address:</label>
    <div class="controls">
    <input id="address" type="text" name="shipping_data[service_params][address]" size="30" value="{$shipping.service_params.address}" class="input-text" />
    </div>
</div>

</fieldset>
