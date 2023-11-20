@extends('layouts.main')    

@section('container')  
<thead style="text-align: center">
    <tr>
        <th>No</th>
        <th>IMEI</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
</thead>
<tfoot style="text-align: center">
    <tr>
        <th>No</th>
        <th>IMEI</th>
        <th>Merek</th>
        <th>Tipe</th>
        <th>Harga</th>
        <th>Action</th>
    </tr>
</tfoot>
<tbody>
    <?php $no = 1;?>
    @foreach($hp as $h)
    <tr style="text-align: center">
        <td><?php echo $no++; ?></td>
        <td>{{ $h->imei }}</td>
        <td>{{ $h->merek }}</td>
        <td>{{ $h->tipe }}</td>
        <td>{{ $h->harga }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit{{ $h->imei }}">Edit Data</button>
            <div class="modal fade" id="ModalEdit{{ $h->imei }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form method="POST" action="/table/hp/{{ $h->imei }}/edit" autocomplete="off" class="sign-up-form">
                    @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">IMEI</label>
                            <input
                                type="text"
                                minlength="1"
                                class="form-control"
                                autocomplete="off"
                                name="imei"
                                value="{{ $h->imei }}"
                                required
                            />
                        </div>
                        {{-- <input type="hidden" name="imei" value="{{ $h->imei }}"> --}}
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Merek</label>
                            <input
                                type="text"
                                class="form-control"
                                autocomplete="off"
                                name="merek"
                                value="{{ $h->merek }}"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Tipe</label>
                            <input
                                type="text"
                                minlength="1"
                                class="form-control"
                                autocomplete="off"
                                name="tipe"
                                value="{{ $h->tipe }}"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Harga</label>
                            <input
                                type="text"
                                minlength="5"
                                class="form-control"
                                autocomplete="off"
                                name="harga"
                                value="{{ $h->harga }}"
                                required
                            />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" value="Sign Up" class="btn btn-primary">Simpan</button>
                    </div>
                    </div>
                </form>
                </div>
            </div>
            
            {{-- <form action="/table/hp/{{ $h->imei }}/delete" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="Delete">
            </form> --}}

            <a href="/table/hp/{{ $h->imei }}/delete" class="btn btn-danger btn-icon-split">
                
                <span class="icon text-white-50">
                    <i class="fas fa-trash"></i>
                </span>
                <span class="text">Hapus</span>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>
@endsection

@section('add')
<div class="modal-dialog" role="document">
    <form method="POST" action="hp/create" autocomplete="off" class="sign-up-form">
        @csrf
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="modal-body">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">IMEI</label>
                <input
                    type="text"
                    minlength="1"
                    class="form-control"
                    autocomplete="off"
                    name="imei"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Merek</label>
                <input
                    type="text"
                    class="form-control"
                    autocomplete="off"
                    name="merek"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Tipe</label>
                <input
                    type="text"
                    minlength="1"
                    class="form-control"
                    autocomplete="off"
                    name="tipe"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Harga</label>
                <input
                    type="text"
                    minlength=""
                    class="form-control"
                    autocomplete="off"
                    name="harga"
                    required
                  />
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" value="Sign Up" class="btn btn-primary">Simpan</button>
        </div>
        </div>
    </form>
    </div>
@endsection

