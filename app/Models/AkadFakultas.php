<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadFakultas extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_fakultas';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_fakultas';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'universitas_id','kode_fakultas','nama_fakultas','keterangan'
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
				akad_fakultas.id_fakultas LIKE ?  OR 
				akad_universitas.kode_universitas LIKE ?  OR 
				akad_universitas.nama_universitas LIKE ?  OR 
				akad_fakultas.kode_fakultas LIKE ?  OR 
				akad_fakultas.nama_fakultas LIKE ?  OR 
				akad_fakultas.keterangan LIKE ?  OR 
				akad_universitas.id_universitas LIKE ? 
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
			"akad_fakultas.id_fakultas AS id_fakultas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_fakultas.kode_fakultas AS kode_fakultas",
			"akad_fakultas.nama_fakultas AS nama_fakultas",
			"akad_fakultas.keterangan AS keterangan",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas" 
		];
	}
	

	/**
     * return exportList page fields of the model.
     * 
     * @return array
     */
	public static function exportListFields(){
		return [ 
			"akad_fakultas.id_fakultas AS id_fakultas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_fakultas.kode_fakultas AS kode_fakultas",
			"akad_fakultas.nama_fakultas AS nama_fakultas",
			"akad_fakultas.keterangan AS keterangan",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas" 
		];
	}
	

	/**
     * return view page fields of the model.
     * 
     * @return array
     */
	public static function viewFields(){
		return [ 
			"akad_fakultas.id_fakultas AS id_fakultas",
			"akad_fakultas.universitas_id AS universitas_id",
			"akad_fakultas.kode_fakultas AS kode_fakultas",
			"akad_fakultas.nama_fakultas AS nama_fakultas",
			"akad_fakultas.keterangan AS keterangan",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"akad_fakultas.id_fakultas AS id_fakultas",
			"akad_fakultas.universitas_id AS universitas_id",
			"akad_fakultas.kode_fakultas AS kode_fakultas",
			"akad_fakultas.nama_fakultas AS nama_fakultas",
			"akad_fakultas.keterangan AS keterangan",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"universitas_id",
			"kode_fakultas",
			"nama_fakultas",
			"keterangan",
			"id_fakultas" 
		];
	}
}
