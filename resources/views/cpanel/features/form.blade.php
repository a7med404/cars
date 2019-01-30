<div class="x_panel">
    <div class="x_title">
        <h2> All Features </h2>
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

    <div class="row">
      <div class="col-md-3 custom-input">
          {!! Form::text('name', null, ['id' => 'name', 'class' => " {{ $errors->has('name') ? ' is-invalid' : '' }}", 'value' => "{{ old('name') }}", 'required', 'autofocus']) !!}
          {!! Form::label('name', 'Feature Name', ['class' => 'custom-lable']) !!}
      </div>
    </div>

    <div class="form-group row">
        <div class="col-md-3 custom-input has-data">
            {!! Form::label('parent', 'Parent', ['class' => 'custom-lable']) !!}
            {!! Form::select('parent', getSelect('parent'), 0, ['id' => 'parent', 'placeholder' => 'Select The Parent', 'class' => "form-control {{ $errors->has('parent') ? ' is-invalid' : '' }}", 'value' => "{{ old('parent') }}", 'required']) !!}
        </div>
    </div>

    <div class="row">
      <div class="col-md-6 custom-input">
          {!! Form::textarea('description', null, ['id' => 'description', 'class' => " {{ $errors->has('description') ? ' is-invalid' : '' }}", 'value' => "{{ old('description') }}", 'autofocus']) !!}
          {!! Form::label('description', 'Description', ['class' => 'custom-lable']) !!}
      </div>
    </div>
   
    <div class="form-group row">
        <div class="col-md-3 custom-lable-checkbox-radio">
            {!! Form::label('status', 'Status', ['class' => 'custom-lable']) !!} <br />
            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span> 
            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span> 
        </div>
    </div>

    @if(isset($featureInfo))
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
