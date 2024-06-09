<style>
    .table {
        border: none;
        margin: 0;
        padding: 0;
    }

    th, td {
        border-radius: 0.4rem;
        padding: 1rem;
        border: 1px solid #eeeeee;
        margin: 0;
    }
</style>
<table>
    <thead>
        <th>No</th>
        <th>Judul</th>
        <th>Konten</th>
        <th>Kategori</th>
        <th>Tanggal Dibuat</th>
    <thead>
    <tbody>
        {{ $no = 1 }}
        @foreach($articles as $article)
        <tr>
            <td>{{$no++}}</td>
            <td>{{$article->title}}</td>
            <td>{{$article->content}}</td>
            <td>{{$article->category->name}}</td>
            <td>{{$article->created_at}}</td>
        </tr>
        @endforeach
    </tbody>
</table>