<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('backend') }}/assets/img/sidebar-1.jpg">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->

    <div class="logo"><a href="#" class="simple-text logo-mini">B</a>

        <a href="#" class="simple-text logo-normal">
            Beonor
        </a></div>

    <div class="sidebar-wrapper">

        <div class="user">
            <div class="photo">
                <img src="{{ asset('backend') }}/assets/img/faces/avatar.jpg" />
            </div>
            <div class="user-info">
                <a href="#" class="username">
                    <span>
                       Tania Andrew
                    </span>
                </a>
            </div>
        </div>
        <ul class="nav">

            <li class="nav-item ">
                <a class="nav-link" href="{{route('rapat')}}" style="{{Request::is('rapat*') ? 'background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)': ''}}">
                    <i class="material-icons">content_paste</i>
                    <p> Manajemen Rapat </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('surat')}}" style="{{Request::is('surat*') ? 'background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)': ''}}">
                    <i class="material-icons">library_books</i>
                    <p> Manajemen Surat </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('organisasi')}}" style="{{Request::is('organisasi*') ? 'background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)': ''}}">
                    <i class="material-icons">bubble_chart</i>
                    <p> Manajemen Organisasi </p>
                </a>
            </li>

            <li class="nav-item ">
                <a class="nav-link" href="{{route('anggota')}}" style="{{Request::is('anggota*') ? 'background: linear-gradient(to bottom left, #5F65A3 , #21BCEA)': ''}}">
                    <i class="material-icons">person</i>
                    <p> Manajemen Anggota </p>
                </a>
            </li>

        </ul>
    </div>
</div>