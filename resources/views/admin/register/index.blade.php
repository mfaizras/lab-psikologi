@extends('admin.layouts.main')

@section('content')
@php
    $no = 1;
@endphp
<div class="card p-2">
    <a href="{{route('exportParticipant')}}" class="ms-auto bg-emerald-600 p-2 text-white font-medium w-25 rounded-full text-center mb-3">Export Data Excel</a>
    <table id="myTable" class="display">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Posisi</th>
                <th>Kontak</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)

            <tr>
                <td>{{$no}}</td>
                <td>{{$data->npm}}</td>
                <td>{{$data->name}}</td>
                <td>{{$data->class}}</td>
                <td>{{$data->position}}</td>
                <td>{{$data->email}} / {{$data->phone}}</td>
                <td>
                    <a href="{{route('participantDetail',['registration' => $data->npm])}}" class="mb-1 btn btn-info"><i class="fa fa-eye"></i></a>
                    <a href="{{route('participantEdit',['registration' => $data->npm])}}" class="mb-1 btn btn-warning"><i class="fa-solid fa-pencil"></i></a>
                    <a onclick="deleteConfirmation('{{$data->npm}}')" class="mb-1 btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
        </tbody>
    </table>
</div>
@endsection

@section('script')
<script>
    let table = new DataTable('#myTable', {
        // config options...
    });

    function deleteConfirmation(npm){
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
                console.log(fetch("{{route('participantList')}}/"+ npm,  {
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
@endsection
