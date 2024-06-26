<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editAkadMk'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="edit" data-page-url="{{ url()->full() }}">
    <?php
        if( $show_header == true ){
    ?>
    <div  class="bg-light p-3 mb-3" >
        <div class="container">
            <div class="row justify-content-between align-items-center">
                <div class="col-auto  back-btn-col" >
                    <a class="back-btn btn " href="{{ url()->previous() }}" >
                        <i class="fa fa-angle-left"></i>                                
                         
                    </a>
                </div>
                <div class="col  " >
                    <div class="">
                        <div class="h5 font-weight-bold text-primary">{{ __('editAkadMk') }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
    <div  class="" >
        <div class="container">
            <div class="row ">
                <div class="col-md-9 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("akadmk/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kode_mk">{{ __('kodeMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kode_mk-holder" class=" ">
                                            <input id="ctrl-kode_mk" data-field="kode_mk"  value="<?php  echo $data['kode_mk']; ?>" type="text" placeholder="{{ __('enterKodeMk') }}"  required="" name="kode_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="id_siakad_kurikulum">{{ __('idSiakadKurikulum') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-id_siakad_kurikulum-holder" class=" ">
                                            <select required=""  id="ctrl-id_siakad_kurikulum" data-field="id_siakad_kurikulum" name="id_siakad_kurikulum"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = $comp_model->id_siakad_kurikulum_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['id_siakad_kurikulum'] ? 'selected' : null );
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nm_mk">{{ __('nmMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nm_mk-holder" class=" ">
                                            <input id="ctrl-nm_mk" data-field="nm_mk"  value="<?php  echo $data['nm_mk']; ?>" type="text" placeholder="{{ __('enterNmMk') }}"  required="" name="nm_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="jns_mk">{{ __('jnsMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-jns_mk-holder" class=" ">
                                            <select required=""  id="ctrl-jns_mk" data-field="jns_mk" name="jns_mk"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::jnsMk();
                                                $field_value = $data['jns_mk'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kurikulum_mk">{{ __('kurikulumMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kurikulum_mk-holder" class=" ">
                                            <select required=""  id="ctrl-kurikulum_mk" data-field="kurikulum_mk" name="kurikulum_mk"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::kurikulumMk();
                                                $field_value = $data['kurikulum_mk'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kelompok_mk">{{ __('kelompokMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kelompok_mk-holder" class=" ">
                                            <select required=""  id="ctrl-kelompok_mk" data-field="kelompok_mk" name="kelompok_mk"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::kelompokMk();
                                                $field_value = $data['kelompok_mk'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sks_mk">{{ __('sksMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sks_mk-holder" class=" ">
                                            <input id="ctrl-sks_mk" data-field="sks_mk"  value="<?php  echo $data['sks_mk']; ?>" type="number" placeholder="{{ __('enterSksMk') }}" step="any"  required="" name="sks_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sks_tatapmuka">{{ __('sksTatapmuka') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sks_tatapmuka-holder" class=" ">
                                            <input id="ctrl-sks_tatapmuka" data-field="sks_tatapmuka"  value="<?php  echo $data['sks_tatapmuka']; ?>" type="number" placeholder="{{ __('enterSksTatapmuka') }}" step="any"  required="" name="sks_tatapmuka"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sks_praktikum">{{ __('sksPraktikum') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sks_praktikum-holder" class=" ">
                                            <input id="ctrl-sks_praktikum" data-field="sks_praktikum"  value="<?php  echo $data['sks_praktikum']; ?>" type="number" placeholder="{{ __('enterSksPraktikum') }}" step="any"  required="" name="sks_praktikum"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="min_mk_lulus">{{ __('minMkLulus') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-min_mk_lulus-holder" class=" ">
                                            <select required=""  id="ctrl-min_mk_lulus" data-field="min_mk_lulus" name="min_mk_lulus"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::minMkLulus();
                                                $field_value = $data['min_mk_lulus'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="status_mk">{{ __('statusMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-status_mk-holder" class=" ">
                                            <select required=""  id="ctrl-status_mk" data-field="status_mk" name="status_mk"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::statusMk();
                                                $field_value = $data['status_mk'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="upload_silabus_mk">{{ __('uploadSilabusMk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-upload_silabus_mk-holder" class=" ">
                                            <input id="ctrl-upload_silabus_mk" data-field="upload_silabus_mk"  value="<?php  echo $data['upload_silabus_mk']; ?>" type="text" placeholder="{{ __('enterUploadSilabusMk') }}"  name="upload_silabus_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="upload_sap_mk">{{ __('uploadSapMk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-upload_sap_mk-holder" class=" ">
                                            <input id="ctrl-upload_sap_mk" data-field="upload_sap_mk"  value="<?php  echo $data['upload_sap_mk']; ?>" type="text" placeholder="{{ __('enterUploadSapMk') }}"  name="upload_sap_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="upload_bahan_mk">{{ __('uploadBahanMk') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-upload_bahan_mk-holder" class=" ">
                                            <input id="ctrl-upload_bahan_mk" data-field="upload_bahan_mk"  value="<?php  echo $data['upload_bahan_mk']; ?>" type="text" placeholder="{{ __('enterUploadBahanMk') }}"  name="upload_bahan_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="upload_diktat_mk">{{ __('uploadDiktatMk') }} <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-upload_diktat_mk-holder" class=" ">
                                            <input id="ctrl-upload_diktat_mk" data-field="upload_diktat_mk"  value="<?php  echo $data['upload_diktat_mk']; ?>" type="text" placeholder="{{ __('enterUploadDiktatMk') }}"  required="" name="upload_diktat_mk"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="id_prodi">{{ __('idProdi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-id_prodi-holder" class=" ">
                                            <select  id="ctrl-id_prodi" data-field="id_prodi" name="id_prodi"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = $comp_model->akadmk_id_prodi_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['id_prodi'] ? 'selected' : null );
                                            ?>
                                            <option <?php echo $selected; ?> value="<?php echo $value; ?>">
                                            <?php echo $label; ?>
                                            </option>
                                            <?php
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="isactive">{{ __('isactive') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-isactive-holder" class=" ">
                                            <select  id="ctrl-isactive" data-field="isactive" name="isactive"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = Menu::isactive();
                                                $field_value = $data['isactive'];
                                                if(!empty($options)){
                                                foreach($options as $option){
                                                $value = $option['value'];
                                                $label = $option['label'];
                                                $selected = Html::get_record_selected($field_value, $value);
                                            ?>
                                            <option <?php echo $selected ?> value="<?php echo $value ?>">
                                            <?php echo $label ?>
                                            </option>                                   
                                            <?php
                                                }
                                                }
                                            ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-ajax-status"></div>
                        <!--[form-content-end]-->
                        <!--[form-button-start]-->
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">
                            {{ __('update') }}
                            <i class="fa fa-send"></i>
                            </button>
                        </div>
                        <!--[form-button-end]-->
                    </form>
                    <!--[form-end]-->
                </div>
            </div>
        </div>
    </div>
</div>
</section>


@endsection
