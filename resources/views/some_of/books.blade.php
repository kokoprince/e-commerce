<div class="show_pro_t" style="display: none">
    <div class="show_pro_p">
        <div id="myTabContent" class="tab-content custom-product-edit">
            <div class="product-tab-list tab-pane fade active in" style="height: 200px" id="description">
                <form method="POST" id="form_da" enctype="multipart/form-data">
                    @csrf
                    <div class="row" style="height: 200px;">
                        <input type="hidden" class="hidden" name="id" value="">
                        <button type="button" class="ex" style="color: red;position: absolute;right: 0;top: 1px;background: none;border: none"><svg style="border-radius: 10px;" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-x-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                            </svg></button>
                        <p class="text_sectionP">books</p>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="review-content-section">
                                <div class="input-group mg-b-pro-edt col-md-12">
                                    <span class="input-group-addon"><svg width="1.6em" height="1em" viewBox="5 0 -900 0" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                      <path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 0 .93-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                    </svg></span>
                                    <input type="file" class="form-control file" name="img" placeholder="select file">
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-user" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control name" name="name" placeholder="Enter Name">
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control price" name="price" placeholder="Regular Price">
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-favorites" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control Quantity" name="Quantity" placeholder="Quantity">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="review-content-section">
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-favorites-button" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control description" name="description" placeholder="Product Description">
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="fa fa-usd" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control evaluation" name="evaluation" placeholder="evaluation">
                                </div>
                                <div class="input-group mg-b-pro-edt">
                                    <span class="input-group-addon"><i class="icon nalika-like" aria-hidden="true"></i></span>
                                    <input type="text" class="form-control Discount" name="Discount" placeholder="Discount">
                                </div>
                                <select name="select" placeholder="Type of Car" class="form-control pro-edt-select type_of_Car form-control-primary type">
                                    @foreach(DB::table('detels_sections')->select('id', 'name')->where('sections_id',4)->get() as $key)
                                        <option id="{{$key->id}}" value="{{$key->id}}">{{$key->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="text-center custom-pro-edt-ds">
                            <button type="submit" class="btn btn-ctl-bt waves-effect waves-light m-r-10 save">Save
                            </button>
                            <button type="button" class="btn btn-ctl-bt waves-effect waves-light update" style="display: none">update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
