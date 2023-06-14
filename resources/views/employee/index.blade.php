<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset ('template/assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset ('template/assets/img/favicon.png') }}">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Gajiku || Employee
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
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
        <a href="https://www.creative-tim.com" class="simple-text logo-mini">
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
            <a href="dashboard">
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
            <a href="notifications">
              <i class="nc-icon nc-bell-55"></i>
              <p>Notifications</p>
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
            <a class="navbar-brand" href="javascript:;">Employee</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
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
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <h4 class="font-weight-bold d-flex justify-content-center align-items-center">Add Data Employee</h4>
              </div>

              <div class="card-body">
                <div class="d-flex justify-content-center align-items-center mb-3">
                  <img id="previewImage" alt="Preview Image" style="display: none; width:300px">
                </div>
                <form action="{{route ('employee.create') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="row">

                    <div class="col-lg-6">
                      <div class="form-group mb-3">
                        <label for="inputGroupSelect01">Nama Employee</label>
                        <select class="custom-select" name="id_users" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          @if ($user->isEmpty())
                            <option disabled>Tambahkan User Dahulu</option>
                          @else
                          @foreach ($user as $row)
                            @if ($row -> role === 'employee')
                              <option value="{{$row->id}}">{{$row->name}}</option>
                            @endif
                          @endforeach
                          @endif
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group mb-3">
                        <label>No Handphone</label>
                        <input type="text" name="no_hp" class="form-control" placeholder="Ex : 08123456789">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group mb-3">
                        <label>Salary</label>
                        <input type="text" name="gaji_pokok" class="form-control" placeholder="Ex : 7.000.000">
                      </div>
                    </div>
                    
                    <div class="col-lg-6">
                      <div class="form-group mb-3">
                        <label for="inputGroupSelect01">Divisi</label>
                        <select class="custom-select" name="id_divisi" id="inputGroupSelect01">
                          <option selected>Choose...</option>
                          @if ($divisi->isEmpty())
                            <option disabled>Tambahkan Divisi Dahulu</option>
                          @else
                          @foreach ($divisi as $row)
                            <option value="{{ $row->id }}">{{ $row->nama_divisi }}</option>
                          @endforeach
                          @endif
                        </select>
                      </div>
                    </div>

                    <div class="col-lg-12">
                      <div class="form-group mb-3">
                        <label>Alamat</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Ex : Depok, JL Duta 2 No 18">
                      </div>
                    </div>

                    <div class="col-lg-6">
                      <div class="form-group mb-3">
                        <label>Photo</label>
                        <div class="custom-file">
                          <input type="file" name="photo" id="photo" class="custom-file-input" aria-describedby="inputGroupFileAddon01">
                          <label for="photo" class="custom-file-label" id="fileName"></label>
                        </div>
                      </div>
                    </div>

                    <div class="col-lg-12 d-flex justify-content-center align-items-center">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                  </div>

                </form>
              </div>

            </div>
          </div>

          @if(!$employee->isEmpty())
          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4 class="font-weight-bold d-flex justify-content-center align-items-center"> Data - Data Employee</h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table">
                    <thead class=" text-primary">
                      <th class="text-center">
                        No
                      </th>
                      <th class="text-center">
                        Name
                      </th>
                      <th class="text-center">
                        Salary
                      </th>
                      <th class="text-center">
                        Action
                      </th>
                    </thead>
                    <tbody>
                      @foreach ($employee as $row)
                      <tr>
                        <td class="text-center">
                          {{$loop->iteration}}
                        </td>
                        <td class="text-center">
                          {{$row->users->name}}
                        </td>
                        <td class="text-center">
                          {{$row->gaji_pokok}}
                        </td>
                        <td class="text-center">
                         <form action="{{route ('employee.delete', $row -> id) }}" method="get">
                         @csrf
                         {{method_field('DELETE')}}
                            <a href="{{route ('employee.detail', $row -> id) }}" class="btn btn-primary">Detail</a>
                            <a href="{{route ('employee.edit', $row -> id) }}" class="btn btn-success">Edit</a>
                          <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda akan menghapus {{$row->employee}} ?');">Hapus</button>
                         </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          @endif

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
  <script src="{{ asset ('template/assets/js/paper-dashboard.min.js') }}?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
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
    window.onload = function() {
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

        var beforeContentChar = window.getComputedStyle(listItems[i].getElementsByTagName('i')[0], '::before').getPropertyValue('content').replace(/'/g, "").replace(/"/g, ""),
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

    // Mendapatkan elemen input file
    const imageUpload = document.getElementById('photo');
    // Mendapatkan elemen gambar preview
    const previewImage = document.getElementById('previewImage');
    // Mendapatkan elemen text preview
    const fileName = document.getElementById('fileName');


    // Event listener saat ada perubahan pada input file
    imageUpload.addEventListener('change', function() {
      // Mendapatkan file yang dipilih
      const file = this.files[0];

      // Membuat objek FileReader
      const reader = new FileReader();

      // Mengatur fungsi callback saat file selesai dibaca
      reader.onload = function(e) {
        // Mengatur atribut src pada elemen gambar preview
        previewImage.src = e.target.result;
        // Menampilkan elemen gambar preview
        previewImage.style.display = 'flex';
      };

      // Membaca file sebagai URL data
      reader.readAsDataURL(file);
    });


    imageUpload.addEventListener('change', function() {
        fileName.textContent = this.files[0].name;
    });

  </script>
</body>

</html>