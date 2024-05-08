<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewAkadMkSyarat'); //set dynamic page title
?>
@extends($layout)
@section('title', $pageTitle)
@section('content')
<section class="page" data-page-type="add" data-page-url="{{ url()->full() }}">
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewAkadMkSyarat') }}</div>
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
                <div class="col-md-4 comp-grid " >
                    <div  class="card card-1 border rounded page-content" >
                        <!--[form-start]-->
                        <form id="akadmksyarat-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-vertical needs-validation" action="{{ route('akadmksyarat.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <label class="control-label" for="id_prodi">{{ __('idProdi') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-id_prodi-holder" class=" "> 
                                        <select required=""  id="ctrl-id_prodi" data-field="id_prodi" name="id_prodi"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                        <option value="">{{ __('selectAValue') }}</option>
                                        <?php 
                                            $options = $comp_model->akadmksyarat_id_prodi_option_list() ?? [];
                                            foreach($options as $option){
                                            $value = $option->value;
                                            $label = $option->label ?? $value;
                                            $selected = Html::get_field_selected('id_prodi', $value, "");
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
                                <div class="form-group ">
                                    <label class="control-label" for="kode_mk_main">{{ __('kodeMkMain') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-kode_mk_main-holder" class=" "> 
                                        <input id="ctrl-kode_mk_main" data-field="kode_mk_main"  value="<?php echo get_value('kode_mk_main') ?>" type="text" placeholder="{{ __('enterKodeMkMain') }}"  required="" name="kode_mk_main"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="kode_mk_syarat">{{ __('kodeMkSyarat') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-kode_mk_syarat-holder" class=" "> 
                                        <input id="ctrl-kode_mk_syarat" data-field="kode_mk_syarat"  value="<?php echo get_value('kode_mk_syarat') ?>" type="text" placeholder="{{ __('enterKodeMkSyarat') }}"  required="" name="kode_mk_syarat"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="nil_mk_syarat">{{ __('nilMkSyarat') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-nil_mk_syarat-holder" class=" "> 
                                        <select required=""  id="ctrl-nil_mk_syarat" data-field="nil_mk_syarat" name="nil_mk_syarat"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                        <option value="">{{ __('selectAValue') }}</option>
                                        <?php
                                            $options = Menu::minMkLulus();
                                            if(!empty($options)){
                                            foreach($options as $option){
                                            $value = $option['value'];
                                            $label = $option['label'];
                                            $selected = Html::get_field_selected('nil_mk_syarat', $value, "");
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
                                <div class="form-group ">
                                    <label class="control-label" for="nil_angka_mk_syarat">{{ __('nilAngkaMkSyarat') }} <span class="text-danger">*</span></label>
                                    <div id="ctrl-nil_angka_mk_syarat-holder" class=" "> 
                                        <input id="ctrl-nil_angka_mk_syarat" data-field="nil_angka_mk_syarat"  value="<?php echo get_value('nil_angka_mk_syarat') ?>" type="number" placeholder="{{ __('enterNilAngkaMkSyarat') }}" step="0.1"  required="" name="nil_angka_mk_syarat"  class="form-control " />
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <label class="control-label" for="urut_syarat">{{ __('urutSyarat') }} </label>
                                    <div id="ctrl-urut_syarat-holder" class=" "> 
                                        <input id="ctrl-urut_syarat" data-field="urut_syarat"  value="<?php echo get_value('urut_syarat') ?>" type="number" placeholder="{{ __('enterUrutSyarat') }}" step="any"  name="urut_syarat"  class="form-control " />
                                    </div>
                                </div>
                            </div>
                            <div class="form-ajax-status"></div>
                            <!--[form-button-start]-->
                            <div class="form-group form-submit-btn-holder text-center mt-3">
                                <button class="btn btn-primary" type="submit">
                                {{ __('submit') }}
                                <i class="fa fa-send"></i>
                                </button>
                            </div>
                            <!--[form-button-end]-->
                        </form>
                        <!--[form-end]-->
                    </div>
                </div>
                <div class="col-md-8 comp-grid " >
                    <div class=" ">
                        <?php
                            $params = [ 'limit' => 25]; //new query param
                            $query = array_merge(request()->query(), $params);
                            $queryParams = http_build_query($query);
                            $url = url("akadmksyarat/index?$queryParams");
                        ?>
                        <div class="ajax-inline-page" data-url="{{ $url }}" >
                            <div class="ajax-page-load-indicator">
                                <div class="text-center d-flex justify-content-center load-indicator">
                                    <span class="loader mr-3"></span>
                                    <span class="fw-bold">{{ __('loading') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
