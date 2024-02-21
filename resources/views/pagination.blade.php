<nav aria-label="Page navigation example">
    <ul class="pagination">
      @if ($paginator->onFirstPage())
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
              <span class="page-link" aria-hidden="true">&laquo; Previous</span>
          </li>
      @else
          <li class="page-item">
              <a class="page-link" href="{{ $paginator->url($paginator->currentPage() - 1) }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo; Previous</a>
          </li>
      @endif
  
      @for ($i = 1; $i <= $paginator->lastPage(); $i++)
          <li class="page-item {{ ($paginator->currentPage() == $i) ? 'active' : '' }}">
              <a class="page-link" href="{{ $paginator->url($i) }}">{{ $i }}</a>
          </li>
      @endfor
  
      @if ($paginator->hasMorePages())
          <li class="page-item">
              <a class="page-link" href="{{ $paginator->url($paginator->currentPage() + 1) }}" rel="next" aria-label="@lang('pagination.next')">Next &raquo;</a>
          </li>
      @else
          <li class="page-item disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
              <span class="page-link" aria-hidden="true">Next &raquo;</span>
          </li>
      @endif
    </ul>
  </nav>
  