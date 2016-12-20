{!! Form::open(array('url'=>'reservas/create','method'=>'GET','autocomplete'=>'off','role'=>'search')) !!}
    <div class="form-group">
        <div class="input-group">
            <input type="text" class="form-control" name="searchText" placeholder="Buscar..." value="">
            <span class="input-group-btn">
                <button type="submit">Buscar</button>
            </span>
        </div>
    </div>
{{Form::close()}}