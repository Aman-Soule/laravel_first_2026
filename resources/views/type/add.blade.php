{{--@extends('template')--}}

{{--@section('content')--}}
{{--    <form action="{{route($typeassurance->id ? 'type.update':'store.type')}}"  method="POST">--}}
{{--        @method($typeassurance->id ? 'PUT':'POST')--}}
{{--        @csrf--}}
{{--        <input name="id" class="form-control" value="{{$typeassurance->id}}" hidden>--}}
{{--        <label>Libelle</label>--}}
{{--        <input name="libelle" class="form-control" value="{{$typeassurance->libelle}}">--}}
{{--        <br>--}}
{{--        <button class="btn btn-primary" type="submit">{{$typeassurance->id ?'Update' :'Add'}}</button>--}}
{{--        <button type="reset">Annuler</button>--}}
{{--    </form>--}}

{{--@endsection--}}

@extends('template')

@section('content')
    <div class="container mt-4">
        <div class="card shadow">
            <div class="card-header">
                <h3 class="mb-0">Ajouter un type d'Assurance</h3>
            </div>
            <div class="card-body">
                <form action="{{ route('type.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="libelle" class="form-label">Libellé :</label>
                        <input type="text" class="form-control" id="libelle" name="libelle" placeholder="Entrez le libellé">
                    </div>
                    <button class="btn btn-success" type="submit">Enregistrer</button>
                    <a href="{{ route('type-assurance') }}" class="btn btn-secondary ms-2">Annuler</a>
                </form>
            </div>
        </div>
    </div>
@endsection


