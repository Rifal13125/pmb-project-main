<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PPDB YBS">
    <meta property="og:title" content="PPDB YBS">
    <meta property="og:description" content="PPDB YBS">

    <!-- PAGE TITLE HERE -->
    <title>Masuk dan Daftar | PPDB YBS</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('sipenmaru/images/logo.png') }}">
    <link href="{{ asset('sipenmaru/vendor/login/style.css') }}" rel="stylesheet">

</head>

<body>
    @include('sweetalert::alert')
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form method="POST" action="/login" class="sign-in-form">
                    {{ csrf_field() }}

                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            <strong>Peringatan!</strong> {{session('loginError')}}
                        </div>
                    @endif
                    @error('email')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                        
                    <h2 class="title">Masuk</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Masukkan email" name="email" value="{{ old('email') }}" autocomplete='off' />
                        
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Masukkan kata sandi" name="password" autocomplete='off'/>
                        
                    </div>
                    <input type="submit" value="MASUK" class="btn solid" />
                    
                <br>
                    <p class="text-center">Atau Masuk Menggunakan</p>
                <div class="google-btn">
                    <div class="google-icon-wrapper">
                        <a href="/auth/google">
                        <img class="google-icon" src="https://logos-world.net/wp-content/uploads/2020/09/Google-Symbol.png" width="30" height="20"/>
                        </a>
                    </div>
                  </div>
                <hr>
                    <p class="social-text">Sosial Media Kami</p>
                <div class="social-media">
                <a href="#" class="social-icon">
                        <img src="https://th.bing.com/th/id/OIP.ENIq-U2iyx2c51zh5Hv5aAAAAA?rs=1&pid=ImgDetMain" width="33" height="33" />
                    </a>
                    <a href="https://www.instagram.com/teamoleng5/" class="social-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" width="20" height="20" />
                    </a>
                    <a href="" class="social-icon">
                        <img src="https://th.bing.com/th/id/R.b757f2bca8039d4a08882d38f4c1b8f0?rik=l1HvTt1fIsaMmQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2ftwitter-logo-png-logo-twitter-in-png-2500.png&ehk=qSLAOlUdmImpXk6Jj6NUgKgK5gv%2fq1TGUwvlzdeBiNA%3d&risl=&pid=ImgRaw&r=0" width="30" height="30" />
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://cdn-2.tstatic.net/surabaya/foto/bank/images/whatsapp-wa-diblokir-error-lagi-hari-jumat-14-juni-2019-berikut-penjelasan-kominfo.jpg" width="40" height="26" />
                    </a>
                </div>
                </form>
                

                <form method="POST" action="/register" class="sign-up-form">
                    @csrf
                    @if (session()->has('loginError'))
                        <div class="alert alert-danger alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                            <strong>Peringatan!</strong> {{session('loginError')}}
                        </div>
                    @endif
                    @error('name')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('email')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    @error('password_confirmation')
                        <div class="alert alert-warning alert-dismissible fade show">
                            <svg viewbox="0 -6 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="me-2"><path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path><line x1="12" y1="9" x2="12" y2="13"></line><line x1="12" y1="17" x2="12.01" y2="17"></line></svg>
                            <strong>Peringatan!</strong> {{ $message }}
                        </div>
                    @enderror
                    <h2 class="title">Daftar</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Nama Lengkap" name="name" value="{{ old('name') }}" autocomplete='off' />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" autocomplete='off'/>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Kata Sandi" name="password" autocomplete='off' />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Ulangi Kata Sandi" name="password_confirmation" autocomplete='off' />
                    </div>
                    <input type="submit" class="btn" value="DAFTAR" />
                    
                <br>
                <p class="text-center">Atau Daftar Menggunakan</p>
                <div class="google-btn">
                    <div class="google-icon-wrapper">
                        <a href="/auth/google">
                        <img class="google-icon" src="https://logos-world.net/wp-content/uploads/2020/09/Google-Symbol.png" width="30" height="20"/>
                        </a>
                    </div>
                  </div>
                <hr>
                    <p class="social-text">Sosial Media Kami</p>
                <div class="social-media">
                <a href="#" class="social-icon">
                        <img src="https://th.bing.com/th/id/OIP.ENIq-U2iyx2c51zh5Hv5aAAAAA?rs=1&pid=ImgDetMain" width="33" height="33" />
                    </a>
                    <a href="https://www.instagram.com/teamoleng5/" class="social-icon">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e7/Instagram_logo_2016.svg/1200px-Instagram_logo_2016.svg.png" width="20" height="20" />
                    </a>
                    <a href="" class="social-icon">
                        <img src="https://th.bing.com/th/id/R.b757f2bca8039d4a08882d38f4c1b8f0?rik=l1HvTt1fIsaMmQ&riu=http%3a%2f%2fpluspng.com%2fimg-png%2ftwitter-logo-png-logo-twitter-in-png-2500.png&ehk=qSLAOlUdmImpXk6Jj6NUgKgK5gv%2fq1TGUwvlzdeBiNA%3d&risl=&pid=ImgRaw&r=0" width="30" height="30" />
                    </a>
                    <a href="#" class="social-icon">
                        <img src="https://cdn-2.tstatic.net/surabaya/foto/bank/images/whatsapp-wa-diblokir-error-lagi-hari-jumat-14-juni-2019-berikut-penjelasan-kominfo.jpg" width="40" height="26" />
                    </a>
                </div>
                </form>
                
                
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Baru disini ?</h3>
                    <p>
                        Silahkan daftar akun untuk melanjutkan proses pendaftaran mahasiswa baru!
                    </p>
                    <button class="btn transparent" id="sign-up-btn">
                        DAFTAR
                    </button>
                </div>
                <img src="{{ asset('sipenmaru/images/PPDB.png') }}" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Salah satu diantara kami ?</h3>
                    <p>
                        Silahkan masuk jika anda telah memiliki akun pendaftaran mahasiswa baru.
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Masuk
                    </button>
                </div>
                <img src="{{ asset('sipenmaru/images/PPDB.png') }}" class="image" alt="" />
            </div>
        </div>
    </div>
    <!--<script src="{{ asset('sipenmaru/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/appjs') }}"></script>
    <script src="{{ asset('sipenmaru/js/custom.min.js') }}"></script>
    <script src="{{ asset('sipenmaru/js/dlabnav-init.js') }}"></script>-->
 <script src="{{ asset('sipenmaru/js/styleSwitcher.js') }}"></script>
    <script src="{{ asset('sipenmaru/vendor/login/app.js') }}"></script>
</body>

</html>
