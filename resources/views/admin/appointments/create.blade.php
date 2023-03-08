@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.appointment.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.appointments.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="employee_id">{{ trans('cruds.appointment.fields.employee') }}</label>
                <select class="form-control select2 {{ $errors->has('employee') ? 'is-invalid' : '' }}" name="employee_id" id="employee_id" required>
                    @foreach($employees as $id => $entry)
                        <option value="{{ $id }}" {{ old('employee_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('employee'))
                    <span class="text-danger">{{ $errors->first('employee') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.employee_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="names">{{ trans('cruds.appointment.fields.names') }}</label>
                <input class="form-control {{ $errors->has('names') ? 'is-invalid' : '' }}" type="text" name="names" id="names" value="{{ old('names', '') }}" required>
                @if($errors->has('names'))
                    <span class="text-danger">{{ $errors->first('names') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.names_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="email">{{ trans('cruds.appointment.fields.email') }}</label>
                <input class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required>
                @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.email_helper') }}</span>
            </div>
            <div class="form-group">
                <label class="required" for="mobile">{{ trans('cruds.appointment.fields.mobile') }}</label>
                <input class="form-control {{ $errors->has('mobile') ? 'is-invalid' : '' }}" type="text" name="mobile" id="mobile" value="{{ old('mobile', '') }}" required>
                @if($errors->has('mobile'))
                    <span class="text-danger">{{ $errors->first('mobile') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.mobile_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="start_time">{{ trans('cruds.appointment.fields.start_time') }}</label>
                <input class="form-control datetime {{ $errors->has('start_time') ? 'is-invalid' : '' }}" type="text" name="start_time" id="start_time" value="{{ old('start_time') }}">
                @if($errors->has('start_time'))
                    <span class="text-danger">{{ $errors->first('start_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.start_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="finish_time">{{ trans('cruds.appointment.fields.finish_time') }}</label>
                <input class="form-control datetime {{ $errors->has('finish_time') ? 'is-invalid' : '' }}" type="text" name="finish_time" id="finish_time" value="{{ old('finish_time') }}">
                @if($errors->has('finish_time'))
                    <span class="text-danger">{{ $errors->first('finish_time') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.finish_time_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.appointment.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\Appointment::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="notes">{{ trans('cruds.appointment.fields.notes') }}</label>
                <textarea class="form-control {{ $errors->has('notes') ? 'is-invalid' : '' }}" name="notes" id="notes">{{ old('notes') }}</textarea>
                @if($errors->has('notes'))
                    <span class="text-danger">{{ $errors->first('notes') }}</span>
                @endif
                <span class="help-block">{{ trans('cruds.appointment.fields.notes_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection