{__("order")} #{$order_id} {__("sms_for_the_sum")} {include file="common/price.tpl" value=$total} {__("sms_order_placed")}{if $send_info} {__("payment_info")}: {$order_payment_info}{/if}{if $send_email} {__("customer_email")}: {$order_email}{/if}
