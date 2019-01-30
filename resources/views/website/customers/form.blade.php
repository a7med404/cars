                    <div class="x_panel">
                    <div class="x_title">
                        <h2> All Departments </h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                            <li><a href="#">Settings 1</a>
                            </li>
                            <li><a href="#">Settings 2</a>
                            </li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a>
                        </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">


                    <div class="row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('first_name', null, ['id' => 'first_name', 'class' => " {{ $errors->has('first_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('first_name') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('first_name', 'Frst Name', ['class' => 'custom-lable']) !!}
                        </div>

                        <div class="col-md-3 custom-input">
                            {!! Form::text('last_name', null, ['id' => 'last_name', 'class' => " {{ $errors->has('last_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('last_name') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('last_name', 'Last Name', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('phone_number', null, ['id' => 'phone_number', 'class' => " {{ $errors->has('phone_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone_number') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('phone_number', 'Phone Number', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('email', null, ['id' => 'email', 'class' => " {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('email', 'E-Mail', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::file('profile_image', ['id' => 'profile_image', 'class' => "form-control {{ $errors->has('profile_image') ? ' is-invalid' : '' }}", 'value' => "{{ old('profile_image') }}", 'autofocus']) !!}
                            {!! Form::label('profile_image', 'Profile Image', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>

                    @if(!isset($customerInfo))
                    <div class="row">
                        <div class="col-md-3 custom-input">
                            {!! Form::password('password', null, ['id' => 'password', 'class' => " {{ $errors->has('password') ? ' is-invalid' : '' }}", 'value' => "{{ old('password') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('password', 'Password', ['class' => 'custom-lable']) !!}
                        </div>
                        <div class="col-md-3 custom-input">
                            {!! Form::password('password_confirmation', null, ['id' => 'password-confirm', 'class' => " {{ $errors->has('password-confirm') ? ' is-invalid' : '' }}", 'value' => "{{ old('password-confirm') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('password-confirm', 'Password Confirm', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>
                    @endif


                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('is_dealer', 'Is dealer', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::radio('is_dealer', 0, null, ['id' => 'is_dealer', 'placeholder' => 'is_dealer', 'class' => "{{ $errors->has('is_dealer') ? ' is-invalid' : '' }}", 'value' => "{{ old('is_dealer') }}", 'required']) !!}  <span>Yes</span>
                            {!! Form::radio('is_dealer', 1, null, ['id' => 'is_dealer', 'placeholder' => 'is_dealer', 'class' => " {{ $errors->has('is_dealer') ? ' is-invalid' : '' }}", 'value' => "{{ old('is_dealer') }}", 'required']) !!} <span>No</span>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-md-3 custom-input">
                            {!! Form::text('dealer_name', null, ['id' => 'dealer_name', 'class' => " {{ $errors->has('dealer_name') ? ' is-invalid' : '' }}", 'value' => "{{ old('dealer_name') }}", 'required', 'autofocus']) !!}
                            {!! Form::label('dealer_name', 'dealer Name', ['class' => 'custom-lable']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-3 custom-lable-checkbox-radio">
                            {!! Form::label('status', 'Status', ['class' => 'custom-lable']) !!} <br />
                            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span>
                            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span>
                        </div>
                    </div>
                        @if(isset($customerInfo))
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    {!! Form::submit('Update', ['class' => "btn btn-primary"]) !!}
                                </div>
                            </div>
                        @else
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    {!! Form::submit(__('Register'), ['class' => "btn btn-primary"]) !!}
                                </div>
                            </div>
                        @endif
                    </div>
                    </div>
