<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="/admin/user/create" class="btn btn-primary mb-3">Tambah <i class="fa fa-plus"></i></a>
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Email</td>
                        <td>Action</td>
                    </tr>
                    @foreach ($user as $item)
                        
                    
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>
                            <div class="d-flex">

                                <a href="/admin/user/{{ $item->id }}/edit" class="btn btn-success mx-2"><i class="fa fa-edit"> </i> Edit</a>
                                
                                <form action="/admin/user/{{ $item->id }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="fa fa-trash"> </i> Hapus</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>