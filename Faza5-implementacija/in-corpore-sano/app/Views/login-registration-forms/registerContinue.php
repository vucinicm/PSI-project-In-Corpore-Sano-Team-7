<!-- Mia Vucinic -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="ICON" href="../images/logo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/assets/js/scriptLogInRegister.js"></script>

    <title>Register</title>
</head>

<body style="background-color: #e9f1d0;">
<section class="vh-100" style="background-color: #e9f1d0;">
    <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                <div class="card text-black" style="border-radius: 25px;  background-color: #d3e58a;">
                    <div class="card-body p-md-5">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign Up</p>

                                <form class="mx-1 mx-md-4" id="registrationform2"
                                      action="/registerSecondPage" method="post">


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" min="150" id="height" class="form-control" required />
                                            <label class="form-label" for="height">Height (cm)</label>
                                        </div>
                                    </div>

                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" min="40" id="weight" class="form-control" required/>
                                            <label class="form-label" for="weight">Weight (kg)</label>
                                        </div>
                                    </div>


                                    <div class="d-flex flex-row align-items-center mb-4">
                                        <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                                        <div class="form-outline flex-fill mb-0">
                                            <input type="number" id="hours" class="form-control" required/>
                                            <label class="form-label" for="hours">Hours of training per week</label>
                                        </div>
                                    </div>


                                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                                        <button type="button"
                                                class="btn btn-primary btn-lg"
                                                style="background-color:#d6355b!important; border-radius: 25px;border-color:#d6355b!important;"
                                                onclick="verifyFieldsRegisterContinue()"
                                                id="buttonRegister">
                                            Register
                                        </button>
                                    </div>

                                    <hr class="my-4">

                                    <div class="d-flex justify-content-center">
                                        <a href="/registerFirstPage">Back</a>
                                    </div>


                                </form>

                            </div>
                            <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                                <img src="<?= base_url() ?>/images/logo.png" class="img-fluid" alt="Sample image"
                                     style="margin:auto;width:70%">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="modal" id="modalRegisterContinue">
    <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #d3e58a;">
                <h5 class="modal-title">ERROR</h5>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body" style="background-color: #e9f1d0" id="modalBodyRegisterContinue">
            </div>
            <div class="modal-footer" style="background-color: #d3e58a;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal"
                        style="background-color:#d6355b!important; border-radius: 25px;border-color:#d6355b!important;">OK</button>
            </div>
        </div>
    </div>
</div>

</body>

</html>