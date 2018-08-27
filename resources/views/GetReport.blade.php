@extends('layout')

@section('content')
    <!-- Start Employee Reports -->
    <div class="col-md-10">
        <div class=" table-responsive EmployeeReports ">
            <h3 class="h1T">تقارير الحضور</h3><br/>
            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">الحصول على تقارير الحضور</legend>

                    <form class="needs-validation" novalidate>
                        <div class="form-row text-center">
                            <div class="col-md-4 mt-0">
                                <strong>  <label for="N_Emp">تقرير يومي </label></strong>
                                <button class="btn btn-primary" type="submit">عرض التقرير </button>

                            </div>
                            <div class="col-md-4 mt-0">
                                <label for="N_Emp">تقرير شهري </label>
                                <button class="btn btn-primary" type="submit">عرض التقرير </button>

                            </div>
                            <div class="col-md-4 mt-0">
                                <label for="N_Emp">تقرير شهري </label>
                                <button class="btn btn-primary" type="submit">عرض التقرير </button>

                            </div>
                        </div>
                    </form>
                </fieldset>
            </div>


            <table class="table table-hover ">
                <thead>
                <tr>
                    <th>اسم الموظف</th>
                    <th>الرقم الوظيفي</th>
                    <th>أيام الحضور</th>
                    <th>أيام الاجازات</th>
                    <th>الاجازات المتبقية</th>
                    <th> السنة</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>محمد عبد الرحيم</td>
                    <td>1525155</td>
                    <td>30</td>
                    <td>15</td>
                    <td>1</td>
                    <td>2018</td>
                </tr>
                <tr>
                    <td>محمد عبد الرحيم</td>
                    <td>1525155</td>
                    <td>304</td>
                    <td>15</td>
                    <td>6</td>
                    <td>2017</td>
                </tr>
                <tr>
                    <td>محمد عبد الرحيم</td>
                    <td>1525155</td>
                    <td>301</td>
                    <td>24</td>
                    <td>5</td>
                    <td>2016</td>
                </tr>
                <tr>
                    <td>محمد عبد الرحيم</td>
                    <td>1525155</td>
                    <td>132</td>
                    <td>15</td>
                    <td>3</td>
                    <td>2015</td>
                </tr>


                </tbody>
            </table>
        </div>
    </div>
    <!-- End  Employee Reports    -->

@endsection
        