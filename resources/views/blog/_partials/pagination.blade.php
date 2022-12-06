<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        {{ $articles->onEachSide(1)->links('vendor.pagination.bootstrap-4') }}
    </ul>
</nav>