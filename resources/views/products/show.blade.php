@extends('layouts.app')

@section('content')
    <div class="main py-4">
        <div class="card card-body border-0 shadow table-wrapper table-responsive">
            <div class="header-btn">
                <h2 class="mb-4 h5">{{ __('Bill of') }} {{$bills_name[0]}}</h2>               
                <a href="{{route('home')}}" type="button" class="btn btn-block btn-primary mb-3 animate-up-2"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
                  </svg>Back</a>
            </div>        

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="border-gray-200">{{ __('Name') }}</th>
                        <th class="border-gray-200">{{ __('Price') }}</th>
                        <th class="border-gray-200">{{ __('Tax') }}</th>                        
                    </tr>
                </thead>
                <tbody>
                     @foreach ($bills_details as $b)
                        <tr>
                            <td><span class="fw-normal">{{ $b->name }}</span></td>
                            <td><span class="fw-normal">{{ $b->price }}</span></td>                            
                            <td><span class="fw-normal">{{ $b->tax }}</span></td>                                                        
                        </tr>
                        
                    @endforeach 
                </tbody>
            </table>
            <div
                class="card-footer px-3 border-0 d-flex flex-column flex-lg-row align-items-center justify-content-between">
                {{-- {{ $bills_details->links() }} --}}
            </div>
        </div>
    </div>
    
@endsection
