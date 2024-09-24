<div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Chapter</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="{{ route('instructor.course-content.store-lesson') }}" method="POST">
            @csrf
            <input type="hidden" name="course_id" value="{{ $courseId }}">
            <input type="hidden" name="chapter_id" value="{{ $chapterId }}">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group mb-3 add_course_basic_info_imput">
                        <label for="">Title</label>
                        <input type="text" class="form-control" name="title" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">Source</label>
                        <select name="source" class="add_course_basic_info_imput storage" required>
                            <option value="">Select</option>
                            @foreach(config('course.video_sources') as $source => $name)
                            <option value="{{ $source }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="add_course_basic_info_imput upload_source">
                        <label for="#">Path</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                              <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                              </a>
                            </span>
                            <input id="thumbnail" class="form-control source_input" type="text" name="file" >
                          </div>
                    </div>
                    <div class="add_course_basic_info_imput external_source d-none">
                        <label for="#">Path</label>
                        <input type="text" name="url" class="source_input">
                    </div>
    
    
                </div>

                <div class="col-md-6">
                    <div class="form-group mb-3">
                        <label for="">File Type</label>
                        <select name="file_type" id="" class="add_course_basic_info_imput" required>
                            <option value="">Select</option>
                            @foreach(config('course.file_types') as $source => $name)
                            <option value="{{ $source }}">{{ $name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group mb-3 add_course_basic_info_imput">
                        <label for="">Duration</label>
                        <input type="text" class="" name="duration" required>
                    </div>
                </div>
                

                <div class="col-xl-6">
                    <div class="add_course_more_info_checkbox">
                        <div class="form-check" style="width: 20%">
                            <input class="form-check-input" type="checkbox" name="is_preview" value="1" id="preview">
                            <label class="form-check-label" for="preview">Is Preview</label>
                        </div>
                        <div class="form-check" style="width: 20%">
                            <input class="form-check-input" type="checkbox" name="downloadable" value="1" id="downloadable">
                            <label class="form-check-label" for="downloadable">Downloadable</label>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group mb-3">
                        <label for="">Description</label>
                        <textarea name="description" class="add_course_basic_info_imput" id="" cols="30" rows="10" required></textarea>
                    </div>
                </div>
                <div class="form-group text-end">
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </form>
    </div>
</div>

<script>
    $('#lfm').filemanager('file');
</script>