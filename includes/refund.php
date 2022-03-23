<form class="needs-validation" novalidate>
                        <!-- Student details row -->
                        <div class="card border-left-success h-100 p-3 mb-1">
                            <h3 class="text-success">1. Student Details</h3>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="s_name">Name</label>
                                    <input type="text" class="form-control" id="s_name" placeholder="Student name" required>
                                    <div class="invalid-feedback">
                                        Student name can't be empty
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="index_no">Index Number</label>
                                    <input type="text" class="form-control" id="index_no" placeholder="Index number" required>
                                    <div class="invalid-feedback">Student index number can't be empty</div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-left-primary h-100 p-3 mb-1">
                            <!-- depositor details row -->
                            <h3 class="text-primary ">2. Depositor</h3>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="s_name">Name</label>
                                    <input type="text" class="form-control" id="s_name" placeholder="Depositor name" required>
                                    <div class="invalid-feedback">
                                        depositor name can't be empty
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="index_no">ID</label>
                                    <input type="text" class="form-control" id="index_no" placeholder="ID Card number" required>
                                    <div class="invalid-feedback">ID can't be empty</div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-left-warning h-100 p-3 mb-1">
                            <!-- depositor details row -->
                            <h3 class="text-warning ">3. Payment Method</h3>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="visa" name="payment-method" id="visa" required>
                                          <label class="form-check-label" for="visa">
                                            Visa
                                          </label>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <div class="form-group">
                                        <div class="form-check">
                                          <input class="form-check-input" type="radio" value="momo"name="payment-method" id="momo" required>
                                          <label class="form-check-label" for="momo">
                                            Mobile Money
                                          </label>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                        <div class="card border-left-primary h-100 p-3 mb-1">
                            <!-- depositor details row -->
                            <h3 class="text-primary ">4. Amount</h3>
                            <div class="form-row">
                                <div class="col-lg-6 col-md-6 mb-3">
                                    <label for="amount">Amount</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                          <span class="input-group-text" id="inputGroupPrepend">GH₵</span>
                                        </div>
                                        <input type="text" class="form-control" id="amount" placeholder="0.00" aria-describedby="inputGroupPrepend" required>
                                        <div class="invalid-feedback">Please enter amount</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Refund</button>
                      </form>