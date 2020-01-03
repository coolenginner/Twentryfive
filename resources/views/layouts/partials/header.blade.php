
<!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid" style = "background:darkgreen">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="">
                    <span>@lang('app.app-name')</span>
                </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- New Guest List Entry-->
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#newGuestList"><i class="material-icons m-r-10">person_add</i>New Guest List Entry</a></li>
                    <!-- #END# New Guest List Entry-->
                    <!-- New Evnet-->
                    <li><a href="javascript:void(0);" data-toggle="modal" data-target="#newEvent"><i class="material-icons m-r-10">event</i>New Event</a></li>
                    <!-- #END# New Event -->
                    <!-- My calender-->
                    <li><a href="javascript:void(0);" class="datepicker" data-dtp="dtp_RAzlT"><i class="material-icons m-r-10">date_range</i>My Calender</a></li>
                    <!-- #END# My Calender-->
                    <!-- Call Search -->
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- User image -->
                    <li>
                        <div class="user-image" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img src="{{url('images',Auth::user()->profiles?Auth::user()->profiles->avatar:'user.png')}}" width="50" height="50" alt="User" style="margin-top:10px;"/>
                        </div>
                        <ul class="dropdown-menu pull-right">
                            <li {{ Route::is('profile.index')? 'class=active':'' }}><a href="{{ route('profile.index') }}"><i class="material-icons">person</i>Profile</a></li>
                            <li>  
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                        Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# user image -->
                    <!-- <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="modal fade" id="newEvent" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_validation" action="{{ url('events/store') }}" method="POST" novalidate="novalidate">
                {{ csrf_field() }}
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">New Event</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name of Event</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="event_name" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Location</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="location" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Date</label></div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" class="datetimepicker form-control" name = "event_date" placeholder="Please choose date &amp; time..." data-dtp="dtp_WyOVl">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Guest List Templete</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Submit</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="modal fade" id="newGuestList" tabindex="-1" role="dialog" style="display: none;">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <form id="form_validation" method="POST" novalidate="novalidate">
                    <div class="modal-header">
                        <h4 class="modal-title" id="largeModalLabel">New Guest List Entry</h4>
                    </div>
                    <div class="modal-body">
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Event</label></div>
                            <div class="col-md-9">
                                <select class="form-control bootstrap-select" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name of Guest</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="guestname" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Name of Tickets</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-line">   
                                    <input type="text" class="form-control" name="ticketName" required="" aria-required="true">
                                </div>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Affliation</label></div>
                            <div class="col-md-9">
                                <select class="form-control" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    <option value="10">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                    <option value="50">50</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3">
                                <label class="form-label">Credential Type</label>
                            </div>
                            <div class="col-md-9">
                                <select class="form-control" data-live-search="true" style="display: none;">
                                    <option value="">-- Please select --</option>
                                    <option value="AAA">AAA</option>
                                    <option value="GA">GA</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                        </div>
                        <div class="row form-group form-float">
                            <div class="col-md-3"><label class="form-label">Status</label></div>
                            <div class="col-md-9">
                                <select class="form-control" data-live-search="true" style="display: none;">
                                    <option value="">Approved</option>
                                    <option value="10">Pending</option>
                                    <option value="20">Declined</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-link waves-effect">Submit</button>
                        <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    