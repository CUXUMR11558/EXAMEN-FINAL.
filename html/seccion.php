<link rel="stylesheet" href="../style/seccion.css">

<?php
include("header.php");
?>

<div class="full-screen-div"></div>

<div class="row">

    <div class="col-3"></div>
    <div class="col">
        <h1 class="mt-2 mb-5 text-white">Iniciar seccion</h1>
        <div class="row bg-dark">

            <div class="col-8">

                <div class="p-5 ">

                    <form class="p-1 ">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label text-primary">INICIA SECCION CON TU NOMBRE DE CUENTA</label>
                            <input type="email" class="form-control text-white bg-secondary" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label text-white">Password</label>
                            <input type="password" class="form-control text-white bg-secondary" id="exampleInputPassword1">
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input text-white" id="exampleCheck1">
                            <label class="form-check-label text-white" for="exampleCheck1">Recordarme</label>
                        </div>

                        <div>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                INICIAR SECCION
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            SE A PRESENTADO UN PROBLEMA AL MOMENTO DE INICIAR SECCION.
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">ENVIAR NOTIFICACION</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>



                    </form>


                </div>
            </div>
            <div class="col">
                <form action="">
                    <label for="" class="text-primary mt-5">O BIEN POR UN CODIGO QR</label>
                    <div>
                        <img src="../images/qr.png" alt="" class="w-100 h-50">
                    </div>

                </form>

            </div>

        </div>


    </div>

    <div class="col-3"></div>
</div>
<br><br><br><br><br>
<div class="row bg-dark">

    <div class="col"></div>
    <div class="col mt-3">
        <h4 class="text-center text-white">¿TU PRIMERA VEZ EN ZONA TECNOLOGICA?</h4><br>
        <div class="conteiner text-center">
            <button class="bg-primary text-center text-white mb-5">CREA UNA CUENTA</button>
        </div>
    </div>
    <div class="col m-3">
        <p class="text-center text-white">Es gratis y muy fácil. Descubre miles de articulos tecnologicos con la mas alta calida y obten un descuento del 50%</p>

    </div>
    <div class="col"></div>



</div>


<br><br><br>




<?php
include("footer.php");
?>