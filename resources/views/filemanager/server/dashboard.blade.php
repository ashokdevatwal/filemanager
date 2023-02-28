@extends('filemanager.master')
@section('page')

<div class="row">
    <div class="col-xl-3 files-sidebar">
        <div class="card border-0">
            <h6 class="card-title">{{ $server->title }} - {{ $server->host }} </h6>
            <div id="files"></div>
            <h6 class="">Storage</h6>
            <div class="progress" style="height: 5px">
                <div class="progress-bar" role="progressbar" style="width: {{ $total_disk_space[ 'percentage'] }}" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-9">
        <div class="content-title mt-0 mb-1 pb-1">
            <h4> <i class="ti-folder"></i> {{$init_tree[0]['name']}}</h4>
        </div>
        <div class="d-md-flex justify-content-between">
            <ul class="list-inline mb-0">
                <li class="list-inline-item mb-0">
                    <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Add
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">New Folder</a>
                        <a class="dropdown-item" href="#">New File</a>
                    </div>
                </li>
                <li class="list-inline-item mb-0">
                    <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Tags
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Public</a>
                        <a class="dropdown-item" href="#">Project</a>
                        <a class="dropdown-item" href="#">Software</a>
                        <a class="dropdown-item" href="#">Social Media</a>
                        <a class="dropdown-item" href="#">Design</a>
                    </div>
                </li>
                <li class="list-inline-item mb-0">
                    <a href="#" class="btn btn-outline-light dropdown-toggle" data-toggle="dropdown">
                        Sort
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Ascending</a>
                        <a class="dropdown-item" href="#">Descending</a>
                    </div>
                </li>
            </ul>
            <div id="file-actions" class="d-none">
                <ul class="list-inline">
                    <li class="list-inline-item mb-0">
                        <a href="#" class="btn btn-outline-light" data-toggle="tooltip" title="Move">
                            <i class="ti-arrow-top-right"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mb-0">
                        <a href="#" class="btn btn-outline-light" data-toggle="tooltip" title="Download">
                            <i class="ti-download"></i>
                        </a>
                    </li>
                    <li class="list-inline-item mb-0">
                        <a href="#" class="btn btn-outline-danger" data-toggle="tooltip" title="Delete">
                            <i class="ti-trash"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="table-responsive">
            <table id="table-files" class="table table-borderless table-hover">
                <thead>
                <tr>
                    <th>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="files-select-all">
                            <label class="custom-control-label" for="files-select-all"></label>
                        </div>
                    </th>
                    <th>Name</th>
                    <th>Modified</th>
                    <th>Label</th>
                    <th>Members</th>
                    <th></th>
                </tr>
                </thead>
                <tbody>

                @foreach($init_dir_tree as $item)
                <tr>
                    <td></td>
                    <td>
                        <a href="#" class="d-flex align-items-center">
                            <figure class="avatar avatar-sm mr-3">
                                <span class="avatar-title @if( $item['type'] == 'folder') bg-warning @endif text-black-50 rounded-pill">
                                    <i class="ti-{{ $item['type'] }}"></i>
                                </span>
                            </figure>
                            <span class="d-flex flex-column">
                                <span class="text-primary">{{ $item['name'] }}</span>
                                <span class="small font-italic">{{ $item['size'] }} KB</span>
                            </span>
                        </a>
                    </td>
                    <td>3/9/19, 2:40PM</td>
                    <td>
                        <div class="badge bg-info-bright text-info">Design</div>
                    </td>
                    <td>
                        <div class="avatar-group">
                            <figure class="avatar avatar-sm" title="Lisle Essam"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar2.jpg"
                                        class="rounded-circle"
                                        alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Baxie Roseblade"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar5.jpg"
                                        class="rounded-circle"
                                        alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Jo Hugill"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/man_avatar1.jpg"
                                        class="rounded-circle"
                                        alt="image">
                            </figure>
                            <figure class="avatar avatar-sm" title="Cullie Philcott"
                                    data-toggle="tooltip">
                                <img src="../../assets/media/image/user/women_avatar5.jpg"
                                        class="rounded-circle"
                                        alt="image">
                            </figure>
                        </div>
                    </td>
                    <td class="text-right">
                        <div class="dropdown">
                            <a href="#" class="btn btn-floating" data-toggle="dropdown">
                                <i class="ti-more-alt"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a href="#" class="dropdown-item" data-sidebar-target="#view-detail">View
                                    Details</a>
                                <a href="#" class="dropdown-item">Share</a>
                                <a href="#" class="dropdown-item">Download</a>
                                <a href="#" class="dropdown-item">Copy to</a>
                                <a href="#" class="dropdown-item">Move to</a>
                                <a href="#" class="dropdown-item">Rename</a>
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


@endsection

@section('style')
   <!-- quill -->
    <link href="/assets/vendors/quill/quill.snow.css" rel="stylesheet" type="text/css">
    <!-- quill -->
    <link href="/assets/vendors/jstree/themes/default/style.min.css" rel="stylesheet" type="text/css">

    <!-- Clockpicker -->
    <link rel="stylesheet" href="/assets/vendors/clockpicker/bootstrap-clockpicker.min.css" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="/assets/vendors/datepicker/daterangepicker.css" type="text/css">

    <!-- Datatable -->
    <link rel="stylesheet" href="/assets/vendors/dataTable/datatables.min.css" type="text/css">

    <!-- Select2 -->
    <link rel="stylesheet" href="/assets/vendors/select2/css/select2.min.css" type="text/css">
@endsection

@section('script')
<!-- <script src="/assets/vendors/dataTable/datatables.min.js"></script> -->

<script src="/assets/vendors/jstree/jstree.min.js"></script>
<script>

    $(function () {
    var jsonData = {
        'data': [
            @foreach($init_tree as $item )
            {
                'text': '{{$item['name']}}',
                'type': '{{$item['type']}}',
            },
            @endforeach
        ],
        themes: {
            dots: false
        }
    };

    $('#files').jstree({
        'core': jsonData,
        "types": {
            "folder": {
                "icon": "ti-folder text-warning",
            },
            "file": {
                "icon": "ti-file",
            }
        },
        plugins: ["types"]
    });

    // var table = $('#table-files').DataTable({
    //     'columnDefs': [
    //         {
    //             'targets': 0,
    //             'className': 'dt-body-center',
    //             'render': function (data, type, full, meta) {
    //                 return '<div class="custom-control custom-checkbox">' +
    //                     '<input type="checkbox" class="custom-control-input" id="customCheck' + meta.row + '">' +
    //                     '<label class="custom-control-label" for="customCheck' + meta.row + '"></label>' +
    //                     '</div>';
    //             }
    //         },
    //         {
    //             "orderable": false,
    //             "targets": [0, 5]
    //         }
    //     ],
    //     'order': [1, 'asc']
    // });

    $(document).on('click', '#files-select-all', function () {
        // Check/uncheck all checkboxes in the table
        var rows = table.rows({'search': 'applied'}).nodes();
        $('input[type="checkbox"]', rows)
            .prop('checked', this.checked);
        if (this.checked) {
            $('input[type="checkbox"]', rows).closest('tr').addClass('tr-selected');
            $('#file-actions').removeClass('d-none');
        } else {
            $('input[type="checkbox"]', rows).closest('tr').removeClass('tr-selected');
            if($('#table-files .custom-control-input:checked').length == 0){
                $('#file-actions').addClass('d-none');
            }
        }
    });

    $(document).on('click', '#table-files .custom-control-input', function () {
        if ($(this).prop('checked')) {
            $('#file-actions').removeClass('d-none');
            $(this).closest('td').closest('tr').addClass('tr-selected');
        } else {
            $(this).closest('td').closest('tr').removeClass('tr-selected');
            if($('#table-files .custom-control-input:checked').length == 0){
                $('#file-actions').addClass('d-none');
            }
        }
    });
});
</script>
@endsection
