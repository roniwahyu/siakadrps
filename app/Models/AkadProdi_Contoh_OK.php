<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadProdi extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_prodi';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_prodi';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'fakultas_id','kode_prodi','nama_prodi'
	];
	public $timestamps = false;
	

	/**
     * Set search query for the model
	 * @param \Illuminate\Database\Eloquent\Builder $query
	 * @param string $text
     */
	public static function search($query, $text){
		//search table record 
		$search_condition = '(
				akad_fakultas.kode_fakultas LIKE ?  OR 
				akad_fakultas.nama_fakultas LIKE ?  OR 
				akad_prodi.kode_prodi LIKE ?  OR 
				akad_prodi.nama_prodi LIKE ?  OR 
				akad_fakultas.id_fakultas LIKE ?  OR 
				akad_fakultas.keterangan LIKE ?  OR 
				akad_prodi.id_prodi LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"akad_prodi.fakultas_id AS fakultas_id",
			DB::raw("concat('(',akad_fakultas.kode_fakultas,') ',akad_fakultas.nama_fakultas) AS akadfakultas_kode_fakultas"),
			"akad_fakultas.nama_fakultas AS akadfakultas_nama_fakultas",
			DB::raw("concat('(',akad_prodi.kode_prodi,') ',akad_prodi.nama_prodi) AS nama_prodi"),
			"akad_fakultas.id_fakultas AS akadfakultas_id_fakultas",
			"akad_prodi.id_prodi AS id_prodi" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"akad_prodi.fakultas_id AS fakultas_id",
			"akad_fakultas.kode_fakultas AS akadfakultas_kode_fakultas",
			"akad_fakultas.nama_fakultas AS akadfakultas_nama_fakultas",
			"akad_prodi.kode_prodi AS kode_prodi",
			"akad_prodi.nama_prodi AS nama_prodi",
			"akad_fakultas.id_fakultas AS akadfakultas_id_fakultas",
			"akad_prodi.id_prodi AS id_prodi" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"akad_prodi.id_prodi AS id_prodi",
			"akad_prodi.fakultas_id AS fakultas_id",
			"akad_prodi.kode_prodi AS kode_prodi",
			"akad_prodi.nama_prodi AS nama_prodi",
			"akad_fakultas.id_fakultas AS akadfakultas_id_fakultas",
			"akad_fakultas.universitas_id AS akadfakultas_universitas_id",
			"akad_fakultas.kode_fakultas AS akadfakultas_kode_fakultas",
			"akad_fakultas.nama_fakultas AS akadfakultas_nama_fakultas",
			"akad_fakultas.keterangan AS akadfakultas_keterangan",
			"akad_fakultas.date_created AS akadfakultas_date_created",
			"akad_fakultas.date_updated AS akadfakultas_date_updated" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"akad_prodi.id_prodi AS id_prodi",
			"akad_prodi.fakultas_id AS fakultas_id",
			"akad_prodi.kode_prodi AS kode_prodi",
			"akad_prodi.nama_prodi AS nama_prodi",
			"akad_fakultas.id_fakultas AS akadfakultas_id_fakultas",
			"akad_fakultas.universitas_id AS akadfakultas_universitas_id",
			"akad_fakultas.kode_fakultas AS akadfakultas_kode_fakultas",
			"akad_fakultas.nama_fakultas AS akadfakultas_nama_fakultas",
			"akad_fakultas.keterangan AS akadfakultas_keterangan",
			"akad_fakultas.date_created AS akadfakultas_date_created",
			"akad_fakultas.date_updated AS akadfakultas_date_updated" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"fakultas_id",
			"kode_prodi",
			"nama_prodi",
			"id_prodi" 
		];
	}
}
