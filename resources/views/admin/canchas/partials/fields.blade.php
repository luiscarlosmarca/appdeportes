<div class="col-sm-6">
		 {{-- Nombre --}}
<div class="form-group"><br>
							{!!Form::label('nombre', 'Nombre') !!}
					   		{!!Form::text('nombre',null,['class'=>'form-control floating-label','placeholder' => 'Escriba el nombre del escenario deportivo','requiered']) !!}
  </div>

			 {{-- Barrio --}}
<div class="form-group"><br>
							{!!Form::label('Barrio', 'Barrio') !!}
					   		{!!Form::text('barrio',null,['class'=>'form-control floating-label','placeholder' => 'Escriba el nombre del Barrio','requiered']) !!}
  </div>
		 {{-- conciones --}}
<div class="form-group">
						{!!Form::label('activo', '¿Esta en buenas condiciones?') !!}
						si	{!!Form::radio('activo',true)!!} | No	{!!Form::radio('activo',false)!!}
</div>


																

{{-- observaciones --}}

 <div class="form-group">
						{!!Form::label('Observaciones', 'Observaciones') !!}
						{!!Form::textarea('observaciones' ,null,['class'=>'form-control floating-label','placeholder' => 'Escriba las observaciones' ]) !!}
 </div>
 