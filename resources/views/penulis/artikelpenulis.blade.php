@extends('layouts.masterpenulis')
  <!-- vertical navbar end -->
@section('content')
  <!-- content -->
  <div class="content ">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <main class="bg-white" style="width:100%; height:100%;">
      <div class="container-fluid">
        <div class="row my-3 shadow-sm">
          <p><strong>Artikel</strong> | Penulis</p>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <a class="btn btn-primary mb-2" data-bs-toggle="modal" href="#store-modal" role="button">Tambah Artikel</a>
                    <table class="table table-hover table-bordered table-stripped" id="example2">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Ilustrasi</th>
                            <th>Isi</th>
                            <th>Penulis</th>
                            <th>Tanggal Publish</th>
                            <th>Opsi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($stories as $key => $story)
                            <tr>
                                <td>{{++$key}}</td>
                                <td>{{$story->judul}}</td>
                                <td> <img src="{{asset('storage/'. $story->image_path)}}" alt="" width="100cm" height="100cm">
                                    </td>
                                <td>{{Str::limit($story->isi,200)}}</td>
                                <td>{{$story->user->name}}</td>
                                <td>{{$story->tanggal_publish}}</td>
                                <td>
                                    <button  class="btn btn-primary btn-xs" id="get-data" data-id="{{$story->id_story}}">
                                        Edit
                                    </button>
                                    <a href="{{route('artikel.destroy', $story->id_story)}}" onclick="notificationBeforeDelete(event, this)" class="btn btn-danger btn-xs">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </div>

    </main>
  </div>
  <div class="modal fade text-black" id="store-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="color:black;">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-black">
          <form action="{{route('artikel.store')}}" method="post" enctype="multipart/form-data">
                @csrf
              <div class="modal-header">
                  <h5 class="modal-title" id="">Tambah Artikel</h5>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> X </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" placeholder="Judul" value="{{old('judul')}}" name="judul" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="floatingInput">Isi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="isi" required autofocus value="{{old('isi')}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="floatingPassword">Tanggal Publish</label>
                        <input type="date" class="form-control" placeholder="tanggal" name="tanggal_publish" value="{{ old('tanggal_publish') }}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="floatingPassword">ilustrasi</label>
                        <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="image_path" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="submit btn btn-primary">Tambah Artikel</button>
                </div>
            </form>
    </div>
    </div>
  </div>
  {{-- End Modal --}}
  <div class="modal fade" id="edit-modal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1" style="color:black">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
          <form action="{{route('updateartikel')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalToggleLabel">Edit Artikel</h5>
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close"> X </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="id_story" id="idM">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" placeholder="Judul" value="{{old('judul')}}" name="judul" required autofocus id="judulM">
                    </div>
                    <div class="form-group">
                        <label for="floatingInput">Isi</label>
                        <textarea class="form-control" id="isiM" rows="3" name="isi" required autofocus value="{{old('isi')}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="floatingPassword">Tanggal Publish</label>
                        <input type="date" class="form-control" placeholder="tanggal" name="tanggal_publish" value="{{ old('tanggal_publish') }}" required autofocus id="tanggalM">
                    </div>
                    <div class="form-group">
                        <label for="floatingPassword">ilustrasi</label>
                        <input type="file" class="form-control" accept=".jpg,.png,.jpeg" name="image_path" autofocus>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="submit btn btn-primary">Update Artikel</button>
                </div>
            </form>
    </div>
    </div>
  </div>
  @stop

  @push('js')
  <form action="" id="delete-form" method="post">
      @method('delete')
      @csrf
  </form>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
      $('#example2').DataTable({
          "responsive": true,
      });
      function notificationBeforeDelete(event, el) {
          event.preventDefault();

          if (confirm('Apakah anda yakin akan menghapus data ? ')) {
              $("#delete-form").attr('action', $(el).attr('href'));
              $("#delete-form").submit();
          }
      }

  </script>
  <script>
              $(document).ready(function() {
          $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }   });
            $('body').on('click', '#get-data', function () {
                var id = $(this).data('id');
             $.get('editartikel/'+ id, function (data) {
              $('#edit-modal').modal('show');
              $('#idM').val(data.id_story);
              $('#judulM').val(data.judul);
              $('#isiM').val(data.isi);
              $('#tanggalM').val(data.tanggal_publish);
          })
       });
      });



  </script>
@endpush

