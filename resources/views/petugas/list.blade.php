@extends('administrasi_master')

@section('main-section')
    <!--<h1 class="page-header">Dashboard</h1>-->
    <h2 class="sub-header">Daftar Petugas Lapangan</h2>
    <a href="{{ route('dataPetugas.create') }}">
        <button style="margin-top:10px;" class="btn_style">Tambah Petugas</button>
    </a>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>NIP</th>
                <th>NIK</th>
                <th>Peran</th>
                <th>Manage...</th>
            </tr>
            </thead>

            <tbody>
            @foreach ($petugass as $idx => $petugas)
                <tr>
                    <td id="{{ 'real_id' . ($idx+1) }}" my_value="{{ $petugas->id }}">{{ ($idx+1) }}</td>
                    <td id="{{ 'nip' . ($idx+1) }}">{{ $petugas->nip }}</td>
                    <td id="{{ 'nik' . ($idx+1) }}">{{ $petugas->user->nik }}</td>
                    <td id="{{ 'peran'. ($idx+1) }}">{{ $petugas->user->role }}</td>
                    <td><a href="#" class="editButt" id="{{ ($idx+1) }}">edit</a> | <a href="#" class="delButt"
                                                                                       id="{{ ($idx+1) }}">delete</a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
    </div>
@stop

@section('floating-section')
    <div class="floatEdit">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 popup">
                        <div class="contact-form">
                            <h3>Edit Petugas</h3>

                            <form method="post" action="contact-post.html" id="submissionform">
                                <input type="hidden" class="form-control" id="id" value="-diambil dynamically pake JS-"
                                       style="display:none;">

                                <div>
                                    <span>NIP</span>
                                    <span><input type="text" class="form-control" id="nip"
                                                 value="-diambil dynamically pake JS-"></span>
                                </div>
                                <div>
                                    <span>Nama</span>
                                    <span><input type="text" class="form-control" id="nik"
                                                 value="-diambil dynamically pake JS-"></span>
                                </div>
                                <div>
                                    <span>Peran</span>
                                    <span><input type="text" class="form-control" id="peran"
                                                 value="-diambil dynamically pake JS-"></span>
                                </div>
                                <div>
                                    <span><input type="submit" value="submit" id="doSubmit"><input type="submit"
                                                                                                   value="cancel"
                                                                                                   id="cancelSubmit"
                                                                                                   style="margin-right: 20px;"></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('script-section')
    <script>

        $(document).ready(function () {
            $(".editButt").click(function () { //when edit button is pressed
                $("input#id").attr("value", $("#real_id" + $(this).attr('id')).attr('my_value'));
                $("input#nip").attr("value", $("#nip" + $(this).attr('id')).html());
                $("input#nik").attr("value", $("#nik" + $(this).attr('id')).html());
                $("input#peran").attr("value", $("#peran" + $(this).attr('id')).html());
                $(".popup").attr("style", "display:block !important;"); // show popup
            });

            $("#cancelSubmit").click(function (event) { //cancel button on popup pressed
                event.preventDefault();
                $(".popup").attr("style", "display:none !important;");
            });

            $("#doSubmit").click(function (event) { //submit button pressed
                event.preventDefault();

                //DO AJAX SUBMIT HERE (form#submissionform) K THX. - dalva
                $.ajax({
                    url: 'dataPetugas/' + $("input#id").val(),
                    type: 'PUT',
                    data: {
                        _token: $('meta[name="csrf-token"]').attr('content'),
                        nip: $("input#nip").val(),
                        nik: $("input#nik").val(),
                        role: $("input#peran").val()
                    },
                    success: function (result) {
                        // Do something with the result
                        window.location.href = result;
                    }
                });

                $(".floatEdit").attr("style", "display:none !important;"); // then hide the popup
            });
            $(".delButt").click(function (event) { //when delete button is pressed
                event.preventDefault();

                var yakin = confirm("Apakah anda yakin?");
                if (!yakin)
                    return false;

                var id = $("#real_id" + $(this).attr('id')).attr('my_value');

                //DO AJAX DELETE HERE (form#submissionform) K THX. - dalva
                $.ajax({
                    url: 'dataPetugas/' + id,
                    type: 'DELETE',
                    data: {_token: $('meta[name="csrf-token"]').attr('content')},
                    success: function (result) {
                        // Do something with the result
                        alert("user with ID " + id + " deleted.");
                        window.location.href = result;
                    }
                });
            });
        });
    </script>
@stop