<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewAkadDosen'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewAkadDosen') }}</div>
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
                        <form id="akaddosen-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('akaddosen.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nidn">{{ __('nidn') }} <span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nidn-holder" class=" ">
                                                <input id="ctrl-nidn" data-field="nidn"  value="<?php echo get_value('nidn') ?>" type="text" placeholder="{{ __('enterNidn') }}"  required="" name="nidn"  class="form-control " />
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
                                                <input id="ctrl-id_prodi" data-field="id_prodi"  value="<?php echo get_value('id_prodi') ?>" type="number" placeholder="{{ __('enterIdProdi') }}" step="any"  name="id_prodi"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama_lengkap">{{ __('namaLengkap') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nama_lengkap-holder" class=" ">
                                                <input id="ctrl-nama_lengkap" data-field="nama_lengkap"  value="<?php echo get_value('nama_lengkap') ?>" type="text" placeholder="{{ __('enterNamaLengkap') }}"  name="nama_lengkap"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="nama_lengkap_gelar">{{ __('namaLengkapGelar') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-nama_lengkap_gelar-holder" class=" ">
                                                <input id="ctrl-nama_lengkap_gelar" data-field="nama_lengkap_gelar"  value="<?php echo get_value('nama_lengkap_gelar') ?>" type="text" placeholder="{{ __('enterNamaLengkapGelar') }}"  name="nama_lengkap_gelar"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="jkel">{{ __('jkel') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-jkel-holder" class=" ">
                                                <select  id="ctrl-jkel" data-field="jkel" name="jkel"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php
                                                    $options = Menu::jkel();
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('jkel', $value, "");
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
                                            <label class="control-label" for="id_jabfung">{{ __('idJabfung') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_jabfung-holder" class=" ">
                                                <input id="ctrl-id_jabfung" data-field="id_jabfung"  value="<?php echo get_value('id_jabfung') ?>" type="number" placeholder="{{ __('enterIdJabfung') }}" step="any"  name="id_jabfung"  class="form-control " />
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
                                                    if(!empty($options)){
                                                    foreach($options as $option){
                                                    $value = $option['value'];
                                                    $label = $option['label'];
                                                    $selected = Html::get_field_selected('isactive', $value, "");
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
                                            <label class="control-label" for="id_user">{{ __('idUser') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_user-holder" class=" ">
                                                <input id="ctrl-id_user" data-field="id_user"  value="<?php echo get_value('id_user') ?>" type="number" placeholder="{{ __('enterIdUser') }}" step="any"  name="id_user"  class="form-control " />
                                            </div>
                                        </div>
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
            </div>
        </div>
    </div>
</section>


@endsection
