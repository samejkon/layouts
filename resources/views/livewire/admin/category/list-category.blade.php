<div>
    @if (session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><i class="fa fa-check-circle me-1"></i> {{ session('message') }} </strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    <div class="d-flex align-items-strech">
    @endif
        
        <div class="card w-100">
          <div class="card-body">
            <div class="row">
                <div class="col-6">
                   <h3>Danh sách danh mục.</h3>
                </div>
                <div class="col-6 text-end">
                   <button wire:click.privent="addCategory" class="btn btn-outline-primary"><i class="fa-solid fa-plus"></i> Thêm danh mục</button>
                </div>
            </div>
            <div>
                <table class="table table-striped">
                    <thead>
                        <th>#</th>
                        <th>Danh mục</th>
                        <th>Mô tả</th>
                        <th class="text-center">Hành động</th>
                    </thead>
                      @isset($category)
                          @if ($category->count()>0)
                            @php $i = 1 @endphp
                            @foreach ($category as $item)
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->description }}</td>
                                    <td class="text-center">
                                        <a href="" class="text-warning me-2"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <a href="" onclick="return confirm('Bạn có chắc chắn xoá danh mục này.')" class="text-danger"><i class="ti ti-trash"></i></a>
                                    </td>
                                </tr>
                                @php $i++ @endphp
                            @endforeach
                          @else
                              <tr class="text-danger text-center">
                                <td colspan="4">Không có bản ghi</td>
                              </tr>
                          @endif
                      @endisset
                </table>
                <div class="d-flex justify-content-center fs-1">
                    {{ $category->links() }}
                </div>
            </div>
          </div>
        </div>
    
    
    
       <!-- Modal -->
        <div class="modal fade" id="form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" wire:ignore.self>
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Thêm Category</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form autocomplete="off" wire:submit.prevent="createCategory">
                    <div class="modal-body">
                        <div class="form-floating mb-1">
                            <input type="text" wire:model.defer="state.name" name="name" class="form-control @error('name') is-invalid @enderror" id="floatingInput" placeholder="Nhập tên danh mục" value="{{ old('name') }}">
                            <label for="floatingInput">Tên danh mục</label>
                          </div>
                          @error('name')
                            <span class="text-danger ">
                                {{ $message }}
                            </span>
                          @enderror
                         
                          <div class="form-floating mt-3">
                            <textarea wire:model.defer="state.description" name="description" class="form-control @error('description') is-invalid @enderror" id="floatingPassword" placeholder="Mô tả ngắn">{{ old('description') }}</textarea>
                            <label for="floatingPassword">Mô tả ngắn</label>
                            @error('description')
                                <span class="text-danger ">
                                    {{ $message }}
                                </span>
                            @enderror
                          </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
    
            </div>
            </div>
        </div>
    </div>
</div>
<script>
    window.addEventListener('show-form', event => {
    $('#form').modal('show');
    });
    window.addEventListener('hide-form', event => {
    $('#form').modal('hide');
    });
</script>