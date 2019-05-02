@extends('layouts.main')

@section('css')
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/file-upload-with-preview@3.4.3/dist/file-upload-with-preview.min.css">

        <style>
        	.custom-file-container__image-multi-preview{
        		height:150px !important;
        	}
        </style>

@endsection

@section('content')


<div class="container">
	<div class="row">
		<div class="col-lg-8">
			<div class="custom-file-container" data-upload-id="myUniqueUploadId">
				    <label>Upload File <a href="javascript:void(0)" class="custom-file-container__image-clear" title="Clear Image">&times;</a></label>

				    <label class="custom-file-container__custom-file" >
				        <input type="file" class="custom-file-container__custom-file__custom-file-input" accept="image" multiple aria-label="Choose File">
				        <input type="hidden" name="MAX_FILE_SIZE" value="10485760" />
				        <span class="custom-file-container__custom-file__custom-file-control"></span>
				    </label>
				    <div class="custom-file-container__image-preview"></div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js')
<script src="https://unpkg.com/file-upload-with-preview@3.4.3/dist/file-upload-with-preview.min.js"></script>
<script>
    var upload = new FileUploadWithPreview('myUniqueUploadId', {showDeleteButtonOnImages: true, text: {chooseFile: 'Upload Images', browse: 'Upload Image'}})
</script>

@endsection