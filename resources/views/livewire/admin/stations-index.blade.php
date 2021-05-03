<div class="card">
    <div class="card-header">
        <input wire:model="search" class="form-control" placeholder="Nombre de la estación a buscar ...">
    </div>

    @if ($stations->count())
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Indicativo</th>
                        <th>Indsinop</th>
                        <th>Nombre</th>
                        <th>Provincia</th>
                        <th>Latitud</th>
                        <th>Longitud</th>
                        <th>Altitud</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($stations as $station)
                        <tr>
                            <td>{{$station->indicativo}}</td>
                            <td>{{$station->indsinop}}</td>
                            <td>{{$station->nombre}}</td>
                            <td>{{$station->provincia}}</td>
                            <td>{{$station->latitud}}</td>
                            <td>{{$station->longitud}}</td>
                            <td>{{$station->altitud}}</td>
                            <td width="10px">
                                <a class="btn btn-primary btn-sm" href="{{route('admin.stations.edit', $station)}}">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.stations.destroy', $station)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{$stations->links()}}
        </div>
    @else
        <div class="card-body">
            <strong>No se ha encontrado ninguna estación metereológica !!</strong>
        </div>
    @endif

    
</div>