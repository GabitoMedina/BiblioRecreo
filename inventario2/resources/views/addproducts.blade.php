@extends('plantilla')

@section('content')


    <h1>
        agregar Producto
    </h1>
    <hr class="style8">
    <div >
        <form save action="servidor/sProducto.php" role="producto">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Descripción</label>
                        <input name="descripcion" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="" class="control-label">Estado</label>
                        <select name="estado" class="form-control selectpicker" required>
                            <option value="ACT">Activo</option>
                            <option value="INA">Inactivo</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="" class="control-label">Observación</label>
                        <textarea class="form-control" name="observacion" cols="30" rows="4"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="pull-right">
                        <button type="reset" class="btn btn-danger">
                            <i class="fa fa-reply"></i> Cancelar
                        </button>
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-save"></i> Guardar
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>



@stop
