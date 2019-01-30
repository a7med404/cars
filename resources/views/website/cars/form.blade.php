<section class="add-car" id="add-car">
    <div class="container">
      <div class="row"> 
        <div class="col-md-9">
          <div class="contect">
            <div class="card">
              <h3 class="l-r-border text-uppercase"> Create new ads</h3><small>add ypur car to enjoying eith our services</small>
              <hr>
              {{-- <form class="form" action="/" method="post"> --}}
                <div class="form-group row"> 
                  <div class="col-md-12">
                    <div class="custom-input for-middel">
                      {!! Form::label('ads_title_id', 'Car Ads Title', ['class' => 'custom-lable']) !!}
                      {{-- <input type="text" name="ads_title"> --}}
                      {!! Form::text('ads_title', null, ['id' => 'ads_title_id', 'class' => " {{ $errors->has('ads_title') ? ' is-invalid' : '' }}", 'value' => "{{ old('ads_title') }}", 'required', 'autofocus']) !!}
                      <span class="border-middel"></span><span class="asterisx">*</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="brand col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('brand', 'Brand', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('brand_id', getSelect('brand'), null, ['id' => 'brand', 'placeholder' => 'Select The brand', 'class' => "form-control {{ $errors->has('brand_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('brand_id') }}", 'required']) !!}
                    </div>
                  </div>
                  <div class="model col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('car_model', 'car_model', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('car_model_id', getSelect('car_model'), null, ['id' => 'car_model', 'placeholder' => 'Select The car_model', 'class' => "form-control {{ $errors->has('car_model_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('car_model_id') }}", 'required']) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="year col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('transmission', 'Transmission', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('transmission', transmission(), null, ['id' => 'transmission', 'placeholder' => 'Select The Transmission', 'class' => "form-control {{ $errors->has('transmission') ? ' is-invalid' : '' }}", 'value' => "{{ old('transmission') }}", 'required']) !!}
                    </div>
                  </div>
                  <div class="for_sale_rent col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('drivetrain', 'Drivetrain', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('drivetrain', drivetrain(), null, ['id' => 'drivetrain', 'placeholder' => 'Select The Drivetrain', 'class' => "form-control {{ $errors->has('drivetrain') ? ' is-invalid' : '' }}", 'value' => "{{ old('drivetrain') }}", 'required']) !!}
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="price"> 
                      <input type="text" name="price">
                    </div>
                    <hr>
                  </div>
                </div>
                <h3 class="text-capitalize">car information</h3>
                <div class="form-section">
                  <div class="fuel-type"> 
                    <label class="custom-lable">Fuel Type</label>
                    <div class="form-group text-capitalize">
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('fuel-type', 1, null, ['id' => 'petrol', 'placeholder' => 'petrol', 'class' => " {{ $errors->has('fuel-type') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel-type') }}", 'required']) !!} 
                        {!! Form::label('petrol', 'Petrol', ['class' => 'custom-lable']) !!}
                      </div>
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('fuel-type', 2, null, ['id' => 'diesel', 'placeholder' => 'diesel', 'class' => " {{ $errors->has('fuel-type') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel-type') }}", 'required']) !!} 
                        {!! Form::label('diesel', 'Diesel', ['class' => 'custom-lable']) !!}
                      </div>
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('fuel-type', 3, null, ['id' => 'CNG', 'placeholder' => 'CNG', 'class' => " {{ $errors->has('fuel-type') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel-type') }}", 'required']) !!} 
                        {!! Form::label('CNG', 'CNG', ['class' => 'custom-lable']) !!}
                      </div>
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('fuel-type', 4, null, ['id' => 'hybrid', 'placeholder' => 'hybrid', 'class' => " {{ $errors->has('fuel-type') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel-type') }}", 'required']) !!} 
                        {!! Form::label('hybrid', 'Hybrid', ['class' => 'custom-lable']) !!}
                      </div>
                    </div>
                  </div>
                  <div class="level"> 
                    <label class="custom-lable">Car level</label>
                    <div class="form-group text-capitalize"> 
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('level', 0, null, ['id' => 'level-new', 'placeholder' => 'level', 'class' => " {{ $errors->has('level') ? ' is-invalid' : '' }}", 'value' => "{{ old('level') }}", 'required']) !!} 
                        {!! Form::label('level-new', 'new', ['class' => 'custom-lable']) !!}
                      </div>
                      <div class="custom-lable-checkbox-radio">
                        {!! Form::radio('level', 1, null, ['id' => 'level-used', 'placeholder' => 'level', 'class' => " {{ $errors->has('level') ? ' is-invalid' : '' }}", 'value' => "{{ old('level') }}", 'required']) !!} 
                        {!! Form::label('level-used', 'Used', ['class' => 'custom-lable']) !!}
                      </div>
                    </div>
                    <hr>
                  </div>
                </div>
                <div class="row">
                  <div class="level col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('fuel', 'Fuel', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('fuel', fuel(), null, ['id' => 'fuel', 'placeholder' => 'Select The Fuel', 'class' => "form-control {{ $errors->has('fuel') ? ' is-invalid' : '' }}", 'value' => "{{ old('fuel') }}", 'required']) !!}
                    </div>
                  </div>
                  <div class="model col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('km_driven', 'kilometers Driven', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('km_driven', kmDriven(), null, ['id' => 'km_driven', 'placeholder' => 'Select The kilometers driven', 'class' => "form-control {{ $errors->has('km_driven') ? ' is-invalid' : '' }}", 'value' => "{{ old('km_driven') }}", 'required']) !!}
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="level col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('engine', 'Engine Type', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('engine_id', getSelect('engine'), null, ['id' => 'engine', 'placeholder' => 'Select The Engine', 'class' => "form-control {{ $errors->has('engine_id') ? ' is-invalid' : '' }}", 'value' => "{{ old('engine_id') }}", 'required']) !!}
                    </div>
                  </div>
                  <div class="model col-md-6">
                    <div class="custom-select">
                      {{-- {!! Form::label('customer', 'Customer', ['class' => 'custom-lable']) !!} --}}
                      {!! Form::select('for_sale_rent', forSaleRent(), null, ['id' => 'for_sale_rent', 'placeholder' => 'For Sale Rent', 'class' => "form-control {{ $errors->has('for_sale_rent') ? ' is-invalid' : '' }}", 'value' => "{{ old('for_sale_rent') }}", 'required']) !!}
                    </div>
                  </div>
                </div>
                <div class="row"> 
                  <div class="col-md-12">
                    <div class="custom-input for-middel">
                      <textarea id="note" name="note"></textarea><span class="border-middel"></span>
                      <label class="custom-label" for="note">Note</label>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="dropzone dz-clickable" id="add-car-form">
                  <div class="dz-message d-flex flex-column"><i class="fa fa-upload"> </i>
                    <p>Drop here or click to upload photos</p>
                  </div>
                </div>
                <input class="btn btn-custom text-uppercase fa fa-add" id="name" type="submit" value="Create">
              {{-- </form> --}}
            </div>
          </div>
        </div>
        <div class="col-md-3"></div>
      </div>
    </div>
  </section>
