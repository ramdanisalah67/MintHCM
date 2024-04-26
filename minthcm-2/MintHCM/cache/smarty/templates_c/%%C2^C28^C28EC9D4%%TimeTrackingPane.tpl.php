<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:22
         compiled from modules/WorkSchedules/tpls/TimeTrackingPane.tpl */ ?>
<link rel="stylesheet" type="text/css" href="modules/WorkSchedules/tpls/TimeTrackingPane.css" />
<div class="TimePanel">
    <table style="width:100%;margin-top:10px;" cellspacing="0">
        <tr>
            <td class="TimePanelLeft" style="z-index:1; width: 40px;">-</td>
            <td class="TimePanelMiddle">&nbsp;</td>
            <td class="TimePanelRight" style="width: 40px;">-</td>
        </tr>
    </table>
</div>
<script type="text/javascript">
    <?php echo '
        var field_label = $( ".TimePanel" ).parent().parent().prev( \'.label\' );
        if ( field_label.length > 0 ) {
           field_label.remove();
        }
        var field_container = $( ".TimePanel" ).parent().parent( \'.col-sm-10\' );
        if ( field_container.length > 0 ) {
           field_container.addClass( \'col-sm-12\' ).removeClass( \'col-sm-10\' );
        }
        var panel_header = $( ".TimePanel" ).parent().parent().parent().parent().parent().parent().prev( \'.panel-heading\' );
        if ( panel_header.length > 0 ) {
           panel_header.remove();
        }
        var timetracking_panels_all = $( \'.TimePanel\' );
        new TimePanel( timetracking_panels_all[timetracking_panels_all.length - 1] );
    '; ?>

</script>