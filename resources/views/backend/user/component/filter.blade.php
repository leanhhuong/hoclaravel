        <div class="filter">
            <a href="" class="btn btn-success mb-4 fs-5 p-3">Thêm mới thành viên <i class="fa fa-plus"></i></a>
            <div class="perpage d-flex justify-content-between">
                <select name="perpage" class="form-select-lg mb-3 p-3" aria-label="Large select example">
                    @for($i = 20; $i<=200; $i+=20)
                        <option value="{{ $i }}">{{ $i }} bản ghi</option>
                        @endfor
                </select>
                <div class="action d-flex justify-content-between">
                    <div class="dropdown me-3">
                        <button class="btn btn-outline-success dropdown-toggle fs-5 p-3" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Chọn nhóm thành viên
                        </button>
                        <ul class="dropdown-menu fs-5">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                    <div class="input-group">
                        <form class="d-flex">
                            <input class="form-control fs-5 p-3" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success fs-5 p-3" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>