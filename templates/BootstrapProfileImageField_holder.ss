

<div class="bootstrap-file-field fileinput fileinput-<% if $hasFile %>exists<% else %>new<% end_if %> " data-provides="fileinput">
    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 250px; max-height: 250px;">
        <% if $hasFile %>
        <img src="$getFileLink" data-src="$getFileLink" alt="Image" />
        <% end_if %>
    </div>
    <div>
        <span class="btn btn-default btn-file">
            <span class="fileinput-new">
                Upload
            </span>
            <span class="fileinput-exists">Change</span>
            $Field
        </span>
        <a href="#" id="SaveImage" class="btn btn-default fileinput-exists" >Save</a>
        <a href="#" class="btn btn-danger fileinput-exists" data-dismiss="fileinput">Remove</a>
        
    </div>
</div>

