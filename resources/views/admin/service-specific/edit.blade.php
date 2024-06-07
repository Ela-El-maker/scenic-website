@extends('admin.layouts.layout')

@section('content')
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="features-posts.html" class="btn btn-icon"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Service Item Section</h1>

        </div>

        <div class="section-body">
            <h2 class="section-title">Service Item Section</h2>


            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Update Service Item Section</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{route('admin.service-specific.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                            

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Background Image</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview" class="image-preview">
                                            <label for="image-upload" id="image-label">Choose File</label>
                                            <input type="file" name="image" id="image-upload" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                        Video</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="custom-file">
                                            <input type="file" name="video" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Image 1 -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Image 1</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview-1" class="image-preview">
                                            <label for="image-upload-1" id="image-label-1">Choose File</label>
                                            <input type="file" name="image_1" id="image-upload-1" class="image-input"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Image 2 -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Image 2</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview-2" class="image-preview">
                                            <label for="image-upload-2" id="image-label-2">Choose File</label>
                                            <input type="file" name="image_2" id="image-upload-2" class="image-input"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Image 3 -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Image 3</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview-3" class="image-preview">
                                            <label for="image-upload-3" id="image-label-3">Choose File</label>
                                            <input type="file" name="image_3" id="image-upload-3" class="image-input"/>
                                        </div>
                                    </div>
                                </div>

                                <!-- Project Image 4 -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Image 4</label>
                                    <div class="col-sm-12 col-md-7">
                                        <div id="image-preview-4" class="image-preview">
                                            <label for="image-upload-4" id="image-label-4">Choose File</label>
                                            <input type="file" name="image_4" id="image-upload-4" class="image-input"/>
                                        </div>
                                    </div>
                                </div>


                                

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                        <button class="btn btn-primary">Update</button>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Set the initial background images for the preview boxes
            $('#image-preview').css({
                'background-image': 'url("{{ asset($portfolioItems->image) }}")',
                'background-size': 'cover',
                'background-position': 'center center',
            });


            $('#image-preview-1').css({
                'background-image': 'url("{{ asset($portfolioItems->image_1) }}")',
                'background-size': 'cover',
                'background-position': 'center center',
            });
            $('#image-preview-2').css({
                'background-image': 'url("{{ asset($portfolioItems->image_2) }}")',
                'background-size': 'cover',
                'background-position': 'center center',
            });

            // Initialize uploadPreview for each image input
            $.uploadPreview({
                input_field: "#image-upload-1", // First image input
                preview_box: "#image-preview-1", // Corresponding preview box
                label_field: "#image-label-1", // Corresponding label
                success_callback: function() {
                    // Nothing needed here as the image is already handled by uploadPreview
                }
            });
            $.uploadPreview({
                input_field: "#image-upload-2", // First image input
                preview_box: "#image-preview-2", // Corresponding preview box
                label_field: "#image-label-2", // Corresponding label
                success_callback: function() {
                    // Nothing needed here as the image is already handled by uploadPreview
                }
            });

            $('#image-preview-3').css({
                'background-image': 'url("{{ asset($portfolioItems->image_3) }}")',
                'background-size': 'cover',
                'background-position': 'center center',
            });
            $('#image-preview-4').css({
                'background-image': 'url("{{ asset($portfolioItems->image_4) }}")',
                'background-size': 'cover',
                'background-position': 'center center',
            });

            // Initialize uploadPreview for each image input
            $.uploadPreview({
                input_field: "#image-upload-3", // First image input
                preview_box: "#image-preview-3", // Corresponding preview box
                label_field: "#image-label-3", // Corresponding label
                success_callback: function() {
                    // Nothing needed here as the image is already handled by uploadPreview
                }
            });
            $.uploadPreview({
                input_field: "#image-upload-4", // First image input
                preview_box: "#image-preview-4", // Corresponding preview box
                label_field: "#image-label-4", // Corresponding label
                success_callback: function() {
                    // Nothing needed here as the image is already handled by uploadPreview
                }
            });
            
        });
    </script>
@endpush
