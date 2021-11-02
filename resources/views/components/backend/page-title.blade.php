<div class="row">
    <div class="col-sm-12">
        <div class="page-title-box">
            <div class="float-right">
                <ol class="breadcrumb">
                    
                    {{$prepend ?? ''}}

                    @if($titleGenerate == "true")
                    @foreach($titelItems as $item)
                    <li class="breadcrumb-item {{$item['action']!='#' ?'active' : ''}}"><a href="{{ $item['action'] ? $item['url'] : '#' }}">{{$item['name']}}</a></li>
                    @endforeach 
                    @endif

                    {{$slot}}

                    {{$append ?? ''}}
                </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
        </div>
        <!--end page-title-box-->
    </div>
    <!--end col-->
</div>