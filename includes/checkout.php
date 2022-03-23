<form class="needs-validation" novalidate>
                        <!-- Student details row -->
    <div class="card border-left-success h-100 p-3 mb-1">
        <h3 class="text-success mb-3">1. Your Payment</h3>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Tution Fees</h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- GHC 200.00</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Exctra Dues</h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- GHC 100.00</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Sub Total</h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- GHC 300.00</h3>
            </div>
        </div>
    </div>
    <div class="card border-left-primary h-100 p-3 mb-1">
        <!-- depositor details row -->
        <h3 class="text-primary ">2. Student Details</h3>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Name: </h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- <?php echo $_SESSION['user'][1]; ?></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>ID: </h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- <?php echo $_SESSION['user'][0]; ?></h3>
            </div>
        </div>
    </div>
    <div class="card border-left-warning h-100 p-3 mb-1">
        <!-- depositor details row -->
        <h3 class="text-warning ">3. Depositor</h3>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Name: </h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- Depositor Name</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>ID Card No.: </h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- ID No.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <h3>Payment Method: </h3>
            </div>
            <div class="col-lg-6 col-md-6">
                <h3>- Momo</h3>
            </div>
        </div>
    </div>
    <button class="btn btn-primary btn-block py-2 font-weight-bold" type="submit">Check Out</button>
    </form>