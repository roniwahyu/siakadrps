<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editRpsCp'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('editRpsCp') }}</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("rpscp/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="id_prodi">{{ __('idProdi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-id_prodi-holder" class=" ">
                                            <input id="ctrl-id_prodi" data-field="id_prodi"  value="<?php  echo $data['id_prodi']; ?>" type="number" placeholder="{{ __('enterIdProdi') }}" step="any"  name="id_prodi"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kode_cp">{{ __('kodeCp') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kode_cp-holder" class=" ">
                                            <input id="ctrl-kode_cp" data-field="kode_cp"  value="<?php  echo $data['kode_cp']; ?>" type="text" placeholder="{{ __('enterKodeCp') }}"  name="kode_cp"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_cp">{{ __('namaCp') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_cp-holder" class=" ">
                                            <textarea placeholder="{{ __('enterNamaCp') }}" id="ctrl-nama_cp" data-field="nama_cp"  rows="5" name="nama_cp" class=" form-control"><?php  echo $data['nama_cp']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="deskripsi">{{ __('deskripsi') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-deskripsi-holder" class=" ">
                                            <textarea placeholder="{{ __('enterDeskripsi') }}" id="ctrl-deskripsi" data-field="deskripsi"  rows="5" name="deskripsi" class=" form-control"><?php  echo $data['deskripsi']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="id_jenis_cp">{{ __('idJenisCp') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-id_jenis_cp-holder" class=" ">
                                            <select  id="ctrl-id_jenis_cp" data-field="id_jenis_cp" name="id_jenis_cp"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = $comp_model->id_jenis_cp_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['id_jenis_cp'] ? 'selected' : null );
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
