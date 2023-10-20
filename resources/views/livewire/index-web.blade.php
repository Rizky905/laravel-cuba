<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="list-product list-category">
                            <div class="table-responsive">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <input wire:model="search" type="text" class="form-control"
                                            placeholder="search..">
                                    </div>
                                    <div>
                                        <a class="btn btn-login" href="{{ url($segmentName . '/create') }}">
                                            <i class="fa fa-plus"></i> Add Web
                                        </a>
                                    </div>
                                </div>
                                <table class="table light-card mt-5">
                                    <thead>
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Url</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">PIC</th>
                                            <th scope="col">PIC Contact</th>
                                            <th scope="col" class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $no = 1;
                                        @endphp
                                        @foreach ($data as $item)
                                            <tr>
                                                <th scope="row">{{ $no }}</th>
                                                <td>{{ $item->url }}</td>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->description }}</td>
                                                <td>{{ $item->pic }}</td>
                                                <td>{{ $item->pic_contact }}</td>

                                                <td class="text-center">
                                                    <a href="{{ url($segmentName . '/' . $item->id . '/edit') }}"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a> | </a>
                                                    <a href="javascript();" wire:click="deleteId({{ $item->id }})"
                                                        type="button" data-bs-toggle="modal"
                                                        data-bs-target="#deleteUser">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @php
                                                $no++;
                                            @endphp
                                        @endforeach
                                    </tbody>
                                </table>

                                <div class="mt-5 d-flex justify-content-end">
                                    {{ $data->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="deleteUser" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Record</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure want to delete this record ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                    <button type="button" wire:click.prevent="delete()" data-bs-dismiss="modal"
                        class="btn btn-secondary">Delete</button>
                </div>
            </div>
        </div>
    </div>
</div>
