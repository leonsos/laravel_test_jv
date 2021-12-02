@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <form action="{{route('shopping.save')}}" method="post">
                            @csrf
                            <div class="card-header">                            
                                <h2 class="fs-5 fw-bold mb-1">{{ __('Cliente') }}</h2>
                                <p>{{ __('Seleccione un producto a comprar!') }}</p>
                            </div>
                            <div class="card-body">
                                <label class="my-1 me-2" for="country">Products</label>
                                <select class="form-select" id="country" aria-label="Default select example" name="product_id">
                                    <option selected>Open this select to see al product than you can buy</option>
                                    @foreach ($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name}}</option>
                                    @endforeach                                   
                                </select>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn w-100 btn-secondary animate-up-2 text-dark">Comprar
                                    <svg class="icon" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12 14l9-5-9-5-9 5 9 5z"></path><path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path></svg>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
