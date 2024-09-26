<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sort Chapter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="" method="POST">
            @csrf
            <ul class="item_list sortable_list ">
                @foreach($chapters as $chapter)
                <li class="" data-lesson-id="8" data-chapter-id="4">
                    <span>{{ $chapter->title }}</span>
                    <div class="add_course_content_action_btn">
                        <a class="arrow dragger mt-2" href="javascript:;"><i class="fas fa-arrows-alt"
                                aria-hidden="true"></i></a>
                    </div>
                </li>
                @endforeach

            </ul>
        </form>
    </div>
</div>
