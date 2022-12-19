<!-- ................Create Posts Modal................ -->
<div class="modal fade" id="create_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-plus-circle"></i> Create Posts</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" enctype="multipart/form-data" action="post/post.php">
        	<input type="text" name="title" placeholder="Enter Title" class="form-control"><br>
        	<textarea name="description" placeholder="What's on your mind?" class="form-control"></textarea><br>
        	<b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-plus-circle"></i> Create</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Edit Posts Modal................ -->
<div class="modal fade" id="edit_post_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-edit"></i> Edit Posts</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="POST" action="post/update.php" enctype="multipart/form-data">
          <input type="" name="id" class="id">
          <input type="" name="old" class="old">
          <input type="text" name="title" placeholder="Enter Title" class="form-control title"><br>
          <textarea name="description" placeholder="What's on your mind?" class="form-control description"></textarea><br>
          <img src="" class="w-100 post_photo">
          <b>Photo : </b><input type="file" name="photo">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-edit"></i> Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Mail Modal................ -->
<div class="modal fade" id="mail_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-envelope-open-text mr-1"></i>Mail Form</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <input type="text" name="" placeholder="To:" class="form-control mb-2">
          <input type="text" name="" placeholder="From" class="form-control mb-2">
          <input type="text" name="" placeholder="Subject" class="form-control mb-2">
          <textarea name="" rows="5" placeholder="Message" class="form-control"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="submit" class="btn btn-secondary"><i class="fas fa-envelope-open-text mr-1"></i>Send</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- ................Search Modal................ -->
<div class="modal fade" id="search_Modal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title"><b><i class="fas fa-search mr-1"></i>Searched Results</b></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <button class="btn btn-outline-info" btn-sm>All</button>
        <button class="btn btn-outline-info" btn-sm>People</button>
        <button class="btn btn-outline-info" btn-sm>Posts</button>
        <ul class="list-group mt-2">
          <li class="list-group-item py-1 bg-light">
            <a href="" class="card-link text-dark">
            <b class="mr-2">Cras justo odio</b>
            <small> Live in: Yangon</small>
            <img src="img/4.png" class="rounded-circle float-right" width="50px" height="50px">
            </a>
          </li>
          <li class="list-group-item py-1 bg-light">
            <a href="" class="card-link text-dark">
            <b class="mr-2">Cras justo odio</b>
            <small> Live in: Yangon</small>
            <img src="img/4.png" class="rounded-circle float-right" width="50px" height="50px">
            </a>
          </li>
       </ul>

       <br>

      <div class="bg-light">
       <div class="media border">
        <a href="" class="card-link text-dark">
        <div class="media-left">
          <img src="img/test.jpg" class="media-object my-2 ml-2" width="120px">
        </div>
        <div class="media-body ml-2">
          <!-- <h6 class="media-heading mt-3">Media Middle</h6> -->
          <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit,amet, consectet</small></a><br>

          <a href="" class="text-dark"><small>Posted by : <b>David</b></small>
          <img src="img/4.png" class="rounded-circle float-right mr-2 mb-1" width="30px">
          </a>
        </div>
        </div>

        <div class="media border">
        <a href="" class="card-link text-dark">
        <div class="media-left">
          <img src="img/test.jpg" class="media-object my-2 ml-2" width="120px">
        </div>
        <div class="media-body ml-2">
          <!-- <h6 class="media-heading mt-3">Media Middle</h6> -->
          <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit,amet, consectet</small></a><br>

          <a href="" class="text-dark"><small>Posted by : <b>David</b></small>
          <img src="img/4.png" class="rounded-circle float-right mr-2 mb-1" width="30px">
          </a>
        </div>
        </div>
      </div>

      </div>
    </div>
  </div>
</div>