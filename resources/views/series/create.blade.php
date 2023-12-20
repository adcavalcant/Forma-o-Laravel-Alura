<x-layout title="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-class">Nome:</label>
                <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" autofocus>
            </div>
            <div class="col-2">
                <label for="seasonsQty" class="form-class">N° de Temporadas:</label>
                <input type="number" id="seasonsQty" name="seasonsQty" class="form-control" value="{{ old('seasonsQty') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-class">Episódios/Temporada:</label>
                <input type="number" id="episodesPerSeason" name="episodesPerSeason" class="form-control" value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
