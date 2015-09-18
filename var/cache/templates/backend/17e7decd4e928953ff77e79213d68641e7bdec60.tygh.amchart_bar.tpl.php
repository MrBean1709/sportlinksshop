<?php /* Smarty version Smarty-3.1.18, created on 2015-07-17 02:31:53
         compiled from "/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/amchart_bar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:182777103055a7f899955cf4-24731112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' =>
  array (
    '17e7decd4e928953ff77e79213d68641e7bdec60' =>
    array (
      0 => '/home/lostus/public_html/sportslinkshop/design/backend/templates/views/sales_reports/components/amchart_bar.tpl',
      1 => 1418020420,
      2 => 'tygh',
    ),
  ),
  'nocache_hash' => '182777103055a7f899955cf4-24731112',
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
  'unifunc' => 'content_55a7f8999ce217_34305444',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a7f8999ce217_34305444')) {function content_55a7f8999ce217_34305444($_smarty_tpl) {?><div id="chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_bar" style="width: 100%; height: 362px;"></div>
<script type="text/javascript">
    (function (_, $) {
        $.ceEvent('on', 'ce.tab.show', function(){
            chart = new AmCharts.AmSerialChart();
            chart.categoryField = "title";

            var categoryAxis = chart.categoryAxis;
            categoryAxis.labelRotation = 90;
            categoryAxis.dashLength = 5;
            categoryAxis.gridPosition = "start";

            var valueAxis = new AmCharts.ValueAxis();
            valueAxis.dashLength = 5;
            chart.addValueAxis(valueAxis);

            var graph = new AmCharts.AmGraph();
            graph.valueField = "value";
            graph.colorField = "color";
            graph.balloonText = "<span style='font-size:14px'>[[category]]: <b>[[value]]</b></span>";
            graph.type = "column";
            graph.lineAlpha = 0;
            graph.fillAlphas = 1;
            chart.addGraph(graph);

            var chartCursor = new AmCharts.ChartCursor();
            chartCursor.cursorAlpha = 0;
            chartCursor.zoomable = false;
            chartCursor.categoryBalloonEnabled = false;
            chart.addChartCursor(chartCursor);

            chart.dataProvider = <?php echo json_encode($_smarty_tpl->tpl_vars['chart_data']->value);?>
;
            // this makes the chart 3D
            chart.depth3D = 15;
            chart.angle = 30;

            chart.write("chartdiv_<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['chart_id']->value, ENT_QUOTES, 'UTF-8');?>
am_bar");
        });
    }(Tygh, Tygh.$));
</script>
<?php }} ?>
