@extends('index')

@section('title')
	Form
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

     <!-- JQuery DataTable Css -->
    {{ Html::style('bsbmd/plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css') }}
	
@endsection

@section('content')
        <div class="container-fluid">
            <div class="block-header">
                <h2>User Settings</h2>
            </div>

            <!-- Vertical Layout -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header d-flex justify-content-between align-items-center">
                            <h2>Permissions</h2>
                            <div class="pull-right">
                                <a href="{{route('admins.create')}}" class="btn btn-success btn-block waves-effect">Add New</a>
                            </div>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                        	<th>Name</th>
                                            <th>Edit Users</th>
                                            <th>Edit Events</th>
                                            <th>Edit Guest Lists</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	@foreach($roles as $row)
                                        <tr>                                        	
                                            <td>{{ $row->name }}</td>
                                            @php $value = 'Yes'; if ($row->users == 0) $value = 'No'; @endphp
                                            <td>{{ $value }}</td>
                                            @php $value = 'Yes'; if ($row->events == 0) $value = 'No'; @endphp
                                            <td>{{ $value }}</td>
                                            @php $value = 'Yes'; if ($row->entries == 0) $value = 'No'; @endphp
                                            <td>{{ $value }}</td>
                                        	<td>
                                        		<a href="{{route('ungrouped.edit',$row->id)}}" class="btn btn-warning waves-effect">Edit</a>
                                        	</td>
                                        	<td>
                                        		<form id="delete_form" method="POST" action="{{ route('admins.destroy',$row->id) }}">
					                            	{{ csrf_field() }}
					                            	<input name="_method" type="hidden" value="DELETE">
					                                <button class="btn btn-danger waves-effect" type="submit">Delete</button>
					                            </form>
                                        	</td>	                                   
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Vertical Layout -->
            
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header d-flex justify-content-between align-items-center">
                            <h2>Users</h2>
                            <div class="pull-right">
                                <a href="{{route('admins.create')}}" class="btn btn-success btn-block m-t-15 waves-effect">Add New</a>
                                </div>
                        </div>
                        <div class="body">                        	
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover dataTable js-basic-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($users as $row)
                                        <tr>
                                        	<td>{{ $row->name }}</td>
                                        	<td>
                                        		<a href="" class="btn btn-warning waves-effect">Edit</a>
                                        	</td>
                                        	<td>
                                        		<form id="delete_form" method="POST" action="">
					                            	{{ csrf_field() }}
					                            	<input name="_method" type="hidden" value="DELETE">
					                                <button class="btn btn-danger waves-effect" type="submit">Delete</button>
					                            </form>
                                        	</td>	                                   
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    {{Html::script('bsbmd/plugins/sweetalert/sweetalert.min.js')}}
    {{Html::script('bsbmd/js/pages/forms/form-validation.js')}}

    <!-- Jquery DataTable Plugin Js -->
    {{Html::script('bsbmd/plugins/jquery-datatable/jquery.dataTables.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.flash.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/jszip.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/pdfmake.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/vfs_fonts.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.html5.min.js')}}	
    {{Html::script('bsbmd/plugins/jquery-datatable/extensions/export/buttons.print.min.js')}}	
    {{Html::script('bsbmd/js/pages/tables/jquery-datatable.js') }}
@endsection