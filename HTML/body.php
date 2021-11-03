<div class="row" id="main">
    <div class="col" id="form">
        <form method="post">
            <div class="form-row">
                <label for="title">Title of your post</label>
                <input type="text" name="title" id="title" class="form-control"placeholder="Hello">
            </div>
            <div class="form-row">
                <label for="message">What do you want to say?</label>
                <textarea name="message" id="message" class="form-control" placeholder="How are you today?"></textarea>
            </div>
            <div class="form-row">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col" id="overview">
        <?php
        if($loadPosts!=NULL){
            foreach (array_reverse($allPosts) as $post){
                echo "<div class='showPosts'>";
                echo "<h2>" . $loadPosts->getTitle($post) . "</h2>";
                echo "<p>" . $loadPosts->getMessage($post) . "</p>";
                echo "<h3>By " . $loadPosts->getName($post) . "</h3>";
                echo "<p>" . $loadPosts->getTimestamp($post) . "</p>";
                echo "</div>";
            }
        }
        ?>
    </div>
</div>

