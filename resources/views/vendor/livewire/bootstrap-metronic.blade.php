<div class="dataTables_paginate paging_simple_numbers float-right">
    @if ($paginator->hasPages())
        @php(isset($this->numberOfPaginatorsRendered[$paginator->getPageName()]) ? $this->numberOfPaginatorsRendered[$paginator->getPageName()]++ : $this->numberOfPaginatorsRendered[$paginator->getPageName()] = 1)
        <nav>
            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="paginate_button page-item previous disabled" id="datatable_previous">
                        <a href="javascript:;" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">
                            <i class="ki ki-arrow-back"></i>
                        </a>
                    </li>
                @else

                <li class="paginate_button page-item previous">
                    <button type="button"
                        dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                        class="page-link"
                        wire:click="previousPage('{{ $paginator->getPageName() }}')"
                        wire:loading.attr="disabled"
                        rel="prev"
                        aria-label="@lang('pagination.previous')">
                        <i class="ki ki-arrow-back"></i>
                    </button>
                </li>
                @endif
                {{-- Pagination Elements --}}
                @foreach ($elements as $element)
                    {{-- "Three Dots" Separator --}}
                    @if (is_string($element))
                        <li class="page-item disabled" aria-disabled="true"><span class="page-link">{{ $element }}</span></li>
                    @endif

                    {{-- Array Of Links --}}
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active" wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}" aria-current="page"><span class="page-link">{{ $page }}</span></li>
                            @else
                                <li class="page-item" wire:key="paginator-{{ $paginator->getPageName() }}-{{ $this->numberOfPaginatorsRendered[$paginator->getPageName()] }}-page-{{ $page }}"><button type="button" class="page-link" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')">{{ $page }}</button></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="paginate_button page-item next" id="datatable_next">
                        <a href="javascript:;" aria-controls="datatable" data-dt-idx="8" tabindex="0" class="page-link"
                            dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}"
                            wire:click="nextPage('{{ $paginator->getPageName() }}')"
                            wire:loading.attr="disabled"
                            rel="next"
                            aria-label="@lang('pagination.next')">
                            <i class="ki ki-arrow-next"></i>
                        </a>
                    </li>
                @else
                    <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                        <a href="javascript:;" aria-controls="datatable" data-dt-idx="0" tabindex="0" class="page-link">
                            <i class="ki ki-arrow-next"></i>
                        </a>
                    </li>
                @endif
            </ul>
        </nav>
    @endif
</div>
