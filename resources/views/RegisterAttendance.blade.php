@extends('layout')

@section('content')

    <!-- Start RegisterAttendance  -->
    <div class="col-md-10 RegisterAttendance">
        <h3 class="h1T">قسم المعلومات</h3><br/>
        <fieldset class=" Qdata fieldsetinfo">
            <legend class="legendinfo">تسجيل الموظف</legend>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">تسجيل الحضور أو الخروج</legend>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="Na_Emp">اسم الموظف </label>
                                <input type="text" class="form-control" id="Na_Emp" value="محمد عبد الرحيم">

                            </div>
                            <div class="col-md-6 ">
                                <label for="ID_Em">رقم الموظف </label>
                                <input type="number" class="form-control" id="ID_Em" value="1580188">

                            </div>


                        </div>
                        <div class="form-row">

                            <div class="col-md-4 ">
                                <label for="Type-e"> نوع العملية </label>
                                <select class="form-control" id="Type-e">
                                    <option selected disabled> اختيار نوع التسجيل</option>
                                    <option value="IN" >تسجيل الدخول </option>
                                    <option value="OUt" > تسجيل الخروج</option>

                                </select>

                            </div>

                            <div class="col-md-4">

                                <label for="saa-Date"> التاريخ </label>

                                <input class="form-control" type="date" value="2018-08-19" id="saa-Date" required>

                            </div>
                            <div class="col-md-4 ">
                                <label for="ti-input">الوقت</label>
                                <input class="form-control" type="time" value="13:45:00" id="ti-input">

                            </div>




                        </div>
                        <div class="form-row">
                            <div class="col-md-4">
                                <br/>
                                <button class="btn btn-primary" type="submit">التسجيل </button>
                            </div>
                        </div>
                    </form>



                </fieldset>


            </div>

        </fieldset>
    </div>
    <!-- End RegisterAttendance  -->

@endsection
        