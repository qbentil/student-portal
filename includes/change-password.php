<div class="row justify-content-center align-items-center">
    <!-- <div class="col-lg-6 d-none d-lg-block bg-login-image"></div> -->
    <div class="col-lg-7">
        <?php changePin($_SESSION['user'][0]) ?>
        <div class="">
            <form class="user needs-validation" method="POST" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"id="cPin" name="cPin" placeholder="Current Pin" required>
                </div>
                <div class="form-group">
                    <input type="password" name="nPin" class="form-control form-control-user"id="nPin" placeholder="New Pin" required>
                </div>
                <div class="form-group">
                    <input type="password" name="rPin" class="form-control form-control-user"id="rPin" placeholder="Re-type Pin" required>
                </div>
                <button name="changePin" class="btn btn-primary btn-user btn-block">
                   <i class="fa fa-lock"></i> Change Pin
                </button>
            </form>
            <hr>
        </div>
    </div>
</div>