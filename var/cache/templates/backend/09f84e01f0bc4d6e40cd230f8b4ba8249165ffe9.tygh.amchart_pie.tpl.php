<?php /* Smarty version Smarty-3.1.18, created on 2015-09-17 17:02:37
         compiled from "/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/sales_reports/components/amchart_pie.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139078407955fa81addce484-73962814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '09f84e01f0bc4d6e40cd230f8b4ba8249165ffe9' =>
    array (
      0 => '/opt/lampp/htdocs/sportslinkshop/design/backend/templates/views/sales_reports/components/amchart_pie.tpl',
      1 => 1441256937,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '139078407955fa81addce484-73962814',
  'function' =>
  array (
  ),
  'variables' =>
  array (
    'chart_id' => 0,
    'chart_data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55fa81addf9e87_18109953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55fa81addf9e87_18109953')) {function content_55fa81addf9e87_18109953($_smarty_tpl) {?><div id="chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie" style="width: 100%; height: 410px;"></div>
<script type="text/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.tab.show', function(){
            var chart = new AmCharts.AmPieChart();
            var legend = new AmCharts.AmLegend();
            legend.align = "center",
            legend.borderAlpha = 1,
            legend.borderColor = "#ddd",
            legend.marginLeft = 100,
            legend.marginRight = 100,
            legend.autoMargins = false,
            chart.addLegend(legend);
            chart.titleField = "label";
            chart.valueField = "count";
            chart.outlineColor = "#FFFFFF";
            chart.outlineAlpha = 0.8;
            chart.outlineThickness = 2;
            chart.balloonText = "[[title]]<br><span style='font-size:14px'><b>[[value]]</b> ([[percents]]%)</span>";
            chart.height = '100%';
            chart.dataProvider = <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
;
            // this makes the chart 3D
            chart.depth3D = 15;
            chart.angle = 30;

            chart.write("chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_pie");
        });
    }(Tygh, Tygh.$));
</script>
<?php }} ?>
