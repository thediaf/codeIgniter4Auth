<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 offset-md-3 col-sm-8 offset-sm-2 mt-5 pt-5 pb-5 bg-white form-wrapper">
            <div class="container">
                <h3>Register</h3>
                <hr>
                <form action="/register" method="post">
                    <div class="row">
                        <div class="form-group col-md-6 col-sm-5">
                            <label for="firstName"><strong>First name: </strong></label>
                            <input type="text" name="firstName" class="form-control" id="firstName" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group col-md-6 col-sm-5">
                            <label for="lastName"><strong>Last name address: </strong></label>
                            <input type="text" name="lastName" class="form-control" id="lastName" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group col-12">
                            <label for="email"><strong>Email address: </strong></label>
                            <input type="text" name="email" class="form-control" id="email" value="<?= set_value('email') ?>">
                        </div>
                        <div class="form-group col-md-6 col-sm-5">
                            <label for="password"><strong>Password: </strong></label>
                            <input type="text" name="password" class="form-control" id="password">
                        </div>
                        <div class="form-group col-md-6 col-sm-5">
                            <label for="passwordConfirm"><strong>Confirm password: </strong></label>
                            <input type="text" name="passwordConfirm" class="form-control" id="passwordConfirm">
                        </div>
                        <?php if(isset($validation)): ?>
                            <div class="col-12">
                                <div class="alert alert-danger" role="alert">
                                    <?= $validation->listErrors() ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-4">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                        <div class="col-12 col-sm-8 text-right">
                            <a href="/">Already have an account</a>
                        </div>
                    </div>
                </form>
            </div>    
        </div>
    </div>
</div>