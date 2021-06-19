<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EmployeeRequest;
use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::orderBy('surname', 'asc')->get();

        return view('admin.employee.index', [
            'employees' => $employees
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.employee.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EmployeeRequest $request)
    {
            $fullFileName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            Employee::create([
                'surname' => $request->input('surname'),
                'name' => $request->input('name'),
                'image' => $fileNameNew,
                'post' => $request->input('post'),
            ]);

            $request->file('image')->storeAs('public/image/employees', $fileNameNew);

            return redirect()->back()->withSuccess('Сотрудник был успешно добавлен!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Employee  $employee)
    {

        return view('admin.employee.edit', [
            'employee' => $employee
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Employee  $employee)
    {
        Storage::delete('public/image/employees/' . $employee->image);
            $fullFileName = $request->file('image')->getClientOriginalName();
            $extension = $request->file('image')->getClientOriginalExtension();

            $fileName = pathinfo($fullFileName, PATHINFO_FILENAME);
            $fileNameNew = $fileName . '_' . time() . '.' . $extension;

            $employee->surname = $request->surname;
            $employee->name = $request->name;
            $employee->image = $fileNameNew;
            $employee->post = $request->post;
            $employee->save();
            $request->file('image')->storeAs('public/image/employees', $fileNameNew);
//        }

        return redirect()->back()->withSuccess('Сотрудник был успешно обновлен!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy(Employee $employee)
    {
        if ($employee->delete()) {
            Storage::delete('public/image/employees/' . $employee->image);
        }
        return redirect()->back()->withSuccess('Сотрудник был успешно удален!');
    }
}

