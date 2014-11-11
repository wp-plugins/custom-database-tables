<?php
// tables tab display setting
$tab_name_label = cdbt_translate_tab_name($tab_name);
$target_table = isset($target_table) ? $target_table : '';
$refresh_button_label = __('Reflesh Table List', CDBT_PLUGIN_SLUG);
$current_table = get_option(CDBT_PLUGIN_SLUG . '_current_table', $cdbt_options['tables'][0]['table_name']);
if (count($cdbt_options['tables']) > 1) {
	foreach ($cdbt_options['tables'] as $i => $table) {
		if ($table['table_type'] == 'enable_table') 
			$load_tables[] = $table['table_name'];
	}
	$index_label = array(
		__('No.', CDBT_PLUGIN_SLUG), 
		__('Table Name', CDBT_PLUGIN_SLUG), 
		__('Total Records', CDBT_PLUGIN_SLUG), 
		__('Data Import', CDBT_PLUGIN_SLUG), 
		__('Data Export', CDBT_PLUGIN_SLUG), 
		__('Change Table Schema', CDBT_PLUGIN_SLUG), 
		__('Truncate table', CDBT_PLUGIN_SLUG), 
		__('Drop table', CDBT_PLUGIN_SLUG), 
		__('Choise Current table', CDBT_PLUGIN_SLUG), 
	);
	$thead_th = '';
	foreach ($index_label as $th_text) {
		$thead_th .= '<th>'. $th_text .'</th>';
	}
	$enable_handle = array(
		'data-import' => array('enable' => true, 'label' => __('Data Import', CDBT_PLUGIN_SLUG)), 
		'data-export' => array('enable' => true, 'label' => __('Data Export', CDBT_PLUGIN_SLUG)), 
		'alter-table' => array('enable' => true, 'label' => __('Alter table', CDBT_PLUGIN_SLUG)), 
		'truncate-table' => array('enable' => true, 'label' => __('Truncate table', CDBT_PLUGIN_SLUG)), 
		'drop-table' => array('enable' => true, 'label' => __('Drop table', CDBT_PLUGIN_SLUG)), 
		'choise-current-table' => array('enable' => true, 'label' => __('Set Current table', CDBT_PLUGIN_SLUG)), 
	);
	$table_rows = null;
	if (!empty($load_tables)) {
		$index_num = 1;
		foreach ($load_tables as $load_table_name) {
			if (empty($load_table_name)) 
				continue;
			$cdbt->current_table = $load_table_name;
			if ($cdbt->check_table_exists()) {
				$res = $cdbt->get_data($load_table_name, 'COUNT(*)', null, null);
				if (is_array($res) && !empty($res)) {
					$res = array_shift($res);
					foreach ($res as $val) {
						$total = intval($val);
					}
				} else {
					$res = 0;
				}
				$is_current = ($current_table && $current_table == $load_table_name) ? true : false;
				$table_rows .= '<tr><td>'. $index_num .'</td>';
				$table_rows .= '<td>'. $load_table_name .'</td>';
				$table_rows .= '<td>'. $total .'</td>';
				foreach ($enable_handle as $handle_name => $handle_info) {
					$add_attr = (!$handle_info['enable']) ? ' disabled="disabled"' : '';
					$add_class = '';
					if ($handle_name == 'choise-current-table') {
						$add_attr .= ' data-selected-text="'. __('Currently selected', CDBT_PLUGIN_SLUG). '"';
						if ($is_current) {
							$add_class = ' active';
							$handle_info['label'] = __('Currently selected', CDBT_PLUGIN_SLUG);
						}
					}
					$table_rows .= '<td><button type="button" class="btn btn-default'. $add_class .'" id="'. $load_table_name .':'. $handle_name .'" data-table="'. $load_table_name .'"'. $add_attr .'>'. $handle_info['label'] .'</button></td>' . "\n";
				}
				$table_rows .= '</tr>';
				$index_num++;
			}
		}
	}
	$content_html = <<<EOH
<h3><span class="glyphicon glyphicon-th-list"></span> $tab_name_label</h3>
<div class="table-responsive">
	<table class="table table-bordered table-striped table-hover">
		<thead>
			<tr>
				$thead_th
			</tr>
		</thead>
		<tbody class="current-exists-tables">
			$table_rows
		</tbody>
	</table>
</div>
<div class="center-block">
	<form method="post" id="cdbt_managed_tables" role="form">
		<input type="hidden" name="mode" value="admin">
		<input type="hidden" name="action" value="tables">
		<input type="hidden" name="handle" value="reflesh">
		<input type="hidden" name="section" value="confirm">
		<input type="hidden" name="target_table" value="$target_table">
		$nonce_field
		<div class="form-group">
			<button type="button" class="btn btn-info pull-right on-bottom-margin" id="reflesh-table-list">$refresh_button_label</button>
		</div>
	</form>
</div>
EOH;
} else {
	$content_html = sprintf('<div class="alert alert-%s tab-header">%s<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button></div>', 'warning', __('The enabled table is none.', CDBT_PLUGIN_SLUG));
}
