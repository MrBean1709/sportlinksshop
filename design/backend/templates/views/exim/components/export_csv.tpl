{if $fields}{$delimiter|implode:$fields nofilter}{$eol}{/if}{foreach from=$export_data item=data}{$delimiter|implode:$data nofilter}{$eol}{/foreach}
