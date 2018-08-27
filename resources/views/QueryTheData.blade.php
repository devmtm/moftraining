@extends('layout')

@section('content')


    <!-- Start QueryTheData -->
    <div class="col-md-10 QueryTheData ">
        <h3 class="h1T">بيانات الموظف</h3><br/>
        <fieldset class=" Qdata fieldsetinfo">
            <legend class="legendinfo">البيانات الشخصية</legend>

            <div class="Qdata col-md-12 ">
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">بيانات أساسية</legend>
                    <button class="dt-button buttons-print" tabindex="0" aria-controls="example" type="button"><span>Print</span></button>
                    <table class="table">

                        <tbody>
                        <tr>
                            <th scope="row">اسم الموظف</th>
                            <td colspan="2"> أحمد محمد علي</td>

                            <td rowspan="3">
                                <img class="img-thumbnail" src="pictures/o.jpg">
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">تاريخ الميلاد: </th>
                            <td colspan="2">19-8-1994</td>
                        </tr>
                        <tr>
                            <th scope="row">مكان الميلاد: </th>
                            <td colspan="2">غزة</td>
                        </tr>
                        <tr>
                            <th scope="row">الجنس: </th>
                            <td colspan="2">ذكر</td>
                        </tr>
                        <tr>
                            <th scope="row">الجنسية:</th>
                            <td colspan="2">فلسطيني</td>
                        </tr>
                        <tr>
                            <th scope="row">رقم جواز السفر/الهوية:</th>
                            <td colspan="2"> 91458422</td>

                        </tr>
                        </tbody>
                    </table>

                </fieldset>
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">بيانات الوظيفة </legend>

                    <table class="table">

                        <tbody>
                        <tr>
                            <th scope="row">رقم التوظيف</th>
                            <td>1541475</td>


                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-cog"></i> القسم</th>
                            <td> تكنولوجيا المعلومات</td>

                        </tr>
                        <tr>
                            <th scope="row"> الوظيفية</th>
                            <td> مدير قسم تكنولوجيا المعلومات</td>

                        </tr>
                        <tr>
                            <th scope="row">المسمي الوظيفي</th>
                            <td> مدير</td>

                        </tr>
                        <tr>
                            <th scope="row">نوع التوظيف</th>
                            <td>رسمي</td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-calendar"></i> تاريخ التوظيف</th>
                            <td>18-4-2014</td>

                        </tr>


                        <tr>
                            <th scope="row">
                                <i class="fa fa-graduation-cap"></i>المؤهل الدراسي </th>
                            <td>بكالوريوس </td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-graduation-cap"></i> التخصص العلمي</th>
                            <td> تكنولوجيا المعلومات</td>

                        </tr>
                        </tbody>
                    </table>

                </fieldset>
                <fieldset class="fieldsetinfo">
                    <legend class="legendinfo">بيانات الراتب </legend>
                    <table class="table">

                        <tbody>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-money"></i> الراتب الاساسي </th>
                            <td>1540</td>


                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-money"></i> خصومات مالية</th>
                            <td>40</td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-money"></i> مستحقات مالية</th>
                            <td>18000</td>

                        </tr>
                        <tr>
                            <th scope="row">
                                <i class="fa fa-bank"></i> صافي الراتب الشهري</th>
                            <td>1500</td>

                        </tr>


                        </tbody>
                    </table>

                </fieldset>

                <fieldset class="fieldsetinfo ">
                    <legend class="legendinfo">بيانات التواصل</legend>
                    <table class="table col-12">

                        <tbody>
                        <tr colspan="2">
                            <th scope="row" colspan="2">
                                <i class="fa fa-address-card"></i> العنوان
                            </th>
                            <td>غزة </td>

                        </tr>
                        <tr>
                            <th scope="row" colspan="2">
                                <i class="fa fa-mobile"></i> رقم الجوال</th>
                            <td>059844444</td>

                        </tr>

                        <tr>
                            <th scope="row" colspan="2">
                                <i class="fa fa-envelope"></i> البريد الالكتروني</th>
                            <td class="pr-0"> osam@gmil.com</td>

                        </tr>
                        </tbody>
                    </table>

                </fieldset>

            </div>

        </fieldset>

    </div>
    <!-- End QueryTheData -->

@endsection
        