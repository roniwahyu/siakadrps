<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadKurikulum extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_kurikulum';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_siakad_kurikulum';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'kode_kurikulum','nm_kurikulum','id_prodi','isactive'
	];
	public $timestamps = true;
	const CREATED_AT = 'date_created'; 
	const UPDATED_AT = 'date_updated'; 
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				akad_kurikulum.id_siakad_kurikulum LIKE ?  OR 
				akad_kurikulum.kode_kurikulum LIKE ?  OR 
				akad_kurikulum.nm_kurikulum LIKE ?  OR 
				akad_prodi.kode_prodi LIKE ?  OR 
				akad_prodi.nama_prodi LIKE ?  OR 
				akad_prodi.id_prodi LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
		];
		//setting search conditions
		$query->whereRaw($search_condition, $search_params);
	}
	

	/**
     * return list page fields of the model.
     * 
     * @return array
     */
	public static function listFields(){
		return [ 
			"akad_kurikulum.id_siakad_kurikulum AS id_siakad_kurikulum",
			"akad_kurikulum.kode_kurikulum AS kode_kurikulum",
			"akad_kurikulum.nm_kurikulum AS nm_kurikulum",
			"akad_kurikulum.id_prodi AS id_prodi",
			"akad_prodi.kode_prodi AS akadprodi_kode_prodi",
			"akad_prodi.nama_prodi AS akadprodi_nama_prodi",
			"akad_kurikulum.isactive AS isactive",
			"akad_prodi.id_prodi AS akadprodi_id_prodi" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"akad_kurikulum.id_siakad_kurikulum AS id_siakad_kurikulum",
			"akad_kurikulum.kode_kurikulum AS kode_kurikulum",
			"akad_kurikulum.nm_kurikulum AS nm_kurikulum",
			"akad_kurikulum.id_prodi AS id_prodi",
			"akad_prodi.kode_prodi AS akadprodi_kode_prodi",
			"akad_prodi.nama_prodi AS akadprodi_nama_prodi",
			"akad_kurikulum.isactive AS isactive",
			"akad_prodi.id_prodi AS akadprodi_id_prodi" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"akad_kurikulum.id_siakad_kurikulum AS id_siakad_kurikulum",
			"akad_kurikulum.kode_kurikulum AS kode_kurikulum",
			"akad_kurikulum.nm_kurikulum AS nm_kurikulum",
			"akad_kurikulum.id_prodi AS id_prodi",
			"akad_kurikulum.isactive AS isactive",
			"akad_kurikulum.date_created AS date_created",
			"akad_kurikulum.date_updated AS date_updated",
			"akad_prodi.id_prodi AS akadprodi_id_prodi",
			"akad_prodi.fakultas_id AS akadprodi_fakultas_id",
			"akad_prodi.kode_prodi AS akadprodi_kode_prodi",
			"akad_prodi.nama_prodi AS akadprodi_nama_prodi",
			"akad_prodi.date_created AS akadprodi_date_created",
			"akad_prodi.date_updated AS akadprodi_date_updated" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"akad_kurikulum.id_siakad_kurikulum AS id_siakad_kurikulum",
			"akad_kurikulum.kode_kurikulum AS kode_kurikulum",
			"akad_kurikulum.nm_kurikulum AS nm_kurikulum",
			"akad_kurikulum.id_prodi AS id_prodi",
			"akad_kurikulum.isactive AS isactive",
			"akad_kurikulum.date_created AS date_created",
			"akad_kurikulum.date_updated AS date_updated",
			"akad_prodi.id_prodi AS akadprodi_id_prodi",
			"akad_prodi.fakultas_id AS akadprodi_fakultas_id",
			"akad_prodi.kode_prodi AS akadprodi_kode_prodi",
			"akad_prodi.nama_prodi AS akadprodi_nama_prodi",
			"akad_prodi.date_created AS akadprodi_date_created",
			"akad_prodi.date_updated AS akadprodi_date_updated" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"kode_kurikulum",
			"nm_kurikulum",
			"id_prodi",
			"isactive",
			"id_siakad_kurikulum" 
		];
	}
}
