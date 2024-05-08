<!-- 
expose component model to current view
e.g $arrDataFromDb = $comp_model->fetchData(); //function name
-->
@inject('comp_model', 'App\Models\ComponentsData')
<?php
    $pageTitle = __('editRpsKategoriRelasi'); //set dynamic page title
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
                        <div class="h5 font-weight-bold text-primary">{{ __('editRpsKategoriRelasi') }}</div>
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
                        <form novalidate  id="" role="form" enctype="multipart/form-data"  class="form page-form form-horizontal needs-validation" action="<?php print_link("rpskategorirelasi/edit/$rec_id"); ?>" method="post">
                        <!--[form-content-start]-->
                        @csrf
                        <div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="kode_kategori">{{ __('kodeKategori') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-kode_kategori-holder" class=" ">
                                            <input id="ctrl-kode_kategori" data-field="kode_kategori"  value="<?php  echo $data['kode_kategori']; ?>" type="text" placeholder="{{ __('enterKodeKategori') }}"  name="kode_kategori"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="nama_kategori">{{ __('namaKategori') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-nama_kategori-holder" class=" ">
                                            <input id="ctrl-nama_kategori" data-field="nama_kategori"  value="<?php  echo $data['nama_kategori']; ?>" type="text" placeholder="{{ __('enterNamaKategori') }}"  name="nama_kategori"  class="form-control " />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="keterangan">{{ __('keterangan') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-keterangan-holder" class=" ">
                                            <textarea placeholder="{{ __('enterKeterangan') }}" id="ctrl-keterangan" data-field="keterangan"  rows="5" name="keterangan" class=" form-control"><?php  echo $data['keterangan']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group ">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <label class="control-label" for="sinonim">{{ __('sinonim') }} </label>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="ctrl-sinonim-holder" class=" ">
                                            <textarea placeholder="{{ __('enterSinonim') }}" id="ctrl-sinonim" data-field="sinonim"  rows="5" name="sinonim" class=" form-control"><?php  echo $data['sinonim']; ?></textarea>
                                            <!--<div class="invalid-feedback animated bounceIn text-center">{{ __('pleaseEnterText') }}</div>-->
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
