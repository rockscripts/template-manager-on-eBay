
<input type="hidden" id="object_id" value="<?php echo $id; ?>">
<input type="hidden" id="user_id" value="<?php echo $user_id; ?>">
<input type="hidden" id="type_id" value="<?php echo $type_id; ?>">

<!-- The template to display files available for upload -->
<script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <li class="template-upload fade">
        <span class="preview"></span>
        {% if (file.error) { %}
           <span class="label label-danger">Error</span>
        {% } %}
        {% if (!o.files.error) { %}
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
            	<div class="progress-bar progress-bar-success" style="width:0%;"></div>
            </div>
        {% } %}
    </li>
{% } %}
</script>

<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <li class="template-download fade {% if (file.image) { %}image{% } %}" id="sort_{%=file.id%}" data-file="{%=file.name%}">
    	{% if (file.error) { %}
            <span class="label label-danger">Error</span>
        {% } %}
        {% if (!file.error) { %}
            <span class="preview" title="{%=file.title%}">
                {% if (file.image) { %}
            	   <a href="{%=file.url%}" title="{%=file.title%}" data-lightbox="gallery-{%=file.object_id%}"><img src="{%=file.thumbnailUrl%}" width="80" height="80"></a>
                {% } else { %}
                    <span class="filetype {%=file.filetype%}"></span>
                {% } %}
            </span>
            <div class="description">{%=file.description%}</div>            
            <div class="actions">
            	<i class="glyphicon glyphicon-edit edit-file" title="Edit"></i>
                {% if (file.image) { %}
                    <i class="glyphicon glyphicon-picture crop-image" data-url="{%=file.url%}" data-width="{%=file.width%}" data-height="{%=file.height%}" title="Crop Thumbnail"></i>
                {% } %}
                <i class="glyphicon glyphicon-trash delete-file" title="Delete"></i>
            </div>
        {% } %}
    </li>
{% } %}
</script>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" style="background: white;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              
                <h4 class="modal-title">Upload Files</h4>
            </div>
            <div class="modal-body">
                 <!-- Hidden alert message -->
                <div class="alert alert-danger upload-max">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     You have exceeded the limit of uploaded images.
                </div>
                 <div id="fileupload">   
                    <!-- Images list -->
                    <ul class="files images"></ul>
                    <br clear="all">
                   
                     <!-- Attachments list -->
                    <ul class="files attachments"></ul>
                     <br clear="all">

                    <div class="loading-files"></div>

                    <div class="fileupload-buttonbar">
                        <!-- Upload files button -->
                        <span class="btn btn-sm btn-success fileinput-button"><i class="glyphicon glyphicon-upload"></i> <span>Upload</span><input type="file" name="files[]" multiple></span>
                        <!-- Webcam snaphots -->
                        <span class="btn btn-sm btn-info webcam-snap"><i class="glyphicon glyphicon-camera"></i> <span>Webcam</span></span>
                        <!-- Delete all files button -->
                        <button type="button" class="btn btn-sm btn-danger delete-all"><i class="glyphicon glyphicon-trash"></i> <span>Delete all</span></button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <span class="loading"></span>
                <button type="button" class="btn btn btn-info" data-dismiss="modal">Done</button>
            </div>
        </div>
    </div>
</div>

<!-- Edit file Modal -->
<div class="modal fade" id="editModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Edit Image</h4>
            </div>
            <div class="modal-body">
                
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title">
                </div>
                 <div class="form-group">
                    <label for="description">Description</label>
                    <textarea class="form-control" id="description"></textarea>
                </div>
                <input type="hidden" id="file_id">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary save">Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Crop image Modal -->
<div class="modal fade" id="cropModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Crop Thumbnail</h4>
            </div>
            <div class="modal-body">
                <div id="crop"></div>
                <input type="hidden" id="x1">
                <input type="hidden" id="y1">
                <input type="hidden" id="w">
                <input type="hidden" id="h">
            </div>
            <div class="modal-footer">
                <span class="loading"></span>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary save">Crop & Save</button>
            </div>
        </div>
    </div>
</div>

<!-- Crop image Modal -->
<div class="modal fade" id="webcamModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Webcam Snaphost</h4>
            </div>
            <input type="hidden" id="webcam-image">
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <span class="loading"></span>
                <button type="button" class="btn btn-default cancel" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary capture" onclick="imgSelect.webcamSnap()">Capture</button>
                <button type="button" class="btn btn-info new" onclick="imgSelect.webcam();">New</button>
                <button type="button" class="btn btn-success save">Save</button>
            </div>
        </div>
    </div>
</div>