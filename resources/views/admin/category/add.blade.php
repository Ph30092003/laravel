@extends('admin.main');

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-sm-8 m-auto">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-header-2">
                                <h5>Thêm danh mục mới</h5>
                            </div>
                            {{-- FORM --}}
                            <form class="theme-form theme-form-2 mega-form" action="" method="POST">
                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Tên danh mục</label>
                                    <div class="col-sm-9">
                                        <input class="form-control" name="categoryname" type="text" placeholder="Tên danh mục">
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Loại danh mục</label>
                                    <div class="col-sm-9">
                                        <select name="categoryparent" class="form-control">
                                            <option value="0">Danh mục cha</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="form-label-title col-sm-3 mb-0">Mô tả danh mục</label>
                                    <div class="col-sm-9">
                                        <textarea name="categorydesc" class="form-control" placeholder="Mô tả danh mục"></textarea>
                                    </div>
                                </div>

                                <div class="mb-4 row align-items-center">
                                    <label class="col-sm-3 col-form-label form-label-title">Trạng thái hoạt động</label>
                                    <div class="col-sm-9">
                                        <label class="switch">
                                            <input type="checkbox"><span class="switch-state"></span>
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary ml-3">Tạo danh mục</button>

                            </form>
                            {{-- END FORM --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
