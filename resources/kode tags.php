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




    Kode auth default

    Route::group(['middleware' => 'auth'], function(){
    // Dashboard
    Route::get('/dashboard',[DashboardController::class,'index'])->middleware('auth');
    // Menu Kategori
    Route::get('dashboard/kategori',[CategoryController::class,'index']);
    Route::get('dashboard/kategori/create',[CategoryController::class,'create']);
    Route::post('dashboard/kategori',[CategoryController::class, 'store']);
    Route::get('dashboard/kategori/edit/{category}',[CategoryController::class,'edit']);
    Route::patch('dashboard/kategori/oke/{category}',[CategoryController::class,'update']);
    Route::delete('dashboard/kategori/{category}',[CategoryController::class,'destroy']);
    // Menu Tags
    Route::get('dashboard/tag',[App\Http\Controllers\TagController::class,'index']);
    Route::get('dashboard/tag/create',[App\Http\Controllers\TagController::class, 'create']);
    Route::post('dashboard/tag',[App\Http\Controllers\TagController::class,'store']);
    Route::get('dashboard/tag/edit/{id}', [App\Http\Controllers\TagController::class,'edit']);
    Route::patch('dashboard/tag/{tags}',[App\Http\Controllers\TagController::class,'update']);
    Route::delete('dashboard/tag/{tags}',[App\Http\Controllers\TagController::class,'destroy']);
    // Menu Postingan
    Route::get('dashboard/postingan',[App\Http\Controllers\PostinganController::class,'index']);
    Route::get('dashboard/postingan/create',[App\Http\Controllers\PostinganController::class, 'create']);
    Route::post('dashboard/postingan',[App\Http\Controllers\PostinganController::class,'store']);
    Route::get('dashboard/postingan/edit/{post}',[App\Http\Controllers\PostinganController::class, 'edit']);
    Route::patch('dashboard/postingan/{post}',[App\Http\Controllers\PostinganController::class,'update']);
    Route::delete('dashboard/postingan/{posts}',[App\Http\Controllers\PostinganController::class,'destroy']);
    Route::get('dashboard/postingan/trash',[App\Http\Controllers\PostinganController::class,'lihat_trash']);
    Route::get('dashboard/postingan/trash/rest/{posts}', [App\Http\Controllers\PostinganController::class,'kembalikan_postingan']);
    Route::delete('dashboard/postingan/trash/rest/{posts}',[App\Http\Controllers\PostinganController::class,'hapus_permanen']);
    Route::get('dashboard/postingan/{penulis}',[App\Http\Controllers\PostinganController::class,'byuser']);
    // User Management
    // Route::get('dashboard/user',[UserController::class,'index']);
    // Route::get('dashboard/user/create',[UserController::class,'create']);
    // Route::post('dashboard/user',[UserController::class,'store']);
    // Route::get('dashboard/user/{user}/edit',[UserController::class,'edit']);
    // Route::patch('dashboard/user/{user}',[UserController::class,'update']);
    // Route::delete('dashboard/user/{user}',[UserController::class,'destroy']);

    Route::group(['middleware' => 'role:admin,karyawan,superuser'], function(){
        Route::resource('dashboard/user', UserController::class);
    });
    

    Route::get('dashboard/pengaturan',[PengaturanController::class,'index']);
    Route::post('dashboard/pengaturan/{id}', [PengaturanController::class,'ubah']);

    Route::get('dashboard/barcode',[App\Http\Controllers\BarcodeController::class,'index']);
    Route::get('dashboard/barcode/tambah',[App\Http\Controllers\BarcodeController::class,'tambah']);
    Route::post('dashboard/barcode',[App\Http\Controllers\BarcodeController::class,'simpan']);
});


    kode auth 3 multiuser

    Route::group(['middleware' => 'auth'], function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index']);

    // Menu Kategori
    Route::group(['middleware' => 'role:superuser,admin'], function () {
        Route::get('dashboard/kategori', [CategoryController::class, 'index']);
        Route::get('dashboard/kategori/create', [CategoryController::class, 'create']);
        Route::post('dashboard/kategori', [CategoryController::class, 'store']);
        Route::get('dashboard/kategori/edit/{category}', [CategoryController::class, 'edit']);
        Route::patch('dashboard/kategori/oke/{category}', [CategoryController::class, 'update']);
        Route::delete('dashboard/kategori/{category}', [CategoryController::class, 'destroy']);
    });

    // Menu Tags
    Route::group(['middleware' => 'role:superuser,admin'], function () {
        Route::get('dashboard/tag', [\App\Http\Controllers\TagController::class, 'index']);
        Route::get('dashboard/tag/create', [\App\Http\Controllers\TagController::class, 'create']);
        Route::post('dashboard/tag', [\App\Http\Controllers\TagController::class, 'store']);
        Route::get('dashboard/tag/edit/{id}', [\App\Http\Controllers\TagController::class, 'edit']);
        Route::patch('dashboard/tag/{tags}', [\App\Http\Controllers\TagController::class, 'update']);
        Route::delete('dashboard/tag/{tags}', [\App\Http\Controllers\TagController::class, 'destroy']);
    });

    // Menu Postingan
    Route::group(['middleware' => 'role:superuser,admin,karyawan'], function () {
        Route::get('dashboard/postingan', [PostinganController::class, 'index']);
        Route::get('dashboard/postingan/create', [PostinganController::class, 'create']);
        Route::post('dashboard/postingan', [PostinganController::class, 'store']);
        Route::get('dashboard/postingan/edit/{post}', [PostinganController::class, 'edit']);
        Route::patch('dashboard/postingan/{post}', [PostinganController::class, 'update']);
        Route::delete('dashboard/postingan/{posts}', [PostinganController::class, 'destroy']);
        Route::get('dashboard/postingan/trash', [PostinganController::class, 'lihat_trash']);
        Route::get('dashboard/postingan/trash/rest/{posts}', [PostinganController::class, 'kembalikan_postingan']);
        Route::delete('dashboard/postingan/trash/rest/{posts}', [PostinganController::class, 'hapus_permanen']);
        Route::get('dashboard/postingan/{penulis}', [PostinganController::class, 'byuser']);
    });

    // User Management
    Route::group(['middleware' => 'role:superuser'], function () {
        Route::get('dashboard/user', [UserController::class, 'index']);
    });

    // Pengaturan
    Route::get('dashboard/pengaturan', [PengaturanController::class, 'index']);
    Route::post('dashboard/pengaturan/{id}', [PengaturanController::class, 'ubah']);

    // Barcode
    Route::get('dashboard/barcode', [BarcodeController::class, 'index']);
    Route::get('dashboard/barcode/tambah', [BarcodeController::class, 'tambah']);
    Route::post('dashboard/barcode', [BarcodeController::class, 'simpan']);
});