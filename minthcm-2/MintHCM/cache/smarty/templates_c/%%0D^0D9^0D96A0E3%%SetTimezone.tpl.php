<?php /* Smarty version 2.6.31, created on 2024-04-24 16:16:03
         compiled from modules/Users/SetTimezone.tpl */ ?>
<!--
		</td>
	</tr>
</table>
</form>
</div>
<div class="mr"></div>
</div>
<div class="ft"><div class="bl"></div><div class="ft-center"></div><div class="br"></div></div>
</div>
<?php echo '
<script type="text/javascript" language="JavaScript">
<!--
lookupTimezone = function() {
    var success = function(data) {
        eval(data.responseText);
        if(typeof userTimezone != \'undefined\') {
            document.EditView.timezone.value = userTimezone;
        }
    }

    var now = new Date();
    now = new Date(now.toString()); // reset milliseconds
    var nowGMTString = now.toGMTString();
    var nowGMT = new Date(nowGMTString.substring(0, nowGMTString.lastIndexOf(\' \')));
    offset = ((now - nowGMT) / (1000 * 60));
    url = \'index.php?module=Users&action=SetTimezone&to_pdf=1&userOffset=\' + offset;
    var cObj = YAHOO.util.Connect.asyncRequest(\'GET\', url, {success: success, failure: success});
}
YAHOO.util.Event.addListener(window, \'load\', lookupTimezone);
-->
</script>
'; ?>