<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editRpsCpMk'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('editRpsCpMk') }}</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("rpscpmk/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
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
                                                $selected = ( $value == $data['id_mk'] ? 'selected' : null );
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
                                        <label class="control-label" for="id_rps">{{ __('idRps') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-id_rps-holder" class=" ">
                                            <select  id="ctrl-id_rps" data-field="id_rps" name="id_rps"  placeholder="{{ __('selectAValue') }}"    class="form-select" >
                                            <option value="">{{ __('selectAValue') }}</option>
                                            <?php
                                                $options = $comp_model->id_rps_option_list() ?? [];
                                                foreach($options as $option){
                                                $value = $option->value;
                                                $label = $option->label ?? $value;
                                                $selected = ( $value == $data['id_rps'] ? 'selected' : null );
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
                                        <label class="control-label" for="nama_cp">{{ __('namaCp') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_cp-holder" class=" ">
                                            <input id="ctrl-nama_cp" data-field="nama_cp"  value="<?php  echo $data['nama_cp']; ?>" type="text" placeholder="{{ __('enterNamaCp') }}"  name="nama_cp"  class="form-control " />
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
                                            <input id="ctrl-deskripsi" data-field="deskripsi"  value="<?php  echo $data['deskripsi']; ?>" type="text" placeholder="{{ __('enterDeskripsi') }}"  name="deskripsi"  class="form-control " />
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
