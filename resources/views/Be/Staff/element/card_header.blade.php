<div class="card-header">
    {{-- <h3 class="card-title"></h3> --}}
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#userModal">
        Open modal
   </button>
    <div id="userModal" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form method="POST" id="user-form">
                    <div class="modal-header">
                        <h5 class="modal-title" >Thêm User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body ">
                            @csrf
                            <span class="form-output"></span>

                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Tên đăng nhâp</label>
                            <input type="text" placeholder="Tên đăng nhập" class="col-md-8 form-control" id="name">
                          </div>
                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Mật khẩu</label>
                            <input type="password" placeholder="******"  class="col-md-8 form-control" id="pass">
                          </div>
                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Email</label>
                            <input type="email" class="col-md-8 form-control" id="emails">
                          </div>



                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Họ tên</label>
                            <input type="text" placeholder="Tô Minh Hải" class="col-md-8 form-control" id="fullname">
                          </div>

                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Địa  chỉ</label>
                            <input type="text" class="col-md-8 form-control" id="address">
                          </div>

                          <div class="form-group form-row">
                            <label class="col-md-2 form-label">Số điện thoại</label>
                            <input type="text" class="col-md-8 form-control" id="phones">
                          </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="button_action" id="button_action" value="insert"/>
                        <input type="submit" name="submit" id="action" value="Thêm" class="btn btn-info"/>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
