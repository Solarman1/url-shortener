
@extends('layouts.app')

@section('content')

    <div class="container">
       <div class="card"> 
           <div class="card-header">
            <form action="{{route('pushUrl')}}" method="post">
                @csrf
                <p>Enter link</p>
                <input name="sourceUrl" class="form-control" placeholder="Enter URL" >
                <button type="submit" class="btn btn-success">Get link</button>
                <div "card-body">             
                                <tbody>
                                    @foreach($cutUrls as $row)
                                     <p>
                                        <a href="{{route('redirect', $row->hash)}}" target="_blank">
                                            {{ route('redirect', $row->hash) }}
                                        </a>
                                             links to {{$row->url}}
                                     </p>
                                    @endforeach  
                                </tbody>                         
                </div>
            </div>
            
                        
        </div>
    </div>

</form>
@endsection

