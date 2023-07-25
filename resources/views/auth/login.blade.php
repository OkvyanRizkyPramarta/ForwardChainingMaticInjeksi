@extends('layouts.guest.master')
<script>
// membuat fungsi change
function change() {
    
    // membuat variabel berisi tipe input dari id='pass', id='pass' adalah form input password 
    var x = document.getElementById('pass').type;
    
    //membuat if kondisi, jika tipe x adalah password maka jalankan perintah di bawahnya
    if (x == 'password') {
    
        //ubah form input password menjadi text
        document.getElementById('pass').type = 'text';
                        
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-slash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
        <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
        </svg>`;
    } else {
    
        //ubah form input password menjadi text
        document.getElementById('pass').type = 'password';
    
        //ubah icon mata terbuka menjadi tertutup
        document.getElementById('mybutton').innerHTML = 
        `<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
        <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
        <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
         </svg>`;
    }
}
</script>
<style>
/* Penting */
.input-group-prepend,
.input-group-append {
  display: flex;
}

.input-group > .input-group-append > .btn,
.input-group > .input-group-append > .input-group-text,
.input-group > .input-group-prepend:not(:first-child) > .btn,
.input-group > .input-group-prepend:not(:first-child) > .input-group-text,
.input-group > .input-group-prepend:first-child > .btn:not(:first-child),
.input-group > .input-group-prepend:first-child > .input-group-text:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0;
}

</style>
@section('content')
<main class="login-form">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card" style="margin-top:100px;margin-bottom:100px;">
                    <h3 class="card-header text-center">Login</h3>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login.admin') }}">
                            @csrf

                            @if(count($errors))
                                <div class="alert alert-danger">
                                    <strong>Terjadi kesalahan</strong> Mohon masukkan username atau password dengan benar
                                    <br/>
                                </div>
                            @endif

                            <div class="form-group mb-3">
                                <label>Username</label>
                                <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                                    @if ($errors->has('username'))
                                    <span class="text-danger">{{ $errors->first('username') }}</span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Password</label>
                                <div class="input-group">
                                    <input type="password" id="pass" height="1em" class="form-control" name="password" required autofocus>
                                    <div class="input-group-append">
                
                                        <!-- kita pasang onclick untuk merubah icon buka/tutup mata setiap diklik  -->
                                        <span id="mybutton" onclick="change()" class="input-group-text">
                
                                            <!-- icon mata bawaan bootstrap  -->
                                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="currentColor"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M10.79 12.912l-1.614-1.615a3.5 3.5 0 0 1-4.474-4.474l-2.06-2.06C.938 6.278 0 8 0 8s3 5.5 8 5.5a7.029 7.029 0 0 0 2.79-.588zM5.21 3.088A7.028 7.028 0 0 1 8 2.5c5 0 8 5.5 8 5.5s-.939 1.721-2.641 3.238l-2.062-2.062a3.5 3.5 0 0 0-4.474-4.474L5.21 3.089z"/>
                                                <path d="M5.525 7.646a2.5 2.5 0 0 0 2.829 2.829l-2.83-2.829zm4.95.708l-2.829-2.83a2.5 2.5 0 0 1 2.829 2.829z"/>
                                                <path fill-rule="evenodd" d="M13.646 14.354l-12-12 .708-.708 12 12-.708.708z"/>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mx-auto" style="margin-top:30px;margin-bottom:20px;">
                                <button type="submit" class="btn btn-dark btn-block">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection