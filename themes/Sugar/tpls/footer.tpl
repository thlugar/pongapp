{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Master Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/master-subscription-agreement
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2012 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/

*}
<!--end body panes-->
		</td>
		</tr>
	  </table>
    </div>
    <div class="clear"></div>
</div>
<div id="bottomLinks">
{if $AUTHENTICATED}
{$BOTTOMLINKS}
{/if}
</div>

<div class="clear"></div>
<div id="arrow" title="Show" class="up"></div>
<div id="footer">
    <img src="{$COMPANY_LOGO_URL}" class="logo" id="logo" 
        title="{$STATISTICS}" border="0"/> <a href="http://www.sugarcrm.com" target="_blank" class="copyright">&#169; 2012 SugarCRM Inc.</a>
    <div id="partner">
    {foreach from=$DYNAMICDCACTIONS item=action}
        {$action.script} {$action.image} 
    {/foreach}

     </div>
<script>
 	var logoStats = "&#169; 2004-2012 SugarCRM Inc. All Rights Reserved. {$STATISTICS}";
</script>       
{if $smarty.request.module != "Emails" && $smarty.request.module != "Users" && $smarty.request.module != "UpgradeWizard"}
{literal}

<script type="text/javascript" src="//asset0.zendesk.com/external/zenbox/v2.4/zenbox.js"></script>
<style type="text/css" media="screen, projection">
  @import url(//asset0.zendesk.com/external/zenbox/v2.4/zenbox.css);
</style>
<script type="text/javascript">
/*
$('#zenbox_tab').click(function(){

    window.open(
            'http://support.sugarcrm.com/',
            '_blank' // <- This is what makes it open in a new window.
    );

});

  if (typeof(Zenbox) !== "undefined") {
    Zenbox.init({
      dropboxID:   "20047068",
      url:         "https://suga.zendesk.com",
      tabID:       "support",
      tabColor:    "black",
      tabPosition: "Left"
    });
  }
  */
 {/literal}

{if !$DISABLE_FEEDBACK_WIDGET}{literal}
/*
$('#zenbox_tab').ready(function(){
	$('#partner').append($('#zenbox_tab'));	
	$('#zenbox_tab').css('text-indent','0px').attr('title','').html("Feedback");
	$('#zenbox_close').remove();
	$('.zenbox_header').html('<div class="close">&nbsp;</div>')
	$('.zenbox_header .close').click(function() {
		window.Zenbox.hide();
		});
}).click(function(){
	if($('.zenbox_support_links').length == 0) {
		var links = $('<div class="zenbox_support_links">If you are reporting a bug on the page, please submit it <a href="http://www.sugarcrm.com/crm/support/bugs.html" target="_new">here</a>. You can also submit feature requests in our <br>forum <a href="http://www.sugarcrm.com/forums/f5/" target="_blank">here</a>.</div>');
		
		setTimeout(function(){
			$('#zenbox_container').append(links);
		}, 1000);
	}
		
});
*/
{/literal}{/if}{/if}

</script>
{literal}


    <div class="clear"></div>
</div>
<script>


//qe_init function sets listeners to click event on elements of 'quickEdit' class
 if(typeof(DCMenu) !='undefined'){
    DCMenu.qe_refresh = false;
    DCMenu.qe_handle;
 }
function qe_init(){

    //do not process if YUI is undefined
    if(typeof(YUI)=='undefined' || typeof(DCMenu) == 'undefined'){
        return;
    }


    //remove all existing listeners.  This will prevent adding multiple listeners per element and firing multiple events per click
    if(typeof(DCMenu.qe_handle) !='undefined'){
        DCMenu.qe_handle.detach();
    }

    //set listeners on click event, and define function to call
    YUI().use('node', function(Y) {
        var qe = Y.all('.quickEdit');
        var refreshDashletID;
        var refreshListID;

        //store event listener handle for future use, and define function to call on click event
        DCMenu.qe_handle = qe.on('click', function(e) {
            //function will flash message, and retrieve data from element to pass on to DC.miniEditView function
            ajaxStatus.flashStatus(SUGAR.language.get('app_strings', 'LBL_LOADING'),800);
            e.preventDefault();
            if(typeof(e.currentTarget.getAttribute('data-dashlet-id'))!='undefined'){
                refreshDashletID = e.currentTarget.getAttribute('data-dashlet-id');
            }
            if(typeof(e.currentTarget.getAttribute('data-list'))!='undefined'){
                refreshListID = e.currentTarget.getAttribute('data-list');
            }
            DCMenu.miniEditView(e.currentTarget.getAttribute('data-module'), e.currentTarget.getAttribute('data-record'),refreshListID,refreshDashletID);
        });

    });
}

    qe_init();


	SUGAR_callsInProgress++;
	SUGAR._ajax_hist_loaded = true;
    if(SUGAR.ajaxUI)
	    YAHOO.util.Event.onContentReady('ajaxUI-history-field', SUGAR.ajaxUI.firstLoad);
</script>
{/literal}
</body>
</html>

