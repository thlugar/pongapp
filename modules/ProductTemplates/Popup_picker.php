<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
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




global $theme;






//include tree view classes.
require_once('include/ytree/Tree.php');
require_once('include/ytree/Node.php');

require_once('modules/ProductTemplates/TreeData.php');



class Popup_Picker
{
	
	
	/*
	 * 
	 */
	function Popup_Picker()
	{
		;
	}
	
	/*
	 * 
	 */
	function _get_where_clause()
	{
		$where = '';
		if(isset($_REQUEST['query']))
		{
			$where_clauses = array();
			append_where_clause($where_clauses, "name", "product_templates.name");
			append_where_clause($where_clauses, "type_name", "product_types.name");
			append_where_clause($where_clauses, "category_name", "product_categories.name");
			append_where_clause($where_clauses, "manufacturer_name", "manufacturers.name");		
			$where = generate_where_statement($where_clauses);
		}
		
		return $where;
	}
	
	/**
	 *
	 */
	function process_page()
	{
		global $theme;
		global $mod_strings;
		global $app_strings;
		global $currentModule;
		global $sugar_version, $sugar_config;
		
		$output_html = '';
		$where = '';
		
		$where = $this->_get_where_clause();
		
		
		
		$name = empty($_REQUEST['name']) ? '' : $_REQUEST['name'];
		$type_name = empty($_REQUEST['type_name']) ? '' : $_REQUEST['type_name'];
		$category_name = empty($_REQUEST['category_name']) ? '' : $_REQUEST['category_name'];
		$manufacturer_name = empty($_REQUEST['manufacturer_name']) ? '' : $_REQUEST['manufacturer_name'];
		$request_data = empty($_REQUEST['request_data']) ? '' : $_REQUEST['request_data'];
		$hide_clear_button = empty($_REQUEST['hide_clear_button']) ? false : true;

        $button = '<script>eval("var request_data = " + window.document.forms[\'popup_query_form\'].request_data.value);</script>';

		$button  = "<form action='index.php' method='post' name='form' id='form'>\n";
		if(!$hide_clear_button)
		{
			$button .= "<input type='button' name='button' id='clear_button' class='button' onclick=\"clear_search();document.popup_query_form.submit();\" title='"
				.$app_strings['LBL_CLEAR_BUTTON_TITLE']."' value='  "
				.$app_strings['LBL_CLEAR_BUTTON_LABEL']."  ' />\n";
		}
		$button .= "<input type='submit' name='button' id='cancel_button' class='button' onclick=\"window.close();\" title='"
			.$app_strings['LBL_CANCEL_BUTTON_TITLE']."' accesskey='"
			.$app_strings['LBL_CANCEL_BUTTON_KEY']."' value='  "
			.$app_strings['LBL_CANCEL_BUTTON_LABEL']."  ' />\n";
		$button .= "</form>\n";

		$form = new XTemplate('modules/ProductTemplates/Popup_picker.html');
		$form->assign('MOD', $mod_strings);
		$form->assign('APP', $app_strings);
		$form->assign('THEME', $theme);
		$form->assign('MODULE_NAME', $currentModule);
		$form->assign('NAME', $name);
		$form->assign('TYPE_NAME', $type_name);
		$form->assign('CATEGORY_NAME', $category_name);
		$form->assign('MANUFACTURER_NAME', $manufacturer_name);
		$form->assign('request_data', $request_data);
		
		ob_start();
		insert_popup_header($theme);
		$output_html .= ob_get_contents();
		ob_end_clean();
		
		$output_html .= get_form_header($mod_strings['LBL_SEARCH_FORM_TITLE'], '', false);

        //populate the tree.
        $catalogtree=new Tree('productcatalog');
        $catalogtree->set_param('module','ProductTemplates');
        
       $nodes=get_categories_and_products(null);
       foreach ($nodes as $node) {
          $catalogtree->add_node($node);       
       }
        $form->assign("TREEHEADER",$catalogtree->generate_header());
        $form->assign("TREEINSTANCE",$catalogtree->generate_nodes_array());

        $site_data = "<script> var site_url= {\"site_url\":\"".getJavascriptSiteURL()."\"};</script>\n";
        $form->assign("SITEURL",$site_data);

        //make anchor for after a search so you can see the results in the tree is large
  	    $anchor = "<a name=\"editwindow\"></a>";
  	    $form->assign("ANCHOR", $anchor);

		$form->parse('main.SearchHeader');
		$output_html .= $form->text('main.SearchHeader');
		
		// Reset the sections that are already in the page so that they do not print again later.
		$form->reset('main.SearchHeader');

		// create the listview
		$seed_bean = new ProductTemplate();
		$ListView = new ListView();
		$ListView->show_export_button = false;
		$ListView->show_delete_button = false;
		$ListView->process_for_popups = true;
		$ListView->setXTemplate($form);
		$ListView->setHeaderTitle($mod_strings['LBL_LIST_FORM_TITLE']);
		$ListView->setHeaderText($button);
		$ListView->setQuery($where, '', 'name', 'PRODUCT_TEMPLATE');
		$ListView->setModStrings($mod_strings);

		ob_start();
		$ListView->processListView($seed_bean, 'main', 'PRODUCT_TEMPLATE');
		$output_html .= ob_get_contents();
		ob_end_clean();
				
		$output_html .= insert_popup_footer();
		return $output_html;
	}
} // end of class Popup_Picker
?>