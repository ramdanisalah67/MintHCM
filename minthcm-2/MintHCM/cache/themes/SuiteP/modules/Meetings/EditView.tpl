


<script>
    {literal}
    $(document).ready(function(){
	    $("ul.clickMenu").each(function(index, node){
	        $(node).sugarActionMenu();
	    });

        if($('.edit-view-pagination').children().length == 0) $('.saveAndContinue').remove();
    });
    {/literal}
</script>
<div class="clear"></div>
<form action="index.php" method="POST" name="{$form_name}" id="{$form_id}" {$enctype}>
<div class="edit-view-pagination-mobile-container">
<div class="edit-view-pagination edit-view-mobile-pagination">
{$PAGINATION}
</div>
</div>
<table width="100%" cellpadding="0" cellspacing="0" border="0" class="dcQuickEdit">
<tr>
<td class="buttons">
<input type="hidden" id="module" name="module" value="{$module}">
{if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}
<input type="hidden" id="record" name="record" value="">
<input type="hidden" name="duplicateSave" value="true">
<input type="hidden" name="duplicateId" value="{$fields.id.value}">
{else}
<input type="hidden" id="record" name="record" value="{$fields.id.value}">
{/if}
<input type="hidden" name="isDuplicate" value="false">
<input type="hidden" name="action">
<input type="hidden" name="return_module" value="{$smarty.request.return_module}">
<input type="hidden" name="return_action" value="{$smarty.request.return_action}">
<input type="hidden" name="return_id" value="{$smarty.request.return_id}">
<input type="hidden" name="module_tab"> 
<input type="hidden" name="contact_role">
{if (!empty($smarty.request.return_module) || !empty($smarty.request.relate_to)) && !(isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true")}
<input type="hidden" name="relate_to" value="{if $smarty.request.return_relationship}{$smarty.request.return_relationship}{elseif $smarty.request.relate_to && empty($smarty.request.from_dcmenu)}{$smarty.request.relate_to}{elseif empty($isDCForm) && empty($smarty.request.from_dcmenu)}{$smarty.request.return_module}{/if}">
<input type="hidden" name="relate_id" value="{$smarty.request.return_id}">
{/if}
<input type="hidden" name="offset" value="{$offset}">
{assign var='place' value="_HEADER"} <!-- to be used for id for buttons with custom code in def files-->
<input type="hidden" name="isSaveAndNew" value="false">   
<input type="hidden" name="candidate_invitees">   
<input type="hidden" name="resource_invitees">   

{if empty($smarty.request.minthcm_popup)}

<div class="buttons">
<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.meetings.fill_invitees();document.EditView.action.value='Save'; document.EditView.return_action.value='DetailView'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=''; {/if} formSubmitCheck();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}"/>
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Meetings'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="save_and_send_invites_header" class="button" onclick="document.EditView.send_invites.value='1';SUGAR.meetings.fill_invitees();document.EditView.action.value='Save';document.EditView.return_action.value='EditView';document.EditView.return_module.value='{$smarty.request.return_module}'; formSubmitCheck();" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}"/>
{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="close_and_create_new_header" class="button" onclick="SUGAR.meetings.fill_invitees(); document.EditView.status.value='Held'; document.EditView.action.value='Save'; document.EditView.return_module.value='Meetings'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value='EditView'; document.EditView.return_id.value='{$fields.id.value}'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}"/>{/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Meetings", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
{/if}

</td>
<td align='right' class="edit-view-pagination-desktop-container">
<div class="edit-view-pagination edit-view-pagination-desktop">
{$PAGINATION}
</div>
</td>
</tr>
</table>
<input type="hidden" name="send_invites">
<input type="hidden" name="user_invitees">
<input type="hidden" name="contact_invitees">
<input type="hidden" name="lead_invitees">
{sugar_include include=$includes}
<div id="EditView_tabs">

<ul class="nav nav-tabs">
</ul>
<div class="clearfix"></div>
<div class="tab-content" style="padding: 0; border: 0;">

<div class="tab-pane panel-collapse">&nbsp;</div>
</div>

<div class="panel-content">
<div>&nbsp;</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_MEETING_INFORMATION' module='Meetings'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_-1" data-id="LBL_MEETING_INFORMATION">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_SUBJECT">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_SUBJECT' module='Meetings'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="name" field="name"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.name.value) <= 0}
{assign var="value" value=$fields.name.default_value }
{else}
{assign var="value" value=$fields.name.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.name.name}' 
id='{$fields.name.name}' size='30' 
maxlength='255' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}status{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_STATUS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_STATUS' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="ColoredActivityStatus" field="status"  >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''       
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.status.options }
{capture name="field_val"}{$fields.status.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.status.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.status.name}" 
id="{$fields.status.name}" 
title=''          
>
{if isset($fields.status.value) && $fields.status.value != ''}
{html_options options=$fields.status.options selected=$fields.status.value}
{else}
{html_options options=$fields.status.options selected=$fields.status.default}
{/if}
</select>
<input
id="{$fields.status.name}-input"
name="{$fields.status.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.status.name}-image"></button><button type="button"
id="btn-clear-{$fields.status.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.status.name}-input', '{$fields.status.name}');sync_{$fields.status.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
	{/literal}

			{literal}
		(function (){
			var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
			
			if (typeof select_defaults =="undefined")
				select_defaults = [];
			
			select_defaults[selectElem.id] = {key:selectElem.value,text:''};

			//get default
			for (i=0;i<selectElem.options.length;i++){
				if (selectElem.options[i].value==selectElem.value)
					select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
			}

			//SUGAR.AutoComplete.{$ac_key}.ds = 
			//get options array from vardefs
			var options = SUGAR.AutoComplete.getOptionsArray("");

			YUI().use('datasource', 'datasource-jsonschema',function (Y) {
				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
				    source: function (request) {
				    	var ret = [];
				    	for (i=0;i<selectElem.options.length;i++)
				    		if (!(selectElem.options[i].value=='' && selectElem.options[i].innerHTML==''))
				    			ret.push({'key':selectElem.options[i].value,'text':selectElem.options[i].innerHTML});
				    	return ret;
				    }
				});
			});
		})();
		{/literal}
	
	{literal}
		YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node","node-event-simulate", function (Y) {
	{/literal}
			
	SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.status.name}-input');
	SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.status.name}-image');
	SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.status.name}');
	
			{literal}
			function SyncToHidden(selectme){
				var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
				var doSimulateChange = false;
				
				if (selectElem.value!=selectme)
					doSimulateChange=true;
				
				selectElem.value=selectme;

				for (i=0;i<selectElem.options.length;i++){
					selectElem.options[i].selected=false;
					if (selectElem.options[i].value==selectme)
						selectElem.options[i].selected=true;
				}

				if (doSimulateChange)
					SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
			}

			//global variable 
			sync_{/literal}{$fields.status.name}{literal} = function(){
				SyncToHidden();
			}
			function syncFromHiddenToWidget(){

				var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");

				//if select no longer on page, kill timer
				if (selectElem==null || selectElem.options == null)
					return;

				var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');

				SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');

				for (i=0;i<selectElem.options.length;i++){

					if (selectElem.options[i].value==selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.status.name}-input{literal}'))
						SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value',selectElem.options[i].innerHTML);
				}
			}

            YAHOO.util.Event.onAvailable("{/literal}{$fields.status.name}{literal}", syncFromHiddenToWidget);
		{/literal}

		SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
		SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
		SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
			{literal}
		}
		{/literal}
		if(SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
			{/literal}
			SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
			SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
			{literal}
		}
		{/literal}
		
	SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
	
	{literal}
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
		activateFirstItem: true,
		{/literal}
		minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
		queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
		zIndex: 99999,

				
		{literal}
		source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
		
		resultTextLocator: 'text',
		resultHighlighter: 'phraseMatch',
		resultFilters: 'phraseMatch',
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
		var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
		if(hover[0] != null){
			if (ex) {
				var h = '1000px';
				hover[0].style.height = h;
			}
			else{
				hover[0].style.height = '';
			}
		}
	}
		
	if({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
		// expand the dropdown options upon focus
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
		});
	}

			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
		});
		
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
		});

		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
			var selectElem = document.getElementById("{/literal}{$fields.status.name}{literal}");
			//if typed value is a valid option, do nothing
			for (i=0;i<selectElem.options.length;i++)
				if (selectElem.options[i].innerHTML==SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
					return;
			
			//typed value is invalid, so set the text and the hidden to blank
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
			SyncToHidden(select_defaults[selectElem.id].key);
		});
	
	// when they click on the arrow image, toggle the visibility of the options
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
		if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
		} else {
			SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
		}
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
	});

	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
		SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
	});

	// when they select an option, set the hidden input with the KEY, to be saved
	SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
		SyncToHidden(e.result.raw.key);
	});
 
});
</script> 
{/literal}
{/if}&nbsp;
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}type{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_TYPE">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_TYPE' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="type" colspan='3' >
{counter name="panelFieldCount" print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.type.name}" 
id="{$fields.type.name}" 
title=''               
>
{if isset($fields.type.value) && $fields.type.value != ''}
{html_options options=$fields.type.options selected=$fields.type.value}
{else}
{html_options options=$fields.type.options selected=$fields.type.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.type.options }
{capture name="field_val"}{$fields.type.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.type.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.type.name}" 
id="{$fields.type.name}" 
title=''                      
>
{if isset($fields.type.value) && $fields.type.value != ''}
{html_options options=$fields.type.options selected=$fields.type.value}
{else}
{html_options options=$fields.type.options selected=$fields.type.default}
{/if}
</select>
<input
id="{$fields.type.name}-input"
name="{$fields.type.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.type.name}-image"></button><button type="button"
id="btn-clear-{$fields.type.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.type.name}-input', '{$fields.type.name}'); sync_{$fields.type.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.type.name}{literal}");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:''};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use('datasource', 'datasource-jsonschema', function (Y) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == '' && selectElem.options[i].innerHTML == ''))
                            ret.push({'key':selectElem.options[i].value, 'text':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                {/literal}
                
                {literal}
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.type.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.type.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.type.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.type.name}{literal}");
                    var doSimulateChange = false;
                    if (selectElem.value != selectme)
                            doSimulateChange = true;
                    selectElem.value = selectme;
                    for (i = 0; i < selectElem.options.length; i++){
                    selectElem.options[i].selected = false;
                    if (selectElem.options[i].value == selectme)
                            selectElem.options[i].selected = true;
                    }

                    if (doSimulateChange)
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
                    }

                    //global variable 
                    sync_{/literal}{$fields.type.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.type.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.type.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.type.name}{literal}", syncFromHiddenToWidget);
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
                    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
                    if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
                {/literal}
                    SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
                    {literal}
                        }
                    {/literal}
                        if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
                    {/literal}
                        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
                        {literal}
                            }
                        {/literal}
                        
                            SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
                        {literal}
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        {/literal}
                                    minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
                                    queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
                                    zIndex: 99999,
                        
                        {literal}
                            source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
                                    resultTextLocator: 'text',
                                    resultHighlighter: 'phraseMatch',
                                    resultFilters: 'phraseMatch',
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
                            if (hover[0] != null){
                            if (ex) {
                            var h = '1000px';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = '';
                            }
                            }
                            }

                            if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
                            var selectElem = document.getElementById("{/literal}{$fields.type.name}{literal}");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                            if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
{/literal}
{/if}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}date_start{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE' module='Meetings'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_start"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.date_start.name}_date" value="{$fields[$fields.date_start.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_start.name}.update();" onchange="combo_{$fields.date_start.name}.update(); SugarWidgetScheduler.update_time(); viewTools.form.blur( $( '#{$fields.date_start.name}' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="{$fields.date_start.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.date_start.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="{$fields.date_start.name}" name="{$fields.date_start.name}" value="{$fields[$fields.date_start.name].value}" 
>
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
    
    var combo_{$fields.date_start.name} = new Datetimecombo( "{$fields[$fields.date_start.name].value}", "{$fields.date_start.name}", "{$TIME_FORMAT}", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_{$fields.date_start.name}.html( 'SugarWidgetScheduler.update_time();' );
    document.getElementById( '{$fields.date_start.name}_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_{$fields.date_start.name}.jsscript( 'SugarWidgetScheduler.update_time();' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.date_start.name}_date",'date',false,"{$fields.date_start.name}");
    addToValidateBinaryDependency( '{$form_name}', "{$fields.date_start.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}", "{$fields.date_start.name}_date" );
        addToValidateBinaryDependency( '{$form_name}', "{$fields.date_start.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}", "{$fields.date_start.name}_date" );
            addToValidateBinaryDependency( '{$form_name}', "{$fields.date_start.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}", "{$fields.date_start.name}_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {ldelim}

           Calendar.setup({ldelim}
                     onClose: update_{$fields.date_start.name},
                     inputField: "{$fields.date_start.name}_date",
                     form: "EditView",
                     ifFormat: "{$CALENDAR_FORMAT}",
                     daFormat: "{$CALENDAR_FORMAT}",
                     button: "{$fields.date_start.name}_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: {$CALENDAR_FDOW|default:'0'},
                     comboObject: combo_{$fields.date_start.name}
    {rdelim} );

           //Call update for first time to round hours and minute values
           combo_{$fields.date_start.name}.update( false );

    {rdelim} );
</script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}parent_name{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_LIST_RELATED_TO">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="parent" field="parent_name"  >
{counter name="panelFieldCount" print=false}

<select name='parent_type' tabindex="0" id='parent_type' title='' class="vt_formulaSelector" {if $locked_field == "parent_type"}disabled{/if}         onchange='document.{$form_name}.{$fields.parent_name.name}.value = "";document.{$form_name}.parent_id.value = ""; changeParentQS( "{$fields.parent_name.name}" ); checkParentType( document.{$form_name}.parent_type.value, document.{$form_name}.btn_{$fields.parent_name.name} );'>
{html_options options=$fields.parent_name.options selected=$fields.parent_type.value sortoptions=true}
</select>
{if $locked_field == "parent_type"}
<input type="hidden" name='parent_type' id='parent_type' value='{$fields.parent_type.value}' >
{/if}
{if empty($fields.parent_name.options[$fields.parent_type.value])}
{assign var="keepParent" value = 0}
{else}
{assign var="keepParent" value = 1}
{/if}
<input type="text" name="{$fields.parent_name.name}" id="{$fields.parent_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0"
size="" {if $keepParent}value="{$fields.parent_name.value}"{/if} autocomplete="off" {if $locked_field == "parent_type"}readonly{/if}
>
<input type="hidden" class="vt_formulaSelector" name="{$fields.parent_id.name}" id="{$fields.parent_id.name}"  
{if $keepParent}value="{$fields.parent_id.value}"{/if}>
{if $locked_field != "parent_type"}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.parent_name.name}" id="btn_{$fields.parent_name.name}" tabindex="0"	
title="{sugar_translate label="LBL_SELECT_BUTTON_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_SELECT_BUTTON_LABEL"}"
onclick='open_popup( document.{$form_name}.parent_type.value, 600, 400, "", true, false, {literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"parent_id","name":"parent_name"}}{/literal}, "single", true );' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.parent_name.name}" id="btn_clr_{$fields.parent_name.name}" tabindex="0" title="{sugar_translate label=""}" class="button lastChild" onclick="this.form.{$fields.parent_name.name}.value = ''; this.form.{$fields.parent_id.name}.value = ''; $( '#{$fields.parent_name.name}' ).blur();" value="{sugar_translate label=""}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
{literal}
<script type="text/javascript">
            if ( typeof (changeParentQS) == 'undefined' ) {
               function changeParentQS( field ) {
                  if ( typeof sqs_objects == 'undefined' ) {
                     return;
                  }
                  field = YAHOO.util.Dom.get( field );
                  var form = field.form;
                  var sqsId = form.id + "_" + field.id;
                  var typeField = form.elements.parent_type;
                  var new_module = typeField.value;
                  //Update the SQS globals to reflect the new module choice
                  if ( typeof (QSFieldsArray[sqsId]) != 'undefined' )
                  {
                     QSFieldsArray[sqsId].sqs.modules = new Array( new_module );
                  }
                  if ( typeof QSProcessedFieldsArray != 'undefined' )
                  {
                     QSProcessedFieldsArray[sqsId] = false;
                  }
                  if ( sqs_objects[sqsId] == undefined ) {
                     return;
                  }
                  sqs_objects[sqsId]["modules"] = new Array( new_module );
                  if ( (typeof (disabledModules) != 'undefined' && typeof (disabledModules[new_module]) != 'undefined') || {/literal}"" == "readonly" || "{$locked_field}" == "parent_type" )        {literal} {
                     sqs_objects[sqsId]["disable"] = true;
                     field.readOnly = true;
                  } else {
                     sqs_objects[sqsId]["disable"] = false;
                     field.readOnly = false;
                  }
                  enableQS( false );
               }
            }
        </script>
<script>var disabledModules=[];</script>
<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["{/literal}{if !empty($fields.parent_type.value)}{$fields.parent_type.value}{else}Accounts{/if}{literal}"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>
<script>
            //change this in case it wasn't the default on editing existing items.
            $( document ).ready( function () {
               changeParentQS( "parent_name" )
            } );
        </script>
{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}date_end{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-4 label bold_required_field" data-label="LBL_DATE_END">


{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DATE_END' module='Meetings'}{/capture}
{$label|strip_semicolon}:

<span class="required">*</span>
{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="datetimecombo" field="date_end"  >
{counter name="panelFieldCount" print=false}

<table border="0" cellpadding="0" cellspacing="0" class="dateTime">
<tr valign="middle">
<td nowrap class="dateTimeComboColumn">
<input autocomplete="off" type="text" id="{$fields.date_end.name}_date" value="{$fields[$fields.date_end.name].value}" size="11" maxlength="10" title='' tabindex="0" onblur="combo_{$fields.date_end.name}.update();" onchange="combo_{$fields.date_end.name}.update(); SugarWidgetScheduler.update_time(); viewTools.form.blur( $( '#{$fields.date_end.name}' ) );"                      class="datetimecombo_date vt_formulaSelector"
>
<button type="button" id="{$fields.date_end.name}_trigger" class="btn btn-danger" onclick="return false;"><span class="suitepicon suitepicon-module-calendar"  alt="{$APP.LBL_ENTER_DATE}"></span></button>
</td>
<td nowrap class="dateTimeComboColumn">
<div id="{$fields.date_end.name}_time_section" class="datetimecombo_time_section"></div>
</td>
</tr>
</table>
<input type="hidden" class="vt_formulaSelector DateTimeCombo" id="{$fields.date_end.name}" name="{$fields.date_end.name}" value="{$fields[$fields.date_end.name].value}" 
>
<script type="text/javascript" src="{sugar_getjspath file="include/SugarFields/Fields/Datetimecombo/Datetimecombo.js"}"></script>
<script type="text/javascript">
    
    var combo_{$fields.date_end.name} = new Datetimecombo( "{$fields[$fields.date_end.name].value}", "{$fields.date_end.name}", "{$TIME_FORMAT}", "0", '', false, true, '' );
    
//Render the remaining widget fields
    text = combo_{$fields.date_end.name}.html( 'SugarWidgetScheduler.update_time();' );
    document.getElementById( '{$fields.date_end.name}_time_section' ).innerHTML = text;

//Call eval on the update function to handle updates to calendar picker object
    eval( combo_{$fields.date_end.name}.jsscript( 'SugarWidgetScheduler.update_time();' ) );

//bug 47718: this causes too many addToValidates to be called, resulting in the error messages being displayed multiple times
//    removing it here to mirror the Datetime SugarField, where the validation is not added at this level
//addToValidate('{$form_name}',"{$fields.date_end.name}_date",'date',false,"{$fields.date_end.name}");
    addToValidateBinaryDependency( '{$form_name}', "{$fields.date_end.name}_hours", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_HOURS}", "{$fields.date_end.name}_date" );
        addToValidateBinaryDependency( '{$form_name}', "{$fields.date_end.name}_minutes", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MINUTES}", "{$fields.date_end.name}_date" );
            addToValidateBinaryDependency( '{$form_name}', "{$fields.date_end.name}_meridiem", 'alpha', false, "{$APP.ERR_MISSING_REQUIRED_FIELDS} {$APP.LBL_MERIDIEM}", "{$fields.date_end.name}_date" );

                YAHOO.util.Event.onDOMReady( function ()
    {ldelim}

           Calendar.setup({ldelim}
                     onClose: update_{$fields.date_end.name},
                     inputField: "{$fields.date_end.name}_date",
                     form: "EditView",
                     ifFormat: "{$CALENDAR_FORMAT}",
                     daFormat: "{$CALENDAR_FORMAT}",
                     button: "{$fields.date_end.name}_trigger",
                     singleClick: true,
                     step: 1,
                     weekNumbers: false,
                     startWeekday: {$CALENDAR_FDOW|default:'0'},
                     comboObject: combo_{$fields.date_end.name}
    {rdelim} );

           //Call update for first time to round hours and minute values
           combo_{$fields.date_end.name}.update( false );

    {rdelim} );
</script>
</div>

<!-- [/hide] -->
</div>



{capture name="field_name" assign="field_name"}location{/capture}
<div class="col-xs-12 col-sm-6 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-4 label" data-label="LBL_LOCATION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_LOCATION' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="varchar" field="location"  >
{counter name="panelFieldCount" print=false}

{if strlen($fields.location.value) <= 0}
{assign var="value" value=$fields.location.default_value }
{else}
{assign var="value" value=$fields.location.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.location.name}' 
id='{$fields.location.name}' size='30' 
maxlength='50' 
value='{$value}' title=''          
>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}duration{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DURATION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DURATION' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="duration" colspan='3' >
{counter name="panelFieldCount"  print=false}

{if !isset($config.enable_autocomplete) || $config.enable_autocomplete==false}
<select class="vt_formulaSelector" name="{$fields.duration.name}" 
id="{$fields.duration.name}" 
title=''               
>
{if isset($fields.duration.value) && $fields.duration.value != ''}
{html_options options=$fields.duration.options selected=$fields.duration.value}
{else}
{html_options options=$fields.duration.options selected=$fields.duration.default}
{/if}
</select>
{else}
{assign var="field_options" value=$fields.duration.options }
{capture name="field_val"}{$fields.duration.value}{/capture}
{assign var="field_val" value=$smarty.capture.field_val}
{capture name="ac_key"}{$fields.duration.name}{/capture}
{assign var="ac_key" value=$smarty.capture.ac_key}
<select style='display:none' name="{$fields.duration.name}" 
id="{$fields.duration.name}" 
title=''                      
>
{if isset($fields.duration.value) && $fields.duration.value != ''}
{html_options options=$fields.duration.options selected=$fields.duration.value}
{else}
{html_options options=$fields.duration.options selected=$fields.duration.default}
{/if}
</select>
<input
id="{$fields.duration.name}-input"
name="{$fields.duration.name}-input"
size="30"
value="{$field_val|lookup:$field_options}"
type="text" style="vertical-align: top;">
<span class="id-ff multiple">
<button type="button"><img src="{sugar_getimagepath file="id-ff-down.png"}" id="{$fields.duration.name}-image"></button><button type="button"
id="btn-clear-{$fields.duration.name}-input"
title="Clear"
onclick="SUGAR.clearRelateField(this.form, '{$fields.duration.name}-input', '{$fields.duration.name}'); sync_{$fields.duration.name}()"><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{literal}
<script>
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal} = [];
                {/literal}

                                {literal}
                    (function (){
                    var selectElem = document.getElementById("{/literal}{$fields.duration.name}{literal}");
                    if (typeof select_defaults == "undefined")
                            select_defaults = [];
                    select_defaults[selectElem.id] = {key:selectElem.value, text:''};
                    //get default
                    for (i = 0; i < selectElem.options.length; i++){
                    if (selectElem.options[i].value == selectElem.value)
                            select_defaults[selectElem.id].text = selectElem.options[i].innerHTML;
                    }

                    //SUGAR.AutoComplete.{$ac_key}.ds = 
                    //get options array from vardefs
                    var options = SUGAR.AutoComplete.getOptionsArray("");
                    YUI().use('datasource', 'datasource-jsonschema', function (Y) {
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds = new Y.DataSource.Function({
                    source: function (request) {
                    var ret = [];
                    for (i = 0; i < selectElem.options.length; i++)
                            if (!(selectElem.options[i].value == '' && selectElem.options[i].innerHTML == ''))
                            ret.push({'key':selectElem.options[i].value, 'text':selectElem.options[i].innerHTML});
                    return ret;
                    }
                    });
                    });
                    })();
                {/literal}
                
                {literal}
                    YUI().use("autocomplete", "autocomplete-filters", "autocomplete-highlighters", "node", "node-event-simulate", function (Y) {
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.inputNode = Y.one('#{$fields.duration.name}-input');
                    SUGAR.AutoComplete.{$ac_key}.inputImage = Y.one('#{$fields.duration.name}-image');
                    SUGAR.AutoComplete.{$ac_key}.inputHidden = Y.one('#{$fields.duration.name}');
                                {literal}
                    function SyncToHidden(selectme){
                    var selectElem = document.getElementById("{/literal}{$fields.duration.name}{literal}");
                    var doSimulateChange = false;
                    if (selectElem.value != selectme)
                            doSimulateChange = true;
                    selectElem.value = selectme;
                    for (i = 0; i < selectElem.options.length; i++){
                    selectElem.options[i].selected = false;
                    if (selectElem.options[i].value == selectme)
                            selectElem.options[i].selected = true;
                    }

                    if (doSimulateChange)
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('change');
                    }

                    //global variable 
                    sync_{/literal}{$fields.duration.name}{literal} = function(){
                    SyncToHidden();
                    }
                    function syncFromHiddenToWidget(){

                    var selectElem = document.getElementById("{/literal}{$fields.duration.name}{literal}");
                    //if select no longer on page, kill timer
                    if (selectElem == null || selectElem.options == null)
                            return;
                    var currentvalue = SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value');
                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.simulate('keyup');
                    for (i = 0; i < selectElem.options.length; i++){

                    if (selectElem.options[i].value == selectElem.value && document.activeElement != document.getElementById('{/literal}{$fields.duration.name}-input{literal}'))
                                SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', selectElem.options[i].innerHTML);
                        }
                        }

                        YAHOO.util.Event.onAvailable("{/literal}{$fields.duration.name}{literal}", syncFromHiddenToWidget);
                {/literal}

                    SUGAR.AutoComplete.{$ac_key}.minQLen = 0;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 0;
                    SUGAR.AutoComplete.{$ac_key}.numOptions = {$field_options|@count};
                    if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 300) {literal}{
                {/literal}
                    SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                    SUGAR.AutoComplete.{$ac_key}.queryDelay = 200;
                    {literal}
                        }
                    {/literal}
                        if (SUGAR.AutoComplete.{$ac_key}.numOptions >= 3000) {literal}{
                    {/literal}
                        SUGAR.AutoComplete.{$ac_key}.minQLen = 1;
                        SUGAR.AutoComplete.{$ac_key}.queryDelay = 500;
                        {literal}
                            }
                        {/literal}
                        
                            SUGAR.AutoComplete.{$ac_key}.optionsVisible = false;
                        {literal}
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.plug(Y.Plugin.AutoComplete, {
                            activateFirstItem: true,
                        {/literal}
                                    minQueryLength: SUGAR.AutoComplete.{$ac_key}.minQLen,
                                    queryDelay: SUGAR.AutoComplete.{$ac_key}.queryDelay,
                                    zIndex: 99999,
                        
                        {literal}
                            source: SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.ds,
                                    resultTextLocator: 'text',
                                    resultHighlighter: 'phraseMatch',
                                    resultFilters: 'phraseMatch',
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover = function(ex){
                            var hover = YAHOO.util.Dom.getElementsByClassName('dccontent');
                            if (hover[0] != null){
                            if (ex) {
                            var h = '1000px';
                            hover[0].style.height = h;
                            }
                            else{
                            hover[0].style.height = '';
                            }
                            }
                            }

                            if ({/literal}SUGAR.AutoComplete.{$ac_key}.minQLen{literal} == 0){
                            // expand the dropdown options upon focus
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.sendRequest('');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = true;
                            });
                            }

                                                        SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('click', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('click');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('dblclick', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('dblclick');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('focus', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('focus');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mouseup', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mouseup');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('mousedown', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('mousedown');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.on('blur', function(e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.simulate('blur');
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible = false;
                            var selectElem = document.getElementById("{/literal}{$fields.duration.name}{literal}");
                            //if typed value is a valid option, do nothing
                            for (i = 0; i < selectElem.options.length; i++)
                                    if (selectElem.options[i].innerHTML == SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.get('value'))
                                    return;
                            //typed value is invalid, so set the text and the hidden to blank
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.set('value', select_defaults[selectElem.id].text);
                            SyncToHidden(select_defaults[selectElem.id].key);
                            });
                            
                                    // when they click on the arrow image, toggle the visibility of the options
                                    SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputImage.ancestor().on('click', function () {
                            if (SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.optionsVisible) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.blur();
                            } else {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.focus();
                            }
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('query', function () {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputHidden.set('value', '');
                            });
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('visibleChange', function (e) {
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.expandHover(e.newVal); // expand
                            });
                            // when they select an option, set the hidden input with the KEY, to be saved
                            SUGAR.AutoComplete.{/literal}{$ac_key}{literal}.inputNode.ac.on('select', function(e) {
                            SyncToHidden(e.result.raw.key);
                            });
                            });
                        </script> 
{/literal}
{/if}
<input tabindex="0"  id="duration_hours" name="duration_hours" type="hidden" value="{$fields.duration_hours.value}">
<input tabindex="0"  id="duration_minutes" name="duration_minutes" type="hidden" value="{$fields.duration_minutes.value}">
{sugar_getscript file="modules/Meetings/duration_dependency.js"}
<script type="text/javascript">
   var date_time_format = "{$CALENDAR_FORMAT}";
   {literal}
   SUGAR.util.doWhen(function(){return typeof DurationDependency != "undefined" && typeof document.getElementById("duration") != "undefined"}, function(){
      var duration_dependency = new DurationDependency("date_start","date_end","duration",date_time_format);
      initEditView(YAHOO.util.Selector.query('select#duration')[0].form);
   });
   {/literal}
</script>            
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}reminders{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_REMINDERS">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_REMINDERS' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="function" field="reminders" colspan='3' >
{counter name="panelFieldCount"  print=false}
{include file="modules/Reminders/tpls/reminders.tpl"}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>




{capture name="field_name" assign="field_name"}description{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_DESCRIPTION">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_DESCRIPTION' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="text" field="description" colspan='3' >
{counter name="panelFieldCount" print=false}

{if empty($fields.description.value)}
{assign var="value" value=$fields.description.default_value }
{else}
{assign var="value" value=$fields.description.value }
{/if}  
<textarea  id='{$fields.description.name}' class="vt_formulaSelector" name='{$fields.description.name}'
           rows="6" 
           cols="80" 
           title='' tabindex="0" 
                                                              >{$value}</textarea>
{literal}{/literal}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_REPEAT_TAB' module='Meetings'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_0" data-id="LBL_REPEAT_TAB">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}repeat_type{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>




<div class="col-xs-12 col-sm-8 edit-view-field " type="enum" field="repeat_type" colspan='3' >
{counter name="panelFieldCount"  print=false}
{include file="modules/Meetings/tpls/RepeatPanelEditView.tpl"}
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>




<div class="panel panel-default">
<div class="panel-heading ">
<a class="" role="button" data-toggle="collapse-edit" aria-expanded="false">
<div class="col-xs-10 col-sm-11 col-md-11">
{sugar_translate label='LBL_PANEL_ASSIGNMENT' module='Meetings'}
</div>
</a>
</div>
<div class="panel-body panel-collapse collapse in panelContainer" id="detailpanel_1" data-id="LBL_PANEL_ASSIGNMENT">
<div class="tab-content">
<!-- tab_panel_content.tpl -->
<div class="row edit-view-row">




{capture name="field_name" assign="field_name"}assigned_user_name{/capture}
<div class="col-xs-12 col-sm-12 edit-view-row-item" {if $fields.$field_name.acl == 0}style="display: none;"{/if}>



<div class="col-xs-12 col-sm-2 label" data-label="LBL_ASSIGNED_TO_NAME">

{minify}
{capture name="label" assign="label"}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Meetings'}{/capture}
{$label|strip_semicolon}:

{/minify}
</div>

<div class="col-xs-12 col-sm-8 edit-view-field " type="relate" field="assigned_user_name" colspan='3' >
{counter name="panelFieldCount" print=false}

{capture name=idname assign=idname}{$fields.assigned_user_name.name}{/capture}
<input type="text" name="{$fields.assigned_user_name.name}" class="vt_formulaSelector sqsEnabled" tabindex="0" id="{$fields.assigned_user_name.name}" size="" value="{$fields.assigned_user_name.value}" title='' autocomplete="off"  {if $idname == $locked_field}readonly{/if} 	 
>
<input class="vt_formulaSelector" type="hidden" name="{$fields.assigned_user_name.id_name}" 
id="{$fields.assigned_user_name.id_name}" 
value="{$fields.assigned_user_id.value}">
{if $idname != $locked_field}
<span class="id-ff multiple">
<button type="button" name="btn_{$fields.assigned_user_name.name}" id="btn_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_TITLE"}" class="button firstChild" value="{sugar_translate label="LBL_ACCESSKEY_SELECT_USERS_LABEL"}"
onclick='open_popup(
"{$fields.assigned_user_name.module}",
600,
400,
"",
true,
false,
{literal}{"call_back_function":"viewTools.form.function.set_return","form_name":"EditView","field_to_name_array":{"id":"assigned_user_id","user_name":"assigned_user_name"}}{/literal},
"single",
true
);' ><span class="suitepicon suitepicon-action-select"></span></button><button type="button" name="btn_clr_{$fields.assigned_user_name.name}" id="btn_clr_{$fields.assigned_user_name.name}" tabindex="0" title="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_TITLE"}"  class="button lastChild"
onclick="SUGAR.clearRelateField( this.form, '{$fields.assigned_user_name.name}', '{$fields.assigned_user_name.id_name}' ); $( '#{$fields.assigned_user_name.name},#{$fields.assigned_user_name.id_name}' ).blur();"  value="{sugar_translate label="LBL_ACCESSKEY_CLEAR_USERS_LABEL"}" ><span class="suitepicon suitepicon-action-clear"></span></button>
</span>
{/if}
<script type="text/javascript">
        SUGAR.util.doWhen(
                "typeof(sqs_objects) != 'undefined' && typeof(sqs_objects['{$form_name}_{$fields.assigned_user_name.name}']) != 'undefined'",
                enableQS
                );
    </script>
</div>

<!-- [/hide] -->
</div>
<div class="clear"></div>
</div>                    </div>
</div>
</div>
</div>
</div>

<div class="h3Row" id="scheduler"></div>
<script language="javascript">
    var _form_id = '{$form_id}';
    {literal}
    SUGAR.util.doWhen(function(){
        _form_id = (_form_id == '') ? 'EditView' : _form_id;
        return document.getElementById(_form_id) != null;
    }, SUGAR.themes.actionMenu);
    {/literal}
</script>
{assign var='place' value="_FOOTER"} <!-- to be used for id for buttons with custom code in def files-->
<div class="buttons">
<input title="{$APP.LBL_SAVE_BUTTON_TITLE}" id="SAVE_HEADER" accessKey="{$APP.LBL_SAVE_BUTTON_KEY}" class="button primary" onclick="SUGAR.meetings.fill_invitees();document.EditView.action.value='Save'; document.EditView.return_action.value='DetailView'; {if isset($smarty.request.isDuplicate) && $smarty.request.isDuplicate eq "true"}document.EditView.return_id.value=''; {/if} formSubmitCheck();" type="button" name="button" value="{$APP.LBL_SAVE_BUTTON_LABEL}"/>
{if !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($smarty.request.return_id))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" type="button" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && !empty($fields.id.value))}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=DetailView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && ($smarty.request.return_action == "DetailView" && empty($fields.id.value)) && empty($smarty.request.return_id)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=ListView&module={$smarty.request.return_module|escape:"url"}&record={$fields.id.value}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif !empty($smarty.request.return_action) && !empty($smarty.request.return_module)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action={$smarty.request.return_action}&module={$smarty.request.return_module|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {elseif empty($smarty.request.return_action) || empty($smarty.request.return_id) && !empty($fields.id.value)}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module=Meetings'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {else}<input title="{$APP.LBL_CANCEL_BUTTON_TITLE}" accessKey="{$APP.LBL_CANCEL_BUTTON_KEY}" class="button" onclick="SUGAR.ajaxUI.loadContent('index.php?action=index&module={$smarty.request.return_module|escape:"url"}&record={$smarty.request.return_id|escape:"url"}'); return false;" type="button" name="button" value="{$APP.LBL_CANCEL_BUTTON_LABEL}" id="CANCEL"> {/if}
<input title="{$MOD.LBL_SEND_BUTTON_TITLE}" id="save_and_send_invites_header" class="button" onclick="document.EditView.send_invites.value='1';SUGAR.meetings.fill_invitees();document.EditView.action.value='Save';document.EditView.return_action.value='EditView';document.EditView.return_module.value='{$smarty.request.return_module}'; formSubmitCheck();" type="button" name="button" value="{$MOD.LBL_SEND_BUTTON_LABEL}"/>
{if $fields.status.value != "Held"}<input title="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_TITLE}" id="close_and_create_new_header" class="button" onclick="SUGAR.meetings.fill_invitees(); document.EditView.status.value='Held'; document.EditView.action.value='Save'; document.EditView.return_module.value='Meetings'; document.EditView.isDuplicate.value=true; document.EditView.isSaveAndNew.value=true; document.EditView.return_action.value='EditView'; document.EditView.return_id.value='{$fields.id.value}'; formSubmitCheck();" type="button" name="button" value="{$APP.LBL_CLOSE_AND_CREATE_BUTTON_LABEL}"/>{/if}
{if $showVCRControl}
<button type="button" id="save_and_continue" class="button saveAndContinue" title="{$app_strings.LBL_SAVE_AND_CONTINUE}" onClick="SUGAR.meetings.fill_invitees(); SUGAR.saveAndContinue(this);">
{$APP.LBL_SAVE_AND_CONTINUE}
</button>
{/if}
{if $bean->aclAccess("detail")}{if !empty($fields.id.value) && $isAuditEnabled}<input id="btn_view_change_log" title="{$APP.LNK_VIEW_CHANGE_LOG}" class="button" onclick='open_popup("Audit", "600", "400", "&record={$fields.id.value}&module_name=Meetings", true, false,  {ldelim} "call_back_function":"set_return","form_name":"EditView","field_to_name_array":[] {rdelim} ); return false;' type="button" value="{$APP.LNK_VIEW_CHANGE_LOG}">{/if}{/if}
</div>
</form>
{$set_focus_block}
<!-- Begin Meta-Data Javascript -->
<script type="text/javascript">{$JSON_CONFIG_JAVASCRIPT}</script>
{sugar_getscript file="cache/include/javascript/sugar_grp_jsolait.js"}
<script>toggle_portal_flag();function toggle_portal_flag()  {ldelim} {$TOGGLE_JS} {rdelim} 
function formSubmitCheck(){ldelim}if(check_form('EditView')){ldelim}document.EditView.submit();{rdelim}{rdelim}</script>
<!-- End Meta-Data Javascript -->
<script>SUGAR.util.doWhen("document.getElementById('EditView') != null",
            function(){ldelim}SUGAR.util.buildAccessKeyLabels();{rdelim});
</script>
<script type='text/javascript' src='{sugar_getjspath file='include/javascript/popup_helper.js'}'></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui2.js'}"></script>
<script type="text/javascript" src="{sugar_getjspath file='cache/include/javascript/sugar_grp_yui_widgets.js'}"></script>
<script type="text/javascript">
    {literal}
    SUGAR.meetings = {};
    var meetingsLoader = new YAHOO.util.YUILoader({
        require : ["sugar_grp_jsolait"],
        // Bug #48940 Skin always must be blank
        skin: {
            base: 'blank',
            defaultSkin: ''
        },
        onSuccess: function(){
            SUGAR.meetings.fill_invitees = function() {
                if (typeof(GLOBAL_REGISTRY) != 'undefined')  {
                    SugarWidgetScheduler.fill_invitees(document.EditView);
                }
            }
            var root_div = document.getElementById('scheduler');
            var sugarContainer_instance = new SugarContainer(document.getElementById('scheduler'));
            sugarContainer_instance.start(SugarWidgetScheduler);
            if ( document.getElementById('save_and_continue') ) {
                var oldclick = document.getElementById('save_and_continue').attributes['onclick'].nodeValue;
                document.getElementById('save_and_continue').onclick = function(){
                    SUGAR.meetings.fill_invitees();
                    eval(oldclick);
                }
            }
        }
    });
    meetingsLoader.addModule({
        name :"sugar_grp_jsolait",
        type : "js",
        fullpath: "cache/include/javascript/sugar_grp_jsolait.js",
        varName: "global_rpcClient",
        requires: []
    });
    meetingsLoader.insert();
    YAHOO.util.Event.onContentReady("{/literal}EditView{literal}",function() {
        var durationHours = document.getElementById('duration_hours');
        if (durationHours) {
            document.getElementById('duration_minutes').tabIndex = durationHours.tabIndex;
        }

        var reminderChecked = document.getElementsByName('reminder_checked');
        for(i=0;i<reminderChecked.length;i++) {
            if (reminderChecked[i].type == 'checkbox' && document.getElementById('reminder_list')) {
                YAHOO.util.Dom.getFirstChild('reminder_list').tabIndex = reminderChecked[i].tabIndex;
            }
        }
    });
    {/literal}
</script>
</form>
<script type="text/javascript">
YAHOO.util.Event.onContentReady("EditView",
    function () {ldelim} initEditView(document.forms.EditView) {rdelim});
//window.setTimeout(, 100);
window.onbeforeunload = function () {ldelim} return onUnloadEditView(); {rdelim};
// bug 55468 -- IE is too aggressive with onUnload event
if ($.browser.msie) {ldelim}
$(document).ready(function() {ldelim}
    $(".collapseLink,.expandLink").click(function (e) {ldelim} e.preventDefault(); {rdelim});
  {rdelim});
{rdelim}
</script>
{literal}
<script type="text/javascript">

    var selectTab = function(tab) {
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').hide();
        $('#EditView_tabs div.tab-content div.tab-pane-NOBOOTSTRAPTOGGLER').eq(tab).show().addClass('active').addClass('in');
        $('#EditView_tabs div.panel-content div.panel').hide();
        $('#EditView_tabs div.panel-content div.panel.tab-panel-' + tab).show()
    };

    var selectTabOnError = function(tab) {
        selectTab(tab);
        $('#EditView_tabs ul.nav.nav-tabs li').removeClass('active');
        $('#EditView_tabs ul.nav.nav-tabs li a').css('color', '');

        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).find('a').first().css('color', 'red');
        $('#EditView_tabs ul.nav.nav-tabs li').eq(tab).addClass('active');

    };

    var selectTabOnErrorInputHandle = function(inputHandle) {
        var tab = $(inputHandle).closest('.tab-pane-NOBOOTSTRAPTOGGLER').attr('id').match(/^detailpanel_(.*)$/)[1];
        selectTabOnError(tab);
    };


    $(function(){
        $('#EditView_tabs ul.nav.nav-tabs li > a[data-toggle="tab"]').click(function(e){
            if(typeof $(this).parent().find('a').first().attr('id') != 'undefined') {
                var tab = parseInt($(this).parent().find('a').first().attr('id').match(/^tab(.)*$/)[1]);
                selectTab(tab);
            }
        });

        $('a[data-toggle="collapse-edit"]').click(function(e){
            if($(this).hasClass('collapsed')) {
              // Expand panel
                // Change style of .panel-header
                $(this).removeClass('collapsed');
                // Expand .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').addClass('in');
            } else {
              // Collapse panel
                // Change style of .panel-header
                $(this).addClass('collapsed');
                // Collapse .panel-body
                $(this).parents('.panel').find('.panel-body').removeClass('in').removeClass('in');
            }
        });
    });

    </script>
{/literal}{literal}
<script type="text/javascript">
addForm('EditView');addToValidate('EditView', 'name', 'name', true,'{/literal}{sugar_translate label='LBL_SUBJECT' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'date_entered_date', 'date', false,'Date Created' );
addToValidate('EditView', 'date_modified_date', 'date', false,'Date Modified' );
addToValidate('EditView', 'modified_user_id', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_MODIFIED' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'modified_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_MODIFIED_NAME' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'created_by', 'assigned_user_name', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'created_by_name', 'relate', false,'{/literal}{sugar_translate label='LBL_CREATED' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'description', 'text', false,'{/literal}{sugar_translate label='LBL_DESCRIPTION' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'deleted', 'bool', false,'{/literal}{sugar_translate label='LBL_DELETED' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_id', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_ID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'assigned_user_name', 'relate', false,'{/literal}{sugar_translate label='LBL_ASSIGNED_TO_NAME' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'accept_status', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCEPT_STATUS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'set_accept_links', 'varchar', false,'{/literal}{sugar_translate label='LBL_ACCEPT_LINK' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'location', 'varchar', false,'{/literal}{sugar_translate label='LBL_LOCATION' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'password', 'varchar', false,'{/literal}{sugar_translate label='LBL_PASSWORD' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'join_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_URL' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'host_url', 'varchar', false,'{/literal}{sugar_translate label='LBL_HOST_URL' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'displayed_url', 'url', false,'{/literal}{sugar_translate label='LBL_DISPLAYED_URL' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'creator', 'varchar', false,'{/literal}{sugar_translate label='LBL_CREATOR' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'external_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_EXTERNALID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'duration_hours', 'int', true,'{/literal}{sugar_translate label='LBL_DURATION_HOURS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'duration_minutes', 'int', false,'{/literal}{sugar_translate label='LBL_DURATION_MINUTES' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'date_start_date', 'date', true,'Start Date' );
addToValidateDateBefore('EditView', 'date_start', 'datetimecombo', true,'{/literal}{sugar_translate label='LBL_DATE' module='Meetings' for_js=true}{literal}', 'date_end' );
addToValidate('EditView', 'date_end_date', 'date', true,'End Date' );
addToValidate('EditView', 'parent_type', 'parent_type', false,'{/literal}{sugar_translate label='LBL_PARENT_TYPE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'status', 'ColoredActivityStatus', false,'{/literal}{sugar_translate label='LBL_STATUS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'direction', 'enum', false,'{/literal}{sugar_translate label='LBL_DIRECTION' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_PARENT_ID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'reminder_checked', 'bool', false,'{/literal}{sugar_translate label='LBL_REMINDER' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'reminder_time', 'enum', false,'{/literal}{sugar_translate label='LBL_REMINDER_TIME' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'email_reminder_checked', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_REMINDER' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'email_reminder_time', 'enum', false,'{/literal}{sugar_translate label='LBL_EMAIL_REMINDER_TIME' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'email_reminder_sent', 'bool', false,'{/literal}{sugar_translate label='LBL_EMAIL_REMINDER_SENT' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'reminders', 'function', false,'{/literal}{sugar_translate label='LBL_REMINDERS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'outlook_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_OUTLOOK_ID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'sequence', 'int', false,'{/literal}{sugar_translate label='LBL_SEQUENCE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'parent_name', 'parent', false,'{/literal}{sugar_translate label='LBL_LIST_RELATED_TO' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_type', 'enum', false,'{/literal}{sugar_translate label='LBL_REPEAT_TYPE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_interval', 'int', false,'{/literal}{sugar_translate label='LBL_REPEAT_INTERVAL' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_dow', 'varchar', false,'{/literal}{sugar_translate label='LBL_REPEAT_DOW' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_until', 'date', false,'{/literal}{sugar_translate label='LBL_REPEAT_UNTIL' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_count', 'int', false,'{/literal}{sugar_translate label='LBL_REPEAT_COUNT' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_parent_id', 'id', false,'{/literal}{sugar_translate label='LBL_REPEAT_PARENT_ID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'recurring_source', 'varchar', false,'{/literal}{sugar_translate label='LBL_RECURRING_SOURCE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'duration', 'enum', false,'{/literal}{sugar_translate label='LBL_DURATION' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'gsync_id', 'varchar', false,'{/literal}{sugar_translate label='LBL_GSYNC_ID' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'gsync_lastsync', 'int', false,'{/literal}{sugar_translate label='LBL_GSYNC_LASTSYNC' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'type', 'enum', false,'{/literal}{sugar_translate label='LBL_TYPE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'repeat_pane', 'varchar', false,'{/literal}{sugar_translate label='LBL_REPEAT_PANE' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_address_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_ADDRESS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_geocode_status_c', 'varchar', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_GEOCODE_STATUS' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lat_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LAT' module='Meetings' for_js=true}{literal}' );
addToValidate('EditView', 'jjwg_maps_lng_c', 'float', false,'{/literal}{sugar_translate label='LBL_JJWG_MAPS_LNG' module='Meetings' for_js=true}{literal}' );
addToValidateBinaryDependency('EditView', 'assigned_user_name', 'alpha', false,'{/literal}{sugar_translate label='ERR_SQS_NO_MATCH_FIELD' module='Meetings' for_js=true}{literal}: {/literal}{sugar_translate label='LBL_ASSIGNED_TO' module='Meetings' for_js=true}{literal}', 'assigned_user_id' );
</script><script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['EditView_parent_name']={"form":"EditView","method":"query","modules":["Accounts"],"group":"or","field_list":["name","id"],"populate_list":["parent_name","parent_id"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['EditView_assigned_user_name']={"form":"EditView","method":"get_user_array","field_list":["user_name","id"],"populate_list":["assigned_user_name","assigned_user_id"],"required_list":["assigned_user_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};</script><script language="javascript">viewTools.form.calculateSelectors();</script>{/literal}
