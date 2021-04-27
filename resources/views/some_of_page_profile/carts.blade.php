<div class="card-group">
    @if(collect(DB::table('product_love')->where('id_user',Auth::user()->id)->get())->isEmpty())
    <div class="card-header d-flex justify-content-end" style="margin-left: 30%;color:white;background-color:#4755AB;">
       <h3> You have not added any products </h3>
    </div>
    @endif
    {{-- ------------------ show products cars --------------------------- --}}
    @if(collect(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_cars','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">cars</h3><br>
    <hr><br>
    @foreach(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_cars','!=',null]])->get() as $key)
    <div class="owl-item" id="c{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="width:400px;margin-bottom:10px;"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('cars')->find($key->id_cars)->images }}" alt="img" class="card-img-top" style="max-height: 200px;">
            </div>
            <!-- card body -->
            <div class="px-2 py-3 card-body">
                <h5 class="card-title text-capitalize">{{ DB::table('cars')->find($key->id_cars)->name }}</h5>
                <div class="card-text d-flex justify-content-between">
                    <p class="text-dark font-weight-bold">${{ DB::table('cars')->find($key->id_cars)->price }}</p>
                    <p class="line-through shet_line">${{ DB::table('cars')->find($key->id_cars)->old_price }}</p>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">
                <span style="position: absolute;left: 25px;bottom:35px"><svg width="1.4em" height="1.4em" style="color:gold;" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></span>
                <button type="button" class="btn btn-danger drop_pro" style="background-color: #dc3545;" data_name_t='cars' data_id_pro='{{ DB::table('cars')->find($key->id_cars)->id }}'>Drop</button>
            </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif

    {{-- ------------------ show products books --------------------------- --}}

    @if(collect(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_books','!=',null]])->get())->isNotEmpty())
    <hr>
    <h3 class="title_">books</h3>
    <hr><br>
    @foreach(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_books','!=',null]])->get() as $key)
    <div class="owl-item" id="bo{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="width:400px;margin-bottom:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('books')->find($key->id_books)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <!-- card body -->
            <div class="px-2 py-3 card-body">
                <h5 class="card-title text-capitalize">{{ DB::table('books')->find($key->id_books)->name }}</h5>
                <div class="card-text d-flex justify-content-between">
                    <p class="text-dark font-weight-bold">${{ DB::table('books')->find($key->id_books)->price }}</p>
                    <p class="line-through shet_line">${{ DB::table('books')->find($key->id_books)->old_price ?? '0'}}</p>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">
                <span style="position: absolute;left: 25px;bottom:35px"><svg width="1.4em" height="1.4em" style="color:gold;" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></span>
                <button type="button" class="btn btn-danger drop_pro" style="background-color: #dc3545;" data_name_t='books' data_id_pro='{{ DB::table('books')->find($key->id_books)->id }}'>Drop</button>
            </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif

    {{-- ------------------ show products clothes --------------------------- --}}

    @if(collect(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_clothes','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">clothes</h3><br>
    <hr><br>
    @foreach(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_clothes','!=',null]])->get() as $key)
    <div class="owl-item" id="cl{{ DB::table('clothes')->find($key->id_clothes)->id }}" style="width:400px;margin-bottom:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('clothes')->find($key->id_clothes)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <!-- card body -->
            <div class="px-2 py-3 card-body">
                <h5 class="card-title text-capitalize">{{ DB::table('clothes')->find($key->id_clothes)->name }}</h5>
                <div class="card-text d-flex justify-content-between">
                    <p class="text-dark font-weight-bold">${{ DB::table('clothes')->find($key->id_clothes)->price }}</p>
                    <p class="line-through shet_line">${{ DB::table('clothes')->find($key->id_clothes)->old_price ?? '0'}}</p>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">
                <span style="position: absolute;left: 25px;bottom:35px"><svg width="1.4em" height="1.4em" style="color:gold;" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></span>
                <button type="button" class="btn btn-danger drop_pro" style="background-color: #dc3545;" data_name_t='clothes' data_id_pro='{{ DB::table('clothes')->find($key->id_clothes)->id }}'>Drop</button>
            </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif
<hr/>
    {{-- ------------------ show products computers --------------------------- --}}

    @if(collect(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_computers','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">computers</h3><br>
    <hr><br>
    @foreach(DB::table('product_love')->where([['id_user',Auth::user()->id],['id_computers','!=',null]])->get() as $key)
    <div class="owl-item" id="com{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="max-width:400px;margin-top:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('computers')->find($key->id_computers)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <!-- card body -->
            <div class="px-2 py-3 card-body">
                <h5 class="card-title text-capitalize">{{ DB::table('computers')->find($key->id_computers)->name }}</h5>
                <div class="card-text d-flex justify-content-between">
                    <p class="text-dark font-weight-bold">${{ DB::table('computers')->find($key->id_computers)->price }}</p>
                    <p class="line-through shet_line">${{ DB::table('computers')->find($key->id_computers)->old_price ?? '0'}}</p>
                </div>
            </div>
            <!-- card footer -->
            <div class="card-footer d-flex justify-content-end">
                <span style="position: absolute;left: 25px;bottom:35px"><svg width="1.4em" height="1.4em" style="color:gold;" viewBox="0 0 16 16" class="bi bi-star-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.283.95l-3.523 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg></span>
                <button type="button" class="btn btn-danger drop_pro" style="background-color: #dc3545;" data_name_t='computers' data_id_pro='{{ DB::table('computers')->find($key->id_computers)->id }}'>Drop</button>
            </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif
</div>

