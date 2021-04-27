
        <div class="alert alert-success sh" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Done success !
        </div>
        <div class="alert alert-danger not_delete" style="width:250px;text-align:center;display:none;position: fixed;left: 14%;top: 17.5%;z-index: 99999;" role="alert">
            Deleted !
        </div>
<style>
    .form-control{
        text-align: center;
    }
</style>
<form method="post" class="form_table" enctype="multipart/form-data">
    @csrf
    <div><img src="{{ auth::user()->images }}" alt="{{ auth::user()->name }}" class="img_person" title="{{ auth::user()->name }}" srcset=""></div><br>
<div class="review-content-section">
    <div class="input-group mg-b-pro-edt col-md-5" style="margin-left: 25%">
<span class="input-group-addon"><svg width="1.6em" height="1em" viewBox="5 0 -900 0" class="bi bi-image" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14.002 2h-12a1 1 0 0 0-1 1v9l2.646-2.354a.5.5 0 0 0 .93-.062l2.66 1.773 3.71-3.71a.5.5 0 0 1 .577-.094L15.002 9.5V3a1 1 0 0 0-1-1zm-12-1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm4 4.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
</svg></span>
        <input type="file" class="form-control img" name="img">
    </div><br>
    <div class="input-group mg-b-pro-edt col-md-5" style="margin-left: 25%">
        <span class="input-group-addon">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M13.498.795l.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
            </svg>
        </span>
        <input type="text" class="form-control name" name="name" value="{{ auth::user()->name }}" placeholder="If  You Want Change Your Name">
    </div><br>
    <div class="input-group mg-b-pro-edt col-md-5" style="margin-left: 25%">
        <span class="input-group-addon">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
            </svg>
        </span>
        <input type="text" class="form-control email" name="email" value="{{ auth::user()->email }}" placeholder="If  You Want Change Your email">
    </div><br>
    <div class="input-group mg-b-pro-edt col-md-5" style="margin-left: 25%">
        <span class="input-group-addon">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-badge" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 0 1 4.5 0h7A2.5 2.5 0 0 1 14 2.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2.5zM4.5 1A1.5 1.5 0 0 0 3 2.5v10.795a4.2 4.2 0 0 1 .776-.492C4.608 12.387 5.937 12 8 12s3.392.387 4.224.803a4.2 4.2 0 0 1 .776.492V2.5A1.5 1.5 0 0 0 11.5 1h-7z"/>
              <path fill-rule="evenodd" d="M8 11a3 3 0 1 0 0-6 3 3 0 0 0 0 6zM6 2.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5z"/>
            </svg>
        </span>
        <input type="text" class="form-control phone" name="phone" value="{{ auth::user()->phone }}" placeholder="If  You Want Change Your phone">
    </div><br>
    <input type="hidden" name="id" value="{{ Auth::user()->id }}">
    <br>
    <div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
        <div class="text-center custom-pro-edt-ds">
            <button type="submit" class="btn btn-success save">Save
            </button>
        </div>
    </div>
</div>
</form>

