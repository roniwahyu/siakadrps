<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('addNewRpsRp'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('addNewRpsRp') }}</div>
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
                        <form id="rpsrps-add-form" role="form" novalidate enctype="multipart/form-data" class="form page-form form-horizontal needs-validation" action="{{ route('rpsrps.store') }}" method="post">
                            @csrf
                            <div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_fakultas">{{ __('idFakultas') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_fakultas-holder" class=" ">
                                                <select  id="ctrl-id_fakultas" data-field="id_fakultas" name="id_fakultas"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php 
                                                    $options = $comp_model->id_fakultas_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('id_fakultas', $value, "");
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
                                            <label class="control-label" for="id_prodi">{{ __('idProdi') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_prodi-holder" class=" ">
                                                <select  id="ctrl-id_prodi" data-field="id_prodi" name="id_prodi"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php 
                                                    $options = $comp_model->id_prodi_option_list() ?? [];
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
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_mk">{{ __('idMk') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_mk-holder" class=" ">
                                                <select  id="ctrl-id_mk" data-field="id_mk" name="id_mk"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                                <option value="">{{ __('selectAValue') }}</option>
                                                <?php 
                                                    $options = $comp_model->id_mk_option_list() ?? [];
                                                    foreach($options as $option){
                                                    $value = $option->value;
                                                    $label = $option->label ?? $value;
                                                    $selected = Html::get_field_selected('id_mk', $value, "");
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
                                            <label class="control-label" for="id_otoritas1">{{ __('idOtoritas1') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_otoritas1-holder" class=" ">
                                                <input id="ctrl-id_otoritas1" data-field="id_otoritas1"  value="<?php echo get_value('id_otoritas1') ?>" type="number" placeholder="{{ __('enterIdOtoritas1') }}" step="any"  name="id_otoritas1"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="id_otoritas2">{{ __('idOtoritas2') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-id_otoritas2-holder" class=" ">
                                                <input id="ctrl-id_otoritas2" data-field="id_otoritas2"  value="<?php echo get_value('id_otoritas2') ?>" type="number" placeholder="{{ __('enterIdOtoritas2') }}" step="any"  name="id_otoritas2"  class="form-control " />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group ">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label class="control-label" for="deskripsi_rps">{{ __('deskripsiRps') }} </label>
                                        </div>
                                        <div class="col-sm-8">
                                            <div id="ctrl-deskripsi_rps-holder" class=" ">
                                                <textarea placeholder="{{ __('enterDeskripsiRps') }}" id="ctrl-deskripsi_rps" data-field="deskripsi_rps"  rows="5" name="deskripsi_rps" class=" form-control"><?php echo get_value('deskripsi_rps') ?></textarea>
                                                <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
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
