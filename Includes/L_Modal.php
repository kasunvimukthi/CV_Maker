<!-- ========================================================================================
                                            LOGIN MODAL
======================================================================================== -->
<div class="modal fade" id="Login_modal" tabindex="-2" role="dialog" aria-labelledby="Login_modal" aria-hidden="true">
    <div class="modal-dialog modal-me modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="Login_modal">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

            <div class="card-body">
            <form action="Includes/action.php" method="post">
                <input type="hidden" name="action" id="action" value="Login">
                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">E-mail</p>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="L_Email" id="L_Email">
                    </div>
                </div>
                
                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">Password</p>
                    <div class="col-md-9">
                        <input class="form-control" type="password" name="L_Password" id="L_Password">
                    </div>
                </div>

                <div class="col-md-12 row mt-3 justify-content-center">
                    <button class="btn btn-primary col-md-4" id="Login1" type="submit">Login</button>
                </div>

                <div class="col-md-12 row mt-3 justify-content-end">
                    
                    <p class="col-md-4 small text-danger btn SignUp">SignUp Now</p>
                    
                </div>
            </form>
            </div>
                  

                
            </div>
        </div>
    </div>
</div>

<!-- ========================================================================================
                                            REGISTER MODAL
======================================================================================== -->
<div class="modal fade" id="SignUp_modal" tabindex="-2" role="dialog" aria-labelledby="SignUp_modal" aria-hidden="true">
    <div class="modal-dialog modal-me modal-dialog-centered modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="SignUp_modal">SignUp</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">

            <div class="card-body">
                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">Name</p>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="R_Name" id="R_Name">
                    </div>
                </div>

                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">E-mail</p>
                    <div class="col-md-9">
                        <input class="form-control" type="text" name="R_Email" id="R_Email">
                    </div>
                </div>
                
                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">Password</p>
                    <div class="col-md-9">
                        <input class="form-control" type="password" name="R_Password" id="R_Password">
                    </div>
                </div>

                <div class="col-md-12 row mt-3">
                    <p class="col-md-3">Re-Password</p>
                    <div class="col-md-9">
                        <input class="form-control" type="password" name="Re_Password" id="Re_Password">
                    </div>
                </div>

                <div class="col-md-12 row mt-3 justify-content-center">
                    <button class="btn btn-primary col-md-4" id="SignUp">SignUp</button>
                </div>

                <div class="col-md-12 row mt-3 justify-content-end">
                    
                    <p class="col-md-4 small text-danger btn Login">Login</p>
                    
                </div>
            </div>
                  

                
            </div>
        </div>
    </div>
</div>