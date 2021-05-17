<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form</title>
    <!-- bulma css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.2/css/bulma.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/security.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="./css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="./images/fevicon.png" type="image/gif"/>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
          media="screen">
</head>
<body class="main-layout">
<header>
    <!-- header inner -->
    <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                        <div class="center-desk">
                            <div class="logo">
                                <a href="/"><img src="/images/logo.png" alt="#"/></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                    <nav style="background-color:#0c0f38" class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                            <ul class="navbar-nav mr-auto">
                                @auth()
                                    <li class="nav-item active">
                                        <a class="nav-link" href="/">UserPage</a>
                                    </li>
                                @endauth()
                                <li class="nav-item">
                                    <a class="nav-link" href="/form">Form</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/123"> About </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/flight"> Service</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#contact">Contact</a>
                                </li>
                                @auth()
                                    <li class="nav-item logout">
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                                {{ __('Log out') }}
                                            </x-responsive-nav-link>
                                        </form>
                                    </li>
                                @else
                                    <li class="nav-item">
                                        <a class="nav-link" href="/login">Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/register">Register</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<section class="section">
    <div class="container">
       <div class="form-description">
           <h1 class="title">
               Usability
           </h1>
           <p class="subtitle">
               Assignment  <strong>2</strong>
           </p>
       </div>
        <form method="POST" class='blog-form' action="{{ route('form.store') }}">
            @csrf
            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">First Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input @error('first_name') is-danger @enderror" name="first_name"
                                   type="text"
                                   placeholder="Type your first name">
                        </div>
                        @error('first_name')
                        <p class="help is-danger">{{ $errors->first('first_name') }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Last Name</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <input class="input @error('last_name') is-danger @enderror" name="last_name" type="text"
                                   placeholder="Type your last name">
                        </div>
                        @error('last_name')
                        <p class="help is-danger">{{ $errors->first('last_name') }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Describe Purpose</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                        <textarea class="textarea @error('purpose') is-danger @enderror" name="purpose"
                                  placeholder="Describe your purpose in life"></textarea>
                        </div>
                        @error('purpose')
                        <p class="help is-danger">{{ $errors->first('purpose') }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label is-normal">
                    <label class="label">Contact</label>
                </div>
                <div class="field-body">
                    <div class="field">
                        <p class="control is-expanded has-icons-left">
                            <input class="input @error('name') is-danger @enderror" type="text" placeholder="Name"
                                   id="name"
                                   name="contact_name">
                        </p>
                        @error('contact_name')
                        <p class="help is-danger">{{ $errors->first('contact_name') }}</p>
                        @enderror
                    </div>
                    <div class="field">
                        <p class="control is-expanded has-icons-left has-icons-right">
                            <input class="input @error('email') is-danger @enderror" type="text" placeholder="Email"
                                   id="email" name="contact_email">
                        </p>
                        @error('contact_email')
                        <p class="help is-danger">{{ $errors->first('contact_email') }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="field is-horizontal">
                <div class="field-label">
                    <!-- Left empty for spacing -->
                </div>
                <div class="field-body">
                    <div class="field">
                        <div class="control">
                            <button style="background-color:#0c0f38" class="button is-link is-rounded" type="submit"
                                    value="Submit">
                                Send message
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
</body>
</html>
