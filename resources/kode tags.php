kode yg salah 
public function list_tag(Tags $tags)
    {
        $site = DB::table('pengaturan')->first();
        $berita = $tags->posts()->get();
        $ambil_tag = Tags::where('id', $tags->id)->first();
        $kategori = Category::all();
        $data = array(  
            'title' => $site->judul_situs,
            'site' => $site,
            'content' => 'berita/tag',
            'kategori' => $kategori,
            'berita' => $berita,
            'tags' => $tags,
            'datatag' => $ambil_tag
        );
        return view('layout/wrapper', $data);
    }

ke 1 

    public function list_tag($slug)
    {
        $site = Pengaturan::first();
        $kategori = Category::all();
        $tag = Tags::all();
        $tag_terpilih = Tags::where('slug', $slug)->firstOrFail();
        $berita = $tag_terpilih->posts;
        $data = array(
            'title' => $site->judul_situs,
            'berita' => $berita,
            'site' => $site,
            'content' => 'berita/tag',
            'kategori' => $kategori,
            'tag' => $tag
        );
        return view('layout/wrapper', $data);
    }

 ke 2

public function list_tag($slug)
    {
        // Mengambil data pengaturan situs
        $site = Pengaturan::first();
        
        // Mengambil semua kategori
        $kategori = Category::all();
        
        // Mengambil semua tag
        $tag = Tags::all();

        // Mengambil postingan berdasarkan tag yang dipilih
        $berita = Posts::whereHas('tags', function ($query) use ($slug) {
            $query->where('slug', $slug);
        })->paginate(10);

        // Mengirim data ke view
        $data = array(
            'title' => 'Tag: ' . ucfirst($slug) . ' | ' . $site->judul_situs,
            'berita' => $berita,
            'site' => $site,
            'content' => 'berita/tag',
            'kategori' => $kategori,
            'tag' => $tag
        );

        return view('layout/wrapper', $data);
    }