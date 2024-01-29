@extends('admin.layouts.main')

@section('content')
@php
    $no = 1;
@endphp
<div class="card p-2">
    {{-- <a href="{{route('exportParticipant')}}" class="ms-auto bg-emerald-600 p-2 text-white font-medium w-25 rounded-full text-center mb-3">Export Data Excel</a> --}}
    <form action="{{route('majorStore')}}" method="POST">

    <table id="myTable" class="table">
        @csrf
        <thead>
            <tr>
                <th>No</th>
                <th>Jurusan</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)

            <tr>
                <td>{{$no}}</td>
                {{-- <td>{{$data->location_name}}</td> --}}
                <td>
                    <input type="hidden" name="major[{{ $no }}][id]" value="{{ $data->id }}">
                    <input type="text" class="form-control" name="major[{{$no}}][major_name]" value="{{$data->major_name}}" id="">
                </td>
                <td>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="major[{{$no}}][status]" role="switch" id="flexSwitchCheckDefault" {{$data->status ? "checked" : ""}}>
                        <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                      </div>
                </td>
                <td>
                    <a onclick='deleteConfirmation("{{$data->id}}")' class='btn btn-danger container-fluid'>Delete</a>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
        </tbody>
    </table>
    <div class="w-full">
        <button class="ms-auto  mb-2 btn btn-primary">Simpan semua Perubahan</button>
        <a onclick="myCreateFunction()" class="ms-auto mb-2 btn btn-success">Tambah Lokasi Baru</a>
    </div>
</form>
</div>
@endsection

@section('script')
<script>
    // let table = new DataTable('#myTable', {
    //     // config options...
    // });

    function deleteConfirmation(id){
        Swal.fire({
        title: "Apakah Kamu yakin?",
        text: "Data akan dihapus dan tidak ditmapilkan pada halaman ini!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Ya, Hapus itu!"
        }).then((result) => {
        let formData = new FormData();
        formData.append('_token', "{{ csrf_token() }}");
        formData.append('_method', "DELETE");
        if (result.isConfirmed) {
                console.log(fetch('{{route("major")}}/'+ id,  {
                    method: 'POST',
                    body: formData
                }));
                    Swal.fire({
                    title: "Terhapus!",
                    text: "Data yang anda minta telah dihapus.",
                    icon: "success"
                    },function() {
                        window.location.reload();
                    });
                    setTimeout(function() {
                        window.location.reload();
                    }, 3000);
                }
            });
        }
</script>

<script>
    var count = {{ count($datas) }};

    function myCreateFunction() {
        count++;
        var table = document.getElementById("myTable");
        var row = table.insertRow();
        var no = row.insertCell(0);
        var major_name = row.insertCell(1);
        var status = row.insertCell(2);
        var action = row.insertCell(3);
        no.innerHTML = count;
        major_name.innerHTML =
            "<input type='hidden' name='major[" +
            count +
            "][id]' value=''><input type='text' class='form-control' name = 'major[" +
            count +
            "][major_name]' value = '' placeholder = 'Nama Lokasi'> ";
        status.innerHTML = "<div class='form-check form-switch'> <input class='form-check-input' type='checkbox' name='major[" +
            count +
            "][status]' role='switch' id='flexSwitchCheckDefault' checked><label class='form-check-label' for='flexSwitchCheckDefault'></label></div>";
        action.innerHTML = "<a onclick='myDeleteFunction(" + count +
            ")' class='btn btn-danger container-fluid'>Delete</a>";
    }

    function myDeleteFunction(row) {
        count--;
        console.log(row + " test");
        document.getElementById("myTable").deleteRow(row);
    }
</script>
@endsection
