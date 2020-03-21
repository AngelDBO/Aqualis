

<!-- Modal -->
<div class="modal fade" id="MAPN1" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Actualizar Cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="FP_Ac_Natural" onclick="ObtenerDatoNaturalID()">
                    <br>
                    <input type="text" id="ID" name="ID" hidden="">
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="Tipo Documento">Tipo Documento</label>
                            <select id="TipoDocumentoU" name="Tipo_DocumentoU" class="form-control">
                                <option></option>
                                <option selected value="CC">CEDULA CIUDADANIA</option>
                                <option value="TI">TARJETA DE IDENTIDAD</option>
                                <option value="RC">REGISTRO CIVIL</option>
                                <option value="CE">CEDULA EXTRANJERA</option>
                                <option value="LM">LIBRETA MILITAR</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="Numero Documento">Numero Documento</label>
                            <input type="text" name="Numero_DocumentoU" class="form-control" id="Numero_DocumentoU">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="Primer Nombre">Primer Nombre</label>
                            <input type="text" name="Primer_NombreU" class="form-control" id="Primer_NombreU" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Segundo Nombre</label>
                            <input type="text" name="Segundo_NombreU" class="form-control" id="Segundo_NombreU" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputAddress">Primer Apellido</label>
                            <input type="text" name="Primer_ApellidoU" class="form-control" id="Primer_ApellidoU" placeholder="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputAddress2">Segundo Apellido</label>
                            <input type="text" name="Segundo_ApellidoU" class="form-control" id="Segundo_ApellidoU" placeholder="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputZip">Direccion</label>
                            <input type="text" name="DireccionU" class="form-control" id="DireccionU">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Telefono 1</label>
                            <input type="text" name="Telefono_1U" class="form-control" id="Telefono_1U">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputState">Telefono 2</label>
                            <input type="text" name="Telefono_2U" class="form-control" id="Telefono_2U">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Correo</label>
                        <input type="email" name="CorreoU" class="form-control" id="CorreoU" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Estado</label>
                        <select id="EstadoU" name="EstadoU" class="form-control">
                            <option value="Activo" selected>Activo</option>
                            <option value="Inactivo">Inactivo</option>

                        </select>
                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                <button type="button" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </div>
</div>