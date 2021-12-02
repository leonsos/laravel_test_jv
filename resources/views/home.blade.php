@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="row">
            <div class="col-12 col-xl-12">
                <div class="col-12 px-0">
                    <div class="card border-0 shadow">
                        <div class="card-header header-dashboard">
                            <h2 class="fs-5 fw-bold mb-1">{{ __('Dashboard') }}</h2>
                            <a href="{{route('bills.make')}}" type="button" class="animate-up-2 btn btn-primary d-inline-flex align-items-center">
                                Facturar
                                <svg class="icon icon-xs ms-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M2 9.5A3.5 3.5 0 005.5 13H9v2.586l-1.293-1.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 15.586V13h2.5a4.5 4.5 0 10-.616-8.958 4.002 4.002 0 10-7.753 1.977A3.5 3.5 0 002 9.5zm9 3.5H9V8a1 1 0 012 0v5z" clip-rule="evenodd" /></svg>
                            </a>
                        </div>
                        <div class="card-body main-dashboard">
                            <div class="row">
                                <div class="col-4 col-lg-4">
                                    <div class="card border-0 shadow">
                                        <div class="card-body">
                                            <div class="row d-block d-xl-flex align-items-center">
                                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                    <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                                    </div>
                                                    <div class="d-sm-none">
                                                        <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                                        <h3 class="mb-1">50.88%</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-7 px-xl-0">
                                                    <div class="d-none d-sm-block">
                                                        <h2 class="h6 text-gray-400 mb-0">Clientes regitrados</h2>
                                                        <h3 class="fw-extrabold mb-2">{{$users = DB::table('users')->where('id','<>','1')->count()}}</h3>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-4 col-lg-4">
                                    <div class="card border-0 shadow">
                                        <div class="card-body">
                                            <div class="row d-block d-xl-flex align-items-center">
                                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                    <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                                    </div>
                                                    <div class="d-sm-none">
                                                        <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                                        <h3 class="mb-1">50.88%</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-7 px-xl-0">
                                                    <div class="d-none d-sm-block">
                                                        <h2 class="h6 text-gray-400 mb-0">Facturas emitidas</h2>
                                                        <h3 class="fw-extrabold mb-2">{{$bills_count = DB::table('bills')->count()}}</h3>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                                <div class="col-4 col-lg-4">
                                    <div class="card border-0 shadow">
                                        <div class="card-body">
                                            <div class="row d-block d-xl-flex align-items-center">
                                                <div class="col-12 col-xl-5 text-xl-center mb-3 mb-xl-0 d-flex align-items-center justify-content-xl-center">
                                                    <div class="icon-shape icon-shape-tertiary rounded me-4 me-sm-0">
                                                        <svg class="icon" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                                    </div>
                                                    <div class="d-sm-none">
                                                        <h2 class="fw-extrabold h5"> Bounce Rate</h2>
                                                        <h3 class="mb-1">50.88%</h3>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-xl-7 px-xl-0">
                                                    <div class="d-none d-sm-block">
                                                        <h2 class="h6 text-gray-400 mb-0">Compras pendientes</h2>
                                                        <h3 class="fw-extrabold mb-2">{{$bills_count = DB::table('shoppings')->where('status','=','pending')->count()}}</h3>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>                                    
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>                
                <div class="card border-0 shadow mt-3">
                    <div class="card-header border-bottom d-flex align-items-center justify-content-between">
                        <h2 class="fs-5 fw-bold mb-0">issued invoices</h2>
                        {{-- <a href="#" class="btn btn-sm btn-primary">See all</a> --}}
                    </div>
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                              <tr>
                                <th scope="col">#</th>
                                <th scope="col">name</th>
                                <th scope="col">price</th>
                                <th scope="col">tax</th>
                                <th scope="col">total price</th>
                                <th scope="col">date</th>
                                <th scope="col">&nbsp;</th>
                              </tr>
                            </thead>
                            <tbody>    
                                @forelse ($bills as $b)
                                    <tr>
                                        <th scope="row">{{$b->id}}</th>                                        
                                        <td>{{$b->name}}</td>
                                        <td>{{$b->amount}}</td>
                                        <td>{{$b->tax}}</td>
                                        <td>{{$b->total}}</td>
                                        <td>{{$b->date}}</td>
                                        <td><a href="{{route('bills.details',$b->id)}}" type="button" class="animate-up-2 btn btn-primary d-inline-flex align-items-center">                                    
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                                                </svg>
                                        </a>
                                        </td>
                                    </tr>                                    
                                @empty
                                  <div class="alert alert-danger" role="alert">
                                    whiout data to show!
                                  </div>
                                @endforelse                                                      
                            </tbody>
                          </table>
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
