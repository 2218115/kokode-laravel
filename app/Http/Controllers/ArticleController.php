<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Category;

use Barryvdh\DomPDF\Facade\Pdf;

class ArticleController extends Controller
{
    public function index() {
        $articles = Article::all();
        $categories = Category::all();

        return view('dashboard.article.index', compact('articles', 'categories'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        Article::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'id_category' => $validated['category'],
        ]);

        return redirect('/dashboard/articles');
    }

    public function destroy(Request $request, string $id) {
        $article = Article::find($id);
        $article->delete();

        return redirect('/dashboard/articles');
    }

    public function update(Request $request) {
        $validated = $request->validate([
            'id' => 'required',
            'title' => 'required',
            'content' => 'required',
            'category' => 'required',
        ]);

        $article = Article::find($validated['id']);
        $article->title = $validated['title'];
        $article->content = $validated['content'];
        $article->id_category = $validated['category'];
        $article->update();

        return redirect('/dashboard/articles');
    }

    public function report() {
        $articles = Article::all();

        $pdf = Pdf::loadView('dashboard.article.pdf', [
            'articles' => $articles,
        ]);

        $pdf->setPaper('a4', 'landscape');

        return $pdf->download('laporan-artikel.pdf');        
    }
}
