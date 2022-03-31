<!-- login modals -->
<div class="modal fade" tabindex="1" id="loginModal" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal">
                <h5 class="modal-title">Login Member</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('member')?>" metode="post">
                <div class="modal-body">
                    <div class="form-grup row">
                        <label for="email" class="col-sm-2 col-form-label">email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Alamat Email">
                        </div>
                    </div>
                    <div class="form-grup row">
                        <label for="email" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-outline-primary">Log In</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- login modals end -->

<!-- modals daftar -->
<div class="modal fade" tabindex="-1" id="daftarModal" role="dialog"> 
    <div class="modal-dialog" role="document"> 
        <div class="modal-content"> 
            <div class="modal-header"> 
                <h5 class="modal-title">Daftar Anggota</h5> 
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"> 
                    <span aria-hidden="true">&times;</span> 
                </button> 
            </div> 
            <form action="<?= base_url('member/daftar'); ?>" method="post">
            <div class="modal-body"> 
                <div class="form-group"> 
                    <input type="text" class="form-control form-control-user" id="nama" name="nama" placeholder="Nama Lengkap"> </div> 
                    <div class="form-group"> 
                        <input type="text" class="form-control form-control-user" id="alamat" name="alamat" placeholder="Alamat Lengkap"> 
                    </div> 
                    <div class="form-group"> 
                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Alamat Email"> 
                    </div> 
                    <div class="form-group"> 
                        <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Password"> 
                    </div> 
                    <div class="form-group"> 
                        <input type="password" class="form-control form-control-user" id="password2" name="password2" placeholder="Ulangi Password"> 
                    </div> 
                </div> 
                <div class="modal-footer"> 
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button> 
                    <button type="submit" class="btn btn-outline-primary">Simpan</button> 
                </div> 
            </form> 
        </div> 
    </div> 
</div>
<!-- modals daftar end-->

<!-- modal info -->
<div class="modal fade" tabindex="-1" id="modalinfo" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-conten">
            <div class="modal-">
                <div class="modal-title">Informasi</div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <span class="alert alert-message alert-success">Waktu pengambilan buku 1x24 jam dari Booking !!!</span>
            </div>
            <div class="modal-footer">
                <a href="<?= base_url();?>" class="btn btn-outline-info">Ok</a>
            </div>
        </div>
    </div>
</div>
<!-- modal info end -->