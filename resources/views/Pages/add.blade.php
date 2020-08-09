<div class="row">
    <div class="col-md-6 offset-md-3">
        <form method="post" action="">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title....." />
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>
            <button name="tambah" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
