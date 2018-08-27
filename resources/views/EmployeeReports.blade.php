@extends('layout')

@section('content')

    <!-- Start  Get a report -->
    <div class="col-md-10">
        <div class="table-responsive Get-a-report ">
            <h3 class="h1T">الحصول على تقارير الحضور</h3><br/>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">الحصول على تقارير الحضور</legend>

                    <form class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="col-md-6">
                                <label for="N_Emp">اسم الموظف </label>
                                <input type="text" class="form-control" id="N_Emp" value="محمد عبد الرحيم">

                            </div>
                            <div class="col-md-6 ">
                                <label for="ID_E">رقم الموظف </label>
                                <input type="number" class="form-control" id="ID_E" value="1580188">

                            </div>


                        </div>
                        <div class="form-row">

                            <div class="col-4">

                                <label for="s-Date"> التاريخ من </label>

                                <input class="form-control" type="date" value="2018-08-19" id="s-Date" required>

                            </div>

                            <div class="col-4">

                                <label for="endtDate"> الي  </label>

                                <input class="form-control" type="date" value="2018-08-19" id="endtDate" required>

                            </div>

                        </div>

                        <div class="form-row">
                            <div class="col-md-4">
                                <br/>
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
    <!-- End Get a report -->

@endsection
        