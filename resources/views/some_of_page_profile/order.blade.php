<div class="card-group">
    @if(collect(DB::table('orders')->where('id_users',Auth::user()->id)->get())->isEmpty())
    <div class="card-header d-flex justify-content-end" style="margin-left: 30%;color:white;background-color:#4755AB;">
       <h3> You did not purchase any products </h3>
    </div>
    @endif
    {{-- ------------------ show products cars --------------------------- --}}
    @if(collect(DB::table('orders')->where([['id_users',Auth::user()->id],['id_cars','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">cars</h3><br>
    <hr><br>
    @foreach(DB::table('orders')->where([['id_users',Auth::user()->id],['id_cars','!=',null]])->get() as $key)
    <div class="owl-item" id="c{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="width:400px;margin-bottom:10px;"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('cars')->find($key->id_cars)->images }}" alt="img" class="card-img-top" style="max-height: 200px;">
            </div>
            <span class="price-dec">{{ $key->Quantity > 1 ? $key->Quantity : '' }}</span>
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
                <span style="position: relative;left: 25px;bottom:35px"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                  </svg> waiting </span>
                </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif

    {{-- ------------------ show products books --------------------------- --}}
    @if(collect(DB::table('orders')->where([['id_users',Auth::user()->id],['id_books','!=',null]])->get())->isNotEmpty())
    <hr>
    <h3 class="title_">books</h3>
    <hr><br>
    @foreach(DB::table('orders')->where([['id_users',Auth::user()->id],['id_books','!=',null]])->get() as $key)
    <div class="owl-item" id="bo{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="width:400px;margin-bottom:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('books')->find($key->id_books)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <span class="price-dec">{{ $key->Quantity > 1 ? $key->Quantity : '' }}</span>
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
                <span style="position: relative;left: 25px;bottom:35px"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                  </svg> waiting </span>

        </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif

    {{-- ------------------ show products clothes --------------------------- --}}
    @if(collect(DB::table('orders')->where([['id_users',Auth::user()->id],['id_clothes','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">clothes</h3><br>
    <hr><br>
    @foreach(DB::table('orders')->where([['id_users',Auth::user()->id],['id_clothes','!=',null]])->get() as $key)
    <div class="owl-item" id="cl{{ DB::table('clothes')->find($key->id_clothes)->id }}" style="width:400px;margin-bottom:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('clothes')->find($key->id_clothes)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <span class="price-dec">{{ $key->Quantity > 1 ? $key->Quantity : '' }}</span>
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
                <span  style="position: relative;left: 25px;bottom:35px"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                  </svg> waiting </span>
             </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif

    {{-- ------------------ show products computers --------------------------- --}}
    @if(collect(DB::table('orders')->where([['id_users',Auth::user()->id],['id_computers','!=',null]])->get())->isNotEmpty())
    <hr><br>
    <h3 class="title_">computers</h3><br>
    <hr><br>
    @foreach(DB::table('orders')->where([['id_users',Auth::user()->id],['id_computers','!=',null]])->get() as $key)
    <div class="owl-item" id="com{{ DB::table('cars')->find($key->id_cars)->id ?? '' }}" style="max-width:400px;margin-top:10px;margin-left:5px"><div class="item">
        <!-- card -->
        <div class="p-3 card product-men">
            <div class="men-thumb-item">
                <img src="{{ DB::table('computers')->find($key->id_computers)->images }}" alt="img" class="card-img-top" style="max-height: 300px;">
            </div>
            <span class="price-dec">{{ $key->Quantity > 1 ? $key->Quantity : '' }}</span>
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
                <span class="btn" style="position: absolute;left: 25px;bottom:35px"><svg xmlns="http://www.w3.org/2000/svg" width="1.2em" height="1.2em" fill="currentColor" class="bi bi-clock-history" viewBox="0 0 16 16">
                    <path d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
                    <path d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
                    <path d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
                  </svg> waiting </span>
              </div>
        </div>
        <!-- //card -->
    </div></div>
    <div class='clear'></div>
    @endforeach
    @endif
</div>

