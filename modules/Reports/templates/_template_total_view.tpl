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
{php}
// start template_total_table code
global $mod_strings;
require_once('modules/Reports/templates/templates_reports.php');
$reporter = $this->get_template_vars('reporter');
$total_header_row = $reporter->get_total_header_row(); 
$total_row = $reporter->get_summary_total_row();
if ( isset($total_row['group_pos'])) {
	$args['group_pos'] = $total_row['group_pos'];
} // if
if ( isset($total_row['group_column_is_invisible'])) {
	$args['group_column_is_invisible'] = $total_row['group_column_is_invisible'];
} // if
	$reporter->layout_manager->setAttribute('no_sort',1);
	echo get_form_header( $mod_strings['LBL_GRAND_TOTAL'],"", false); 
	template_header_row($total_header_row,$args);
{/php}
<table width="100%" border="0" cellpadding="0" cellspacing="0" class="list view">
{if ($show_pagination neq "")}
{$pagination_data}
{/if}
<tr height="20">
{if ($isSummaryCombo)}
<td scope="col" align='center'  valign=middle nowrap>&nbsp;</td>
{/if}
{if ($isSummaryComboHeader)}
<td><span id="img_{$divId}"><a href="javascript:expandCollapseComboSummaryDiv('{$divId}')"><img width="8" height="8" border="0" absmiddle="" alt=$mod_strings.LBL_SHOW src="{$image_path}advanced_search.gif"/></a></span></td>
{/if}
{php}
	$count = 0;
	$this->assign('count', $count);
{/php}
{foreach from=$header_row key=module item=cell}
	{if (($args.group_column_is_invisible != "") && ($args.group_pos eq $count))}
{php}	
	$count = $count + 1;
	$this->assign('count', $count);
{/php}
	{ else }
	{if $cell eq ""}
{php}	
	$cell = "&nbsp;";
	$this->assign('cell', $cell);
{/php}
	{/if}
	
	<td scope="col" align='center'  valign=middle nowrap>	
	
	{$cell}
	{/if}
{/foreach}
</tr>
{php}
	if (! empty($total_row)) {
	template_list_row($total_row);
{/php}
	<tr height=20 class="{$row_class}" onmouseover="setPointer(this, '{$rownum}', 'over', '{$bg_color}', '{$hilite_bg}', '{$click_bg}');" onmouseout="setPointer(this, '{$rownum}', 'out', '{$bg_color}', '{$hilite_bg}', '{$click_bg}');" onmousedown="setPointer(this, '{$rownum}', 'click', '{$bg_color}', '{$hilite_bg}', '{$click_bg}');">
	{if ($isSummaryComboHeader)}
	<td><span id="img_{$divId}"><a href="javascript:expandCollapseComboSummaryDiv('{$divId}')"><img width="8" height="8" border="0" absmiddle="" alt=$mod_strings.LBL_SHOW src="{$image_path}advanced_search.gif"/></a></span></td>
	{/if}
	{php}
		$count = 0;
		$this->assign('count', $count);
	{/php}
	{foreach from=$column_row.cells key=module item=cell}
		{if (($column_row.group_column_is_invisible != "") && ($count|in_array:$column_row.group_pos)) }
	{php}	
		$count = $count + 1;
		$this->assign('count', $count);
	{/php}
		{ else }
		{if $cell eq ""}
	{php}	
		$cell = "&nbsp;";
		$this->assign('cell', $cell);
	{/php}
		{/if}		
		<td width="{$width}%" valign=TOP class="{$row_class}" bgcolor="{$bg_color}" scope="row">
		
		{$cell}
		{/if}
	{/foreach}
	</tr>
	
{php}
	} else {
	echo template_no_results();
	}
echo template_end_table($args);
	// end template_total_table code
//template_total_table($reporter);
template_query_table($reporter);
{/php}