<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyAppointmentRequest;
use App\Http\Requests\StoreAppointmentRequest;
use App\Http\Requests\UpdateAppointmentRequest;
use App\Models\Appointment;
use App\Models\Employee;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AppointmentController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('appointment_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointments = Appointment::with(['employee'])->get();

        return view('admin.appointments.index', compact('appointments'));
    }

    public function create()
    {
        abort_if(Gate::denies('appointment_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::pluck('names', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.appointments.create', compact('employees'));
    }

    public function store(StoreAppointmentRequest $request)
    {
        $appointment = Appointment::create($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function edit(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $employees = Employee::pluck('names', 'id')->prepend(trans('global.pleaseSelect'), '');

        $appointment->load('employee');

        return view('admin.appointments.edit', compact('appointment', 'employees'));
    }

    public function update(UpdateAppointmentRequest $request, Appointment $appointment)
    {
        $appointment->update($request->all());

        return redirect()->route('admin.appointments.index');
    }

    public function destroy(Appointment $appointment)
    {
        abort_if(Gate::denies('appointment_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $appointment->delete();

        return back();
    }

    public function massDestroy(MassDestroyAppointmentRequest $request)
    {
        $appointments = Appointment::find(request('ids'));

        foreach ($appointments as $appointment) {
            $appointment->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
