
@section('content')
<div class="container-fluid"></div>
    <h1>{($title)}</h1>
    @if(@errors->any())
    <div class="alert alert-danger"></div>
        <ul class="mb-0">
            @foreach($errors->all() as $error)
            <li>{($error)}</li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{(route('products.store'))}" method="POST" 
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" name="name" id="name" class="form-control" value="{(old('name'))}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">harga</label>
        <input type="number" name="price" id="price" step="0.01" class="form-control @error('price') is-invalid @enderror" value="{(old('price'))}">
        @error('price')
            <div class="invalid-feedback">{($message)}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Deskripsi</label>
        <textarea name="description" id="description" rows="3" class="form-control @error('description') is-invalid @enderror">{(old('description'))}</textarea>
        @error('description')
            <div class="invalid-feedback">{($message)}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select name="status" id="status" class="form-control @error('status') is-invalid @enderror">
            <option value="">Pilih Status</option>
            <option value="new" {{ old('status') == 'new' ? 'selected' : '' }}>baru</option>
            <option value="used" {{ old('status') == 'used' ? 'selected' : '' }}>bekas</option>
        </select>
        @error('status')
            <div class="invalid-feedback">{($message)}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="release_date" class="form-label">Tanggal Rilis</label>
        <input type="date" name="release_date" id="release_date" 
        class="form-control @error('release_date') is-invalid @enderror" value="{(old('release_date'))}">
        @error('release_date')
            <div class="invalid-feedback">{($message)}</div>
        @enderror
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" name="is_active" id="is_active" value="1" class="form-check-input" {{ old('is_active') ? 'checked' : '' }}>
        <label for="is_active" class="form-check-label">Aktif</label>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{(route('products.index'))}" class="btn btn-secondary">Batal</a>
</form>
</div>
@endsection
