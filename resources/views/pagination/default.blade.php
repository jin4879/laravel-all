@if ($paginator->hasPages())
<div class="container">
    <ul class="pagination">
        @if ($paginator->onFirstPage())
            <li class="page-item disabled"><a class="page-link">First</a></li>
            <li class="page-item disabled"><a class="page-link">Previous</a></li>
        @else
            <li class="page-item"><a class="page-link" href="{{ $paginator->url(1) }}" rel="prev">First</a></li>
            <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev">Previous</a></li>
        @endif
        @php
        $limit = 5;
        $half = floor($limit/2);
        $c_p = $paginator->currentPage();
        $s_p = $c_p - $half;
        $l_p = $paginator->lastPage();
        if($s_p <= 0){
            $s_p = 1;
        }
        if($c_p > $l_p - $half){
            $s_p = $l_p - $limit + 1;
        }
        
        $e_p = $c_p + $half;
        if($e_p < $limit){
            $e_p = $limit;
        }

        if($e_p >= $l_p){
            $e_p = $l_p;
        }
        
        @endphp
        @foreach(range($s_p, $e_p) as $i)
            @if ($i == $paginator->currentPage())
            <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
            @else
                <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
            @endif
        @endforeach
        {{-- @foreach(range(1, $paginator->lastPage()) as $i)
            @if($i >= $paginator->currentPage() - $each_side && $i <= $paginator->currentPage() + $each_side)
                @if ($i == $paginator->currentPage())
                    <li class="page-item active"><a class="page-link">{{ $i }}</a></li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a></li>
                @endif
            @endif
        @endforeach --}}
        @if ($paginator->hasMorePages())
            <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl()}}" rel="next">Next</a></li>
            <li class="page-item"><a class="page-link" href="{{ $paginator->url($paginator->lastPage())}}" rel="next">Last</a></li>
        @else
            <li class="page-item disabled"><a class="page-link">Next</a></li>
            <li class="page-item disabled"><a class="page-link">Last</a></li>
        @endif
    </ul>
</div>
@endif