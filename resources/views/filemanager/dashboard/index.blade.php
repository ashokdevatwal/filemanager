@extends('filemanager.master')
@section('page')

<div class="row">
    <div class="col-md-12">
        <div class="page-header d-flex justify-content-between">
            <h2>Servers</h2>
            <ul class="nav">
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
                        <th>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="user-list-select-all">
                                <label class="custom-control-label" for="user-list-select-all"></label>
                            </div>
                        </th>
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
                        <td></td>
                        <td>
                            <a href="#">{{$server->title}}</a>
                        </td>
                        <td>{{$server->host}}</td>  
                        <td>{{$server->username}}</td>
                        <td>
                            <span class="badge bg-danger-bright text-danger">Blocked</span>
                        </td>
                        <td>
                            <div class="dropdown">
                                <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                    <i class="ti-more-alt"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="{{route('server-dashboard', [ 'server' => $server->id ])}}" class="dropdown-item">Connect</a>
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

@endsection