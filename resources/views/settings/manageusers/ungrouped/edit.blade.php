@extends('index')

@section('title')
    Edit Permission
@endsection

@section('extra-css')
<!-- Colorpicker Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css') }}

    <!-- Dropzone Css -->
    {{ Html::style('bsbmd/plugins/dropzone/dropzone.css') }}

    <!-- Multi Select Css -->
    {{ Html::style('bsbmd/plugins/multi-select/css/multi-select.css') }}

    <!-- Bootstrap Spinner Css -->
    {{ Html::style('bsbmd/plugins/jquery-spinner/css/bootstrap-spinner.css') }}

    <!-- Bootstrap Tagsinput Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}

    <!-- Bootstrap Select Css -->
    {{ Html::style('bsbmd/plugins/bootstrap-select/css/bootstrap-select.css') }}

    <!-- noUISlider Css -->
    {{ Html::style('bsbmd/plugins/nouislider/nouislider.min.css') }}
    
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>Edit Role</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Edit Role
                            </h2>
                        </div>
                        <div class="body">
                           <form id="form_validation" method="POST" action="{{ route('ungrouped.update',$role->id) }}">
                            {{ csrf_field() }}
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input name="_method" type="hidden" value="PUT">
                                        <input type="text" class="form-control" name="name" value="{{ $role->name }}" required>
                                        <label class="form-label">Name</label>
                                    </div>
                                </div>
                                <div class="form-group form-float"> 
                                    <label class="form-label">Users Editable</label>
                                    <select class="form-control bootstrap-select" name="users" data-live-search="true" style="display: none;">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group form-float"> 
                                    <label class="form-label">Events Editable</label>
                                    <select class="form-control bootstrap-select" name="events" data-live-search="true" style="display: none;">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <div class="form-group form-float"> 
                                    <label class="form-label">Guest List Editable</label>
                                    <select class="form-control bootstrap-select" name="entries" data-live-search="true" style="display: none;">
                                        <option value="1">Yes</option>
                                        <option value="0">No</option>
                                    </select>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">UPDATE</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
           
        </div>
@endsection

@section('extra-script')
    {{Html::script('bsbmd/plugins/autosize/autosize.js')}}
    {{Html::script('bsbmd/plugins/momentjs/moment.js')}}
    {{Html::script('bsbmd/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')}}
    {{Html::script('bsbmd/js/pages/forms/basic-form-elements.js')}}
    {{Html::script('bsbmd/plugins/jquery-validation/jquery.validate.js')}}
    {{Html::script('bsbmd/plugins/jquery-steps/jquery.steps.js')}}
    <!-- Multi Select Plugin Js -->
    {{Html::script('bsbmd/plugins/multi-select/js/jquery.multi-select.js')}}
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}
    <script type="text/javascript">
        $("select").val(foo).prop("selected", true);
    </script>
@endsection

