
                <div class="x_panel">
                    <div class="x_name">
                        <h2> All cars </h2>
                        <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a></li>
                                <li><a href="#">Settings 2</a></li>
                            </ul>
                        </li>
                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">




                    <div id="wizard" class="form_wizard wizard_horizontal">
                            <ul class="wizard_steps anchor">
                                <li>
                                    <a href="#step-1" class="selected" isdone="1" rel="1">
                                        <span class="step_no">1</span>
                                        <span class="step_descr">
                                            Step 1<br>
                                            <small>Informations</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-2" class="done" isdone="1" rel="2">
                                        <span class="step_no">2</span>
                                        <span class="step_descr">
                                            Step 2<br>
                                            <small>Features</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-3" class="disabled" isdone="0" rel="3">
                                        <span class="step_no">3</span>
                                        <span class="step_descr">
                                            Step 3<br>
                                            <small>Images</small>
                                        </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#step-4" class="disabled" isdone="0" rel="4">
                                        <span class="step_no">4</span>
                                        <span class="step_descr">
                                            Step 4<br>
                                            <small>Last</small>
                                        </span>
                                    </a>
                                </li>
                            </ul>

                            <div class="stepContainer" style="height: 100%;">
                                <div id="step-1" class="content" style="display: block;">
                                    <h2 class="Stepname">Basic Informations</h2>


                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('customer', 'Customer', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('customer_id', getSelect('customer'), null, ['id' => 'customer', 'placeholder' => 'Select The Customer', 'class' => "form-control {{ $errors->has('customer_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('customer_id') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('for_sale_rent', 'For Sale Rent', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('for_sale_rent', forSaleRent(), null, ['id' => 'for_sale_rent', 'placeholder' => 'For Sale Rent', 'class' => "form-control {{ $errors->has('for_sale_rent') ? ' is-invalid' : '' }}", 'value' => "{{ old('for_sale_rent') }}", 'required']) !!}
                                        </div>
                                    </div>
                                    <hr />

                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input">
                                            {!! Form::text('ads_title', null, ['id' => 'ads_title_id', 'class' => " {{ $errors->has('ads_title') ? ' is-invalid' : '' }}", 'value' => "{{ old('ads_title') }}", 'required', 'autofocus']) !!}
                                            {!! Form::label('ads_title_id', 'Car Ads Title', ['class' => 'custom-lable']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input">
                                            {!! Form::text('cylinder_count', null, ['id' => 'cylinder_count', 'class' => " {{ $errors->has('cylinder_count') ? ' is-invalid' : '' }}", 'value' => "{{ old('cylinder_count') }}", 'required', 'autofocus']) !!}
                                            {!! Form::label('cylinder_count', 'Car Cylinder count', ['class' => 'custom-lable']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('brand', 'Brand', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('brand_id', getSelect('brand'), null, ['id' => 'brand', 'placeholder' => 'Select The brand', 'class' => "form-control {{ $errors->has('brand_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('brand_id') }}", 'required']) !!}
                                        </div>
                                    </div>


                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('engine', 'Engine Type', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('engine_id', getSelect('engine'), null, ['id' => 'engine', 'placeholder' => 'Select The Engine', 'class' => "form-control {{ $errors->has('engine_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('engine_id') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('transmission', 'Transmission', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('transmission', transmission(), null, ['id' => 'transmission', 'placeholder' => 'Select The Transmission', 'class' => "form-control {{ $errors->has('transmission') ? ' is-invalid' : '' }}", 'value' => "{{ old('transmission') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('fuel', 'Fuel', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('fuel', fuel(), null, ['id' => 'fuel', 'placeholder' => 'Select The Fuel', 'class' => "form-control {{ $errors->has('fuel') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel') }}", 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('seats_number', 'Seats Number', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('seats_number', seatNumber(), null, ['id' => 'seats_number', 'placeholder' => 'Select The Seats Number', 'class' => "form-control {{ $errors->has('seats_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('seats_number') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('doors_number', 'Doors Number', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('doors_number', doorsNumber(), null, ['id' => 'doors_number', 'placeholder' => 'Select The Doors Number', 'class' => "form-control {{ $errors->has('doors_number') ? ' is-invalid' : '' }}", 'value' => "{{ old('doors_number') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('color', 'Color', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('color', color(), null, ['id' => 'color', 'placeholder' => 'Select The color', 'class' => "form-control {{ $errors->has('color') ? ' is-invalid' : '' }}", 'value' => "{{ old('color') }}", 'required']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('drivetrain', 'Drivetrain', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('drivetrain', drivetrain(), null, ['id' => 'drivetrain', 'placeholder' => 'Select The Drivetrain', 'class' => "form-control {{ $errors->has('drivetrain') ? ' is-invalid' : '' }}", 'value' => "{{ old('drivetrain') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('body_type', 'Body Type', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('body_type', bodyType(), null, ['id' => 'body_type', 'placeholder' => 'Select The Body Type', 'class' => "form-control {{ $errors->has('body_type') ? ' is-invalid' : '' }}", 'value' => "{{ old('body_type') }}", 'required']) !!}
                                        </div>
                                        <div class="col-md-3 custom-input has-data">
                                            {!! Form::label('km_driven', 'kilometers Driven', ['class' => 'custom-lable']) !!}
                                            {!! Form::select('km_driven', kmDriven(), null, ['id' => 'km_driven', 'placeholder' => 'Select The kilometers driven', 'class' => "form-control {{ $errors->has('km_driven') ? ' is-invalid' : '' }}", 'value' => "{{ old('km_driven') }}", 'required']) !!}
                                        </div>
                                    </div>

                                </div> <!-- End of step-1 -->

                                <div id="step-2" class="content" style="display: none;">
                                  <h2 class="Stepname">Select Car's Features</h2>

                                    <div class="form-group row ">
                                        @foreach($features as $feature)
                                            <div class="col-md-3 custom-lable-checkbox-radio">
                                                {!! Form::label($feature->name, $feature->name, ['class' => 'custom-lable']) !!} <br />
                                                {!! Form::checkbox('features[]', $feature->id, null, ['id' => $feature->name, 'class' => " {{ $errors->has('feature') ? ' is-invalid' : '' }}", 'value' => "{{ old('feature') }}"]) !!}
                                            </div>
                                        @endforeach
                                    </div>

                                </div> <!-- End of step-2 -->

                                <div id="step-3" class="content" style="display: none;">
                                  <h2 class="Stepname">Select Car's Images</h2>

                                </div> <!-- End of step-3 -->

                                <div id="step-4" class="content" style="display: none;">
                                    <h2 class="Stepname">Notes</h2>

                                    <div class="form-group row">
                                        <div class="col-md-6 ">
                                            {!! Form::label('price', 'Price', ['class' => 'custom-lable']) !!}
                                            {!! Form::text('price', null, ['id' => 'price', 'class' => " {{ $errors->has('price') ? ' is-invalid' : '' }}", 'value' => "{{ old('price') }}", 'required', 'autofocus']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-6 custom-input">
                                            {!! Form::textarea('note', null, ['id' => 'note', 'class' => " {{ $errors->has('note') ? ' is-invalid' : '' }}", 'value' => "{{ old('note') }}", 'required', 'autofocus']) !!}
                                            {!! Form::label('note', 'Note', ['class' => 'custom-lable']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3 custom-lable-checkbox-radio">
                                            {!! Form::label('status', 'Status', ['class' => 'custom-lable']) !!} <br />
                                            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span>
                                            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span>
                                        </div>

                                        <div class="col-md-3 custom-lable-checkbox-radio">
                                            {!! Form::label('visibility', 'Visibility', ['class' => 'custom-lable']) !!} <br />
                                            {!! Form::radio('visibility', 1, null, ['id' => 'visibility', 'placeholder' => 'visibility', 'class' => "{{ $errors->has('visibility') ? ' is-invalid' : '' }}", 'value' => "{{ old('visibility') }}", 'required']) !!}  <span>Visible</span>
                                            {!! Form::radio('visibility', 0, null, ['id' => 'visibility', 'placeholder' => 'visibility', 'class' => " {{ $errors->has('visibility') ? ' is-invalid' : '' }}", 'value' => "{{ old('visibility') }}", 'required']) !!} <span>Hidden</span>
                                        </div>
                                    </div>


                                </div> <!-- End of step-4 -->
                            </div>

                            {{-- <div class="actionBar">
                                <div class="msgBox">
                                    <div class="content">
                                    </div>
                                    <a href="#" class="close">X</a>
                                </div>
                                <div class="loader">Loading</div>
                                <a href="#" class="buttonFinish buttonDisabled btn btn-default">Finish</a>
                                <a href="#" class="buttonNext btn btn-success">Next</a>
                                <a href="#" class="buttonPrevious btn btn-primary buttonDisabled">Previous</a>
                            </div> --}}
                        </div>







                        {{-- <div class="form-group row">
                            @if(!isset($carInfo->car_start_date) )
                            <div class="col-md-6">
                                {!! Form::label('dateTime', 'car Start And End Date ', ['class' => 'custom-lable']) !!} <br />
                                {!! Form::text('dateTime', null, ['id' => 'dateTime', 'class' => " {{ $errors->has('dateTime') ? ' is-invalid' : '' }}", 'value' => "{{ old('dateTime') }}", 'required', 'autofocus']) !!}
                            </div>
                            @else
                            <div class="col-md-6">
                                {!! Form::label('dateTime', 'car Start And End Date ', ['class' => 'custom-lable']) !!} <br />
                                {!! Form::text('dateTime', "{{ $carInfo->car_start_date.' - '.$carInfo->car_end_date }}", ['id' => 'dateTime', 'value' => "{{ old('dateTime') }}", 'required', 'autofocus']) !!}
                            </div>
                            @endif
                        </div> --}}

                        {{-- <div class="form-group row">
                            <div class="col-md-6 ">
                                {!! Form::label('budget', 'Budget', ['class' => 'custom-lable']) !!}
                                {!! Form::text('budget', null, ['id' => 'budget', 'class' => " {{ $errors->has('budget') ? ' is-invalid' : '' }}", 'value' => "{{ old('budget') }}", 'required', 'autofocus']) !!}
                            </div>
                        </div> --}}





                        {{-- <div class="form-group">
                            {!! Form::label('status', 'Status', ['class' => 'custom-lable']) !!} <br />
                            <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    {{-- <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                    {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span>
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    {{-- <input type="radio" name="gender" value="female"> Female
                                    {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span>
                                </label>
                            </div>
                        </div> --}}



                        {{-- <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Gender</label>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div id="gender" class="btn-group" data-toggle="buttons">
                                <label class="btn btn-default active" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="male"> &nbsp; Male &nbsp;
                                </label>
                                <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="female"> Female
                                </label>
                                </div>
                            </div>
                        </div> --}}



                    </div>
                </div>
