<div class="col-lg-12 mb-3">
    <form action="{{route('search_project')}}" method="POST">
        @csrf
        <div class="search_input-project">
                <input name="keywork" type="text" placeholder="Search">
                <div>
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>

            </div>
    </form>
</div>
