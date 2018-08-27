@extends('layout')

@section('content')

    <div class="container">

<a class="btn btn-success" href="/training/public/employees/create">اضافة موظف</a>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>الرقم الوظيفي</th>
                    <th>اسم الموظف</th>
                    <th>اجراء</th>
                </tr>
                </thead>
                <tbody>

                @foreach ($employees as $key => $employee)
                <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $employee->emp_no ?></td>
                    <td><?= $employee->emp_name ?></td>
                    <td><a class="btn btn-info" href="/training/public/employees/{{$employee->id}}/edit">تعديل</a>
                        <form method="POST" action="/training/public/employees/{{$employee->id}}">{{csrf_field()}} {{method_field('delete')}}<button class="btn btn-danger" type="submit">حذف</button></form></td>
                </tr>
                @endforeach

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4">اجمالي</td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>



@endsection