@extends('layout')

@section('content')

    <!-- Start ChangePassword -->
    <div class="col-md-10 pass ">
        <h3 class="h1T">إدارة الحساب </h3><br/>

        <div class="col-sm-12 col-md-6 ">
            <div class="card">
                <div class="card-header ">تغيير كلمة المرور</div>
                <div class="card-body card-block">
                    <form action="" method="post">
                        <div class="form-group">
                            <div class="form-group">
                                <div class="input-group ">
                                    <input type="password" id="email1" name="email2" placeholder="كلمة المرور القديمة" class="is-invalid form-control">
                                    <div class="input-group-addon ">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group">
                                    <input type="password" id="email2" name="email2" placeholder="كلمة المرور الجديدة" class="is-invalid form-control">
                                    <div class="input-group-addon ">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-group ">
                                    <input type="password" id="password2" name="password2" placeholder="تأكيد كلمة المرور" class="is-invalid form-control">
                                    <div class=" input-group-addon">
                                        <i class="fa fa-asterisk"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions form-group">
                                <button type="submit" class="pass btn btn-primary ">تأكيد</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- End ChangePassword -->

@endsection
        