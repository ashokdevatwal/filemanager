@extends('filemanager.master')
@section('page')

<div class="row">
    <div class="col-md-12">
        <div class="page-header d-flex justify-content-between">
            <h2>Servers</h2>
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link text-success" data-toggle="modal" data-target="#addServer" title="Add Server">
                        <i class="ti-harddrives"></i>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Filter" data-toggle="dropdown">
                        <i class="ti-filter"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-big p-4 dropdown-menu-right">
                        <form>
                            <div class="form-group">
                                <label>Role</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="">User</option>
                                    <option value="">Staff</option>
                                    <option value="">Admin</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Status</label>
                                <select class="form-control">
                                    <option value="">Select</option>
                                    <option value="">Active</option>
                                    <option value="">Blocked</option>
                                    <option value="">Admin</option>
                                </select>
                            </div>
                            <button class="btn btn-primary">Filter</button>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="View Grid">
                        <i class="ti-view-grid"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" title="View List">
                        <i class="ti-view-list"></i>
                    </a>
                </li>
            </ul>
        </div>

        <div class="card border-0">
            <div class="table-responsive">
                <table id="user-list" class="table table-borderless table-hover">
                    <thead>
                    <tr>
                        <th>Title</th>
                        <th>Host</th>
                        <th>User</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach( $servers as $server )
                    <tr>
                        <td>{{$server->title}}</td>
                        <td>{{$server->host}}</td>  
                        <td>{{$server->username}}</td>
                        <td>
                            @if( $server->status )
                                <span class="badge bg-success-bright text-success">Active</span>
                            @else
                                <span class="badge bg-danger-bright text-danger">Inactive</span>
                            @endif
                        </td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('connect-server', [ 'server' => $server->id ])}}" class="dropdown-item">Connect</a>
                                    <a href="#" class="dropdown-item" data-sidebar-target="#folder-info">View Detail</a>
                                    <a href="#" class="dropdown-item">Edit</a>
                                    <a href="#" class="dropdown-item">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- Add Server Modal -->
<div class="modal" tabindex="-1" role="dialog" id="addServer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Server</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">x</span>
        </button>
      </div>
      <form method="post" action="{{ route('add-server') }}">
      <div class="modal-body">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" name="title" aria-describedby="title" placeholder="Name Your Server">
        </div>
        <div class="form-group">
            <label for="host">Host</label>
            <input type="text" class="form-control" name="host" aria-describedby="host" placeholder="Host Address i.e 127.0.0.1">
        </div>
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="Host Username">
        </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" class="form-control" name="password" aria-describedby="password" placeholder="Host Password">
        </div>

        <div class="form-group">
            <label for="public_key">Public Key</label>
            <input type="text" class="form-control" name="public_key" aria-describedby="public_key" placeholder="Host public_key">
        </div>

        <div class="form-group">
            <label for="private_key">Private Key</label>
            <input type="text" class="form-control" name="private_key" aria-describedby="private_key" placeholder="Host private_key">
        </div>

        <div class="form-group">
            <label for="storage_root">Default Storage Path</label>
            <input type="text" class="form-control" name="storage_root" aria-describedby="storage_root" placeholder="Host Storage">
        </div>

      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
@endsection
