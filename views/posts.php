
<h1>Posts</h1>

<div class="row">
    <?php foreach ($params as $post):  ?>
        <div class="col-sm-6 my-2">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title'] ?></h5>
                    <p class="card-text"><?php echo $post['text'] ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>




