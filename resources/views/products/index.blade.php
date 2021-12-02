@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <div class="header-btn">
                <h2 class="mb-4 h5">{{ __('products') }}</h2>               
                <button type="button" class="btn btn-block btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#modal-default">Agregar</button>
            </div>        

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('Name') }}</th>
                        <th class="border-gray-200">{{ __('Price') }}</th>
                        <th class="border-gray-200">{{ __('Tax') }}</th>
                        <th class="border-gray-200">&nbsp;</th>
                        <th class="border-gray-200">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><span class="fw-normal">{{ $product->name }}</span></td>
                            <td><span class="fw-normal">{{ $product->price }}</span></td>                            
                            <td><span class="fw-normal">{{ $product->tax }}</span></td>                            
                            <td class="td-form">
                                <button type="button" class="btn btn-block btn-primary mb-3 btn-sm" data-bs-toggle="modal" data-bs-target="#modal-default-add{{$product->id}}">edit</button>
                                <form action="{{route('products.delete',$product)}}">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-block btn-primary mb-3 btn-sm ">delete</button>
                                </form>                                
                            </td>
                        </tr>
                        @include('layouts.modal_edit_product')
                    @endforeach
                </tbody>
            </table>
            <div
                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                {{ $products->links() }}
            </div>
        </div>
    </div>
    @include('layouts.modal_add_product')
@endsection
@section('scripts')
    @if ($message = Session::get('success'))
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                icon: 'success',
                text: '{{ $message }}',
            })
        </script>
       
    @endif
@endsection
