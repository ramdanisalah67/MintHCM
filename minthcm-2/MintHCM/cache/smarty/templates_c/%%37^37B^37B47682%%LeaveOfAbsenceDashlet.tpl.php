<?php /* Smarty version 2.6.31, created on 2024-04-24 15:33:22
         compiled from modules/Home/Dashlets/LeaveOfAbsenceDashlet/LeaveOfAbsenceDashlet.tpl */ ?>
<div id='calendar'></div>



<link rel="stylesheet" href="modules/Home/Dashlets/LeaveOfAbsenceDashlet/css/monthly.css">
<?php echo '

    <link href=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/fullcalendar.css\' rel=\'stylesheet\' />

    <link href=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/fullcalendar.print.css\' rel=\'stylesheet\' media=\'print\' />
    <script src=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/lib/moment.min.js\'></script>
    <script src=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/fullcalendar.js\'></script>
    <script src=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/lang-all.js\'></script>

    <script src=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/qtip/jquery.qtip.min.js\'></script>
    <link href=\'modules/Home/Dashlets/LeaveOfAbsenceDashlet/fc/qtip/jquery.qtip.min.css\' rel=\'stylesheet\' />
    <script>

        $( document ).ready( function () {

           var hiddenDays = [ ];
    '; ?>

    <?php $this->assign('show_days_of_week_i', 0); ?>
    <?php $_from = $this->_tpl_vars['show_days_of_week']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['day'] => $this->_tpl_vars['showed']):
?>
        <?php if ($this->_tpl_vars['showed'] == false): ?>
            <?php echo 'hiddenDays.push('; ?>
 <?php echo $this->_tpl_vars['show_days_of_week_i']; ?>
 <?php echo ');'; ?>

        <?php endif; ?>
        <?php $this->assign('show_days_of_week_i', $this->_tpl_vars['show_days_of_week_i']+1); ?>
    <?php endforeach; endif; unset($_from); ?>
    <?php echo '
           $( \'#calendar\' ).fullCalendar( {
              header: {
                 left: \'prev,next today\',
                 center: \'title\',
                 right: \'month,basicWeek\'
              },
              weekends: true,
              eventTextColor: \'#000\',
              lang: \''; ?>
<?php echo $this->_tpl_vars['lang']; ?>
<?php echo '\',
              aspectRatio: 2,
              editable: false,
              eventLimit: false, // allow "more" link when too many events
              events: {
                 url: \'index.php?module=Home&action=LeaveOfAbsence&sugar_body_only=1\',
                 error: function () {
                    $( \'#script-warning\' ).show();
                 }
              },
              eventRender: function ( event, element ) {
                 element.qtip( {
                    content: event.title
                 } );
              },
              firstDay: '; ?>
<?php echo $this->_tpl_vars['first_day_of_week']; ?>
<?php echo ',
              hiddenDays: hiddenDays

           } );
           if ( $( \'#dashlet_entire_'; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo '\' ).find( \'.fc-body\' ).length < 1 ) {
              setTimeout( function () {
                 SUGAR.mySugar.retrieveDashlet( \''; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo '\' )
              }, 300 );
           }
        } );

    </script>
    <style>
        #calendar {

            margin: 40px auto;
            padding: 0 10px;
        }

        div.fc.fc-ltr.fc-unthemed {
            max-width: 100%;
        }

        td.fc-day-number {
            background-color: #d8dbda;
            border-left-width: 1px;
            border-right-width: 1px;
            border-style: solid;
            border-top-width: 1px;
            border-width: 0;
            font-size: 12px;
        }

        .fc-unthemed .fc-today {
            background-color: #8f1376;
            border-style: solid;
            color: #009976;
            font-weight: bold;
        }

        div#dashlet_entire_'; ?>
<?php echo $this->_tpl_vars['id']; ?>
<?php echo ' div.fc-center h2 {
            font-size: 123.1%;
            font-weight: bold;
        }
    </style>


'; ?>