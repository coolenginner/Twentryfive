<section>
    <!-- Left Sidebar -->
    <aside id="leftsidebar" class="sidebar">
        <!-- Menu -->
        <div class="menu">
            <ul class="list">
                <li {{Route::is('dashboard')? 'class=active':''}}>
                    <a href="{{route('dashboard')}}">
                        <i class="material-icons">dashboard</i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li {{Route::is('events/index')? 'class=active':''}}>
                    <a href="{{route('events/index')}}">
                        <i class="material-icons">event</i>
                        <span>Events</span>
                    </a>
                </li>
                <li {{Route::is('contacts/index')? 'class=active': ''}}>
                    <a href="{{route('contacts/index')}}">
                        <i class="material-icons">people</i>
                        <span>Contacts</span>
                    </a>
                </li>
                <li>
                    <a href="javascript:void(0);" class="menu-toggle">
                        <i class="material-icons">settings</i>
                        <span>Settings</span>
                    </a>
                    <ul class="ml-menu">
                        <!-- @role('admin')  -->
                            <li  {{Route::is('admins.index')||Route::is('admins.create')||Route::is('admins.edit')? 'class=active':''}}>
                                <a href="{{route('admins.index')}}">User Setting</a>
                            </li>
                            <li  {{Route::is('ungrouped.index')||Route::is('ungrouped.create')||Route::is('ungrouped.edit')? 'class=active':''}}>
                                <a href="{{route('ungrouped.index')}}">Guest List Setting</a>
                            </li>
                        <!-- @endrole -->
                    </ul>
                </li>
            </ul> 
        </div>
        <!-- #Menu -->
        {{-- <!-- Footer -->
        <div class="legal">
            <div class="copyright">
                &copy; 2020 <a href="javascript:void(0);">Jordan Loyd</a>.
            </div>
            <div class="version">
                <b>Version: </b> 1.0.0
            </div>
        </div>
        <!-- #Footer --> --}}
    </aside>
    <!-- #END# Left Sidebar -->
    <aside id="userightsidebar" class="right-sidebar" style="overflow: scroll;">
        <div class="card margin-0 masked-input">
            <form id="form_validation" method="POST" novalidate="novalidate">
                <div class="header">
                    <div class="row d-flex align-items-center">
                        <div class="col-md-3">
                            <label class="form-label">Photo</label>
                        </div>
                        <div class="col-md-9">
                            <img src="../images/user.png" width="60" height="60" alt="User" class="img-circle">
                            <button type="button" class="btn btn-danger m-l-50">Remove</button>
                            <button type="button" class="btn btn-success m-l-20">Update</button>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">First Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="Eventname" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Last Name</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Company</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Title</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Birthday</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line" id="bs_datepicker_container">   
                                <input type="text" class="form-control" name="location" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="fo
                            rm-label">Gender</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <input type="radio" name="Gender" id="unspecified" class="with-gap">
                                <label for="unspecified">Unspecified</label>
    
                                <input type="radio" name="Gender" id="male" class="with-gap">
                                <label for="male" class="m-l-20">male</label>

                                <input type="radio" name="Gender" id="female" class="with-gap">
                                <label for="female" class="m-l-20">Female</label>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">note</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line">   
                                <textarea name="note" id="note" cols="50" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Home</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">email</i>  
                                <input type="text" class="form-control email" name="email" placeholder="Ex: example@example.com">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">moblie</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone_iphone</i>
                                <input type="text" class="form-control mobile-phone-number" placeholder="Ex: +00 (000) 000-00-00">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">work</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">phone</i>
                                <input type="text" class="form-control mobile-phone-number" name="guestemplete" placeholder="Ex: +00 (000) 000-00-00" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group form-float">
                        <div class="col-md-3">
                            <label class="form-label">Adress</label>
                        </div>
                        <div class="col-md-9">
                            <div class="form-line d-flex align-items-center">
                                <i class="material-icons font-20 m-r-10">place</i>
                                <input type="text" class="form-control" name="guestemplete" required="" aria-required="true">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer">
                    <a href="" class=" d-flex align-items-center">
                        <i class="material-icons m-r-10">add_box</i>
                        Add Field 
                    </a>
                </div>
            </form>
        </div>
    </aside>
    <!-- #END# Right Sidebar -->
</section>