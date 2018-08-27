@extends('layout')

@section('content')

    <!-- Start Registering unregistered Leaves  -->
    <div class="col-md-10 RegisterUnregistered">
        <h3 class="h1T">قسم المعلومات</h3><br/>
        <fieldset class=" Qdata fieldsetinfo">
            <legend class="legendinfo">تسجيل الموظف</legend>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">تسجيل الخروج</legend>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">

                            <div class="col-md-6 ">
                                <label for="ID_Emp">رقم الموظف </label>
                                <input type="number" class="form-control" id="ID_Emp" value="1580188">

                            </div>
                            <div class="col-md-6 ">
                                <label for="Type"> نوع العملية </label>
                                <select class="form-control" id="Type">
                                    <option selected disabled> اختيار نوع التسجيل</option>
                                    <option value="1" > تسجيل الخروج</option>

                                </select>

                            </div>


                        </div>
                        <div class="form-row">
                            <div class="col-md-6">

                                <label for="st-Date"> التاريخ </label>

                                <input class="form-control" type="date" value="2018-08-19" id="st-Date" required>

                            </div>
                            <div class="col-md-6 ">
                                <label for="time-input">الوقت</label>
                                <input class="form-control" type="time" value="13:45:00" id="time-input">

                            </div>
                        </div>
                        <div class="form-row">
                            <label for="Cause"> السبب </label>
                            <div class="col-12 col-md-12">
                                <textarea name="textarea-input" id="Cause" rows="9" placeholder="سبب المغادرة" class="form-control"></textarea>
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
    <!-- End Registering unregistered Leaves    -->

@endsection
        