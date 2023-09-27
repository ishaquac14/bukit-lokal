<nav aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item"><a class="page-link" href="{{ $infos->previousPageUrl() }}">Previous</a></li>
        @foreach(range(1, $infos->lastPage()) as $page)
            <li class="page-item {{ $infos->currentPage() === $page ? 'active' : '' }}">
                <a class="page-link" href="{{ $infos->url($page) }}">{{ $page }}</a>
            </li>
        @endforeach
        <li class="page-item"><a class="page-link" href="{{ $infos->nextPageUrl() }}">Next</a></li>
    </ul>
</nav>

