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

                    <form class="needs-validation" novalidate method="post" action="/training/public/employees">
                        {{csrf_field()}}
                        <div class="form-row">
                            <div class="col-md-4 ">
                                <label for="Name_Emp">اسم الموظف </label>
                                <input type="text"  class="form-control" id="Name_Emp" name="Name_Emp" value="محمد عبد الرحيم">
                            </div>

                        </div>
                        <div class="form-row">
                            <button class="btn btn-primary" type="submit">اضافة موظف</button>
                        </div>
                    </form>



                </fieldset>


            </div>

        </fieldset>
    </div>
    <!-- End Add Holiday -->


@endsection
        