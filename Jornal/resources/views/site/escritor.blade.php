@extends('site.layouts.basico')


@section('conteudo')
    <div class = "container-fluid" id = "container-escritor">
        <div class = "container">
            <h2>Luiz Rogério Manfrim</h2>
            <div class = "row">
                <div class = "col-md-4">
                    <img src={{asset("img/Manfrimfoto.jpg")}} class="img-fluid" alt="...">
                </div>
                <div class="col-md-8">
                    <p>Proin ut justo luctus, efficitur lorem non, cursus ante. Proin vestibulum vestibulum tincidunt. Praesent vitae felis eu ipsum faucibus iaculis ac vel lacus. Nulla pharetra ex in odio iaculis sodales. Duis suscipit lorem eu ipsum maximus blandit. Ut eu fermentum metus. Phasellus viverra vitae arcu nec fermentum. Donec sit amet efficitur urna. Nam sed turpis eu nulla laoreet convallis eget at risus. In vehicula ex in justo tincidunt, sit amet lobortis lacus accumsan. Nulla laoreet vestibulum nulla, nec ultricies lectus consequat sit amet. Vestibulum quis massa ut ante malesuada consectetur a vitae erat. Nullam bibendum ex ac tortor efficitur vehicula. Fusce eget tellus a enim convallis fermentum. Pellentesque nec nisi non lectus aliquet tempor.
                        Suspendisse potenti. Donec in odio eget dolor dapibus aliquet. Nulla facilisi. Duis a fringilla risus. Nullam volutpat nulla vitae enim consequat malesuada. Praesent a sapien id metus egestas finibus. Proin eget orci et lacus suscipit luctus id vel nunc. Sed sodales tortor id nisi iaculis, in laoreet eros fringilla. Mauris sit amet urna urna. Nulla gravida mauris ac neque feugiat tincidunt. Quisque sodales a quam id efficitur. Morbi nec urna sapien. Vivamus volutpat erat in mauris mattis, in hendrerit dolor ultricies. In pellentesque lorem id justo auctor, a vehicula sapien pellentesque.
                    </p>
                    <div class = "row" style="display: flow; justify-content: space-between;">
                        <a href = "https://www.instagram.com/prof_manfrim/"><i id = "instagram" class="fa-brands fa-instagram fa-2xl"></i></a>
                        <a href = "https://www.linkedin.com/in/manfrim/"><i id = "linkedin" class="fa-brands fa-linkedin fa-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection