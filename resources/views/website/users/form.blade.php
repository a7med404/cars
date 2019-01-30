<div class="x_panel">
    <div class="x_title">
        <h2> All Users </h2>
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
            {!! Form::label('name', 'Name', ['class' => 'custom-lable']) !!}
        </div>
    </div>
    <div class="row">
        {{-- <div class="col-md-3 custom-input">
            {!! Form::text('phone', null, ['id' => 'phone', 'class' => " {{ $errors->has('phone') ? ' is-invalid' : '' }}", 'value' => "{{ old('phone') }}", 'required', 'autofocus']) !!}
            {!! Form::label('phone', 'Phone Number', ['class' => 'custom-lable']) !!}
        </div> --}}
        <div class="col-md-3 custom-input">
            {!! Form::text('email', null, ['id' => 'email', 'class' => " {{ $errors->has('email') ? ' is-invalid' : '' }}", 'value' => "{{ old('email') }}", 'required', 'autofocus']) !!}
            {!! Form::label('email', 'Email', ['class' => 'custom-lable']) !!}
        </div>
    </div>

    <div class="form-group row ">
      @foreach($roles as $role)
        <div class="col-md-3 custom-lable-checkbox-radio">
            {!! Form::label($role->name, $role->display_name, ['class' => 'custom-lable']) !!} <br />
            {!! Form::checkbox('roles[]', $role->id, null, ['id' => $role->name, 'class' => " {{ $errors->has('role') ? ' is-invalid' : '' }}", 'value' => "{{ old('role') }}"]) !!}
        </div>
      @endforeach
    </div>

    @if(!isset($userInfo))
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
            {!! Form::label('status', 'Status', ['class' => 'custom-lable']) !!} <br />
            {!! Form::radio('status', 1, null, ['id' => 'status', 'placeholder' => 'status', 'class' => "{{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!}  <span>Active</span> 
            {!! Form::radio('status', 0, null, ['id' => 'status', 'placeholder' => 'status', 'class' => " {{ $errors->has('status') ? ' is-invalid' : '' }}", 'value' => "{{ old('status') }}", 'required']) !!} <span>Disable</span> 
        </div>
    </div>

        @if(isset($userInfo))
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
