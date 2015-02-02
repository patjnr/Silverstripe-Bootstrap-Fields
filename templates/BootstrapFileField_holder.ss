

<div class="bootstrap-file-field fileinput fileinput-<% if $hasFile %>exists<% else %>new<% end_if %> " data-provides="fileinput">
    <div class="fileinput-preview thumbnail" data-trigger="fileinput" style="width: 100%; height: 150px;">
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
        <a href="#" class="btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
    </div>
</div>

