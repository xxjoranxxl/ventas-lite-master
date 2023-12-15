<div class="connect-sorting">
    <div class="connect-sorting-content">
        <div class="card simple-title-task ui-sortable-handle">
            <div class="card-body">
                @if($total >0)
                    <div class="table-responsive tblscroll" style="max-height: 650px; overflow: hidden;">
                        <table class="table table-bordered table-striped mt-1">
                            <thead class="text-white" style="background: #3b3f5c">
                            <tr>
                                <th width="10%"></th>
                                <th class="table-th text-left text-white">DESCRIPCION</th>
                                <th class="table-th text-center text-white">PRECIO</th>
                                <th width="13%" class="table-th text-center text-white">CANT</th>
                                <th class="table-th text-center text-white">IMPORTE</th>
                                <th class="table-th text-center text-white">ACTIONS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cart as $item)

                                <tr>
                                    <td class="text-center table-th">
                                        @if(count($item->attributes) > 0)
                                            <span>
										<img src="{{ asset('storage/products/' . $item->attributes[0])}}" alt="Imagen Del Producto" height="90" width="90" class="rounded">
									</span>
                                        @endif
                                    </td>
                                    <td><h6>{{$item->name}}</h6></td>
                                    <td class="text-center">${{number_format($item->price,2)}}</td>
                                    <td>
                                        <input type="number" id="r{{$item->id}}" wire:change="updateQty({{$item->id}}, $('#r' +{{$item->id}}).val() )"
                                               style="font-size: 1rem!important"
                                               class="form-control text-center"
                                               value="{{$item->quantity}}"
                                        >
                                    </td>
                                    <td class="text-center">
                                        <h6>
                                            ${{number_format($item->price * $item->quantity,2)}}
                                        </h6>
                                    </td>
                                    <td class="text-center">
                                        <button onclick="Confirm('{{$item->id}}', 'removeItem', '¿CONFIRMAS ELIMNAR EL REGISTRO?')" class="btn btn-dark mbmobile"><i class="fas fa-trash-alt"></i>
                                        </button>
                                        <button wire:click.prevent="decreaseQty({{$item->id}})" class="btn btn-dark mbmobile">
                                            <i class="fas fa-minus"></i>
                                        </button>
                                        <button wire:click.prevent="increaseQty({{$item->id}})" class="btn btn-dark mbmobile">
                                            <i class="fas fa-plus"></i>
                                        </button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                @else

                <div class="container mt-0">
    <h2 class="text-center">Tabla de Ventas</h2>





<container class="tablacarrito">
  <section>
    <div class="divtabla">
      <div class="table-container">
        <table class="table table-striped table-bordered" style="pading">
          <thead>
            <tr>
              
              <th>ID</th>
              <th>Total</th>
              <th>Items</th>
              <th>Precio</th>
              <th>Cambio</th>
              <th>Estado</th>
              <th>Usuario</th>
            </tr>
          </thead>
          <tbody>
            @foreach (DB::select('SELECT * FROM sales') as $sale)
              <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->total }}</td>
                <td>{{ $sale->items }}</td>
                <td>{{ $sale->cash }}</td>
                <td>{{ $sale->change }}</td>
                <td>{{ $sale->status }}</td>
                <td>{{ $sale->user_id }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </section>
</container>

<style>
  .tablacarrito {
    width: 500px;
    padding: 20px;
    margin-bottom: 100px;
  }
</style>







<div class="dropdown-item">
    <a href="{{url('categories')}}">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out">
            <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
            <polyline points="16 17 21 12 16 7"></polyline>
            <line x1="21" y1="12" x2="9" y2="12"></line>
        </svg> <span>Salir</span>
    </a>
</div>




<footer class="text-center mt-5">
    <p> 2023 BAN DAI. Todos los derechos reservados.</p>
</footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</body>
</div>
                    
                
                @endif

                <div wire:loading.inline wire:target="saveSale">
                    <h4 class="text-danger text-center">Guardando Venta...</h4>
                </div>
            </div>
        </div>
    </div>
</div>
