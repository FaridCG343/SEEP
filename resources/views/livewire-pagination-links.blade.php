@if ($paginator->hasPages())
    <ul class="pagination pagination-rounded" style="display: flex; justify-content: center; align-items: center;">
        {{-- Previous page link --}}
        @if($paginator->onFirstPage())
            <li class="page-item disabled"><a href="javascript:;" class="page-link">Prev</a></li>
        @else
            <li class="page-item"><a href="javascript:;" wire:click="previousPage" rel="prev" class="page-link">Prev</a></li>
        @endif

        {{-- Pagination Element here --}}
        @foreach ($elements as $element)
            {{-- Make dots here --}}
            @if(is_string($element))
                <li class="page-item disabled"><a class="page-link"><span>{{$element}}</span></a></li>
            @endif

            {{-- link array here --}}
            @if(is_array($element))
                @foreach($element as $page=>$url)
                    @if($page==$paginator->currentPage())
                        <li class="page-item active"><a href="javascript:;" wire:click="gotoPage({{$page}})" class="page-link"><span>{{$page}}</span></a></li>
                    @else
                        <li class="page-item"><a href="javascript:;" wire:click="gotoPage({{$page}})" class="page-link">{{$page}}</a></li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if($paginator->hasMorePages())
            <li class="page-item"><a href="javascript:;" wire:click="nextPage" class="page-link">Next</a></li>
        @else
            <li class="page-item disabled"><a href="javascript:;" class="page-link">Next</a></li>
        @endif
    </ul>
@endif

