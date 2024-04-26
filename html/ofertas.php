<link rel="stylesheet" href="../style/ofertas.css">

<?php
include("header.php");
?>
<div class="row">
    <div class="col-3"></div>


    <div class="col">
        <div class="bg-dark ml-200 mr-200">
            <h1 class="text-center text-white mt-5">OFERTAS ZONA TECNOLOGICA</h1>
        </div>

    </div>


    <div class="col-3"></div>
</div>









<div class="p-5">

    <div class="container P-5" id="div1">

        <div class="row">
            <div class="col bg-dark text-primary">
                <h2 class="text-center">SMARTPHONE</h2>
                <table class="table table-bordered bg-dark text-primary">
                    <thead>
                        <tr class="bg-dark text-primary">
                            <th class="bg-dark text-primary">Producto</th>
                            <th class="bg-dark text-primary">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="bg-dark text-primary">iPhone 12 Pro</td>
                            <td class="bg-dark text-primary"><img src="../images/phone 12.jpeg" alt="iPhone 12 Pro" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="bg-dark text-primary">Samsung Galaxy S21</td>
                            <td class="bg-dark text-primary"><img src="../images/galaxys21.jpg" alt="Galaxy S21" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="bg-dark text-primary">Google Pixel 6</td>
                            <td class="bg-dark text-primary"><img src="../images/gogle6.png" alt="Pixel 6" class="producto-img"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col bg-dark text-primary">
                <h2 class="text-center">LAPTOPS</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col bg-dark text-primary">Producto</th>
                            <th class="col bg-dark text-primary">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col bg-dark text-primary">MacBook Pro</td>
                            <td class="col bg-dark text-primary"><img src="../images/macpro.jpg" alt="MacBook Pro" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="col bg-dark text-primary">Dell XPS 13</td>
                            <td class="col bg-dark text-primary"><img src="../images/dellpro.jpeg" alt="Dell XPS 13" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="col bg-dark text-primary">HP Spectre x360</td>
                            <td class="col bg-dark text-primary"><img src="../images/hp360.jpg" alt="HP Spectre x360" class="producto-img"></td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col col bg-dark text-primary">
                <h2 class="text-center">ACCESORIOS</h2>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="col bg-dark text-primary">Producto</th>
                            <th class="col bg-dark text-primary">Imagen</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="col bg-dark text-primary">Auriculares Sony WH-1000XM4</td>
                            <td class="col bg-dark text-primary"><img src="../images/audifono.webp" alt="Sony WH-1000XM4" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="col bg-dark text-primary">Teclado Logitech G Pro X</td>
                            <td class="col bg-dark text-primary"><img src="../images/teclado.jpg" alt="Logitech G Pro X" class="producto-img"></td>
                        </tr>
                        <tr>
                            <td class="col bg-dark text-primary">Mouse Razer DeathAdder V2</td>
                            <td class="col bg-dark text-primary"><img src="../images/raton.jpg" alt="Razer DeathAdder V2" class="producto-img"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



</div>

<hr class="text-white" style="font-size: large;">

<h1 class="text-center text-white ">REALIZA TU PEDIDO YA!!!</h1>

<div class="row">
    <div class="col-3"></div>

    <div class="col P-5">


        <form class="bg-dark p-5">


            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">NOMBRES</label>
                <input type="text" id="disabledTextInput" class="form-control bg-secondary text-white" placeholder="xxxxxxx">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">APELLIDOS</label>
                <input type="text" id="disabledTextInput" class="form-control text-white bg-secondary" placeholder="xxxxxxx">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">EDAD</label>
                <input type="number" id="disabledTextInput" class="form-control text-white bg-secondary" placeholder="xxxxxxx">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">DIRECCION</label>
                <input type="text" id="disabledTextInput" class="form-control text-white bg-secondary" placeholder="xxxxxxx">
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">CORREO ELECTRONICO</label>
                <input type="email" id="disabledTextInput" class="form-control text-white bg-secondary" placeholder="xxxxxxx">
            </div>

            <div class="mb-3">
                <label for="disabledSelect" class="form-label text-primary">QUE ARTICULO DESEA COMPRAR</label>
                <select id="disabledSelect" class="form-selec text-white bg-secondary">
                    <option>iPhone 12 Pro</option>
                    <option>Samsung Galaxy S21</option>
                    <option>Google Pixel 6</option>
                    <option>MacBook Pro</option>
                    <option>Dell XPS 13</option>
                    <option>HP Spectre x360<< /option>
                    <option>Auriculares Sony WH-1000XM4</option>
                    <option>Teclado Logitech G Pro X</option>
                    <option>Mouse Razer DeathAdder V2</option>


                </select>
            </div>

            <div class="mb-3">
                <label for="disabledTextInput" class="form-label text-primary">CANTIDAD DE ARTICULOS A COMPRAR</label>
                <input type="number" id="disabledTextInput" class="form-control text-white bg-secondary" placeholder="xxxxxxx">
            </div>



            <div class="mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="disabledFieldsetCheck" disabled>
                    <label class="form-check-label" for="disabledFieldsetCheck">
                        MARCAR COMO CONFORME
                    </label>
                </div>
            </div>
            <div>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    HACER EL PEDIDO
                </button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">ZONA TECNOLOGICA </h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                SU PEDIDIO SE A REALIZADO CON EXITO.
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CERRAR</button>
                                <button type="button" class="btn btn-primary">CONTINUAR</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </form>
;





    </div>

    <div class="col-3"></div>

</div>






<br><br><br><br><br><br>


<?php
include("footer.php");
?>