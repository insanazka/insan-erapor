@extends('layouts.main')    

@section('container')  
<thead style="text-align: center">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Action</th>
    </tr>
</thead>
<tfoot style="text-align: center">
    <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Password</th>
        <th>Alamat</th>
        <th>No Telp</th>
        <th>Action</th>
    </tr>
</tfoot>
<tbody>
    <?php $no = 1;?>
    @foreach($user as $u)
    <tr style="text-align: center">
        <td><?php echo $no++; ?></td>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
        <td>{{ $u->password }}</td>
        <td>{{ $u->address }}</td>
        <td>{{ $u->phone }}</td>
        <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEdit{{ $u->id }}">Edit Data</button>
            <div class="modal fade" id="ModalEdit{{ $u->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <form method="POST" action="/table/user/{{ $u->id }}/edit" autocomplete="off" class="sign-up-form">
                    @csrf
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body" style="text-align: left">
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nama</label>
                            <input
                                type="text"
                                minlength="3"
                                class="form-control"
                                autocomplete="off"
                                name="name"
                                value="{{ $u->name }}"
                                required
                            />
                        </div>
                        {{-- <input type="hidden" name="iduser" value="{{ $u->iduser }}"> --}}
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Email</label>
                            <input
                                type="email"
                                class="form-control"
                                autocomplete="off"
                                name="email"
                                value="{{ $u->email }}"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input
                                type="password"
                                minlength="3"
                                class="form-control"
                                autocomplete="off"
                                name="password"
                                value="{{ $u->password }}"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Alamat</label>
                            <input
                                type="text"
                                minlength="3"
                                class="form-control"
                                autocomplete="off"
                                name="address"
                                value="{{ $u->address }}"
                                required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">No Telpon</label>
                            <input
                                type="text"
                                minlength="5"
                                class="form-control"
                                autocomplete="off"
                                name="phone"
                                value="{{ $u->phone }}"
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

            <a href="/table/user/{{ $u->id }}/delete" class="btn btn-danger btn-icon-split">
                
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
    <form method="POST" action="user/create" autocomplete="off" class="sign-up-form">
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
                <label for="exampleInputEmail1" class="form-label">Nama</label>
                <input
                    type="text"
                    minlength="3"
                    class="form-control"
                    autocomplete="off"
                    name="name"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    autocomplete="off"
                    name="email"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input
                    type="password"
                    minlength="3"
                    class="form-control"
                    autocomplete="off"
                    name="password"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Alamat</label>
                <input
                    type="text"
                    minlength="3"
                    class="form-control"
                    autocomplete="off"
                    name="address"
                    required
                  />
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">No Telpon</label>
                <input
                    type="text"
                    minlength="5"
                    class="form-control"
                    autocomplete="off"
                    name="phone"
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

