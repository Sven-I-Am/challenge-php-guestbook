<div class="row" id="main">
    <div class="col-1 px-4">
        <p>:) = 😀</p>
        <p>:-) = 😀</p>
        <p>:D = 😁</p>
        <p>:-D = 😁</p>
        <p>:'D = '😂</p>
        <p>O) = 😇</p>
        <p>O-) = 😇</p>
        <p>;-) = 😉</p>
        <p>;) = 😉</p>
        <p>:-o = 😮</p>
        <p>:o = 😮</p>
        <p>:( = ☹</p>
        <p>:-( = ☹</p>
        <p>:@ = 🤬</p>
        <p>:-@ = 🤬</p>
    </div>
    <div class="col" id="form">
        <form method="post">
            <div class="form-row">
                <label for="title">Title of your post</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Hello">
            </div>
            <div class="form-row">
                <label for="message">What do you want to say?</label>
                <textarea name="message" id="message" class="form-control" placeholder="How are you today?"></textarea>
            </div>
            <div class="form-row">
                <label for="name">Your name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Your name">
            </div>
            <div class="form-row">
            <label for="nrOfPosts">Number of posts you want to display:</label>
            <select id="nrOfPosts" name="nrOfPosts" id="droplist">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="15">15</option>
                <option value="20">20</option>
            </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <?php
        if ($error!=""){
            echo "<div class='alert alert-danger'>" . $error . "</div>";
        }
        ?>
    </div>
    <div class="col" id="overview">


        <?php
        if($loadPosts->getAllPosts() != NULL){
            $allPosts = array_reverse($allPosts);
            if (count($allPosts)>(int)$nrOfPosts){
                $allPosts = array_slice($allPosts, 0,(int)$nrOfPosts);
            }
            foreach ($allPosts as $post){
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

