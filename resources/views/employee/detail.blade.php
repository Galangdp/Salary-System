<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('template/assets/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" href="{{ asset ('template/assets/img/favicon.png') }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Gajiku || Employee Detail
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset ('template/assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset ('template/assets/css/paper-dashboard.css?v=2.0.1') }}" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset ('template/assets/demo/demo.css') }}" rel="stylesheet" />
</head>

<body class="">
    <div class="wrapper ">
        <div class="sidebar" data-color="white" data-active-color="danger">
            <div class="logo">
                <a href="https://galangdp.github.io/" class="simple-text logo-mini">
                    <div class="logo-image-small">
                        <img src="{{ asset ('template/assets/img/logo-small.png') }}">
                    </div>
                    <!-- <p>CT</p> -->
                </a>
                <a href="https://galangdp.github.io/" class="simple-text logo-normal">
                    Gajiku
                    <!-- <div class="logo-image-big">
            <img src="{{ asset ('template/assets/img/logo-big.png') }}">
          </div> -->
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li>
                        <a href="/dashboard">
                            <i class="nc-icon nc-bank"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active ">
                        <a href="employee">
                            <i class="nc-icon nc-diamond"></i>
                            <p>Employee</p>
                        </a>
                    </li>
                    <li>
                        <a href="divisi">
                            <i class="nc-icon nc-pin-3"></i>
                            <p>Divisi</p>
                        </a>
                    </li>
                    <li>
                        <a href="tunjangan">
                            <i class="nc-icon nc-bell-55"></i>
                            <p>Tunjangan</p>
                        </a>
                    </li>
                    <li>
                        <a href="user">
                            <i class="nc-icon nc-single-02"></i>
                            <p>User Profile</p>
                        </a>
                    </li>
                    <li>
                        <a href="tables">
                            <i class="nc-icon nc-tile-56"></i>
                            <p>Table List</p>
                        </a>
                    </li>
                    <li>
                        <a href="typography">
                            <i class="nc-icon nc-caps-small"></i>
                            <p>Typography</p>
                        </a>
                    </li>
                    <li class="active-pro">
                        <a href="upgrade">
                            <i class="nc-icon nc-spaceship"></i>
                            <p>Upgrade to PRO</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <div class="navbar-toggle">
                            <button type="button" class="navbar-toggler">
                                <span class="navbar-toggler-bar bar1"></span>
                                <span class="navbar-toggler-bar bar2"></span>
                                <span class="navbar-toggler-bar bar3"></span>
                            </button>
                        </div>
                        <a class="nav-link btn-magnify d-flex justify-content-center align-items-center"
                            href="/employee">
                            <i class="nc-icon nc-minimal-left"></i>
                            <p>
                                <span class="d-lg-none d-md-block">Stats</span>
                            </p>
                        </a>
                        <a class="navbar-brand" href="javascript:;">Employee</a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
                        aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                        <span class="navbar-toggler-bar navbar-kebab"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form>
                            <div class="input-group no-border">
                                <input type="text" value="" class="form-control" placeholder="Search...">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i class="nc-icon nc-zoom-split"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link btn-magnify" href="javascript:;">
                                    <i class="nc-icon nc-layout-11"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Stats</span>
                                    </p>
                                </a>
                            </li>
                            <li class="nav-item btn-rotate dropdown">
                                <a class="nav-link dropdown-toggle" href="http://example.com"
                                    id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="nc-icon nc-bell-55"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Some Actions</span>
                                    </p>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn-rotate" href="javascript:;">
                                    <i class="nc-icon nc-settings-gear-65"></i>
                                    <p>
                                        <span class="d-lg-none d-md-block">Account</span>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="font-weight-bold d-flex justify-content-center align-items-center">Data
                                    Employee</h4>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div
                                        class="col-lg-12 d-flex flex-column justify-content-center align-items-center my-3">
                                        <img src="{{ asset ('storage/images/employee/'.$employee->photo) }}" alt=""
                                            class="img-fluid w-25 mb-2">
                                        <h5 class="font-weight-bold d-flex justify-content-center align-items-center">
                                            {{$employee -> users -> name}}</h5>
                                    </div>

                                    <div class="col-lg-12">

                                        <div class="table-responsive">
                                            <table class="table">
                                                <tr>
                                                    <th class="text-center">Email</th>
                                                    <th class="text-center">:</th>
                                                    <td class="text-center">{{$employee -> users -> email}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">No HP</th>
                                                    <th class="text-center">:</th>
                                                    <td class="text-center">{{$employee -> no_hp}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Alamat</th>
                                                    <th class="text-center">:</th>
                                                    <td class="text-center">{{$employee -> alamat}}</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Divisi</th>
                                                    <th class="text-center">:</th>
                                                    <td class="text-center">--</td>
                                                </tr>
                                                <tr>
                                                    <th class="text-center">Gaji Pokok</th>
                                                    <th class="text-center">:</th>
                                                    <td class="text-center">Rp. {{$employee -> gaji_pokok}}</td>
                                                </tr>
                                            </table>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="footer footer-black  footer-white ">
                    <div class="container-fluid">
                        <div class="row">
                            <nav class="footer-nav">
                                <ul>
                                    <li><a href="https://galangdp.github.io/" target="_blank">Galang Davian Pradana</a></li>
                                    <li><a href="https://www.creative-tim.com/blog" target="_blank">Blog</a></li>
                                    <li><a href="https://www.creative-tim.com/license" target="_blank">Licenses</a></li>
                                </ul>
                            </nav>
                            <div class="credits ml-auto">
                                <span class="copyright">
                                    © <script>
                                        document.write(new Date().getFullYear())

                                    </script>, made with <i class="fa fa-heart heart"></i> by Galang Davian Pradana
                                </span>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <!--   Core JS Files   -->
        <script src="{{ asset ('template/assets/js/core/jquery.min.js') }}"></script>
        <script src="{{ asset ('template/assets/js/core/popper.min.js') }}"></script>
        <script src="{{ asset ('template/assets/js/core/bootstrap.min.js') }}"></script>
        <script src="{{ asset ('template/assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
        <!-- Chart JS -->
        <script src="{{ asset ('template/assets/js/plugins/chartjs.min.js') }}"></script>
        <!--  Notifications Plugin    -->
        <script src="{{ asset ('template/assets/js/plugins/bootstrap-notify.js') }}"></script>
        <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
        <script src="{{ asset ('template/assets/js/paper-dashboard.min.js') }}?v=2.0.1" type="text/javascript"></script>
        <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
        <script src="{{ asset ('template/assets/demo/demo.js') }}"></script>
        <script>
            function SelectText(element) {
                var doc = document,
                    text = element,
                    range, selection;
                if (doc.body.createTextRange) {
                    range = document.body.createTextRange();
                    range.moveToElementText(text);
                    range.select();
                } else if (window.getSelection) {
                    selection = window.getSelection();
                    range = document.createRange();
                    range.selectNodeContents(text);
                    selection.removeAllRanges();
                    selection.addRange(range);
                }
            }
            window.onload = function () {
                var iconsWrapper = document.getElementById('icons-wrapper'),
                    listItems = iconsWrapper.getElementsByTagName('li');
                for (var i = 0; i < listItems.length; i++) {
                    listItems[i].onclick = function fun(event) {
                        var selectedTagName = event.target.tagName.toLowerCase();
                        if (selectedTagName == 'p' || selectedTagName == 'em') {
                            SelectText(event.target);
                        } else if (selectedTagName == 'input') {
                            event.target.setSelectionRange(0, event.target.value.length);
                        }
                    }

                    var beforeContentChar = window.getComputedStyle(listItems[i].getElementsByTagName('i')[0],
                            '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, ""),
                        beforeContent = beforeContentChar.charCodeAt(0).toString(16);
                    var beforeContentElement = document.createElement("em");
                    beforeContentElement.textContent = "\\" + beforeContent;
                    listItems[i].appendChild(beforeContentElement);

                    //create input element to copy/paste chart
                    var charCharac = document.createElement('input');
                    charCharac.setAttribute('type', 'text');
                    charCharac.setAttribute('maxlength', '1');
                    charCharac.setAttribute('readonly', 'true');
                    charCharac.setAttribute('value', beforeContentChar);
                    listItems[i].appendChild(charCharac);
                }
            }

        </script>
</body>

</html>
