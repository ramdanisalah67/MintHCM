
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
                                <label for='first_name_advanced'>{sugar_translate label='LBL_FIRST_NAME' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.first_name_advanced.value) <= 0}
    {assign var="value" value=$fields.first_name_advanced.default_value }
{else}
    {assign var="value" value=$fields.first_name_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.first_name_advanced.name}' 
       id='{$fields.first_name_advanced.name}' size='30' 
       maxlength='30' 
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
                                <label for='last_name_advanced'>{sugar_translate label='LBL_LAST_NAME' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.last_name_advanced.value) <= 0}
    {assign var="value" value=$fields.last_name_advanced.default_value }
{else}
    {assign var="value" value=$fields.last_name_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.last_name_advanced.name}' 
       id='{$fields.last_name_advanced.name}' size='30' 
       maxlength='30' 
       value='{$value}' title=''          
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
                                <label for='user_name_advanced'>{sugar_translate label='LBL_USER_NAME' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.user_name_advanced.value) <= 0}
    {assign var="value" value=$fields.user_name_advanced.default_value }
{else}
    {assign var="value" value=$fields.user_name_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.user_name_advanced.name}' 
       id='{$fields.user_name_advanced.name}' size='30' 
       maxlength='60' 
       value='{$value}' title=''          
                                                data-validation="{literal}AEM(isUnique(user_name,$user_name),'ERR_USER_NAME_EXISTS_3'){/literal}" >
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
                                <label for='status_advanced'>{sugar_translate label='LBL_STATUS' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='status_advanced' name='status_advanced[]' options=$fields.status_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.status_advanced.value}
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
                                <label for='business_role_advanced'>{sugar_translate label='LBL_BUSINESS_ROLE' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{html_options id='business_role_advanced' name='business_role_advanced[]' options=$fields.business_role_advanced.options size="6" class="templateGroupChooser" multiple="1" selected=$fields.business_role_advanced.value}
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
                                <label for='is_admin_advanced'>{sugar_translate label='LBL_IS_ADMIN' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.is_admin_advanced.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.is_admin_advanced.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.is_admin_advanced.name}" name="{$fields.is_admin_advanced.name}"   >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

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
                                <label for='title_advanced'>{sugar_translate label='LBL_TITLE' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.title_advanced.value) <= 0}
    {assign var="value" value=$fields.title_advanced.default_value }
{else}
    {assign var="value" value=$fields.title_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.title_advanced.name}' 
       id='{$fields.title_advanced.name}' size='30' 
       maxlength='50' 
       value='{$value}' title=''          
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
                                <label for='is_group_advanced'>{sugar_translate label='LBL_GROUP_USER' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{assign var="yes" value=""}
{assign var="no" value=""}
{assign var="default" value=""}

{if strval($fields.is_group_advanced.value) == "1"}
	{assign var="yes" value="SELECTED"}
{elseif strval($fields.is_group_advanced.value) == "0"}
	{assign var="no" value="SELECTED"}
{else}
	{assign var="default" value="SELECTED"}
{/if}

<select id="{$fields.is_group_advanced.name}" name="{$fields.is_group_advanced.name}"   >
 <option value="" {$default}></option>
 <option value = "0" {$no}> {$APP.LBL_SEARCH_DROPDOWN_NO}</option>
 <option value = "1" {$yes}> {$APP.LBL_SEARCH_DROPDOWN_YES}</option>
</select>

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
                                <label for='position_name_advanced'>{sugar_translate label='LBL_POSITION_NAME' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.position_name_advanced.name}"  class="vt_search_relate_input sqsEnabled "   id="{$fields.position_name_advanced.name}" size="" value="{$fields.position_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.position_id_advanced.name}" value="{$fields.position_id_advanced.value}">
<span class="id-ff multiple">
        <button type="button" name="btn_{$fields.position_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup( "{$fields.position_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"position_id_advanced","name":"position_name_advanced"}}{/literal}, "single", true );'><span class="suitepicon suitepicon-action-select"></span></button>    <button type="button" name="btn_clr_{$fields.position_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.position_name_advanced.name}.value = ''; this.form.{$fields.position_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
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
                                <label for='securitygroup_name_advanced'>{sugar_translate label='LBL_SECURITYGROUP_NAME' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
<input type="text" name="{$fields.securitygroup_name_advanced.name}"  class="vt_search_relate_input sqsEnabled "   id="{$fields.securitygroup_name_advanced.name}" size="" value="{$fields.securitygroup_name_advanced.value}" title='' autocomplete="off"  >
<input type="hidden"  id="{$fields.securitygroup_id_advanced.name}" value="{$fields.securitygroup_id_advanced.value}">
<span class="id-ff multiple">
        <button type="button" name="btn_{$fields.securitygroup_name_advanced.name}"   title="{$APP.LBL_SELECT_BUTTON_TITLE}" class="button firstChild" value="{$APP.LBL_SELECT_BUTTON_LABEL}" onclick='open_popup( "{$fields.securitygroup_name_advanced.module}", 600, 400, "", true, false, {literal}{"call_back_function":"set_return","form_name":"search_form","field_to_name_array":{"id":"securitygroup_id_advanced","name":"securitygroup_name_advanced"}}{/literal}, "single", true );'><span class="suitepicon suitepicon-action-select"></span></button>    <button type="button" name="btn_clr_{$fields.securitygroup_name_advanced.name}"   title="{$APP.LBL_CLEAR_BUTTON_TITLE}" class="button lastChild" onclick="this.form.{$fields.securitygroup_name_advanced.name}.value = ''; this.form.{$fields.securitygroup_id_advanced.name}.value = '';" value="{$APP.LBL_CLEAR_BUTTON_LABEL}"><span class="suitepicon suitepicon-action-clear"></span></button>
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
                                <label for='phone_advanced'>{sugar_translate label='LBL_ANY_PHONE' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.phone_advanced.value) <= 0}
    {assign var="value" value=$fields.phone_advanced.default_value }
{else}
    {assign var="value" value=$fields.phone_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.phone_advanced.name}' 
       id='{$fields.phone_advanced.name}' size='30' 
        
       value='{$value}' title=''          
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
                                <label for='address_street_advanced'>{sugar_translate label='LBL_ANY_ADDRESS' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_street_advanced.value) <= 0}
    {assign var="value" value=$fields.address_street_advanced.default_value }
{else}
    {assign var="value" value=$fields.address_street_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_street_advanced.name}' 
       id='{$fields.address_street_advanced.name}' size='30' 
       maxlength='150' 
       value='{$value}' title=''          
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
                                <label for='email_advanced'>{sugar_translate label='LBL_ANY_EMAIL' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.email_advanced.value) <= 0}
    {assign var="value" value=$fields.email_advanced.default_value }
{else}
    {assign var="value" value=$fields.email_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.email_advanced.name}' 
       id='{$fields.email_advanced.name}' size='30' 
        
       value='{$value}' title=''          
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
                                <label for='address_city_advanced'>{sugar_translate label='LBL_CITY' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_city_advanced.value) <= 0}
    {assign var="value" value=$fields.address_city_advanced.default_value }
{else}
    {assign var="value" value=$fields.address_city_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_city_advanced.name}' 
       id='{$fields.address_city_advanced.name}' size='30' 
       maxlength='100' 
       value='{$value}' title=''          
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
                                <label for='address_state_advanced'>{sugar_translate label='LBL_STATE' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_state_advanced.value) <= 0}
    {assign var="value" value=$fields.address_state_advanced.default_value }
{else}
    {assign var="value" value=$fields.address_state_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_state_advanced.name}' 
       id='{$fields.address_state_advanced.name}' size='30' 
       maxlength='100' 
       value='{$value}' title=''          
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
                                <label for='address_postalcode_advanced'>{sugar_translate label='LBL_POSTAL_CODE' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_postalcode_advanced.value) <= 0}
    {assign var="value" value=$fields.address_postalcode_advanced.default_value }
{else}
    {assign var="value" value=$fields.address_postalcode_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_postalcode_advanced.name}' 
       id='{$fields.address_postalcode_advanced.name}' size='30' 
       maxlength='20' 
       value='{$value}' title=''          
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
                                <label for='address_country_advanced'>{sugar_translate label='LBL_COUNTRY' module='Users'}</label>
                            </div>
            <div class="form-item">
                                
{if strlen($fields.address_country_advanced.value) <= 0}
    {assign var="value" value=$fields.address_country_advanced.default_value }
{else}
    {assign var="value" value=$fields.address_country_advanced.value }
{/if}  
<input class="vt_formulaSelector" type='text' name='{$fields.address_country_advanced.name}' 
       id='{$fields.address_country_advanced.name}' size='30' 
       maxlength='100' 
       value='{$value}' title=''          
                                               >
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
</script>{literal}<script language="javascript">if(typeof sqs_objects == 'undefined'){var sqs_objects = new Array;}sqs_objects['search_form_reports_to_name_advanced']={"form":"search_form","method":"get_user_array","field_list":["user_name","id"],"populate_list":["reports_to_name_advanced","reports_to_id_advanced"],"required_list":["reports_to_id"],"conditions":[{"name":"user_name","op":"like_custom","end":"%","value":""}],"limit":"30","no_match_text":"No Match"};sqs_objects['search_form_position_name_advanced']={"form":"search_form","method":"query","modules":["Positions"],"group":"or","field_list":["name","id"],"populate_list":["position_name_advanced","position_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_candidate_name_advanced']={"form":"search_form","method":"query","modules":["Candidates"],"group":"or","field_list":["name","id"],"populate_list":["candidate_name_advanced","candidate_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_securitygroup_name_advanced']={"form":"search_form","method":"query","modules":["SecurityGroups"],"group":"or","field_list":["name","id"],"populate_list":["securitygroup_name_advanced","securitygroup_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_forced_tabs_dashboard_name_advanced']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["forced_tabs_dashboard_name_advanced","forced_tabs_dashboard_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_locked_dashboard_name_advanced']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["locked_dashboard_name_advanced","locked_dashboard_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};sqs_objects['search_form_users_one_time_default_dashboards_name_advanced']={"form":"search_form","method":"query","modules":["DashboardManager"],"group":"or","field_list":["name","id"],"populate_list":["users_one_time_default_dashboards_name_advanced","one_time_default_dashboard_id_advanced"],"required_list":["parent_id"],"conditions":[{"name":"name","op":"like_custom","end":"%","value":""}],"order":"name","limit":"30","no_match_text":"No Match"};</script>{/literal}