
<script>
    {literal}
    $(function () {
        var $dialog = $('<div></div>')
                .html(SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TEXT'))
                .dialog({
                    autoOpen: false,
                    title: SUGAR.language.get('app_strings', 'LBL_SEARCH_HELP_TITLE'),
                    width: 700
                });

        $('.help-search').click(function () {
            $dialog.dialog('open');
            // prevent the default action, e.g., following a link
        });

    });
    {/literal}
</script>
<div class="row">
              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='name_advanced'>{sugar_translate label='LBL_NAME' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.name_advanced.value) <= 0}
    {assign var="value" value=$fields.name_advanced.default_value }
{else}
    {assign var="value" value=$fields.name_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.name_advanced.name}' 
       id='{$fields.name_advanced.name}' size='30' 
       maxlength='255' 
       value='{$value}' title=''         accesskey='9'   
                                               >
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='group_type_advanced'>{sugar_translate label='LBL_GROUP_TYPE' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='group_type_advanced' name='group_type_advanced[]' options=$fields.group_type_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.group_type_advanced.value}
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='assigned_user_id_advanced'>{sugar_translate label='LBL_ASSIGNED_TO' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='assigned_user_id_advanced' name='assigned_user_id_advanced[]' options=$fields.assigned_user_id_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.assigned_user_id_advanced.value}
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='position_leader_name_advanced'>{sugar_translate label='LBL_POSITION_LEADER_NAME' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.position_leader_name_advanced.name}"  class="vt_search_relate_input sqsEnabled "   id="{$fields.position_leader_name_advanced.name}" size="" value="{$fields.position_leader_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.position_leader_id_advanced.name}" value="{$fields.position_leader_id_advanced.value}">
<span class="id-ff multiple">
        <button type="button" name="btn_{$fields.position_leader_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup( "{$fields.position_leader_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"position_leader_id_advanced","name":"position_leader_name_advanced"}}{/literal}, "single", true );'><span class="suitepicon suitepicon-action-select"></span></button>    <button type="button" name="btn_clr_{$fields.position_leader_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.position_leader_name_advanced.name}.value = ''; this.form.{$fields.position_leader_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
        </span>

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='parent_name_advanced'>{sugar_translate label='LBL_MEMBER_OF' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.parent_name_advanced.name}"  class="vt_search_relate_input sqsEnabled "   id="{$fields.parent_name_advanced.name}" size="" value="{$fields.parent_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.parent_id_advanced.name}" value="{$fields.parent_id_advanced.value}">
<span class="id-ff multiple">
        <button type="button" name="btn_{$fields.parent_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup( "{$fields.parent_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"parent_id_advanced","name":"parent_name_advanced"}}{/literal}, "single", true );'><span class="suitepicon suitepicon-action-select"></span></button>    <button type="button" name="btn_clr_{$fields.parent_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.parent_name_advanced.name}.value = ''; this.form.{$fields.parent_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
        </span>

                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='date_entered_advanced'>{sugar_translate label='LBL_DATE_ENTERED' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="id" value=$fields.date_entered_advanced.name }

{if isset($smarty.request.date_entered_advanced_range_choice)}
    {assign var="starting_choice" value=$smarty.request.date_entered_advanced_range_choice}
{else}
    {assign var="starting_choice" value="="}
{/if}

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
    <select id="{$id}_range_choice" name="{$id}_range_choice" onchange="{$id}_range_change( this.value );">
        {html_options options=$fields.date_entered_advanced.options selected=$starting_choice}
    </select>
</div>

<div id="{$id}_range_div" style="{if preg_match('/^\[/', $smarty.request.range_date_entered_advanced)  || $starting_choice == 'between'}display:none{else}display:''{/if};">
    <input autocomplete="off" type="text" name="range_{$id}" id="range_{$id}" value='{if empty($smarty.request.range_date_entered_advanced) && !empty($smarty.request.date_entered_advanced)}{$smarty.request.date_entered_advanced}{else}{$smarty.request.range_date_entered_advanced}{/if}' title=''   size="11" class="dateRangeInput">
        <button id="{$id}_trigger" type="button" onclick="return false;" class="btn btn-danger" {if $starting_choice == 'over_n_months_ago' || $starting_choice == 'last_n_days' || $starting_choice == 'next_n_days'}style='display: none'{/if}><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
                        <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               startWeekday: {$CALENDAR_FDOW|default:'0'},
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
        
</div>

<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
    {assign var=date_value value=$fields.date_entered_advanced.value }
    <input autocomplete="off" type="text" name="start_range_{$id}" id="start_range_{$id}" value='{$smarty.request.start_range_date_entered_advanced }' title=''  tabindex='' size="11" class="rangeDateInput">
        <button id="start_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
                        <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "start_range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "start_range_{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
     
    {$APP.LBL_AND}
    {assign var=date_value value=$fields.date_entered_advanced.value }
    <input autocomplete="off" type="text" name="end_range_{$id}" id="end_range_{$id}" value='{$smarty.request.end_range_date_entered_advanced }' title=''  tabindex='' size="11" class="dateRangeInput" maxlength="10">
        <button id="end_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" id="end_range_{$id}_trigger" alt="{$APP.LBL_ENTER_DATE}"></span></button>
                <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "end_range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "end_range_{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
     
</div>


<script type='text/javascript'>

    function {$id}_range_change( val )
    {ldelim}
           if ( val == 'between' ) {ldelim}
                     document.getElementById( "range_{$id}" ).value = '';
                     document.getElementById( "{$id}_range_div" ).style.display = 'none';
                     document.getElementById( "{$id}_between_range_div" ).style.display = '';
    {rdelim} else if ( val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than' || val == 'over_n_months_ago' || val == 'last_n_days' || val == 'next_n_days' ) {ldelim}
              if ( (/^\[.*\]$/).test( document.getElementById( "range_{$id}" ).value ) )
    {ldelim}
                 document.getElementById( "range_{$id}" ).value = '';
    {rdelim}
              document.getElementById( "start_range_{$id}" ).value = '';
              document.getElementById( "end_range_{$id}" ).value = '';
              document.getElementById( "{$id}_range_div" ).style.display = '';
              document.getElementById( "{$id}_between_range_div" ).style.display = 'none';
              document.getElementById( "range_{$id}" ).value = '';
              if ( val == 'over_n_months_ago' || val == 'last_n_days' || val == 'next_n_days' ) {ldelim}
                           document.getElementById( "{$id}_trigger" ).style.display = 'none';
    {rdelim} else {ldelim}
                 document.getElementById( "{$id}_trigger" ).style.display = '';
    {rdelim}
    {rdelim} else {ldelim}
              document.getElementById( "range_{$id}" ).value = '[' + val + ']';
              document.getElementById( "start_range_{$id}" ).value = '';
              document.getElementById( "end_range_{$id}" ).value = '';
              document.getElementById( "{$id}_range_div" ).style.display = 'none';
              document.getElementById( "{$id}_between_range_div" ).style.display = 'none';
    {rdelim}
    {rdelim}

        var {$id}_range_reset = function ()
    {ldelim}
    {$id}_range_change( '=' );
    {rdelim}

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               if ( document.getElementById( 'search_form_clear' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_clear', 'click', {$id}_range_reset );
    {rdelim}

    {rdelim} );

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               if ( document.getElementById( 'search_form_clear_advanced' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_clear_advanced', 'click', {$id}_range_reset );
    {rdelim}

    {rdelim} );

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               //register on basic search form button if it exists
               if ( document.getElementById( 'search_form_submit' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_submit', 'click',{$id}_range_validate );
    {rdelim}
           //register on advanced search submit button if it exists
           if ( document.getElementById( 'search_form_submit_advanced' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_submit_advanced', 'click',{$id}_range_validate );
    {rdelim}

    {rdelim} );

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
        function {$id}_range_validate( e ){ldelim}
               if (
                       (document.getElementById( "start_range_{$id}" ).value.length > 0 && document.getElementById( "end_range_{$id}" ).value.length == 0)
                       || (document.getElementById( "end_range_{$id}" ).value.length > 0 && document.getElementById( "start_range_{$id}" ).value.length == 0)
                       )
    {ldelim}
              e.preventDefault();
              alert( '{$APP.LBL_CHOOSE_START_AND_END_DATES}' );
              if ( document.getElementById( "start_range_{$id}" ).value.length == 0 ) {ldelim}
                           document.getElementById( "start_range_{$id}" ).focus();
    {rdelim} else {ldelim}
                 document.getElementById( "end_range_{$id}" ).focus();
    {rdelim}
    {rdelim}

    {rdelim}

</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='date_modified_advanced'>{sugar_translate label='LBL_DATE_MODIFIED' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="id" value=$fields.date_modified_advanced.name }

{if isset($smarty.request.date_modified_advanced_range_choice)}
    {assign var="starting_choice" value=$smarty.request.date_modified_advanced_range_choice}
{else}
    {assign var="starting_choice" value="="}
{/if}

<div class="clear hidden dateTimeRangeChoiceClear"></div>
<div class="dateTimeRangeChoice" style="white-space:nowrap !important;">
    <select id="{$id}_range_choice" name="{$id}_range_choice" onchange="{$id}_range_change( this.value );">
        {html_options options=$fields.date_modified_advanced.options selected=$starting_choice}
    </select>
</div>

<div id="{$id}_range_div" style="{if preg_match('/^\[/', $smarty.request.range_date_modified_advanced)  || $starting_choice == 'between'}display:none{else}display:''{/if};">
    <input autocomplete="off" type="text" name="range_{$id}" id="range_{$id}" value='{if empty($smarty.request.range_date_modified_advanced) && !empty($smarty.request.date_modified_advanced)}{$smarty.request.date_modified_advanced}{else}{$smarty.request.range_date_modified_advanced}{/if}' title=''   size="11" class="dateRangeInput">
        <button id="{$id}_trigger" type="button" onclick="return false;" class="btn btn-danger" {if $starting_choice == 'over_n_months_ago' || $starting_choice == 'last_n_days' || $starting_choice == 'next_n_days'}style='display: none'{/if}><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
                        <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               startWeekday: {$CALENDAR_FDOW|default:'0'},
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
        
</div>

<div id="{$id}_between_range_div" style="{if $starting_choice=='between'}display:'';{else}display:none;{/if}">
    {assign var=date_value value=$fields.date_modified_advanced.value }
    <input autocomplete="off" type="text" name="start_range_{$id}" id="start_range_{$id}" value='{$smarty.request.start_range_date_modified_advanced }' title=''  tabindex='' size="11" class="rangeDateInput">
        <button id="start_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" alt="{$APP.LBL_ENTER_DATE}"></span></button>
                        <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "start_range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "start_range_{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
     
    {$APP.LBL_AND}
    {assign var=date_value value=$fields.date_modified_advanced.value }
    <input autocomplete="off" type="text" name="end_range_{$id}" id="end_range_{$id}" value='{$smarty.request.end_range_date_modified_advanced }' title=''  tabindex='' size="11" class="dateRangeInput" maxlength="10">
        <button id="end_range_{$id}_trigger" type="button" onclick="return false" class="btn btn-danger"><span class="suitepicon suitepicon-module-calendar" id="end_range_{$id}_trigger" alt="{$APP.LBL_ENTER_DATE}"></span></button>
                <script type="text/javascript">
        Calendar.setup({ldelim}
               inputField: "end_range_{$id}",
               daFormat: "{$CALENDAR_FORMAT}",
               button: "end_range_{$id}_trigger",
               singleClick: true,
               dateStr: "{$date_value}",
               step: 1,
               weekNumbers: false
        {rdelim}
            );
    </script>
     
</div>


<script type='text/javascript'>

    function {$id}_range_change( val )
    {ldelim}
           if ( val == 'between' ) {ldelim}
                     document.getElementById( "range_{$id}" ).value = '';
                     document.getElementById( "{$id}_range_div" ).style.display = 'none';
                     document.getElementById( "{$id}_between_range_div" ).style.display = '';
    {rdelim} else if ( val == '=' || val == 'not_equal' || val == 'greater_than' || val == 'less_than' || val == 'over_n_months_ago' || val == 'last_n_days' || val == 'next_n_days' ) {ldelim}
              if ( (/^\[.*\]$/).test( document.getElementById( "range_{$id}" ).value ) )
    {ldelim}
                 document.getElementById( "range_{$id}" ).value = '';
    {rdelim}
              document.getElementById( "start_range_{$id}" ).value = '';
              document.getElementById( "end_range_{$id}" ).value = '';
              document.getElementById( "{$id}_range_div" ).style.display = '';
              document.getElementById( "{$id}_between_range_div" ).style.display = 'none';
              document.getElementById( "range_{$id}" ).value = '';
              if ( val == 'over_n_months_ago' || val == 'last_n_days' || val == 'next_n_days' ) {ldelim}
                           document.getElementById( "{$id}_trigger" ).style.display = 'none';
    {rdelim} else {ldelim}
                 document.getElementById( "{$id}_trigger" ).style.display = '';
    {rdelim}
    {rdelim} else {ldelim}
              document.getElementById( "range_{$id}" ).value = '[' + val + ']';
              document.getElementById( "start_range_{$id}" ).value = '';
              document.getElementById( "end_range_{$id}" ).value = '';
              document.getElementById( "{$id}_range_div" ).style.display = 'none';
              document.getElementById( "{$id}_between_range_div" ).style.display = 'none';
    {rdelim}
    {rdelim}

        var {$id}_range_reset = function ()
    {ldelim}
    {$id}_range_change( '=' );
    {rdelim}

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               if ( document.getElementById( 'search_form_clear' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_clear', 'click', {$id}_range_reset );
    {rdelim}

    {rdelim} );

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               if ( document.getElementById( 'search_form_clear_advanced' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_clear_advanced', 'click', {$id}_range_reset );
    {rdelim}

    {rdelim} );

        YAHOO.util.Event.onDOMReady( function () {ldelim}
               //register on basic search form button if it exists
               if ( document.getElementById( 'search_form_submit' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_submit', 'click',{$id}_range_validate );
    {rdelim}
           //register on advanced search submit button if it exists
           if ( document.getElementById( 'search_form_submit_advanced' ) )
    {ldelim}
              YAHOO.util.Event.addListener( 'search_form_submit_advanced', 'click',{$id}_range_validate );
    {rdelim}

    {rdelim} );

// this function is specific to range date searches and will check that both start and end date ranges have been
// filled prior to submitting search form.  It is called from the listener added above.
        function {$id}_range_validate( e ){ldelim}
               if (
                       (document.getElementById( "start_range_{$id}" ).value.length > 0 && document.getElementById( "end_range_{$id}" ).value.length == 0)
                       || (document.getElementById( "end_range_{$id}" ).value.length > 0 && document.getElementById( "start_range_{$id}" ).value.length == 0)
                       )
    {ldelim}
              e.preventDefault();
              alert( '{$APP.LBL_CHOOSE_START_AND_END_DATES}' );
              if ( document.getElementById( "start_range_{$id}" ).value.length == 0 ) {ldelim}
                           document.getElementById( "start_range_{$id}" ).focus();
    {rdelim} else {ldelim}
                 document.getElementById( "end_range_{$id}" ).focus();
    {rdelim}
    {rdelim}

    {rdelim}

</script>
                            </div>
        </div>
    </div>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
        <div class="">
            
              

            {counter assign=index}
            {math equation="left % right"
            left=$index
            right=$templateMeta.maxColumns
            assign=modVal
            }

            <div class="col-xs-12">
                                <label for='current_manager_name_advanced'>{sugar_translate label='LBL_CURRENT_MANAGER_NAME' module='SecurityGroups'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.current_manager_name_advanced.name}"  class="vt_search_relate_input sqsEnabled "   id="{$fields.current_manager_name_advanced.name}" size="" value="{$fields.current_manager_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.current_manager_id_advanced.name}" value="{$fields.current_manager_id_advanced.value}">
<span class="id-ff multiple">
        <button type="button" name="btn_{$fields.current_manager_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup( "{$fields.current_manager_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"current_manager_id_advanced","name":"current_manager_name_advanced"}}{/literal}, "single", true );'><span class="suitepicon suitepicon-action-select"></span></button>    <button type="button" name="btn_clr_{$fields.current_manager_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.current_manager_name_advanced.name}.value = ''; this.form.{$fields.current_manager_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
        </span>

                            </div>
        </div>
    </div>
    
    <div>
        <div>
            &nbsp;
        </div>
    </div>

    {if $DISPLAY_SAVED_SEARCH}
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-advanced-search">
            {if !$searchFormInPopup}
                <div>
                    <a class='tabFormAdvLink' onhover href='javascript:toggleInlineSearch()'>
                        {capture assign="alt_show_hide"}{sugar_translate label='LBL_ALT_SHOW_OPTIONS'}{/capture}
                        {sugar_getimage alt=$alt_show_hide name="advanced_search" ext=".gif" other_attributes='border="0" id="up_down_img" '}
                        &nbsp;{$APP.LNK_SAVED_VIEWS}
                    </a><br>
                    <input type='hidden' id='showSSDIV' name='showSSDIV' value='{$SHOWSSDIV}'>
                    <p>
                </div>
            {/if}
            <div class="" scope='row' width='10%' nowrap="nowrap">
                <div class="col-xs-12">
                    <label>{sugar_translate label='LBL_SAVE_SEARCH_AS' module='SavedSearch'}:</label>
                </div>
                <div class="form-item" width='30%' nowrap>
                    <input type='text' name='saved_search_name'>
                    <input type='hidden' name='search_module' value=''>
                    <input type='hidden' name='saved_search_action' value=''>
                    <input title='{$APP.LBL_SAVE_BUTTON_LABEL}' value='{$APP.LBL_SAVE_BUTTON_LABEL}' class='button'
                           type='button' name='saved_search_submit'
                           onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("save");'>
                </div>
            </div>
            <div class="hideUnusedSavedSearchElements" scope='row' width='10%'
                 nowrap="nowrap"{if !$savedSearchData.selected} style="display: none;"{/if}>
                <label>{sugar_translate label='LBL_MODIFY_CURRENT_FILTER' module='SavedSearch'}: <span
                            id='curr_search_name'>"{$savedSearchData.options[$savedSearchData.selected]}"</span></label>
            </div>
            <div class="hideUnusedSavedSearchElements" width='30%'
                 nowrap{if !$savedSearchData.selected} style="display: none;"{/if}>
                <input class='button'
                       onclick='SUGAR.savedViews.setChooser(); return SUGAR.savedViews.saved_search_action("update")'
                       value='{$APP.LBL_UPDATE}' title='{$APP.LBL_UPDATE}' name='ss_update' id='ss_update'
                       type='button'>
                <input class='button'
                       onclick='return SUGAR.savedViews.saved_search_action("delete", "{sugar_translate label='LBL_DELETE_CONFIRM' module='SavedSearch'}")'
                       value='{$APP.LBL_DELETE}' title='{$APP.LBL_DELETE}' name='ss_delete' id='ss_delete'
                       type='button'>
            </div>
        </div>
        <div>
            <div colspan='6'>
                <div{if !$searchFormInPopup} style='{$DISPLAYSS}'{/if} id='inlineSavedSearch'>
                    {$SAVED_SEARCH}
                </div>
            </div>
        </div>
    {/if}

    {if $displayType != 'popupView'}
        <div>
            <div class="submitButtonsAdvanced">
                <input tabindex='2' title='{$APP.LBL_SEARCH_BUTTON_TITLE}' onclick='SUGAR.savedViews.setChooser()'
                       class='button' type='submit' name='button' value='{$APP.LBL_SEARCH_BUTTON_LABEL}'
                       id='search_form_submit_advanced'/>&nbsp;
                <input tabindex='2' title='{$APP.LBL_CLEAR_BUTTON_TITLE}'
                       onclick='SUGAR.searchForm.clear_form(this.form); if(document.getElementById("saved_search_select")){ldelim}document.getElementById("saved_search_select").options[0].selected=true;{rdelim} return false;'
                       class='button' type='button' name='clear' id='search_form_clear_advanced'
                       value='{$APP.LBL_CLEAR_BUTTON_LABEL}'/>
                {if $DOCUMENTS_MODULE}
                    &nbsp;
                    <input title="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_TITLE}" type="button" class="button"
                           value="{$APP.LBL_BROWSE_DOCUMENTS_BUTTON_LABEL}"
                           onclick='open_popup("Documents", 600, 400, "&caller=Documents", true, false, "");'/>
                {/if}
                {if $searchFormInPopup}
                <div>
                    {/if}
                    <a id="basic_search_link" href="javascript:void(0)"
                       accesskey="{$APP.LBL_ADV_SEARCH_LNK_KEY}">{$APP.LNK_BASIC_FILTER}</a>
        <span class='white-space'>
            &nbsp;&nbsp;&nbsp;{if $SAVED_SEARCHES_OPTIONS}|&nbsp;&nbsp;&nbsp;<b>{$APP.LBL_SAVED_FILTER_SHORTCUT}</b>&nbsp;
            {$SAVED_SEARCHES_OPTIONS} {/if}
            <span id='go_btn_span' style='display:none'><input tabindex='2' title='go_select' id='go_select'
                                                               onclick='SUGAR.searchForm.clear_form(this.form);'
                                                               class='button' type='button' name='go_select'
                                                               value=' {$APP.LBL_GO_BUTTON_LABEL} '/></span>
        </span>
                    {if $searchFormInPopup}
                </div>
                {/if}
            </div>
            <div class="help">
                {if $DISPLAY_SEARCH_HELP}
                    <img border='0' src='{sugar_getimagepath file="help-dashlet.gif"}' class="help-search">
                {/if}
            </div>
        </div>
    {/if}
</div>

<script>
    {literal}
    if (typeof(loadSSL_Scripts) == 'function') {
        loadSSL_Scripts();
    }
    {/literal}
</script>
<script>
    {literal}
    $(document).ready(function () {
        $('#basic_search_link').one("click", function () {
            //alert( "This will be displayed only once." );
            SUGAR.searchForm.searchFormSelect('{/literal}{$module}{literal}|basic_search', '{/literal}{$module}{literal}|advanced_search');
        });
    });
    {/literal}
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_modified_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["modified_by_name_advanced","modified_user_id_advanced"],"required_list":["modified_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_created_by_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["created_by_name_advanced","created_by_advanced"],"required_list":["created_by"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_assigned_user_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name_advanced","assigned_user_id_advanced"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_position_leader_name_advanced']={"form":"search_form","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_leader_name_advanced","position_leader_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_parent_name_advanced']={"form":"search_form","method":"query","modules":["SecurityGroups"],"group":"or","field_list":["name","id"],"populate_list":["parent_name_advanced","parent_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_current_manager_name_advanced']={"form":"search_form","method":"query","modules":["Employees"],"group":"or","field_list":["name","id"],"populate_list":["current_manager_name_advanced","current_manager_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}