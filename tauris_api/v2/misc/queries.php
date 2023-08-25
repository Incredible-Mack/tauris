<?php
echo '<style>.sc.radio span {
min-width: 30px;
min-height: 30px;
margin-right: 6px;
margin-left: 32px;
}
.sc.radio span:after {
width: 30px;
height: 30px;
}</style>';

$complete_status = {complete};
if ({complete} == 1) {
	sc_field_display({instruction_complete}, 'off');
	sc_field_display({complete}, 'off');
	sc_field_display({note_complete}, 'off');
	sc_field_display({instruction_report}, 'on');
	sc_field_display({process_report}, 'on');
	sc_field_display({note_report}, 'on');
}else{ 
	sc_field_display({instruction_complete}, 'on');
	sc_field_display({complete}, 'on');
	sc_field_display({note_complete}, 'on');
	sc_field_display({instruction_report}, 'off');
	sc_field_display({process_report}, 'off');
	sc_field_display({note_report}, 'off');
}


if ({process_report} == 1) {
	sc_field_display({process_report}, 'off');
	sc_field_display({note_report}, 'off');
	sc_field_display({instruction_complete}, 'on');
	sc_field_display({instruction_report}, 'on');
	
	{instruction_complete} = '<br>This project has been marked as COMPLETED!<br><br>';
	{instruction_report} = '<br>The Report for this project has been PROCESSED!<br><br><br>';
}


$job_id = [id]; // ID of current job
$user_array = {user_ids};

$protocol = ((!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') || $_SERVER['SERVER_PORT'] == 443) ? "https://" : "http://";
$url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$query = $_SERVER['QUERY_STRING'];

if($_SERVER['SERVER_NAME'] == "127.0.0.1") {
	$this_environment = "http://localhost:8888/api/v2/";
}else{
	$this_environment = "https://api.tauris.app/v2/";
}



if($query) {
	$url_components = parse_url($url);
	parse_str($url_components['query'], $params);
	$action = $params['action'];
	$usr = $params['usr'];
	
	if($usr && $action) {
		$condition = ''; 
		if($action == "add") {$condition = "CONCAT_WS(',', user_ids, $usr)";} 
		if($action == "remove") {$condition = "user_ids &~ (1 << FIND_IN_SET('$usr', user_ids) - 1)";} 
			
		$update_table  = 'bets_jobs_placement'; 
		$update_where  = "job_id = $job_id"; 
		$update_fields = array( 
			"user_ids = $condition",
		 );

		// Update record
		$update_sql = 'UPDATE ' . $update_table
			. ' SET '   . implode(', ', $update_fields)
			. ' WHERE ' . $update_where;
		sc_exec_sql($update_sql);
		
		sc_commit_trans();

		// Redirection parameters
		$redir_app    = 'form_bets_jobs'; 
		$redir_target = '_self'; 
		$redir_param  = array('id' => $job_id);

		sc_redir($redir_app, $redir_param, $redir_target); 
	}
}

// Get Users who applied
$check_sql = "SELECT id, firstname, lastname, email, phone"
   . " FROM bets_user"
   . " WHERE FIND_IN_SET(id,'$user_array') ";
sc_lookup(rs, $check_sql);

$recordset = {rs};
$total = count($recordset);


// Get Users already assigned to this job
$check_sql = "SELECT user_ids"
   . " FROM bets_jobs_placement"
   . " WHERE job_id = $job_id";
sc_lookup(rs, $check_sql);

if (isset({rs[0][0]})) {
	$assigned_array = {rs[0][0]};
    $assigned = explode(",",{rs[0][0]});
}else {
	$assigned_array = '';
	$assigned = array();
}


$applicant_list = "";
$i = 0;
 while($i < $total) {
	
	$applied_button = (in_array($recordset[$i][0], $assigned))? "Remove" : "Assign to Job";
	$applied_color = (in_array($recordset[$i][0], $assigned))? "scButton_danger" : "scButton_ok";
   $todo = (in_array($recordset[$i][0], $assigned))? "remove" : "add";
   $applied_link = "../manage-jobs?usr=".$recordset[$i][0]."&action=".$todo;

   if($complete_status){
      $applied_button = "Job Completed";
      $applied_color = "scButton_default";
      $applied_link = "#";
   }
	$applicant_list .= "<tr>
    <td style='text-align:center; font-weight: bold;'>".($i+1)."</td>
    <td>".$recordset[$i][1]."</td>
    <td>".$recordset[$i][2]."</td>
    <td>".$recordset[$i][3]."</td>
    <td>".$recordset[$i][4]."</td>
    <td style='text-align:right;'>
	<a href='".$this_environment."jobsapp/my-resume-view/".md5($recordset[$i][0])."' class='scButton_default' target='_blank'>Resume</a>
	<a href='".$this_environment."jobsapp/my-resume-cover-view/".md5($recordset[$i][0])."' class='scButton_default' target='_blank'>Cover Letter</a>
	</td>
    <td style='text-align:left;'>
	<a href='".$applied_link."' class='".$applied_color."'>".$applied_button."</a>
	</td>
  	</tr>";
	$i++;
 }

$full_table = "<style>
.applicant table {
  font-family: arial, sans-serif;
  color: #889fac;
  border-collapse: collapse;
  width: 100%;
}

.applicant td, th {
  border: 1px solid #dfe5e8;
  text-align: left;
  padding: 12px 8px;
}

.applicant tr:nth-child(even) {
  background-color: #e7eef3;
}

.applicant h2 {
    color: #889fac;
    padding: 6px 10px 4px 0;
    text-align: right;
}

.applicant .scButton_ok {
	padding: 6px 10px;
}

.applicant .scButton_default {
	color: #fff;
	padding: 6px 10px;
	border-color: #889fac;
	background-color: #889fac;
}


.applicant .scButton_danger {
	padding: 6px 10px;
}
</style>
<span class='applicant'>
<h2>Total Applicants: ".$total."</h2>
<table>
  <tr>
    <th style='text-align:center;'>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th colspan='2' style='text-align:center;'>Action</th>
  </tr>";
$full_table .= $applicant_list;
$full_table .= "</table></span>";

{applicant_table} = $full_table;


// Get Users who are assigned
$check_sql = "SELECT id, firstname, lastname, email, phone"
   . " FROM bets_user"
   . " WHERE FIND_IN_SET(id,'$assigned_array') ";
sc_lookup(rs, $check_sql);

$recordset = {rs};
$total = count($recordset);

$mail_subject = "New job Assigned to you on Tauris Tech";
$mail_body = "You have been assigned new job: ".{name}." on Tauris Tech. Please see details in the App: You can use the Drive Feature on Tauris Tech Jobs App for direction to this location.";
$assigned_list = "";
$i = 0;
 while($i < $total) {
	$assigned_list .= "<tr>
    <td style='text-align:center; font-weight: bold;'>".($i+1)."</td>
    <td>".$recordset[$i][1]."</td>
    <td>".$recordset[$i][2]."</td>
    <td>".$recordset[$i][3]."</td>
    <td>".$recordset[$i][4]."</td>
<td style='text-align:center;'>
	<a href='tel:".$recordset[$i][4]."' class='scButton_ok'>Call</a>
	<a href='sms:".$recordset[$i][4]."?&body=You have a new job approval on Tauris Tech Jobs App.' class='scButton_ok'>SMS</a>
	<a href='mailto:".$recordset[$i][3]."?cc=info@tauristech.org&bcc=tasheba@tauristech.org&subject=".$mail_subject."&body=".$mail_body."' class='scButton_ok'>Email</a>
	<a href='".$this_environment."jobsapp/my-resume-view/".md5($recordset[$i][0])."' class='scButton_default' target='_blank'>Resume</a>
	<a href='".$this_environment."jobsapp/my-resume-cover-view/".md5($recordset[$i][0])."' class='scButton_default' target='_blank'>Cover Letter</a>
</td>
  	</tr>";
	$i++;
 }

$full_table = "<style>
.applicant table {
  font-family: arial, sans-serif;
  color: #889fac;
  border-collapse: collapse;
  width: 100%;
}

.applicant td, th {
  border: 1px solid #dfe5e8;
  text-align: left;
  padding: 12px 8px;
}

.applicant tr:nth-child(even) {
  background-color: #e7eef3;
}

.applicant h2 {
    color: #889fac;
    padding: 6px 10px 4px 0;
    text-align: right;
}

.applicant .scButton_ok {
	padding: 6px 10px;
}

.applicant .scButton_default {
	color: #fff;
	padding: 6px 10px;
	border-color: #889fac;
	background-color: #889fac;
}


.applicant .scButton_danger {
	padding: 6px 10px;
}
</style>
<span class='applicant'>
<h2>Total Assigned: ".$total."</h2>
<table>
  <tr>
    <th style='text-align:center;'>#</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th style='text-align:center;'>Action</th>
  </tr>";
$full_table .= $assigned_list;
$full_table .= "</table></span>";

{assigned_table} = $full_table;



// $dashboard_client_id = "";
// $dashboard_project_id = "";
// sc_set_global($dashboard_client_id);
// sc_set_global($dashboard_project_id);
	
/*
.fa-chart-pie:before {
    content: "\f200";
    font-size: 18px;
}
*/

/*
	$check_sql = "SELECT client_id, project_id"
	   . " FROM config_dashboard_set"
	   . " WHERE id = '1'";
	sc_lookup(rs, $check_sql);

	if (isset({rs[0][0]})) {
		{client_id} = {rs[0][0]};
		{project_id} = {rs[0][1]};
	}else{
		{client_id} = '';
		{project_id} = '';
	}
	
	// Assign new transaction values to variable
	$dashboard_client_id = {client_id};
	$dashboard_project_id = {project_id};

	// Set Variables with assigned values as Global
	// sc_reset_global([dashboard_client_id], [dashboard_project_id]);
	sc_set_global($dashboard_client_id);
	sc_set_global($dashboard_project_id);
*/

//sc_reset_global([dashboard_client_id], [dashboard_project_id]);
//$dashboard_client_id = 44;
//$dashboard_project_id = 55;
//sc_set_global($dashboard_client_id);
//sc_set_global($dashboard_project_id);
//echo "Client: ".[dashboard_client_id];
//echo "Project: ".[dashboard_project_id];

/*
sc_reset_global([dashboard_client_id], [dashboard_project_id]);
// echo "wofuwef";

//if(!isset([dashboard_client_id]) || !isset([dashboard_project_id])) {
if([dashboard_client_id] == "" || [dashboard_project_id] == "") {
	
	$check_sql = "SELECT client_id, project_id"
	   . " FROM config_dashboard_set"
	   . " WHERE id = '1'";
	sc_lookup(rs, $check_sql);

	if (isset({rs[0][0]})) {
		{client_id} = {rs[0][0]};
		{project_id} = {rs[0][1]};
	}else{
		{client_id} = '';
		{project_id} = '';
	}
	
	// Assign new transaction values to variable
	$dashboard_client_id = {client_id};
	$dashboard_project_id = {project_id};

	// Set Variables with assigned values as Global
	// sc_reset_global([dashboard_client_id], [dashboard_project_id]);
	sc_set_global($dashboard_client_id);
	sc_set_global($dashboard_project_id);

	// Redirection parameters
	$redir_app    = 'dashboard';  // Application name
	$redir_target = '_parent';  // Target window (_blank, _self, _parent or modal)
	$redir_param  = array();

	//sc_commit_trans();
	sc_redir($redir_app, $redir_param, $redir_target);
}
*/

?>