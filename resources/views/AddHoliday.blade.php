@extends('layout')

@section('content')

    <!-- Start  Add Holiday -->
    <div class="col-md-10 CreateHoliday">
        <h3 class="h1T">قسم الإجازات</h3><br/>
        <fieldset class=" Qdata fieldsetinfo">
            <legend class="legendinfo">إضافة عطلة</legend>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">بيانات الإجازة</legend>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-4 ">
                                <label for="Name_Emp">اسم الموظف </label>
                                <input type="text" disabled class="form-control" id="Name_Emp" value="محمد عبد الرحيم">

                            </div>
                            <div class="col-md-4 ">

                                <label for="startDate">بداية المغادرة </label>

                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="startDate" required>

                            </div>
                            <div class="col-md-4 ">

                                <label for="EndDate">نهاية المغادرة </label>

                                <input class="form-control" type="datetime-local" value="2011-08-19T13:45:00" id="EndDate" required>

                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-md-6 mb-3">
                                <label for="TypeHoliday">نوع الإجازة</label>
                                <select class="form-control" id="TypeHoliday">
                                    <option selected disabled>اختيار نوع الإجازة</option>
                                    <option value="0" >إجازة اعتيادية سنوية  </option>
                                    <option value="1" >إجازة طارئة  </option>
                                    <option value="2">إجازة مرضية </option>
                                    <option value="3">إجازة دراسية</option>
                                    <option value="4">إجازة الأمومة</option>
                                    <option value="5">إجازة الحج</option>
                                    <option value="6">الإجازة دون راتب</option>
                                </select>

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="EmployeeSection">دائرة الموظف</label>
                                <select class="form-control" id="EmployeeSection">
                                    <option selected disabled>اختر الدائرة</option>
                                    <option value="0" >اﻹدارة اﻟﻌﺎﻣﺔ ﻟﺘﻜﻨﻮﻟﻮﺟﯿﺎ اﻟﻤﻌﻠﻮﻣﺎت </option>
                                    <option value="1" >اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﻮازم اﻟﻌﺎﻣﺔ </option>
                                    <option value="2">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺸﺆون اﻹدارﯾﺔ و اﻟﻤﺎﻟﯿﺔ </option>
                                    <option value="3">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺸﺆون اﻟﻘﺎﻧﻮﻧﯿﺔ</option>
                                    <option value="4">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮﻗﺎﺑﺔ اﻟﻤﺎﻟﯿﺔ اﻟﻤﺪﻧﯿﺔ</option>
                                    <option value="5">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮﻗﺎﺑﺔ اﻟﻤﺎﻟﯿﺔ اﻟﻌﺴﻜﺮﯾﺔ</option>
                                    <option value="6">اﻹدارة اﻟﻌﺎﻣﺔ ﻟﻠﺮواﺗﺐ</option>
                                </select>

                            </div>
                            <div class="col-md-3 mb-3">
                                <label for="validationCustom05">حالة الطلب</label>
                                <input type="text" disabled class="form-control" value="غير معتمد">
                            </div>
                        </div>

                        <button class="btn btn-primary" type="submit">طلب إجازة</button>
                    </form>



                </fieldset>


            </div>

        </fieldset>
    </div>
    <!-- End Add Holiday -->


@endsection
        