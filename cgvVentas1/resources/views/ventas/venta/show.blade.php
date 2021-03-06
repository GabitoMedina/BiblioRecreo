@extends ('layouts.admin')
@section ('contenido')			
	<div class="row">
		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="proveedor">Cliente</label>
				<p>{{$venta->nombre}}</p>
				
			</div>
		</div>
		<div class="col-lg-4 col-sm-4 col-md-4 col-xs-12">
			<div class="form-group">
				<label >Comprobante</label>
				<p>{{$venta->tipo_comprobante}}</p>
			</div>
		</div>

		<div class="col-lg-6 col-sm-6 col-md-6 col-xs-12">
			<div class="form-group">
				<label for="num_comprobante">Num Comprobante</label>
				<p>{{$venta->num_comprobante}}</p>
			</div>
		</div>
	</div>	
	
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">					

					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<table id="detalles" class="table table-stiped table-bordered table-condensed table-hover">
							<thead style="background-color: teal">
								
								<th>Articulo</th>
								<th>Cantidad</th>
								<th>P Compra</th>
								<th>P Venta</th>
								<th>Subtotal</th>
								
							</thead>
							<tfoot>
								
								<th></th>
								<th></th>
								<th></th>
								<th></th>
								<th><h4 id="total">{{$venta->total}}</h4></th>
								
							</tfoot>

							<tbody>
								@foreach($detalle as $det)
									<tr>
										<td>{{$det->articulo}}</td>
										<td>{{$det->cantidad}}</td>
										<td>{{$det->precio_compra}}</td>
										<td>{{$det->precio_venta}}</td>
										<td>{{$det->cantidad*$det->precio_compra}}</td>
									</tr>

								@endforeach
								
							</tbody>							
						</table>
					</div>					
				</div>
			</div>			
		</div>


@endsection