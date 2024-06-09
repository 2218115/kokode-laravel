@extends('layouts.dashboard')
@section('content')

<main class="main__container">
    <div class="form_modal" id="form_modal" style="@if ($errors->any()) display:flex; @endif">
            <button class="button__close" onclick="closeModal()"> X </button>
            <form action="/dashboard/articles/store" method="POST" >
                @csrf
                <div>
                    <label for="title">Judul</label>
                    <input type="text" name="title" value="{{ old('title') }}"/>
                    @error('title')
                        <p class="alert-error">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="content">Konten</label>
                    <textarea name="content" cols="100" rows="10">{{ old('content') }}</textarea>
                    @error('content')
                        <p class="alert-error">{{ $message }}</p>
                    @enderror
                </div> 
                <div>
                    <label> Kategori </label>
                    <select name="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"> {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="alert-error">{{ $message }}</p>
                    @enderror
                </div>
            <div>
                <button type="submit" name="insert" class="button--brown">Buat</button>
            </div>
        </form>
    </div>
    <header class="header">
        <h3></h3>
    </header>
        
    <div style="display: flex; gap: 1rem;">
        <button class="button--brown" onclick="showModal()">Buat Artikel 📢</button>
        <a href="/dashboard/articles/report" class="button button--outline-brown" type="submit" name="report"> Cetak Data Artikel</a>
    </div>

    <div class="dash__container">
        @foreach ($articles as $article)
        <div class="card">    
        <h3 class="card__title"> {{ $article->title }} </h3>
            <p class="article_content"> {{ $article->content }} </p>
            <div class="card__buttons">
                <button class="button--blue" onclick="showModalEdit({{$article->id}})">Rubah</button>
                <form action="/dashboard/articles/destroy/{{ $article->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" name="delete" class="button--red">Hapus</button> 
                </form>
            </div>
        </div>

        <div class="form_modal" id="form_edit_{{$article->id}}">
            <button class="button__close" onclick="closeModalEdit({{$article->id}})"> X </button>
            <form action="/dashboard/articles/update" method="POST" >
                @csrf
                @method('PUT')
                <input type="hidden" value="{{$article->id}}"  name="id"/>
                <div>
                    <label for="title">Judul</label>
                    <input type="text" name="title" value="{{$article->title}}"/>
                </div>
                <div>
                    <label for="content">Konten</label>
                    <textarea name="content" cols="100" rows="10">{{$article->content}}</textarea>
                </div> 
                <div>
                    <label> Kategori </label>
                    <select name="category">
                        @foreach ($categories as $category)
                                @if ($category->id == $article->id_category)
                                    <option value="{{ $category->id }}" selected> {{ $category->name }}</option>
                                @else
                                    <option value="{{ $category->id }}"> {{ $category->name }}</option>
                                @endif
                        @endforeach
                    </select>
            </div>
        <div>
            <button type="submit" name="update" class="button--brown">Perbarui</button>
        </div>
        </form>
        </div>

        @endforeach
    </div>
</main>
@endsection

@section('js')
<script>
    const formModal = document.getElementById("form_modal");

    function showModal() {
            formModal.style.display = "flex";
    }

    function closeModal() {
        formModal.style.display = "none";
    }

    function showModalEdit(id) {
        const el = document.getElementById(`form_edit_${id}`);
        el.style.display = "flex";
    }

    function closeModalEdit(id) {
        const el = document.getElementById(`form_edit_${id}`);
        el.style.display = "none";
    }

    const articleContentElement = document.getElementsByClassName("article_content");
    function cut(text, length) {
        if (text.length > length) {
            return text.substring(0, length);
        }
        return text;
    }

    for (const el of articleContentElement) {
        const textContent = el.textContent;
        el.textContent = cut(textContent, 100);
    }
</script>
@endsection