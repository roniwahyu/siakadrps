<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class AkadThnAkademik extends Model 
{
	

	/**
     * The table associated with the model.
     *
     * @var string
     */
	protected $table = 'akad_thn_akademik';
	

	/**
     * The table primary key field
     *
     * @var string
     */
	protected $primaryKey = 'id_thn_akademik';
	

	/**
     * Table fillable fields
     *
     * @var array
     */
	protected $fillable = [
		'id_universitas','semester_periode','isactive'
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
				akad_thn_akademik.id_thn_akademik LIKE ?  OR 
				akad_universitas.nama_universitas LIKE ?  OR 
				akad_thn_akademik.semester_periode LIKE ?  OR 
				akad_universitas.kode_universitas LIKE ?  OR 
				akad_universitas.id_universitas LIKE ? 
		)';
		$search_params = [
			"%$text%","%$text%","%$text%","%$text%","%$text%"
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
			"akad_thn_akademik.id_thn_akademik AS id_thn_akademik",
			"akad_thn_akademik.id_universitas AS id_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_thn_akademik.semester_periode AS semester_periode",
			"akad_thn_akademik.isactive AS isactive",
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
			"akad_thn_akademik.id_thn_akademik AS id_thn_akademik",
			"akad_thn_akademik.id_universitas AS id_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_thn_akademik.semester_periode AS semester_periode",
			"akad_thn_akademik.isactive AS isactive",
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
			"akad_thn_akademik.id_thn_akademik AS id_thn_akademik",
			"akad_thn_akademik.id_universitas AS id_universitas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_thn_akademik.semester_periode AS semester_periode",
			"akad_thn_akademik.isactive AS isactive",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas" 
		];
	}
	

	/**
     * return exportView page fields of the model.
     * 
     * @return array
     */
	public static function exportViewFields(){
		return [ 
			"akad_thn_akademik.id_thn_akademik AS id_thn_akademik",
			"akad_thn_akademik.id_universitas AS id_universitas",
			"akad_universitas.kode_universitas AS akaduniversitas_kode_universitas",
			"akad_universitas.nama_universitas AS akaduniversitas_nama_universitas",
			"akad_thn_akademik.semester_periode AS semester_periode",
			"akad_thn_akademik.isactive AS isactive",
			"akad_universitas.id_universitas AS akaduniversitas_id_universitas" 
		];
	}
	

	/**
     * return edit page fields of the model.
     * 
     * @return array
     */
	public static function editFields(){
		return [ 
			"id_universitas",
			"semester_periode",
			"isactive",
			"id_thn_akademik" 
		];
	}
}
