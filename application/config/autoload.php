<?php
defined('BASEPATH') OR exit('No direct script access allowed');

date_default_timezone_set('Asia/Manila');
$autoload['packages']  	= array();
$autoload['libraries'] 	= array('email', 'session', 'database', 'user_agent', 'form_validation','base');
$autoload['drivers']   	= array();
$autoload['config']    	= array('custom_config');
$autoload['helper'] 	= array('url', 'file', 'directory');
$autoload['language']  	= array();
$autoload['model']     	= array( 
    'user_model',   
    'station_model',
    'substation_model',
    'user_role_model',
    'report_selection_model',
    'activity_conduct_model',
    'participating_agency_model',
    'garbage_type_collected_model',
    'vessel_type_model',
    'inspection_type_model',
    'facility_type_model',
    'training_type_model',
    'incident_cause_model',
    'tier_level_model',
    'oil_type_model',
    'responding_unit_model',
    'affected_area_model',
    'affected_biodiversity_model',
    'spiller_model',
    'psc_center_model',
    'report_type_model',
    'marsaf_vessel_type_model',
    'pdi_result_model',
    'noted_deficiency_model', 
    'vsei_deficiency_code_model', 
    'drill_conducted_model',  
    'action_code_model', 
    'marsaf_inspection_type_model',
    'vsei_result_model', 
    'related_international_conventions_noted_deficiency_model',
    'psc_action_code_model',
    'coastal_and_beach_violation_model', 
    'beach_coast_line_length_model',
    'recration_watercraft_model',
    'recreational_violation_model', 
    'lighthouse_type_model',
    'lighthouse_inspection_purpose_model',
    'lighthouse_status_model',
    'lighthouse_cause_if_not_operating_model',
    'bouy_type_model',
    'light_bouy_inspection_purpose_model',
    'light_buoy_status_model',
    'light_buoy__cause_if_not_operating_model',
    'maritime_casualty_nature_model',
    'marsaf_incident_cause_model',
    'incident_consequences_model',
    'very_serious_mc_category_model',
    'application_type_model',
    'salvage_operation_purpose_model',
    'maritime_acitivity_model',
    'maritime_related_violation_model', 
    'maritime_incident_type_model',
    'marsar_incident_cause_model', 
    'material_report_model',
    'asset_deployment_model', 
    'information_acquired_thru_model', 
    'time_assets_deployment_model',
    'vessel_size_model', 
    'vessel_age_model', 
    'vessel_type_involved_model',
    'fire_cause_model', 
    'man_overboard_incident_cause_model', 
    'ra_10654_model', 
    'ra_9165_model',
    'ra_10591_model',
    'ra_9208_model',
    'ra_9147_model',
    'pd_no_705_model',
    'ra_1937_model',
    'pd_no_532_model',
    'ra_10066_model', 
    'ra_6539_model', 
    'ra_10845_model', 
    'marpol_violation_model',  
    'seaborne_patrol_activity_conduct_model', 
    'panelling_conducted_facilities_model', 
    'k9_deployed_type_model',
    'eod_deployment_model',  
    'urban_rescue_type_model',
    'time_assets_deployment_model', 
    'asset_mobility_deployed_type_model', 
    'victim_age_model',
    'victim_number_model', 
    'drowning_cause_model', 
    'drowning_incident_location_model', 
    'body_built_model',
    'cadaver_approximate_age_model',
    'cadaver_location_model', 
    'weather_forecast_model',
    'earthquake_location_model',
    'earthquake_cause_model',
    'earthquake_magnitude_level_model',
    'fire_incident_location_model',
    'damage_estimated_cost_model', 
    'pre_emptive_evacuation_coordination_with_model',
    'pre_emptive_evacuation_activity_model',
    'marep_model',
    'marslec_model',
    'urban_marsar_model',
    

    
);