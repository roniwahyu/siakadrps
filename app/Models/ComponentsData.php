<?php 
namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
/**
 * Components data Model
 * Use for getting values from the database for page components
 * Support raw query builder
 * @category Model
 */
class ComponentsData{
	

	/**
     * universitas_id_option_list Model Action
     * @return array
     */
	function universitas_id_option_list(){
		$sqltext = "SELECT  DISTINCT id_universitas AS value,concat(kode_universitas,'-',nama_universitas) AS label FROM akad_universitas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_prodi_option_list Model Action
     * @return array
     */
	function id_prodi_option_list(){
		$sqltext = "SELECT
    a.id_prodi as value , concat('(',a.kode_prodi,') ', a.nama_prodi) as label, 
    b.kode_fakultas, 
    b.nama_fakultas
FROM
    akad_prodi AS a
    left JOIN
    akad_fakultas AS b
    ON 
        a.fakultas_id = b.id_fakultas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_siakad_kurikulum_option_list Model Action
     * @return array
     */
	function id_siakad_kurikulum_option_list(){
		$sqltext = "SELECT id_siakad_kurikulum as value, id_siakad_kurikulum as label FROM akad_kurikulum";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * akadmk_id_prodi_option_list Model Action
     * @return array
     */
	function akadmk_id_prodi_option_list(){
		$sqltext = "SELECT id_prodi as value, id_prodi as label FROM akad_prodi";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * akadmksyarat_id_prodi_option_list Model Action
     * @return array
     */
	function akadmksyarat_id_prodi_option_list(){
		$sqltext = "SELECT  DISTINCT id_prodi AS value,concat(kode_prodi,'-',nama_prodi) AS label FROM akad_prodi";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * fakultas_id_option_list Model Action
     * @return array
     */
	function fakultas_id_option_list(){
		$sqltext = "SELECT id_fakultas as value, concat(kode_fakultas,'-',nama_fakultas) as label FROM akad_fakultas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_universitas_option_list Model Action
     * @return array
     */
	function id_universitas_option_list(){
		$sqltext = "SELECT id_universitas as value, concat('(',kode_universitas,') ',nama_universitas) as label FROM akad_universitas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * group_id_option_list Model Action
     * @return array
     */
	function group_id_option_list(){
		$sqltext = "SELECT id as value, name as label FROM core_groups";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * user_id_option_list Model Action
     * @return array
     */
	function user_id_option_list(){
		$sqltext = "SELECT id as value, username as label FROM core_users";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * Check if value already exist in CoreUsers table
	 * @param string $value
     * @return bool
     */
	function coreusers_username_value_exist(Request $request){
		$value = trim($request->value);
		$exist = DB::table('core_users')->where('username', $value)->value('username');   
		if($exist){
			return true;
		}
		return false;
	}
	

	/**
     * Check if value already exist in CoreUsers table
	 * @param string $value
     * @return bool
     */
	function coreusers_email_value_exist(Request $request){
		$value = trim($request->value);
		$exist = DB::table('core_users')->where('email', $value)->value('email');   
		if($exist){
			return true;
		}
		return false;
	}
	

	/**
     * user_role_id_option_list Model Action
     * @return array
     */
	function user_role_id_option_list(){
		$sqltext = "SELECT role_id AS value, role_name AS label FROM Roles";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_jenis_cp_option_list Model Action
     * @return array
     */
	function id_jenis_cp_option_list(){
		$sqltext = "SELECT id as value, id as label FROM rps_cp_jenis";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_mk_option_list Model Action
     * @return array
     */
	function id_mk_option_list(){
		$sqltext = "SELECT id as value, id as label FROM akad_mk";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_rps_option_list Model Action
     * @return array
     */
	function id_rps_option_list(){
		$sqltext = "SELECT id as value, id as label FROM rps_rps";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_cpmk_option_list Model Action
     * @return array
     */
	function id_cpmk_option_list(){
		$sqltext = "SELECT id as value, id as label FROM rps_cp_mk";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
	

	/**
     * id_fakultas_option_list Model Action
     * @return array
     */
	function id_fakultas_option_list(){
		$sqltext = "SELECT id_fakultas as value, id_fakultas as label FROM akad_fakultas";
		$query_params = [];
		$arr = DB::select($sqltext, $query_params);
		return $arr;
	}
}
