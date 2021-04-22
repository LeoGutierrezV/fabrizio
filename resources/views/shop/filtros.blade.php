<div class="col-md-3 order-1 mb-5 mb-md-0">
    <div class="border p-4 rounded mb-4">
      <h3 class="mb-3 h6 text-uppercase text-black d-block">Categorias</h3>
      <ul class="list-unstyled mb-0">

        <li class="mb-1">
          @foreach( $cat as $c)
            <a href="/search?c={{$c->categoria_id}}" class="d-flex text-black">
              <span><h6>{{$c->categoria_id}}</h6></span>
            </a>
            @endforeach
        </li>

      </ul>
    </div> 

   <div class="border p-4 rounded mb-4">
       {{-- <div class="mb-4 text-black">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Filtro de Precios</h3>
        <div id="slider-range" class="border-black"></div>
        <form action="/search">
          <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white" disabled="" />
        </form>
      </div>  --}}

      <div class="mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Talla</h3>


        <label for="s_sm"><!--class="d-flex"-->
        <div class="block-26 mb-2">
          <ul>
            @foreach($talla as $t)
              <li><a href="/search?t={{$t}}">{{$t}}</a></li>
            @endforeach
          </ul>
        </div>
        </span>
        </label>


      </div>

      <div class="mb-4">
        <h3 class="mb-3 h6 text-uppercase text-black d-block">Color</h3>

          <a href="/search?co=negro" class="d-flex color-item align-items-center" >
            <span class="bg-danger color d-inline-block rounded-circle mr-2 block-black"></span> <span class="text-black">Negro</span>
          </a>

      </div>

    </div>
  </div>