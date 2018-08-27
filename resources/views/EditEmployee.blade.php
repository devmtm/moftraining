@extends('layout')

@section('content')

    <!-- Start  Add Holiday -->
    <div class="col-md-10 CreateHoliday">
        <h3 class="h1T">قسم الموظفين</h3><br/>
        <fieldset class=" Qdata fieldsetinfo">
            <legend class="legendinfo">إضافة موظف</legend>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">بيانات الموظف</legend>

                    <form class="needs-validation" novalidate method="POST" action="/training/public/employees/{{$employee->getAttribute('id')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-row">
                            <div class="col-md-4 ">
                                <label for="Name_Emp">اسم الموظف </label>
                                <input type="text"  class="form-control" id="Name_Emp" name="Name_Emp" value="{{$employee->getAttribute('emp_name')}}">
                            </div>

                        </div>
                        <di.v class="form-row">
                            <button class="btn btn-primary" type="submit">تعديل موظف</button>
                        </di.v>
                    </form>



                </fieldset>


            </div>

        </fieldset>
    </div>
    <!-- End Add Holiday -->


@endsection
        