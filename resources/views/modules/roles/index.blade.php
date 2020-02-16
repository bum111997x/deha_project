@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-content">
                    <div class="row">
                        <!-- Search form -->
                        <div class="col-sm-10">
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createRoleModalForm"
                                    id="buttonCreate">Create
                            </button>
                        </div>
                        <div class="col-sm-2 md-form mt-0 " style="display: flex">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search"
                                   name="query" id="search">
                            <button type="button" id="button" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                    <div class="data-role" id="data-role">
{{--                        @include('modules.roles.table')--}}
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--Modal Create Role--}}
    <div class="modal fade" id="createRoleModalForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Nhóm quyền</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="roleForm" method="POST">
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Tên quyền <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <input type="text" autocomplete="off" name="name" id="name"
                                   placeholder="Nhập vào tên quyền" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Tên hiển thị <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <input type="text" autocomplete="off" name="label" id="label"
                                   placeholder="Nhập vào tên hiển thị" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Trạng thái <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <select name="status" id="status" class="form-control">
                                <option value="1">Actived</option>
                                <option value="0">Locked</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" id="buttonSave"><span class="ti-save"></span> Lưu
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Modal Edit Role--}}
    <div class="modal fade" id="editRoleModalForm" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel"
         aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mediumModalLabel">Nhóm quyền</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="roleFormEdit" method="POST">
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Tên quyền <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <input type="text" name="name" id="role_name"
                                   placeholder="Nhập vào tên quyền" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Tên hiển thị <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <input type="text" autocomplete="off" name="label" id="role_label"
                                   placeholder="Nhập vào tên hiển thị" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="role" class=" form-control-label">Trạng thái <span
                                    style="color: red;font-weight: 600">*</span></label>
                            <select name="status" id="role_status" class="form-control">
                                <option value="1">Actived</option>
                                <option value="0">Locked</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                            <button type="submit" class="btn btn-primary" id="buttonUpdate"><span class="ti-save"></span> Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    {{--Modal Seting Permission--}}
    <div class="modal fade" id="largeModal" tabindex="-1" role="dialog" aria-labelledby="largeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="largeModalLabel">Cài đặt quyền</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-main" id="modal-main">
                    <form action="#" id="setPermissionForm">
                        <div class="row">
                            <div class="modal-body">
                                <div class="select-all" style="background: #ccc;height: 40px;display: flex;align-items: center;">
                                    <div class="col-md-12">
                                        <input type="checkbox" class="per-select-all" style="margin-right: 25px;"/><span>Chọn tất cả</span>
                                    </div>
                                </div>
                                <div class="permission" id="permission" style="padding-top: 10px">
{{--                                    @include('models.roles.permission')--}}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="modal-footer" style="width: 96%; margin: 0 auto">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
                                <button type="button" class="btn btn-primary" id="btn-setting">Xác nhận</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('ajax')
    <script src="ajax/roles.js"></script>
@endsection





